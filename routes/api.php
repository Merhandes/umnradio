<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardVariableController;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardMediapartnerController;
use App\Http\Controllers\DashboardPartnershipController;
use App\Http\Controllers\DashboardPodcastController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\DashboardSegmentController;
use App\Http\Controllers\DashboardSongController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts', [DashboardPostController::class, 'showApi']); 
Route::get('/posts/{post}', [DashboardPostController::class, 'showByIdApi']);
Route::get('/variables/streams', [DashboardVariableController::class, 'streamAPI']);

Route::get('/programs', [DashboardProgramController::class, 'programsApi']);
Route::get('/programs/{program}', [DashboardProgramController::class, 'programsByIdApi']);
Route::get('/charts', [DashboardChartController::class, 'chartsApi']);
Route::get('/mediapartners', [DashboardMediapartnerController::class, 'mediapartnersApi']);
Route::get('/partnerships', [DashboardPartnershipController::class, 'partnershipsApi']);
Route::get('/podcasts', [DashboardPodcastController::class, 'podcastsApi']);
Route::get('/segments', [DashboardSegmentController::class, 'segmentsApi']);
Route::get('/songs', [DashboardSongController::class, 'songsApi']);
