<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'publish')
            ->with(['categories:id,name', 'user:id'])
            ->latest()
            ->paginate(5);
        return view('user.blog.index', compact('posts'));
    }
}
