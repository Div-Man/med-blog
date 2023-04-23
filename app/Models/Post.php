<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

/*

 * Метод belongsTo используется для связи один-к-одному или один-ко-многим, когда одна запись из связанной 
 * таблицы относится к одной записи в текущей таблице через внешний ключ.

В случае с методом user() в модели Post, каждый пост относится к одному 
 * пользователю (то есть каждый пост имеет только одного пользователя-автора), 
 * поэтому используется метод belongsTo, чтобы указать, что идентификатор пользователя 
 * является внешним ключом, который ссылается на таблицу users.

Но в случае с методом comments(), каждый пост может иметь несколько комментариев (то есть связь один-ко-многим), 
 * поэтому вместо belongsTo следует использовать метод hasMany, чтобы связать 
 * пост с несколькими комментариями, как я указывал ранее.
 *  */

class Post extends Model
{
    use HasFactory;
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
     
}
   
        