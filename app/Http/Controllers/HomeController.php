<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Chart;
use App\Models\Segment;
use App\Models\Programs;
use App\Models\Variable;
use App\Models\Partnerships;
use App\Models\Mediapartners;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $programs = Programs::all();
        $posts = Post::latest()->take(3)->get();
        $segments = Segment::where('status', 'PUBLISHED')->get();
        $partnerships = Partnerships::all();
        $mediapartners = Mediapartners::all();
        $chartcount = Chart::count();
        $streams = Variable::where('type', 'Stream')->get();
        if (Variable::where('type', 'PostHighlight')->first()) {
            $postHighlightID = Variable::where('type', 'PostHighlight')->first()->content;
            $hlPost = Post::where('id', $postHighlightID)->first();
        }else{
            $hlPost = null;
        }
        
        if ($chartcount>0) {
            $charts = Chart::where('status', 'PUBLISHED')->get()->random(1);
        }else{
            $charts = Chart::all();
        }

        return view('home.index', ['programs' => $programs, 'posts' => $posts, 'segments' => $segments, 'partnerships' => $partnerships, 'mediapartners' => $mediapartners, 'charts' => $charts, 'streams' => $streams, 'hlPost' => $hlPost]);
    }
}
