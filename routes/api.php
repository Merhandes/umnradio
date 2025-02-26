<?php

use App\Models\Segment;
use App\Models\Partnerships;
use Illuminate\Http\Request;
use App\Models\Mediapartners;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SegmentController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\PartnershipsController;
use App\Http\Controllers\MediapartnersController;

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
Route::get('/posts', [PostController::class, 'showApi']); 
Route::get('/posts/{post}', [PostController::class, 'showByIdApi']);
Route::get('/variables/streams', [VariableController::class, 'streamAPI']);
Route::get('/programs', [ProgramsController::class, 'programsApi']);
Route::get('/charts', [ChartController::class, 'chartsApi']);
Route::get('/mediapartners', [MediapartnersController::class, 'mediapartnersApi']);
Route::get('/partnerships', [PartnershipsController::class, 'partnershipsApi']);
Route::get('/podcasts', [PodcastController::class, 'podcastsApi']);
Route::get('/segments', [SegmentController::class, 'segmentsApi']);
Route::get('/songs', [SongController::class, 'songsApi']);