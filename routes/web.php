<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index');
});

Route::get('/article', function () {
    return view('News.index');
});

Route::get('/article/obral-etalase-mimpi', function () {
    return view('News.Article.satu');
});

Route::get('/article/kepada-yth-maba-apa-kabar-kali-ini', function () {
    return view('News.Article.dua');
});

