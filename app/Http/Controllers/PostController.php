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

    public function view($id)
    {
        $post = Post::findOrFail($id);
        return view('view-post', ['post' => $post]);
    }

    public function delete(Post $post){

        $post->delete();
        return redirect('postlist');
    }


    public function edit(Post $post)
    {
        return view('edit-post', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules for the image if needed
        ]);

        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect('postlist');
    }

}


