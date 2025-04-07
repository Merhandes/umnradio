<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Http\Resources\PodcastsResource;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $podcasts = Podcast::all();
        return view('Podcast.index', [
            'podcasts' => $podcasts
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        //
    }

    public function podcastsApi(Request $request)
    {
        try {
            $search = $request->query('q');
            $program_id = $request->query('progid');
    
            $podcasts = Podcast::when($search, function ($query, $search) {
                        $query->where('title', 'like', '%'.$search.'%');
                    })
                    ->when($program_id, function ($query, $program_id) {
                        $query->where('program_id', $program_id);
                    })
                    ->paginate(10);
                return PodcastsResource::collection($podcasts);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Something went wrong.'], 500);
            }
    }
}
