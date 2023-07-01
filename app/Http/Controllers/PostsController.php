<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('dashboard.posts.posts-index', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.posts.posts-create');
    }

    public function store(Request $request) {
        $attributes = request()->validate([
            'title_pl' => 'required',
            'title_en' => 'required',
            'body_pl' => 'required',
            'body_en' => 'required',
            'excerpt_pl' => 'required',
            'excerpt_en' => 'required',

            'photo_alt_pl' => '',
            'photo_alt_en' => '',

            'meta_title_pl' => '',
            'meta_title_en' => '',

            'meta_description_pl' => '',
            'meta_description_en' => '',

            'meta_keywords_pl' => '',
            'meta_keywords_en' => '',

            'photo' => 'required',
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('posts-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title_en']);
        $attributes['author'] = auth()->user()->name;


        Post::create($attributes);

        return redirect()->route('posts.index')->with('success', 'Wpis dodany pomyślnie.');
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.posts-edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $attributes = request()->validate([
            'title_pl' => 'required',
            'title_en' => 'required',
            'body_pl' => 'required',
            'body_en' => 'required',
            'excerpt_pl' => 'required',
            'excerpt_en' => 'required',

            'photo_alt_pl' => '',
            'photo_alt_en' => '',

            'meta_title_pl' => '',
            'meta_title_en' => '',

            'meta_description_pl' => '',
            'meta_description_en' => '',
            
            'meta_keywords_pl' => '',
            'meta_keywords_en' => '',
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('posts-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title_en']);   

        $post->update($attributes);

        return redirect()->route('posts.index')->with('success', 'Wpis zaktualizowany pomyślnie.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Wpis usunięty pomyślnie.');
    }
}