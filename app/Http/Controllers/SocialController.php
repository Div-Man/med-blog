<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller {

    public function redirect($provider) {

        return Socialite::driver($provider)->redirect();
    }
    
    
    //Первый способ
     public function Callback(Request $request) {
        $userSocial = Socialite::driver($request->provider)->user();
        
        $user = User::query()->whereEmail($userSocial->getEmail())->firstOr(function() use ($userSocial): User {
            
            return  User::create([
                    'name' => $userSocial->getName(),
                    'email' => $userSocial->getEmail(),
                    'password' => Hash::make(Str::random(12)),
                    'email_verified_at' => 1,
                ]);
        });

       auth()->login($user, true);
       return redirect('/');
    }
    
    //Второй способ
    /*
    public function Callback() {
        $userSocial = Socialite::driver($request->provider)->user();
        
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if ($user) {

            Auth::login($user, true);

            return redirect('/');
        }

        $password = Str::random(12);
        $user = User::create([
                    'name' => $userSocial->getName(),
                    'email' => $userSocial->getEmail(),
                    'password' => Hash::make($password),
                    'email_verified_at' => 1,
        ]);

        Auth::login($user, true);
        return redirect('/');
    }
     * 
     */

}
