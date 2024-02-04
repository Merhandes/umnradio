<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Http\Requests\StoreLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'keterangan' => '',
            'image' => 'required|image|file|max:20480'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('Partnership', 'public');
        }
        
        Logo::create($validData);

        return redirect('/logo')->with('success', "Logo Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
        $logo->delete();
    }
}
