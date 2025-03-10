<?php

use Illuminate\Http\Request;
use App\Models\ChartJunction;
use App\Models\ProgramDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SegmentController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\PartnershipsController;
use App\Http\Controllers\ChartJunctionController;
use App\Http\Controllers\MediapartnersController;
use App\Http\Controllers\ProgramDetailController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');
});

Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/logo', 'logo');
    Route::post('/logo/add', 'addLogo');
    Route::post('/logo/delete', 'deleteLogo');
    Route::get('/crews-landing', 'crews')->middleware('auth');
    Route::get('/admin/dashboard', 'admin')->middleware(['auth', 'admin']);
    Route::get('/admin/{user:id}/details', 'show_user')->middleware(['auth', 'admin']);
    Route::put('/admin/{user:id}/edit-user', 'edit_user')->middleware(['auth', 'admin']);
    Route::post('/admin/add-user', 'new_user')->middleware(['auth', 'admin']);
    Route::delete('/admin/role/{role:id}/delete', 'delete_role')->middleware(['auth', 'admin']);
    Route::put('/change-password/{user:id}', 'change_password')->middleware(['auth', 'admin']);

    Route::get('/programs-charts', 'programs_charts')->middleware(['auth', 'admin']);
    Route::get('/partnership-mediapartner', 'partnership_mediapartner')->middleware(['auth', 'admin']);
});

// Route::get('/article', function () {
//     return view('News.index');
// });

// Route::get('/article/obral-etalase-mimpi', function () {
//     return view('News.Article.satu');
// });

// Route::get('/article/kepada-yth-maba-apa-kabar-kali-ini', function () {
//     return view('News.Article.dua');
// });
// Route::get('/article/synchronize-fest-2022', function () {
//     return view('News.Article.synchronize');
// });
// Route::get('/article/slowly-bersurat-tak-pernah-semenyenangkan-ini', function () {
//     return view('News.Article.slowly');
// });
// Route::get('/article/semoga-sembuh-cerita-jatuh-dan-tumbuh-idgitaf', function () {
//     return view('News.Article.semoga');
// });
// Route::get('/article/koma-berulang-kita-coba-terawang', function () {
//     return view('News.Article.terawang');
// });
// Route::get('/article/koma-berulang-kita-rayakan-menang', function () {
//     return view('News.Article.menang');
// });

// Route::get('/posts/checkSlug', [PostController::class, 'checkSlug']);

Route::controller(PostController::class)->middleware(['auth', 'news'])->group(
    function () {
        Route::get('/posts', 'index');
        Route::get('/posts/checkSlug', 'checkSlug');
        Route::get('/posts/create', 'create');
        Route::post('/posts/store', 'store');
        Route::get('/posts/{post:slug}', 'showArticle');
        Route::get('/posts/{post:slug}/edit', 'edit');
        Route::put('/posts/{post:slug}/update', 'update');
        Route::delete('/posts/{post:slug}/destroy', 'destroy');
        Route::post('/posts/upload', 'upload');
        Route::get('/articles', 'showArticles')->withoutMiddleware(['auth', 'news']);
        Route::get('/article/{post:slug}', 'showArticle')->withoutMiddleware(['auth', 'news']);

        // Route::get('/', 'index_home');
    }
);

Route::controller(ProgramDetailController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/programs/dashboard', 'dashboard');
        Route::get('/programs/new', 'create');
        Route::post('/programs/store', 'store');
        Route::get('/programs/checkSlug', 'checkSlug');
        Route::get('/programs/{programdetail:slug}/edit', 'edit');
        Route::delete('/programs/{programdetail:slug}/delete', 'destroy');
        Route::put('/programs/{programdetail:slug}/update', 'update');
        Route::get('/programs/{programdetail:slug}', 'show')->withoutMiddleware(['auth', 'admin']);
        Route::get('/programs', 'index')->withoutMiddleware(['auth', 'admin']);
    }
);

Route::controller(ChartController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/charts', 'index')->withoutMiddleware(['auth', 'admin']);
        Route::get('/charts/dashboard', 'dashboard');
        Route::get('/charts/new', 'create');
        Route::post('/charts/store', 'store');
        Route::get('/charts/{chart:id}/edit', 'edit');
        Route::put('/charts/{chart:id}/update', 'update');
        Route::put('/charts/{chart:id}/publish', 'publish');
        Route::delete('/charts/{chart:id}/delete', 'destroy');
    }
);

Route::controller(SongController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/songs/dashboard', 'dashboard');
        Route::get('/songs/new', 'create');
        Route::post('/songs/store', 'store');
        Route::get('/songs/{song:id}/edit', 'edit');
        Route::put('/songs/{song:id}/update', 'update');
        Route::delete('/songs/{song:id}/delete', 'destroy');
    }
);

Route::controller(ChartJunctionController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/charts/add-song', 'addsong');
        Route::post('/charts/add-song/store', 'store');
        Route::delete('/charts/junction/{chart_junction:id}/remove', 'destroy');
        Route::put('/charts/junction/{chart_junction:id}/update', 'update');
    }
);

Route::controller(PodcastController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/podcasts','index')->withoutMiddleware(['auth', 'admin']);
        Route::get('/podcasts/dashboard', 'dashboard');
        Route::get('/podcasts/new', 'create');
        Route::post('/podcasts/store', 'store');
        Route::get('/podcasts/{podcast:id}/edit', 'edit');
        Route::put('/podcasts/{podcast:id}/update', 'update');
        Route::delete('/podcasts/{podcast:id}/delete', 'destroy');
    }
);

Route::controller(PaymentController::class)->group(
    function(){
        Route::get('/uang-kas', 'index')->middleware('auth');
        Route::get('/uang-kas/dashboard', 'dashboard')->middleware(['auth', 'bendahara']);
        Route::get('/uang-kas/timeline', 'timeline')->middleware(['auth', 'bendahara']);
        Route::get('/uang-kas/{user:id}/details', 'show')->middleware(['auth', 'bendahara']);
        Route::post('/uang-kas/upload', 'store')->middleware('auth');
        Route::put('/uang-kas/{payment:id}/change-status', 'change_status')->middleware(['auth', 'bendahara']);
    }
);

Route::controller(SegmentController::class)->group(
    function(){
        Route::get('/admin/segments', 'index')->middleware(['auth', 'admin']);
        Route::get('/admin/segments/{segment:id}/details', 'show')->middleware(['auth', 'admin']);
        Route::post('/admin/segments/add', 'store')->middleware(['auth', 'admin']);
        Route::put('/admin/segments/{segment:id}/update', 'update')->middleware(['auth', 'admin']);
        Route::put('/admin/segments/{segment:id}/publish', 'publish')->middleware(['auth', 'admin']);
        Route::put('/admin/segments/{segment:id}/remove', 'remove')->middleware(['auth', 'admin']);
        Route::delete('/admin/segments/{segment:id}/delete', 'destroy')->middleware(['auth', 'admin']);
    }
);

Route::controller(PartnershipsController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/partnerships', 'index');
        Route::get('/partnerships/create', 'create');
        Route::post('/partnerships/add', 'store');
        Route::delete('/partnerships/{id}/delete', 'destroy');
    }
);

Route::controller(MediapartnersController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/mediapartners', 'index');
        Route::get('/mediapartners/create', 'create');
        Route::post('/mediapartners/add', 'store');
        Route::delete('/mediapartners/{id}/delete', 'destroy');
    }
);

Route::controller(VariableController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/admin/variables', 'index');
        Route::post('/admin/variables/new', 'store');
        Route::put('/admin/variables/{variable:id}/update', 'update');
        Route::delete('/admin/variables/{variable:id}/remove', 'destroy');
    }
);

Route::get('/oprec',function(){
    return view('Oprec.index');
});

// Route::resource('posts', PostController::class);

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/about',function(){
    return view('About.index');
});

Route::get('/tes', function () {
    return view('Home.test');
});

Route::get('/proxy-track-title', [StreamController::class, 'proxyTrackTitle']);

Route::get('/ultimacrews', function () {
    return view('Crews.index');
});



// Route::resource('posts', PostController::class);
