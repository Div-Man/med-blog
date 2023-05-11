<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;

class CommentController extends Controller {

    public function store(Request $request) {
        if (Auth::user()) {

            $messages = [
                'text.required' => 'Введите текст',
                
            ];
               
            $validator = Validator::make($request->all(), [
                        'text' => ['required'],
                        'post_id' => ['required', 'integer'],
                        'parent_id' => ['integer'],
                       
                            ], $messages);
            
            $comment = Comment::query()->create(
            attributes: [
                ...$validator->validated(),
                'user_id' => auth()->id(),
            ],
        );
            return back();
          
        }
        return back();
    }

}
