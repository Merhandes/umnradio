<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Programs;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $programs = Programs::all();
        $posts = Post::latest()->take(2)->get();
        
        return view('Home.index', compact(['programs', 'posts']));
    }

    public function logo()
    {
        return view('Home.Logo.logo');
    }

    public function addLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|file|mimes:webp|max:1024',
        ]);

        $imageName = $request->logo->getClientOriginalName();
        $fileExtension = $request->logo->getClientOriginalExtension();

        if ($fileExtension !== 'webp') {
            return back()->withErrors(['addLogo' => 'The uploaded file must be in WebP format.']);
        }

        $request->logo->move(public_path('images/Partnership'), $imageName);

        return back()
            ->with('addSuccess', 'You have successfully uploaded the image.')
            ->with('addLogo', $imageName);
    }

    public function deleteLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|file|mimes:webp|max:1024',
        ]);

        $imageName = $request->logo->getClientOriginalName();

        $filePath = public_path('images/Partnership/' . $imageName);

        if (file_exists($filePath)) {
            unlink($filePath); // This will delete the file if it exists
            return back()->with('deleteSuccess', 'Logo deleted successfully.');
        } else {
            return back()->withErrors(['deleteLogo' => 'Logo not found or already deleted.']);
        }
    }

}
