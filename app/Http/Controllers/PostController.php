<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::search(request()->input('search'))->orderBy('id', 'desc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|unique:posts,title',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $data['author'] = Auth::user()->name;

        $data['slug'] = Str::slug($data['title']);

        if(isset($data['image'])) {
            $data['image'] = $data['image']->store('posts', 'public');
        }

        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Wpis dodany pomyślnie.');
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $data = $request->validate([
            'title' => 'required|unique:posts,title,'.$post->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if(isset($data['image'])) {
            $data['image'] = $data['image']->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Wpis zaktualizowany pomyślnie.');
    }
}
