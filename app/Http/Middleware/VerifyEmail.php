<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
  
class VerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()->email_verified_at) {
            auth()->logout();
            return redirect()->route('my-login')
                    ->with('message', 'Вам необходимо подтвердить свой аккаунт. Мы отправили вам код активации, проверьте почту.');
          }
   
        return $next($request);
    }
}