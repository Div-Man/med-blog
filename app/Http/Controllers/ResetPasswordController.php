<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ResetPasswordController extends Controller {

    public function resetPassword(Request $request) {
        $validator = Validator::make($request->all(), [
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        $token = $user->first()->createToken('myapptoken')->plainTextToken;

        return 'Ваш пароль был изменён';
    }
    
    public function newPassword(Request $request)
    {       
            $token = $request->token;
            $email = $request->email;
            
             $validator = Validator::make(['token' => $token, 'email' => $email], [
                'email' => ['required', 'string', 'email', 'max:255'],
                'token' => ['required'],
            ]);

            if ($validator->fails()) {
                return abort(404);
            }
            
            
             $check = DB::table('password_reset_tokens')->where([
                ['email', $email],
                ['token',$token],
            ]);
             
                 if ($check->exists()) {
                    $difference = Carbon::now()->diffInSeconds($check->first()->created_at);
                    if ($difference > 3600) {
                        return new JsonResponse(['success' => false, 'message' => "Token Expired"], 400);
                    }

                    $delete = DB::table('password_reset_tokens')->where([
                        ['email', $email],
                        ['token',  $token],
                    ])->delete();

                   return view('auth.reset-password', ['token' => $token, 'email' => $email]);
                   
                } else {
                   return abort(404);
                }
            
    }

}
