<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ChartJunctionController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardSongController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardChartController;
use App\Http\Controllers\DashboardPodcastController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\DashboardSegmentController;
use App\Http\Controllers\DashboardUangKasController;
use App\Http\Controllers\DashboardVariableController;
use App\Http\Controllers\DashboardPartnershipController;
use App\Http\Controllers\DashboardMediapartnerController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article/{post:slug}', [ArticleController::class, 'show']);

Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/programs/{programdetail:slug}', [ProgramController::class, 'show']);

Route::get('/charts', [ChartController::class, 'index']);

Route::get('/podcasts', [PodcastController::class, 'index']);

Route::get('/about',function(){
    return view('about.index');
});

// Route::get('/oprec',function(){
//     return view('Oprec.index');
// });

// Route::get('/ultimacrews', function () {
//     return view('Crews.index');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::put('/change-password/{user:id}', [LoginController::class, 'change_password']);

Route::get('/crews-landing', function () {
    return view('dashboard.home.index');
})->middleware('auth');

Route::get('/programs-charts', function () {
    return view('dashboard.home.programchart');
})->middleware(['auth', 'admin']);

Route::get('/partnership-mediapartner', function () {
    return view('dashboard.home.partnershipmediapartner');
})->middleware(['auth', 'admin']);

Route::get('/admin-landing', function () {
    return view('dashboard.home.adminlanding');
})->middleware(['auth', 'admin']);

Route::controller(DashboardUangKasController::class)->group(
    function(){
        Route::get('/uang-kas/dashboard', 'index')->middleware(['auth', 'bendahara']);
        Route::get('/uang-kas/timeline', 'timeline')->middleware(['auth', 'bendahara']);
        Route::get('/uang-kas/{user:id}/details', 'show')->middleware(['auth', 'bendahara']);
        Route::put('/uang-kas/{payment:id}/change-status', 'change_status')->middleware(['auth', 'bendahara']);
        Route::get('/uang-kas', 'create')->middleware('auth');
        Route::post('/uang-kas/upload', 'store')->middleware('auth');
    }
);

Route::controller(DashboardPostController::class)->middleware(['auth', 'news'])->group(
    function () {
        Route::get('/dashboard/posts', 'index');
        Route::get('/dashboard/posts/checkSlug', 'checkSlug');
        Route::get('/dashboard/posts/create', 'create');
        Route::post('/dashboard/posts/store', 'store');
        Route::get('/dashboard/posts/{post:slug}', 'show');
        Route::get('/dashboard/posts/{post:slug}/edit', 'edit');
        Route::put('/dashboard/posts/{post:slug}/update', 'update');
        Route::delete('/dashboard/posts/{post:slug}/destroy', 'destroy');
        Route::post('/dashboard/posts/upload', 'upload');
    }
);

Route::controller(DashboardProgramController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/programs', 'index');
        Route::get('/dashboard/programs/new', 'create');
        Route::post('/dashboard/programs/store', 'store');
        Route::get('/dashboard/programs/checkSlug', 'checkSlug');
        Route::get('/dashboard/programs/{programdetail:slug}/edit', 'edit');
        Route::delete('/dashboard/programs/{programdetail:slug}/delete', 'destroy');
        Route::put('/dashboard/programs/{programdetail:slug}/update', 'update');
    }
);

Route::controller(DashboardChartController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/charts', 'index');
        Route::get('/dashboard/charts/new', 'create');
        Route::post('/dashboard/charts/store', 'store');
        Route::get('/dashboard/charts/{chart:id}/edit', 'edit');
        Route::put('/dashboard/charts/{chart:id}/update', 'update');
        Route::put('/dashboard/charts/{chart:id}/publish', 'publish');
        Route::delete('/dashboard/charts/{chart:id}/delete', 'destroy');
    }
);  

Route::controller(ChartJunctionController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/charts/add-song', 'addsong');
        Route::post('/dashboard/charts/add-song/store', 'store');
        Route::delete('/dashboard/charts/junction/{chart_junction:id}/remove', 'destroy');
        Route::put('/dashboard/charts/junction/{chart_junction:id}/update', 'update');
    }
);

Route::controller(DashboardSongController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/songs', 'index');
        Route::get('/dashboard/songs/new', 'create');
        Route::post('/dashboard/songs/store', 'store');
        Route::get('/dashboard/songs/{song:id}/edit', 'edit');
        Route::put('/dashboard/songs/{song:id}/update', 'update');
        Route::delete('/dashboard/songs/{song:id}/delete', 'destroy');
    }
);

Route::controller(DashboardPodcastController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/podcasts', 'index');
        Route::get('/dashboard/podcasts/new', 'create');
        Route::post('/dashboard/podcasts/store', 'store');
        Route::get('/dashboard/podcasts/{podcast:id}/edit', 'edit');
        Route::put('/dashboard/podcasts/{podcast:id}/update', 'update');
        Route::delete('/dashboard/podcasts/{podcast:id}/delete', 'destroy');
    }
);

Route::controller(Controller::class)->group(function () {
    // Route::get('/', 'index');
    Route::get('/logo', 'logo');
    Route::post('/logo/add', 'addLogo');
    Route::post('/logo/delete', 'deleteLogo');
    // Route::get('/crews-landing', 'crews')->middleware('auth');
    // Route::get('/admin/dashboard', 'admin')->middleware(['auth', 'admin']);
    // Route::get('/admin/{user:id}/details', 'show_user')->middleware(['auth', 'admin']);
    // Route::put('/admin/{user:id}/edit-user', 'edit_user')->middleware(['auth', 'admin']);
    // Route::post('/admin/add-user', 'new_user')->middleware(['auth', 'admin']);
    // Route::delete('/admin/role/{role:id}/delete', 'delete_role')->middleware(['auth', 'admin']);
    // Route::put('/change-password/{user:id}', 'change_password')->middleware(['auth', 'admin']);

    // Route::get('/programs-charts', 'programs_charts')->middleware(['auth', 'admin']);
    // Route::get('/partnership-mediapartner', 'partnership_mediapartner')->middleware(['auth', 'admin']);
    // Route::get('/admin-landing', 'admin_landing')->middleware(['auth', 'admin']);
});

Route::controller(DashboardPartnershipController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/dashboard/partnerships', 'index');
        Route::get('/dashboard/partnerships/create', 'create');
        Route::post('/dashboard/partnerships/add', 'store');
        Route::delete('/dashboard/partnerships/{id}/delete', 'destroy');
    }
);

Route::controller(DashboardMediapartnerController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/dashboard/mediapartners', 'index');
        Route::get('/dashboard/mediapartners/create', 'create');
        Route::post('/dashboard/mediapartners/add', 'store');
        Route::delete('/dashboard/mediapartners/{id}/delete', 'destroy');
    }
);

Route::controller(DashboardUserController::class)->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/dashboard/users', 'index');
        Route::get('/dashboard/users/{user:id}/details', 'detail');
        Route::put('/dashboard/users/{user:id}/update', 'update');
        Route::post('/dashboard/users/create', 'create');
        Route::delete('/dashboard/users/role/{role:id}/delete', 'delete_role');
    }
);

Route::controller(DashboardSegmentController::class)->group(
    function(){
        Route::get('/dashboard/segments', 'index')->middleware(['auth', 'admin']);
        Route::get('/dashboard/segments/{segment:id}/details', 'show')->middleware(['auth', 'admin']);
        Route::post('/dashboard/segments/add', 'store')->middleware(['auth', 'admin']);
        Route::put('/dashboard/segments/{segment:id}/update', 'update')->middleware(['auth', 'admin']);
        Route::put('/dashboard/segments/{segment:id}/publish', 'publish')->middleware(['auth', 'admin']);
        Route::put('/dashboard/segments/{segment:id}/remove', 'remove')->middleware(['auth', 'admin']);
        Route::delete('/dashboard/segments/{segment:id}/delete', 'destroy')->middleware(['auth', 'admin']);
    }
);

Route::controller(DashboardVariableController::class)->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/dashboard/variables', 'index');
        Route::post('/dashboard/variables/new', 'store');
        Route::put('/dashboard/variables/{variable:id}/update', 'update');
        Route::delete('/dashboard/variables/{variable:id}/remove', 'destroy');
    }
);

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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/proxy-track-title', [StreamController::class, 'proxyTrackTitle']);
