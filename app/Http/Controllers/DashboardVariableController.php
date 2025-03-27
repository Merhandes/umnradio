<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use App\Http\Requests\StoreVariableRequest;
use App\Http\Requests\UpdateVariableRequest;
use App\Http\Resources\VariableResource;
use Illuminate\Http\Request;

class DashboardVariableController extends Controller
{
    //
    public function index()
    {
        //
        $variables = Variable::all();
        return view('dashboard.variables.index', ['variables' => $variables]);
    }

    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);

        Variable::create($validData);

        return redirect('/dashboard/variables')->with('success', "Variable Added");
    }

    public function update(Request $request, Variable $variable)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);

        $variable->update($validData);

        return redirect('/dashboard/variables')->with('success', "Variable Updated");
    }

    public function destroy(Variable $variable)
    {
        //
        $variable->delete();

        return redirect('/dashboard/variables')->with('success', "Variable Removed");
    }

    public function streamAPI(Request $request){
        try{
            $streams = Variable::where('type', 'Stream')->get();
            return VariableResource::collection($streams);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
