<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class StreamController extends Controller
{
    public function proxyTrackTitle()
    {
        $response = Http::withOptions(['verify' => false])->get('https://icecast.umn.ac.id/status-json.xsl');
        // dd($response->json());

        if ($response->successful()) {
            return $response->json();
        }

        return response()->json(['error' => 'Unable to fetch track title'], 500);
    }
}
