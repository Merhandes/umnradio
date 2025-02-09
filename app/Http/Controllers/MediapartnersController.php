<?php

namespace App\Http\Controllers;

use App\Models\Mediapartners;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMediapartnersRequest;
use App\Http\Requests\UpdateMediapartnersRequest;
use Illuminate\Support\Str;

class MediapartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mediapartners.index', [
            'mediapartners' => Mediapartners::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mediapartners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:1024'
        ]);

        $imageName = Str::random(20) . $request->image->getClientOriginalExtension();
        $fileExtension = $request->image->getClientOriginalExtension();

        if ($fileExtension !== 'webp') {
            return back()->withErrors(['image' => 'The uploaded file must be in WebP format.']);
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->move(('images/Mediapartner'), $imageName);
        }

        Mediapartners::create($validatedData);

        return redirect('/mediapartners')->with('success', 'New partnership has been added!');
    }

    public function show(Mediapartners $mediapartners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mediapartners $mediapartners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mediapartners $mediapartners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request, $id)
    {
        $mediapartners = Mediapartners::find($id);

        if (!$mediapartners) {
            return redirect('/mediapartners')->with('error', 'Mediapartner tidak ditemukan.');
        }

        if ($mediapartners->image) {
            $imageName = $mediapartners->image;
            $filePath = public_path($imageName);
            unlink($filePath);
            $mediapartners->delete();
        }

        return redirect('/mediapartners')->with('success', 'Mediapartner has been deleted!');
    }
}
