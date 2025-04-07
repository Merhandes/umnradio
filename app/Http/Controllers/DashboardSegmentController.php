<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;
use App\Http\Resources\SegmentsResource;

class DashboardSegmentController extends Controller
{
    //
    public function index()
    {
        //
        $segments = Segment::all();
        return view('dashboard.segments.index', [
            'segments' => $segments
        ]);
    }

    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $validData['status'] = 'DRAFT';

        Segment::create($validData);

        return redirect('/dashboard/segments')->with('success', 'Segment Added');
    }

    public function show(Segment $segment)
    {
        //
        return view('dashboard.segments.edit', [
            'segment' => $segment
        ]);
    }

    public function update(Request $request, Segment $segment)
    {
        //
        $validData = $request->validate([
            'title' => 'required',
            'content'=> 'required'
        ]);

        $segment->update($validData);

        return redirect('/dashboard/segments')->with('success', 'Segment Updated');
    }

    public function publish(Segment $segment){
        $segment->update(['status' => 'PUBLISHED']);
        return redirect('/dashboard/segments')->with('success', 'Segment Published');
    }

    public function remove(Segment $segment){
        $segment->update(['status' => 'DRAFT']);
        return redirect('/dashboard/segments')->with('success', 'Segment Removed');
    }

    public function destroy(Segment $segment)
    {
        //
        $segment->delete();
        return redirect('/dashboard/segments')->with('success', 'Segment Deleted');
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
