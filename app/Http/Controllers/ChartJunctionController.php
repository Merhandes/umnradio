<?php

namespace App\Http\Controllers;

use App\Models\ChartJunction;
use App\Http\Requests\StoreChartJunctionRequest;
use App\Http\Requests\UpdateChartJunctionRequest;
use App\Models\Chart;
use App\Models\Song;
use Illuminate\Http\Request;

class ChartJunctionController extends Controller
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

    public function addsong(){
        $charts = Chart::all();
        $songs = Song::all();

        return view('Chart.addsong', ['charts'=>$charts, 'songs'=>$songs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'chart_id' => 'required',
            'song_id' => 'required'
        ]);

        $validData['position'] = $request->position;

        $chart = Chart::findOrFail($request->chart_id);
        $song = Song::findOrFail($request->song_id);

        $validData['chart_name'] = $chart->chart_name;
        $validData['song_title'] = $song->title;

        ChartJunction::create($validData);

        return redirect('/charts/'.$request->chart_id.'/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChartJunction $chartJunction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChartJunction $chartJunction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChartJunctionRequest $request, ChartJunction $chartJunction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChartJunction $chartJunction)
    {
        //
        $chartJunction->delete();
        return redirect('/charts/'.$chartJunction->chart_id.'/edit')->with('success', 'Song Removed from Chart');
    }
}
