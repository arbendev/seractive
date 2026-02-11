<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Post::with('user', 'categories')->latest('published_at');

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->has('category')) {
            $query->whereHas('categories', function($q) use ($request) {
                $q->where('slug', $request->get('category'));
            });
        }

        $posts = $query->paginate(9)->withQueryString();
        
        // Only show separate featured post on first page and when not searching/filtering
        $featuredPost = null;
        if ($request->missing('search') && $request->missing('category') && $posts->onFirstPage()) {
            $featuredPost = $posts->shift();
        }
        
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
