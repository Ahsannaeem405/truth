<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->stateless()->user();
         
            $finduser = User::where('facebook_id', $user->id)->orwhere('email', $user->email)->first();
        
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect('user/spin');
         
            }else{
                $newUser = User::create([
                    'f_name' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'role' => 'user',
                ]);
        
                Auth::login($newUser);
        
                return redirect('user/spin');
            }
        
        } catch (Exception $e) {
            return redirect('login');
        }
    }
}
