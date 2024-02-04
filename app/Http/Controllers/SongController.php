<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\ChartJunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function dashboard()
    {
        $songs = Song::all();
        return view('Song.dashboard', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Song.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'title' => 'required|max:255',
            'artists' => 'required',
            'cover_image' => 'required|image|file|max:20480'
        ]);

        if ($request->file('cover_image')) {
            $validData['cover_image'] = $request->file('cover_image')->storePublicly('song_covers', 'public');
        }


        Song::create($validData);

        return redirect('/songs/dashboard')->with('success', "Song Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
        return view('Song.edit', ['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'artists' => 'required',
            // 'cover_image' => 'required|image|file|max:20480'
        ];

        $validData = $request->validate($rules);

        if ($request->file('cover_image')) {
            if ($request->old_cover_image) {
                Storage::delete($request->old_cover_image);
            }
            $validData['cover_image'] = $request->file('cover_image')->storePublicly('song_covers', 'public');
        }

        Song::where('id', $song->id)->update($validData);

        return redirect('/songs/dashboard')->with('success', "Song Edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //

        $song->chartjunction()->delete();
        $song->delete();
        return redirect('/songs/dashboard')->with('success', 'Song Deleted');
        // if (ChartJunction::where('song_id', '=', $song->id)->exists()) {
        //     return redirect('songs/dashboard')->with('error', 'Cannot Delete Song: Song Exists in Chart');
        // } else {
        //     $song->delete();
        //     return redirect('/songs/dashboard')->with('success', 'Song Deleted');
        // }
    }
}
