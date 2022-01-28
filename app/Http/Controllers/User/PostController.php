<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('user.blog.post');
    }
}
