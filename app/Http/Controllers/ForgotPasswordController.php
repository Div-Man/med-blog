<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Notifications\CustomResetPassword;
use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Password;


class ForgotPasswordController extends Controller {
    
    
    public function sendOnEmail()
    {
         return view('auth.forgot-password');
    }
    
    
    

    public function forgotPassword(Request $request) {
        
        
        $validator = Validator::make($request->all(), [
                    'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }

        $verify = User::where('email', $request->all()['email'])->exists();

        if ($verify) {
            $verify2 = DB::table('password_reset_tokens')->where([
                ['email', $request->all()['email']]
            ]);

            if ($verify2->exists()) {
                $verify2->delete();
            }

            $token = Str::random(64);
            $password_reset = DB::table('password_reset_tokens')->insert([
                'email' => $request->all()['email'],
                'token' =>  $token,
                'created_at' => Carbon::now()
            ]);

            if ($password_reset) {
                
               
                
             $email = $request->all()['email'];
             //Notification::route('mail', $email)->notify(new CustomResetPassword($token)); первый способ
              \Mail::to($email)->send(new ResetPassword($token, $email)); //второй способ
                
                
             return 'Ссылка для восстановления отправлена на вашу почту';

               
            }
        } else {
            return new JsonResponse(
                    [
                'success' => false,
                'message' => "This email does not exist"
                    ],
                    400
            );
        }
    }
    

}
