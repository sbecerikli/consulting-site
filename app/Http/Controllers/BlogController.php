<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::query()->where('is_published', true)->orderByDesc('published_at')->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
