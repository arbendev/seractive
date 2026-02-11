<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::with('user', 'categories')->latest('published_at')->paginate(9);
        $featuredPost = $posts->shift(); // Remove the first one to show as featured
        
        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();

        return view('blog.index', compact('posts', 'featuredPost', 'categories', 'tags'));
    }

    public function show(\App\Models\Post $post)
    {
        $post->load('user', 'categories', 'tags');
        $relatedPosts = \App\Models\Post::where('id', '!=', $post->id)
            ->whereHas('categories', function($query) use ($post) {
                $query->whereIn('categories.id', $post->categories->pluck('id'));
            })
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
