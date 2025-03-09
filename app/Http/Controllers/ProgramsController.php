<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use App\Http\Requests\StoreProgramsRequest;
use App\Http\Requests\UpdateProgramsRequest;
use App\Http\Resources\ProgramsResource;
use Illuminate\Http\Request;

class ProgramsController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramsRequest $request, Programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programs $programs)
    {
        //
    }

    public function programsApi(Request $request)
    {
        try {
            $search = $request->query('q');
            $day = $request->query('day');
    
            $programs = Programs::when($search, function ($query, $search) {
                        $query->where('name', 'like', '%'.$search.'%');
                    })
                    ->when($day, function ($query, $day) {
                        $query->where('broadcast_day', $day);
                    })
                    ->paginate(10);
                return ProgramsResource::collection($programs);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Something went wrong.'], 500);
            }
    }

    public function programsByIdApi($id)
    {
        try {
            if (!is_numeric($id)) {
                return response()->json(['error' => 'Invalid ID. ID must be a number.'], 400);
            }
            $programs = Programs::findOrFail($id);

            return new ProgramsResource($programs);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Program not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
