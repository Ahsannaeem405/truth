<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
     
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
         
          
            $user =  Socialite::driver('google')->stateless()->user();
           
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect('user/spin');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'name' => 'user',
                ]);
      
                Auth::login($newUser);
      
                return redirect('user/spin');
            }
      
        } catch (Exception $e) {
            return redirect('login');
        }
    }
}
