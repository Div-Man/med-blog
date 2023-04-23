<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\CategoryBlog;
use App\Models\Post;
use App\Models\User;



class BlogController extends Controller
{
    public function index()
    {     $categories = CategoryBlog::withCount('posts')->get();
    
          $posts = Post::All();
          
          return view('blog', ['categories'  => $categories, 'posts' => $posts]);
    }
    
    public function show(int $id)
    {
        /*
            //одним запросом   
      $post = Post::leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->leftJoin('users', 'users.id', '=', 'comments.user_id')
            ->where('posts.id', $id)
            ->select('posts.*', 'users.name as commenter_name', 'comments.*')
            ->get();
        dd($post->toSql());
         * 
         */
        
        //$post = Post::with('user', 'comments')->findOrFail($id); //первый способ
        //$post = Post::with('user')->with('comments')->findOrFail($id); второй способ
        
        $post = Post::with(['user', 'comments' => function ($query) {
        $query->join('users', 'users.id', '=', 'comments.user_id')
              ->select('comments.*', 'users.name as commenter_name');
    }])->withCount('comments')->findOrFail($id);
    

     $comments = collect($post->comments)->toArray();
     

      return view('blog_detali', ['post' => $post, 'comments' => $comments]);
    }
}


