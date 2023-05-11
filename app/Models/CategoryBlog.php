<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

/**
 * App\Models\CategoryBlog
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryBlog whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Post> $posts
 * @mixin \Eloquent
 */
class CategoryBlog extends Model
{
    use HasFactory;
     
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
