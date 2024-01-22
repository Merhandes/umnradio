<?php

namespace App\Http\Controllers;

use App\Models\Partnerships;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PartnershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('partnerships.index', [
            'partnerships' => Partnerships::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partnerships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:1024'
        ]);

        $imageName = $request->image->getClientOriginalName();
        $fileExtension = $request->image->getClientOriginalExtension();

        if ($fileExtension !== 'webp') {
            return back()->withErrors(['image' => 'The uploaded file must be in WebP format.']);
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->move(('images/Partnership'), $imageName);
        }

        Partnerships::create($validatedData);

        return redirect('/partnerships')->with('success', 'New partnership has been added!');
    }

    public function show(Partnerships $partnerships)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partnerships $partnerships)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partnerships $partnerships)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $partnerships = Partnerships::find($id);

        if (!$partnerships) {
            return redirect('/partnerships')->with('error', 'Partnership tidak ditemukan.');
        }

        if ($partnerships->image) {
            Storage::delete($partnerships->image);
        }

        $partnerships->delete();

        return redirect('/partnerships')->with('success', 'Partnership has been deleted!');
    }
}
