<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;


class CommentController extends Controller {
    protected $rules = [
        'text' => ['required'],
        'post_id' => ['required', 'integer'],
        'parent_id' => ['integer'],
    ];

    protected $messages = [
        'text.required' => 'Введите текст',
    ];

    public function store(Request $request) {
        $validator = Validator::make($request->all(), $this->rules, $this->messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $comment = Comment::query()->create([
                ...$validator->validated(),
                'user_id' => auth()->id(),
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Произошла ошибка при создании комментария. Попробуйте еще раз.');
        }

        return back();
    }
}



//было так
/*

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

            try {

                $comment = Comment::query()->create(
                        attributes: [
                            ...$validator->validated(),
                            'user_id' => auth()->id(),
                        ],
                );
            } catch (\Exception $e) {
                return 'Ошибка добавления комментария';
            }
            return back();
        }
        return back();
    }

}
 * 
 */

