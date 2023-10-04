<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/article', function () {
//     return view('News.index');
// });

Route::get('/article/obral-etalase-mimpi', function () {
    return view('News.Article.satu');
});

Route::get('/article/kepada-yth-maba-apa-kabar-kali-ini', function () {
    return view('News.Article.dua');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/checkSlug', [PostController::class, 'checkSlug']);

Route::post('/posts/upload', [PostController::class, 'upload']);

Route::resource('posts', PostController::class);

Route::get('/articles', [PostController::class, 'showArticles']);

Route::get('/article/{post:slug}', [PostController::class, 'showArticle']);