<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Session;

class CharityController extends Controller
{


    public function index(Request $request)
    {


        return view('user.stripe');
    }


    public function StripePost(Request $request)
    {


        try {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge =  Stripe\Charge::create([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment."
            ]);

            if ($charge->status == 'succeeded') {
                $user = User::find(Auth::user()->id);
                $user->coin = $request->amount;
                $user->save();

                Session::flash('success', 'Payment has been successfully processed.');
                return back();
            }
        } catch (Exception $e) {

            Session::flash('fail', $e->getMessage());

            return back();
        }
    }
}
