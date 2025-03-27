<?php

namespace App\Http\Controllers;

use App\Models\Partnerships;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPartnershipController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.partnership.index', [
            'partnerships' => Partnerships::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.partnership.create');
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
            $validatedData['image'] = $request->file('image')->move(('images/Partnership'), $imageName);
        }

        Partnerships::create($validatedData);

        return redirect('/dashboard/partnerships')->with('success', 'New partnership has been added!');
    }

    public function destroy(Request $request, $id)
    {
        $partnerships = Partnerships::find($id);

        if (!$partnerships) {
            return redirect('/dashboard/partnerships')->with('error', 'Partnership tidak ditemukan.');
        }

        if ($partnerships->image) {
            $imageName = $partnerships->image;
            $filePath = public_path($imageName);
            unlink($filePath);
            $partnerships->delete();
        }

        return redirect('/dashboard/partnerships')->with('success', 'Partnership has been deleted!');
    }
}
