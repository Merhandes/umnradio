<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Models\ProgramDetail;
use App\Http\Resources\PodcastsResource;

class DashboardPodcastController extends Controller
{
    //
    public function index()
    {
        //
        $podcasts = Podcast::all();
        $programdetails = ProgramDetail::all();

        return view('dashboard.podcast.index', ['podcasts' => $podcasts, 'programs' => $programdetails]);
    }

    public function create()
    {
        //
        $programdetails = ProgramDetail::all();
        return view('dashboard.podcast.create', ['programs' => $programdetails]);
    }

    public function store(Request $request)
    {
        //

        $validData = $request->validate([
            'title' => 'required',
            'embed_code' => 'required',
            'program_id' => ''
        ]);

        Podcast::create($validData);

        return redirect('/dashboard/podcasts')->with('success', "New Podcast Added");
    }

    public function edit(Podcast $podcast)
    {
        //
        $programs = ProgramDetail::all();
        return view('dashboard.podcast.edit', ['podcast' => $podcast, 'programs' => $programs]);
    }

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

        return redirect('/dashboard/podcasts')->with('success', "Podcast Modified");
    }

    public function destroy(Podcast $podcast)
    {
        //
        $podcast->delete();
        return redirect('/dashboard/podcasts')->with('success', "Podcast Deleted");
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
