<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Mail; 


class RegisterController extends Controller {

    
     public function create(): View
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
     
        $messages = [
            'name.required' => 'Введите имя',
            'email.unique' => 'Такой email уже занят',
            'email.required' => 'Email вводить обязательно',
            'email.email' => 'Введите корректный адрес электронной почты',
            'password.min' => 'Минимальная длина пароля :min символов',
            'password.required' => 'Введите пароль',
            'password.confirmed' => 'Пароли не совпадают',

        ];
        
        
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ], $messages);
        

        
         if ($validator->fails()) {
            return redirect('my-register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $token = Str::random(64);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);


        
        UserVerify::create([
              'user_id' => $user->id, 
              'token' => $token
            ]);
        
        $email = $user->email;
        
        
        
        \Mail::to($email)->send(new \App\Mail\MyMail($token));
       
        
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

}
