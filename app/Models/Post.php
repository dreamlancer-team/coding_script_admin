<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'excerpt', 'image', 'category_id', 'user_id', 'status'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts')
            ->using(CategoryPost::class)
            ->withPivot('category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
