<?php

namespace App\Http\Controllers;

use App\Models\Charity;
use App\Models\CharityHistory;
use App\Models\PriorityStatus;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe;
use Session;

class CharityController extends Controller
{


    public function index(Request $request)
    {


        return view('user.stripe');
    }

    public function edit_profile(Request $request)
    {


        $user = User::find(Auth::user()->id);
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email  = $request->email;
        $user->username = $request->username;

        if ($request->file('picture')) {

            $picture =  $request->file('picture');
            $imageName = rand() . $picture->getClientOriginalName();
            $imagePath = $picture->move(public_path('uploads/'), $imageName);
            $user->image = $imageName;
        }

        if ($request->password == null) {

            $user->save();
            return back()->with('success', 'Updated Sucessfully');
        } else {
            if (Hash::check($request->password, Auth::user()->password)) {

                $hash = Hash::make($request->new_password);
                $user->password = $hash;
                $user->save();
                return back()->with('success', 'Updated Sucessfully');
            } else {

                return back()->with('fail', 'Please Enter Correct Password');
            }
        }
    }

    public function add_percent(Request $request)
    {
      $history = new CharityHistory();
        $history->userID = Auth::user()->id;
        $history->percent = $request->percent * 10;
        $history->amount = $request->amount;
        $history->charityID = $request->charID;
        $history->save();

        $char = CharityHistory::where('userID', Auth::user()->id)->get();


        $user = User::find($request->charID);
        $amount =   $request->amount;
        $per =   $request->percent * 10;
        $div =  $per / 100;
        $total_percent =   $div * $amount;
        $user->coin +=  $total_percent;
        $user->save();


        $userr = User::find(Auth::user()->id);
        $userr->coin -= $amount;


        $userr->save();

        Session::put('amount', $request->amount);
        Session::put('username',  $user->username);

        Session::flash('success', 'Donated Sucessfully');

        return redirect('user/user-history')->with( ['char' => $char ]);

    }

    public function add_donation(Request $request)
    {


        $user = User::find(Auth::user()->id);

        $charityy = User::find($request->charity);

        $usercoin =  $user->coin;
        $char_name =  $charityy->username;

        $username =  $request->charity;
        $donateamount = $request->amount;



        if ($usercoin > $donateamount) {
            $char = new Charity();
            $char->userID = Auth::user()->id;
            $char->charityID = $username;
            $char->amount = $donateamount;
            $char->save();
            return response()->json(['donateamount'=>$donateamount , 'username'=>$username, 'char_name'=>$char_name] );

            // return view('spins', compact('donateamount', 'username', 'char_name'));
        } else {
            return response()->json(['error'=>'Your amount is less then your donation amount' ] );

            // return back()->with('error', 'Your amount is less then your donation amount');
        }
    }



    public function history()
    {





        $user  = User::where('role', 'charity')->get();

        $char = CharityHistory::Where('userID', Auth::user()->id)->get();
        return view('history', compact('user', 'char'));
    }

    public function spins()
    {

            $status = PriorityStatus::find(1);

            if($status->status == 'on')
            {
                $user  = User::where('status', 'Priority')->where('role', 'charity')->first();
            }
            else{
                $user  = User::where('status',  null)->where('role', 'charity')->orderBy('id', 'DESC')->first();

            }
            // dd($status->status );

        return view('spins', compact('user'));
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
                $user->coin += $request->amount;
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
