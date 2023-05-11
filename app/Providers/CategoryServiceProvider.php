<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CategoryBlog;
use App\Models\Tag;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
          View::composer(['blog', 'blog_detali', 'post_create', 'post_edit'], function($view) {
             $categories = CategoryBlog::withCount('posts')->get();
             $tags = Tag::all();
             $view->with([
                 'categories' => $categories,
                 'tags' => $tags,
                     ]);
        });
    }
}
