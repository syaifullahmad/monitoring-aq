<?php

use App\Http\Controllers\AllNewsController;
use App\Http\Controllers\Berita1Controller;
use App\Http\Controllers\Berita2Controller;
use App\Http\Controllers\Berita3Controller;
use App\Http\Controllers\Berita4Controller;
use App\Http\Controllers\KtgController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TtgController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/news/allnews', [AllNewsController::class, 'index'])->name('allnews.index');
Route::get('/ttg', [TtgController::class, 'index'])->name('ttg.index');
Route::get('/ktg', [KtgController::class, 'index'])->name('ktg.index');
//berita1
Route::get('/news/berita1', [Berita1Controller::class, 'index'])->name('berita1.index');
Route::get('/news/berita2', [Berita2Controller::class, 'index'])->name('berita2.index');
Route::get('/news/berita3', [Berita3Controller::class, 'index'])->name('berita3.index');
Route::get('/news/berita4', [Berita4Controller::class, 'index'])->name('berita4.index');


Auth::routes();

Route::group(['middleware' => [ 'auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history.index');
    Route::get('/history/export', [App\Http\Controllers\HistoryController::class, 'export'])->name('history.export');
    Route::get('/co', [App\Http\Controllers\Co2Controller::class, 'index'])->name('co.index');
    Route::get('/carbon', [App\Http\Controllers\CoController::class, 'index'])->name('carbon.index');
    Route::get('/smoke', [App\Http\Controllers\SmokeController::class, 'index'])->name('smoke.index');
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
});
