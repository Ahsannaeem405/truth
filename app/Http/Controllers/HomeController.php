<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use Stripe;
use Session;
use Auth;
use Illuminate\Auth\Middleware\Authorize;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function stripeScreen()
    {
        return view('stripescreen');
    }

    public function stripePayment(Request $request)
    {
        try {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Truth Payment"
            ]);
            return back()->with('success','Payment Send successfully');
        }
        catch (\Exception $exception){
            return back()->with('error',$exception->getMessage());
        }

    }

    public function spinnerScreen()
    {
        return view('donation.spinnerscreen');
    }

    public function chairtyScreen()
    {
        $charity=User::get();
        return view('donation.charityscreen',compact('charity'));
    }
    public function addChairtyScreen()
    {
        $charities=User::where('role','charity')->get();
        // dd($charities);
        return view('donation.addcharityscreen',compact('charities'));
    }
    public function storeChairty(Request $request)
    {
        $authid = Auth::user()->id;
        // dd($userid);
        $user = User::where('id',$authid)->first();
        $usercoin =  $user->coin;
        $username =  $request->charity;
        $donateamount = $request->amount;

        if($usercoin > $donateamount)
        {
            return redirect('/spinnerscreen');

        }else
        {
            return back()->with('error','your amount is not enoughf');
        }
    }
    public function storeChairtyPercent()
    {

    }
}
