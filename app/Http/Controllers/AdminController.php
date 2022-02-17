<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function user()
    {
        $users=User::where('role','user')->get();
        return view('admin.user.index',compact('users'));
    }

    public function userDelete($id)
    {
        $users=User::find($id)->delete();
        return back()->with('success','User deleted successfully');
    }



    public function chairty()
    {
        $charity=User::where('role','charity')->get();
        return view('admin.charity.index',compact('charity'));
    }

    public function addChairty()
    {
        return view('admin.charity.add');
    }

    public function storeChairty(Request $request)
    {
       $request->validate([
            'email' => ['required','email','unique:users'],
        ]);


        $charity=new User();
        $charity->f_name=$request->f_name;
        $charity->l_name=$request->l_name;
        $charity->email=$request->email;
        $charity->phone=$request->phone;
        $charity->username=$request->username;
        $charity->address=$request->address;
        $charity->role='charity';
        $charity->password=Hash::make($request->password);
        $charity->about=$request->about;
        $charity->save();

        return back()->with('success','Charity Added successfully');
    }

    public function deleteChairty($id){

        $users=User::find($id)->delete();
        return back()->with('success','Charity deleted successfully');
    }

    public function editChairty($id){

        $charity=User::find($id);
        return view('admin.charity.edit',compact('charity'));

    }

    public function updateChairty(User $id,Request $request)
    {
        $charity=$id;
        $request->validate([
            'email' => 'required|email|unique:users,email,'. $charity->id,
        ]);


        $charity->f_name=$request->f_name;
        $charity->l_name=$request->l_name;
        $charity->email=$request->email;
        $charity->phone=$request->phone;
        $charity->username=$request->username;
        $charity->address=$request->address;
        $charity->role='charity';
        if($request->password!=null)
        {
            $charity->password=Hash::make($request->password);
        }
        $charity->about=$request->about;
        $charity->save();

        return back()->with('success','Charity updated successfully');
    }

}
