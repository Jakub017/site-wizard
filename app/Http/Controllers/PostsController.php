<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.posts.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['author'] = auth()->user()->name;

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('post-thumbnails', 'public');
        }

        Post::create($attributes);

        return redirect()->route('posts.index')->with('success', 'Zapisano wpis.');
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $attributes = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('post-thumbnails', 'public');
        }

        $post->update($attributes);

        return redirect()->route('posts.index')->with('success', 'Zapisano zmiany.');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Wpis usunięty.');
    }
}