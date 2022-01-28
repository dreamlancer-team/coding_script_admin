<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load(['categories', 'user']);
        $categories = Category::withCount('posts')->get();
        $posts = Post::latest()
            ->where('status', 'publish')
            ->take(5)->get();
        return view('user.blog.post', compact('post', 'categories', 'posts'));
    }
}
