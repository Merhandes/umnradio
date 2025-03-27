<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Models\ProgramDetail;

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
}
