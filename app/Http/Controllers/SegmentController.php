<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use App\Http\Requests\StoreSegmentRequest;
use App\Http\Requests\UpdateSegmentRequest;
use App\Http\Resources\SegmentsResource;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $segments = Segment::all();
        return view('Internal.Segment.segments', [
            'segments' => $segments
        ]);
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
            'title' => 'required',
            'content' => 'required'
        ]);

        $validData['status'] = 'DRAFT';

        Segment::create($validData);

        return redirect('/admin/segments')->with('success', 'Segment Added');
    }

    public function publish(Segment $segment){
        $segment->update(['status' => 'PUBLISHED']);
        return redirect('/admin/segments')->with('success', 'Segment Published');
    }

    public function remove(Segment $segment){
        $segment->update(['status' => 'DRAFT']);
        return redirect('/admin/segments')->with('success', 'Segment Removed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Segment $segment)
    {
        //
        return view('Internal.Segment.show', [
            'segment' => $segment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Segment $segment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Segment $segment)
    {
        //
        $validData = $request->validate([
            'title' => 'required',
            'content'=> 'required'
        ]);

        $segment->update($validData);

        return redirect('/admin/segments')->with('success', 'Segment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Segment $segment)
    {
        //
        $segment->delete();
        return redirect('/admin/segments')->with('success', 'Segment Deleted');
    }

    public function segmentsApi(Request $request)
    {
        try{
            $segments = Segment::All();
            return SegmentsResource::collection($segments);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
