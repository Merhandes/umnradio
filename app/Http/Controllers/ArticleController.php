<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get all posts, ordered by latest
        $posts = Post::latest();

        if ($request->filled('search')) {
            $posts->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('post_content', 'like', '%' . $request->search . '%');
            });
        }

        return view('article.index', ['posts' => $posts->get()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $title = $post->title;
        $category = $post->category;

        // Find related posts
        $suggestions = Post::where(function ($query) use ($title, $category) {
                $query->where('title', 'like', "%$title%")
                      ->orWhere('category', 'like', "%$category%");
            })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->latest()
            ->limit(3)
            ->get();

        // Get latest posts excluding the current post
        $articles = Post::where('id', '!=', $post->id)
            ->latest()
            ->limit(5)
            ->get();

        return view('article.detail', compact('post', 'articles', 'suggestions'));
    }

    /**
     * Other methods (create, store, edit, update, destroy) are placeholders.
     */
}
