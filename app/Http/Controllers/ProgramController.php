<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDetail;

class ProgramController extends Controller
{
    //
    public function index()
    {
        $programdetails = ProgramDetail::all();
        return view('Programs.index', ['programdetails'=>$programdetails]);
    }

    public function show(ProgramDetail $programdetail)
    {
        //
        $podcasts = $programdetail->episodes()->take(6)->get();
        return view('dashboard.programs.show', ['programdetail'=>$programdetail, 'podcasts'=>$podcasts]);
    }
}
