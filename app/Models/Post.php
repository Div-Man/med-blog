<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\CategoryBlog;
use Laravel\Scout\Searchable;

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

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string|null $reading_time
 * @property string $description
 * @property int $user_id
 * @property int $category_blog_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read CategoryBlog|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Tag> $tags
 * @property-read int|null $tags_count
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereReadingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Tag> $tags
 * @mixin \Eloquent
 */
class Post extends Model
{
    use HasFactory;
    use Searchable;
    
    protected $withCount = ['comments']; //это специально для search Laravel\Scout\Searchable
    
     protected $fillable = ['title', 'img', 'description', 'reading_time', 'user_id', 'category_blog_id'];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    
    //для поиска постов по названию категории
    public function category()
    {
        return $this->belongsTo(CategoryBlog::class, 'category_blog_id', 'id');
    }
    
    public function toSearchableArray()
    {
        return [
            'id' => (int) $this->id,
            'title' => $this->title,
            'description' => $this->title,
            
        ];
    }
     
}
   
        