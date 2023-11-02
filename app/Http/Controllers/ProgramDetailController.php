<?php

namespace App\Http\Controllers;

use App\Models\ProgramDetail;
use App\Http\Requests\StoreProgramDetailRequest;
use App\Http\Requests\UpdateProgramDetailRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProgramDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programdetails = ProgramDetail::all();
        return view('Programs.index', ['programdetails'=>$programdetails]);
    }

    public function dashboard()
    {
        //
        $programdetails = ProgramDetail::all();
        return view('Programs.dashboard', ['programdetails'=>$programdetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'program_name' => 'required|max:255',
            'slug' => 'required|unique:program_details',
            'description' => 'required',
            'short_desc' => 'required|max:255',
            'penyiar' => 'required|max:255',
            'producer' => 'max:255',
            'visual_creative' => 'max:255',
            'audio_creative' => 'max:255',
            'media_affairs' => 'max:255',
            'music_director' => 'max:255',
            'image' => 'required|image|file|max:20480'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('program_posters', 'public');
        }

        ProgramDetail::create($validData);

        return redirect('/programs/dashboard')->with('success', "Program Added");
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(ProgramDetail::class, 'slug', $request->program_name);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramDetail $programdetail)
    {
        //
        return view('Programs.show', ['programdetail'=>$programdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramDetail $programdetail)
    {
        //
        // dd($programdetail);
        return view('Programs.edit', ['programdetail' => $programdetail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramDetail $programdetail)
    {
        //
        $rules = [
            'program_name' => 'required|max:255',
            // 'slug' => 'required|unique:posts',
            'description' => 'required',
            'short_desc' => 'required|max:255',
            'penyiar' => 'required|max:255',
            'producer' => 'max:255',
            'visual_creative' => 'max:255',
            'audio_creative' => 'max:255',
            'media_affairs' => 'max:255',
            'music_director' => 'max:255',
            'image' => 'image|file|max:20480'
        ];

        if ($request->slug != $programdetail->slug) {
            $rules['slug'] = 'required|unique:program_details';
        }

        $validData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->old_image) {
                Storage::delete($request->old_image);
            }
            $validData['image'] = $request->file('image')->storePublicly('program_posters', 'public');
        }

        ProgramDetail::where('id', $programdetail->id)->update($validData);

        return redirect('/programs/dashboard')->with('success', "Program updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramDetail $programdetail)
    {
        //
        $programdetail->delete();
        return redirect('/programs/dashboard')->with('success', "Program Deleted");
    }
}
