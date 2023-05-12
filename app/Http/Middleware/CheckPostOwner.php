<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CheckPostOwner {

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $postId = $request->id;
        $userId = Auth::id();

        // получаем пост из БД
        $post = Post::findOrFail($postId);

        // проверяем, является ли пользователь владельцем поста
        if ($post->user_id !== $userId) {
            //return redirect()->route('home')->with('error', 'У вас нет доступа к этому посту');
            return abort(404);
        }
        return $next($request);
    }

}
