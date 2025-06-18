<?php

namespace App\Http\Controllers;

use App\Models\ProgramDetail;

class ProgramController extends Controller
{
    //
    public function index()
    {
        $programdetails = ProgramDetail::all();
        return view('programs.index', ['programdetails'=>$programdetails]);
    }

    public function show(ProgramDetail $programdetail)
    {
        //
        $podcasts = $programdetail->episodes()->take(6)->get();
        return view('dashboard.programs.show', ['programdetail'=>$programdetail, 'podcasts'=>$podcasts]);
    }
}
