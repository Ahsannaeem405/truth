<?php

namespace App\Http\Controllers;

use App\Models\CharityHistory;
use App\Models\PriorityStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Stripe;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.user.index', compact('users'));
    }

    public function userDelete($id)
    {
        $users = User::find($id)->delete();
        return back()->with('success', 'User deleted successfully');
    }



    public function chairty()
    {
        $charity = User::where('role', 'charity')->get();
        return view('admin.charity.index', compact('charity'));
    }

    public function addChairty()
    {
        return view('admin.charity.add');
    }

    public function storeChairty(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
        ]);


        $charity = new User();
        $charity->email = $request->email;
        $charity->phone = $request->phone;
        $charity->username = $request->username;
        $charity->address = $request->address;
        $charity->stripePublic = $request->stripePublic;
        $charity->stripeSecret = $request->stripeSecret;
        $charity->role = 'charity';
        $charity->password = Hash::make('password12345678');
        $charity->about = $request->about;
        $charity->save();

        return back()->with('success', 'Charity Added successfully');
    }

    public function deleteChairty($id)
    {

        $users = User::find($id)->delete();
        return back()->with('success', 'Charity deleted successfully');
    }

    public function editChairty($id)
    {

        $charity = User::find($id);
        return view('admin.charity.edit', compact('charity'));
    }

    public function updateChairty(User $id, Request $request)
    {
        $charity = $id;
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $charity->id,
        ]);


        $charity->email = $request->email;
        $charity->phone = $request->phone;
        $charity->username = $request->username;
        $charity->address = $request->address;
        $charity->stripePublic = $request->stripePublic;
        $charity->stripeSecret = $request->stripeSecret;
        $charity->role = 'charity';
        $charity->password = Hash::make('password12345678');
        $charity->about = $request->about;
        $charity->save();

        return back()->with('success', 'Charity updated successfully');
    }


    public function sendCharity($id)
    {

        $charity = User::find($id);
        return view('admin.charity.send', compact('charity'));
    }

    public function stripePost1(Request $request, $id)
    {

        try {
            $charity = User::find($id);

            if ($charity->coin != null) {

            $amount =   $charity->coin - $request->amount;
            // dd($amount);
            Stripe\Stripe::setApiKey($charity->stripeSecret);
            Stripe\Charge::create([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Truth Payment"
            ]);

            $charity->coin = $amount;
            $charity->save();
            return back()->with('success', 'Payment Send successfully');
            }
            else
            {
                return back()->with('error', "You doesn't have coins");

            }

        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function stripePost(Request $request, $id)
    {
        try {
            $charity = User::find($id);
            Stripe\Stripe::setApiKey($charity->stripeSecret);
            Stripe\Charge::create([
                "amount" => $charity->coin * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Truth Payment"
            ]);

            $charity->coin = 0;
            $charity->save();
            return back()->with('success', 'Payment Send successfully');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function status($id)
    {


        $userr = User::where('status', 'Priority')->first();
        if ($userr != null) {
            $userr->status = null;
            $userr->save();
        }
        $user = User::find($id);
        $user->status = 'Priority';
        $user->save();
        return back()->with('success', 'Priority Added Sucessfully');
    }
    public function change_stauts(Request $request)
    {


        $status = PriorityStatus::find(1);
        $status->status = $request->id;
        $status->save();
        // dd($request->id);


    }

    public function add_credit(Request $request)
    {

        $user = User::find($request->id);
        $user->coin +=  $request->amount;
        $user->save();
        return back()->with('success', 'Credit Add Successfully');
    }

    public function view_detail($id)
    {
        $history = CharityHistory::where('userID', $id)->get();
        return view('admin.charity.charity_history', compact('history'));
    }

    //     public function charity_payment(){
    // $users = User::where('role', 'user')->get();
    //         return view('admin.charity.payment', compact('users'));
    //     }




}
