<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(
            Request::validate([
            'title' => ['required', 'max:50'],
            'body' => ['required'],
            ])
        );
        return Redirect::route('posts')->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update(
            Request::validate([
            'title' => ['required', 'max:50'],
            'body' => ['required'],
            ])
        );

        return Redirect::route('posts')->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return Redirect::back()->with('success', 'Post deleted.');
    }
}
