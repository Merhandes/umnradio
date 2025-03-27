<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mediapartners;
use Illuminate\Support\Str;

class DashboardMediapartnerController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.mediaPartner.index', [
            'mediapartners' => Mediapartners::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.mediaPartner.create');
    }

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

        return redirect('/dashboard/mediapartners')->with('success', 'New partnership has been added!');
    }

    public function destroy(Request $request, $id)
    {
        $mediapartners = Mediapartners::find($id);

        if (!$mediapartners) {
            return redirect('/dashboard/mediapartners')->with('error', 'Mediapartner tidak ditemukan.');
        }

        if ($mediapartners->image) {
            $imageName = $mediapartners->image;
            $filePath = public_path($imageName);
            unlink($filePath);
            $mediapartners->delete();
        }

        return redirect('/dashboard/mediapartners')->with('success', 'Mediapartner has been deleted!');
    }
}
