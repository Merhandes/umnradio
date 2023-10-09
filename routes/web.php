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

Route::controller(PostController::class)->group(
    function () {
        Route::get('/posts', 'index');

        Route::get('/posts/create', 'create');
        Route::post('/posts/store', 'store');
        Route::get('/posts/{post:slug}', 'show');
        Route::get('/posts/{post:slug}/edit', 'edit');
        Route::put('/posts/{post:slug}/update', 'update');
        Route::delete('/posts/{post:slug}/destroy', 'destroy');
        
        Route::get('/posts/checkSlug', 'checkSlug');
        Route::post('/posts/upload', 'upload');

        Route::get('/articles', 'showArticles');
        Route::get('/article/{post:slug}', 'showArticle');

        // Route::get('/', 'index_home');
    }
);

// Route::resource('posts', PostController::class);