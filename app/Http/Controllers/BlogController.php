<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\CategoryBlog;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {
    
    public $postCount = 2;

    public function index() {
     
        $posts = Post::with('user')->orderBy('created_at','desc')->paginate($this->postCount);
        
        return view('blog', ['posts' => $posts]);
    }

    public function show(int $id) {
     
        $post = Post::with(['user', 'comments' => function ($query) {
                        $query->join('users', 'users.id', '=', 'comments.user_id')
                                ->select('comments.*', 'users.name as commenter_name');
                    }])->withCount('comments')->findOrFail($id);

        $comments = collect($post->comments)->toArray();
        
        return view('blog_detali', ['post' => $post, 'comments' => $comments]);
    }

    public function create() {
        $categories = CategoryBlog::all();
        $tags = Tag::all();
        return view('post_create', ['tags' => $tags, 'categories' => $categories]);
    }

    public function store(Request $request) {

        $rules = [
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'title' => 'required',
            'description' => 'required',
            'category_blog_id' => 'required',
        ];

        $messages = [
            'image.required' => 'Изображение загружать обязательно.',
            'title.required' => 'Введите заголовок',
            'image.image' => 'Вы загрузили не изображение.',
            'image.mimes' => 'Допустимые форматы: jpg, jpeg, png.',
            'description.required' => 'Введите текст',
            'category_blog_id.required' => 'Укажите категорию',
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();

        $imageName = $request->file('image')->store('uploads/posts');

        chmod($imageName, 0777); //костыль

        $post = Post::create([
                    'title' => $request->title,
                    'img' => $imageName,
                    'description' => $request->description,
                    'user_id' => auth()->id(),
                    'category_blog_id' => $request->category_blog_id,
        ]);

        $post->tags()->attach($request->tags, ['user_id' => auth()->id()]);
        return redirect()->route('post', ['id' => $post->id]);
    }

    public function edit(Request $request) {
        
        $postId = $request->id;
        
        $tags = Tag::select('tags.*')
            ->leftJoin('post_tag', function($join) use ($postId) {
                $join->on('tags.id', '=', 'post_tag.tag_id')
                     ->whereRaw('post_tag.post_id = ?', [$postId]);
            })
            ->selectRaw("IF(tags.id = post_tag.tag_id, 'attached', 'notAttached') as hasPost")
            ->get();
            
         
      
        $post = Post::find($request->id);
        $categories = CategoryBlog::all();
        
        
        

        return view('post_edit', ['post' => $post, 'tagsEditPost' => $tags, 'categories' => $categories]);
    }
    
     public function update(Request $request) {
         
         
         $rules = [
            'image' => 'image|mimes:jpg,jpeg,png',
            'title' => 'required',
            'description' => 'required',
            'category_blog_id' => 'required',
        ];

        $messages = [
            'title.required' => 'Введите заголовок',
            'image.image' => 'Вы загрузили не изображение.',
            'image.mimes' => 'Допустимые форматы: jpg, jpeg, png.',
            'description.required' => 'Введите текст',
            'category_blog_id.required' => 'Укажите категорию',
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();
        
        
          $post = Post::find($request->post_id);
          

        if ($request->has('image')) {
            $imageName = $request->file('image')->store('uploads/posts');
            chmod($imageName, 0777); //костыль
            Storage::disk('local')->delete($post->img);
        }
       

        $post->update([
            'title' => $request->title,
            'img' => isset($imageName) ? $imageName : $post->img,
            'description' => $request->description,
            'category_blog_id' => $request->category_blog_id,
        ]);
        
  
        $post->tags()->syncWithPivotValues($request->tags, ['user_id' => auth()->id()]);
        return redirect()->route('post', ['id' => $post->id]);
    }
    
    
        public function searchTag(Request $request) {
          
            $tagName = $request->tag;
            
           $posts = Post::whereHas('tags', function ($query) use ( $tagName) {
                $query->where('tags.name',  $tagName);
            })->paginate($this->postCount);
            

            return view('blog', ['posts' => $posts]);      
    }
    public function searchCategory(Request $request) {
          

             $categoryName = $request->category;
            //если искать по названию категории, захотел я так 
            $posts = Post::whereHas('category', function ($query) use ($categoryName){
                $query->where('name', '=', $categoryName);
            })->withCount('comments')->paginate($this->postCount);
            

            return view('blog', ['posts' => $posts]);  
            
    }
    
    
     public function searchPost(Request $request) {
          
         $posts = Post::search($request->text)->paginate($this->postCount);
         return view('blog', ['posts' => $posts]);  
            
              
    }
    

    public function destroy(Request $request){
        $post_id = $request->id;
        $post = Post::find($post_id);
        $image_path = $post->img; 
       
        Storage::disk('local')->delete($image_path);
        
        DB::table('comments')->where('post_id', '=', $post_id)->delete();
        DB::table('post_tag')->where('post_id', '=', $post_id)->delete();
        Post::destroy($post_id);
        
         return redirect('/blog');

    }
    
    
}

