<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDetail;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProgramController extends Controller
{
    //
    public function index()
    {
        //
        $programdetails = ProgramDetail::all();
        return view('dashboard.programs.index', ['programdetails'=>$programdetails]);
    }

    public function create()
    {
        //
        return view('dashboard.programs.create');
    }

    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'program_name' => 'required|max:255',
            'slug' => 'required|unique:program_details',
            'description' => 'required',
            'short_desc' => 'required|max:255',
            'penyiar' => 'max:255',
            'producer' => 'max:255',
            'visual_creative' => 'max:255',
            'audio_creative' => 'max:255',
            'media_affairs' => 'max:255',
            'music_director' => 'max:255',
            'operator' => 'max:255',
            'image' => 'required|image|file|max:20480',
            'banner_image' => 'image|file|max:20480'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('program_posters', 'public');
        }
        if ($request->file('banner_image')) {
            $validData['banner_image'] = $request->file('banner_image')->storePublicly('program_banners', 'public');
        }

        ProgramDetail::create($validData);

        return redirect('dashboard/programs')->with('success', "Program Added");
    }

    public function edit(ProgramDetail $programdetail)
    {
        //
        // dd($programdetail);
        return view('dashboard.programs.edit', ['programdetail' => $programdetail]);
    }

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
            'operator' => 'max:255',
            'image' => 'image|file|max:20480',
            'banner_image' => 'image|file|max:20480'
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
        if ($request->file('banner_image')) {
            if ($request->old_banner) {
                Storage::delete($request->old_banner);
            }
            $validData['banner_image'] = $request->file('banner_image')->storePublicly('program_banners', 'public');
        }

        ProgramDetail::where('id', $programdetail->id)->update($validData);

        return redirect('/dashboard/programs')->with('success', "Program updated.");
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(ProgramDetail::class, 'slug', $request->program_name);
        return response()->json(['slug' => $slug]);
    }

    public function destroy(ProgramDetail $programdetail)
    {
        //
        $programdetail->delete();
        return redirect('/dashboard/programs')->with('success', "Program Deleted");
    }
}
