<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Chart;
use Illuminate\Http\Request;
use App\Models\ChartJunction;
use App\Http\Resources\ChartsResource;
use Illuminate\Support\Facades\Storage;

class DashboardChartController extends Controller
{
    //
    public function index()
    {
        //
        $charts = Chart::all();
        return view('dashboard.chart.index', ['charts' => $charts]);
    }

    public function create()
    {
        //
        return view('dashboard.chart.create');
    }

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

        return redirect('/dashboard/charts')->with('success', "Chart Draft Added");
    }

    public function edit(Chart $chart)
    {
        //
        // dd($chart);
        $junctions = ChartJunction::where('chart_id', $chart->id)->get()->sortBy('position');
        $songs = Song::all();
        // dd($junctions);
        return view('dashboard.chart.edit', ['chart' => $chart, 'junctions' => $junctions, 'songs'=>$songs]);
    }

    public function update(Request $request, Chart $chart)
    {
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

        return redirect('/dashboard/charts')->with('success', "Chart Modified");
    }

    public function publish(Chart $chart)
    {
        $chart->update(['status' => 'PUBLISHED']);

        return redirect('/dashboard/charts')->with('success', "Chart Published");
    }

    public function destroy(Chart $chart)
    {
        //
        $chart->delete();
        return redirect('/dashboard/charts')->with('success', "Chart Deleted");
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
