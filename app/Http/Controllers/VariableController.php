<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $variables = Variable::all();
        return view('Internal.variables', ['variables' => $variables]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);

        Variable::create($validData);

        return redirect('/admin/variables')->with('success', "Variable Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Variable $variable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variable $variable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Variable $variable)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);

        // dd($validData);

        $variable->update($validData);

        return redirect('/admin/variables')->with('success', "Variable Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variable $variable)
    {
        //
        $variable->delete();

        return redirect('/admin/variables')->with('success', "Variable Removed");
    }
}
