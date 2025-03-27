<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Roledef;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $roledefs = Roledef::all();
        return view('dashboard.users.index', [
            'users' => $users,
            'roledefs' => $roledefs
        ]);
    }

    public function detail(Request $request, User $user)
    {
        $roledefs = Roledef::all();
        return view('dashboard.users.edit', [
            'user' => $user,
            'roledefs' => $roledefs
        ]);
    }

    public function create(Request $request)
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

        return redirect('/dashboard/users')->with('success', "User succesfully added.");
    }

    public function update(Request $request, User $user)
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

        return redirect('/dashboard/users')->with('success', "User" . $user->name . " updated.");
    }

    public function delete_role(Request $request, Role $role)
    {
        $role->delete();
        return redirect('/dashboard/users/' . $role->user_id . '/details');
    }
}
