<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Retrieve all posts from the "posts" table
    
        return view('postlist', compact('posts'));
    }
}
