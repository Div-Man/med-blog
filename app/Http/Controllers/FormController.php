<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\UserVerify;


class FormController extends Controller {

    public function login(): View {
        return view('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request): RedirectResponse {
        
        
        $messages = [
            'email' => 'Вы ввели не email',
            'email.required' => 'Email вводить обязательно',
            'password.min' => 'Минимальная длина пароля :min символов',

        ];
        

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['min:8']
        ], $messages);
        
       
        
        if ($validator->fails()) {
            return redirect('my-login')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $remember_me = $request->has('remember_me') ? true : false; 
        
       
        $validated = $validator->validated();
          
          
          
        if (Auth::attempt($validated, $remember_me)) {
            $request->session()->regenerate();

            return redirect('/');
        }
        
        return back()->withErrors([
                    'email' => 'Пользователь не найден',
                    
                ])->onlyInput('email');
     
    }
    
    
    
    public function dashboard()
    {
       
        if(Auth::check()){
            return view('dashboard');
        }
       
  
        return redirect("my-login")->withSuccess('Opps! You do not have access');
    }
    
    
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
        
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
             
            if(!$user->email_verified_at) {
                 
                $verifyUser->user->email_verified_at = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        
        
  
      return redirect()->route('my-login')->with('message', $message);
    }
    
    
    public function logout(Request $request): RedirectResponse{
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
}
 
        
    

}
