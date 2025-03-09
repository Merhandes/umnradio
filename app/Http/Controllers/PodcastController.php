<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Http\Requests\StorePodcastRequest;
use App\Http\Requests\UpdatePodcastRequest;
use App\Models\ProgramDetail;
use App\Models\Programs;
use Illuminate\Http\Request;
use App\Http\Resources\PodcastsResource;

use function Laravel\Prompts\alert;

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
    public function dashboard()
    {
        //
        $podcasts = Podcast::all();
        $programdetails = ProgramDetail::all();

        return view('Podcast.dashboard', ['podcasts' => $podcasts, 'programs' => $programdetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $programdetails = ProgramDetail::all();
        return view('Podcast.create', ['programs' => $programdetails]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validData = $request->validate([
            'title' => 'required',
            'embed_code' => 'required',
            'program_id' => ''
        ]);

        Podcast::create($validData);

        return redirect('/podcasts/dashboard')->with('success', "New Podcast Added");
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
        $programs = ProgramDetail::all();
        return view('Podcast.edit', ['podcast' => $podcast, 'programs' => $programs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
    {
        //

        $rules = [
            'title' => 'required',
            'embed_code' => 'required',
            'program_id' => ''
        ];

        $validData = $request->validate($rules);

        Podcast::where('id', $podcast->id)->update($validData);

        return redirect('/podcasts/dashboard')->with('success', "Podcast Modified");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        //
        $podcast->delete();
        return redirect('/podcasts/dashboard')->with('success', "Podcast Deleted");
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
