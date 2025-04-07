<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Http\Requests\StoreChartRequest;
use App\Http\Requests\UpdateChartRequest;
use App\Http\Resources\ChartsResource;
use App\Models\ChartJunction;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $charts = Chart::all();
        $songs = Song::all();
        $junctions = ChartJunction::all();
        return view('Chart.index', ['charts' => $charts, 'songs' => $songs, 'junctions' => $junctions]);
    }

    public function dashboard()
    {
        //
        $charts = Chart::all();
        return view('dashboard.chart.index', ['charts' => $charts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.chart.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'chart_name' => 'required|max:255',
            'link' => 'required',
            'cover_image' => 'required|image|file|max:20480'
        ]);

        if ($request->file('cover_image')) {
            $validData['cover_image'] = $request->file('cover_image')->storePublicly('chart_covers', 'public');
        }

        $validData['status'] = 'DRAFT';

        Chart::create($validData);

        return redirect('/charts/dashboard')->with('success', "Chart Draft Added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        //
        // dd($chart);
        $junctions = ChartJunction::where('chart_id', $chart->id)->get()->sortBy('position');
        $songs = Song::all();
        // dd($junctions);
        return view('dashboard.chart.edit', ['chart' => $chart, 'junctions' => $junctions, 'songs'=>$songs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chart $chart)
    {
        //
        //
        $rules = [
            'chart_name' => 'required|max:255',
            'link' => 'required',
            // 'cover_image' => 'required|image|file|max:20480'
        ];

        $validData = $request->validate($rules);

        if ($request->file('cover_image')) {
            if ($request->old_cover_image) {
                Storage::delete($request->old_cover_image);
            }
            $validData['cover_image'] = $request->file('cover_image')->storePublicly('chart_covers', 'public');
        }

        // $validData['status'] = 'DRAFT';

        Chart::where('id', $chart->id)->update($validData);

        return redirect('/charts/dashboard')->with('success', "Chart Modified");
    }


    public function publish(Chart $chart)
    {
        $chart->update(['status' => 'PUBLISHED']);

        return redirect('/charts/dashboard')->with('success', "Chart Published");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        //
        $chart->delete();
        return redirect('/charts/dashboard')->with('success', "Chart Deleted");
    }

    public function chartsApi(Request $request)
    {
        try{
            $charts = Chart::All();
            return ChartsResource::collection($charts);
        }
        catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
