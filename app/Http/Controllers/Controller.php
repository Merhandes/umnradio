<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Partnerships;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Programs;
use App\Models\Role;
use App\Models\Roledef;
use App\Models\Segment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $programs = Programs::all();
        $posts = Post::latest()->take(3)->get();
        $segments = Segment::where('status', 'PUBLISHED')->get();
        $partnerships = Partnerships::all();
        $charts = Chart::where('status', 'PUBLISHED')->get()->random(2);

        return view('Home.index', ['programs' => $programs, 'posts' => $posts, 'segments' => $segments, 'partnerships' => $partnerships, 'charts' => $charts]);
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
            File::delete($filePath); // This will delete the file if it exists
            // unlink($filePath); // This will delete the file if it exists
            return back()->with('deleteSuccess', 'Logo deleted successfully.');
        } else {
            return back()->withErrors(['deleteLogo' => 'Logo not found or already deleted.']);
        }
    }

    public function crews()
    {
        return view('Internal.landing');
    }

    public function admin()
    {
        $users = User::all();
        $roledefs = Roledef::all();
        return view('Internal.admin', [
            'users' => $users,
            'roledefs' => $roledefs
        ]);
    }

    public function new_user(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:20',
            'nim' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'major' => 'required',
            'year' => 'required',
            'address' => 'required'
        ]);

        $userData['password'] = bcrypt($request->password);
        $user = User::create($userData);

        $roleData = $request->validate([
            'role' => 'required'
        ]);

        $roleData['user_id'] = $user->id;
        $roleData['username'] = $request->name;

        Role::create($roleData);

        return redirect('/admin/dashboard')->with('success', "User succesfully added.");
    }

    public function show_user(Request $request, User $user)
    {
        $roledefs = Roledef::all();
        return view('Internal.show', [
            'user' => $user,
            'roledefs' => $roledefs
        ]);
    }

    public function edit_user(Request $request, User $user)
    {
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'nim' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'major' => 'required',
            'year' => 'required',
            'address' => 'required'
        ]);
        if ($request->password) {
            $userData['password'] = bcrypt($request->password);
        }

        $user->update($userData);

        if ($request->role) {
            $roleData = $request->validate([
                'role' => ''
            ]);

            $roleData['user_id'] = $user->id;
            $roleData['username'] = $request->name;

            Role::create($roleData);
        }

        return redirect('/admin/dashboard')->with('success', "User" . $user->name . " edited.");
    }

    public function delete_role(Request $request, Role $role)
    {
        $role->delete();
        return redirect('/admin/' . $role->user_id . '/details');
    }

    public function change_password(Request $request, User $user)
    {
        $credentials = $request->validate([
            'password' => 'required',
            'password_new' => 'required',
        ]);

        $credentials['email'] = $user->email;

        if (Auth::attempt($credentials)) {
            $user->update([
                'password' => bcrypt($request->password_new)
            ]);

            return redirect('/uang-kas')->with('successPass', 'Password changed.');
        }

        return back()->with('error', 'Password change failed.');
    }

    public function programs_charts()
    {
        return view('Internal.programchart');
    }
}
