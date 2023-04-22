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
    
            /*
             * select category_blogs.*, (select count(*) from posts where category_blogs.id = posts.category_blog_id) as posts_count from category_blogs
                 */
          
          $posts = Post::All();
          
          return view('blog', ['categories'  => $categories, 'posts' => $posts]);
    }
    
    public function show(int $id)
    {
        $post = Post::with('user')->findOrFail($id);
        
        return view('blog_detali', ['post' => $post]);
    }
}
