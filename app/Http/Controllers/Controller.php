<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Programs;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $programs = Programs::all();
        $posts = Post::latest()->take(3)->get();
        
        return view('Home.index', compact(['programs', 'posts']));
    }

}
