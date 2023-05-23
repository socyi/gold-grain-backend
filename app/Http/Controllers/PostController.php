<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        return view('create-post');
    }

    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload and store the image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $incomingFields['image'] = $imagePath;
        }

        $post = Post::create($incomingFields);
        return redirect('postlist');
    }
}


    // public function createPost (Request $request){

    //     if (auth()->check()){
    //         $incomingFields = $request->validate([
    //             'title' => 'required',
    //             'content' => 'required'
                
            
    //         ]);

    //         $incomingFields['title'] = strip_tags($incomingFields['title']);
    //         $incomingFields['content'] = strip_tags($incomingFields['content']);
    //         $incomingFields['image'] = strip_tags($incomingFields['image']);

    //         Post::create($incomingFields);
    //         return redirect('/');
    //     }   

    // } 

