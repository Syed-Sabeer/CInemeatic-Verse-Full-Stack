<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowsController;
use App\Http\Controllers\Frontend\MoviesController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\EpisodeController;
use App\Http\Controllers\Frontend\CastController;
use App\Http\Controllers\Frontend\CastDetailController;
use App\Http\Controllers\Frontend\TrendingController;
use App\Http\Controllers\Frontend\MoviesDetailController;
use App\Http\Controllers\Frontend\ShowsDetailController;
use App\Http\Controllers\Frontend\UserAccountController;
use App\Http\Controllers\Frontend\AboutController;

use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\AdminMoviesController;
use App\Http\Controllers\Backend\AdminCommentsController;
use App\Http\Controllers\Backend\AdminRatingController;
use App\Http\Controllers\Backend\AdminUsersController;
use App\Http\Controllers\Backend\AdminShowsController;
use App\Http\Controllers\Backend\AdminSeasonsController;
use App\Http\Controllers\Backend\AdminEpisodesController;
use App\Http\Controllers\Backend\AdminCastController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/Movies', [MoviesController::class, 'index']);
Route::get('/Register', [RegisterController::class, 'index']);
Route::get('/Shows', [ShowsController::class, 'index']);
Route::get('/Login', [LoginController::class, 'index']);
Route::get('/Cast', [CastController::class, 'index']);
Route::get('/Cast/Detail', [CastDetailController::class, 'index']);
Route::get('/Movies/Detail', [MoviesDetailController::class, 'index']);
Route::get('/Shows/Detail', [ShowsDetailController::class, 'index']);
Route::get('/Trending', [TrendingController::class, 'index']);
Route::get('/Shows/Detail/Episode', [EpisodeController::class, 'index']);

Route::get('/UserAccount', [UserAccountController::class, 'index'])->name('user.account.index');
Route::post('/UserAccount/store', [UserAccountController::class, 'store'])->name('user.account.store');

Route::get('/About', [AboutController::class, 'index']);

Route::get('/Admin/Index', [AdminHomeController::class, 'index']);

Route::get('Admin/Movies', [AdminMoviesController::class, 'index'])->name('admin.movies.index');
Route::post('Admin/Movies', [AdminMoviesController::class, 'store'])->name('admin.movies.store');


Route::get('/Admin/Comments', [AdminCommentsController::class, 'index']);
Route::get('/Admin/Cast', [AdminCastController::class, 'index'])->name('admin.cast.index');
Route::post('/Admin/Cast', [AdminCastController::class, 'store'])->name('admin.cast.store');
Route::put('/Admin/Cast', [AdminCastController::class, 'update'])->name('admin.cast.update');
Route::get('/Admin/Cast/{id}', [AdminCastController::class, 'show']);
Route::delete('/Admin/Cast/{id}', [CastController::class, 'destroy'])->name('admin.cast.destroy');

Route::get('/Admin/Rating', [AdminRatingController::class, 'index']);
Route::get('/Admin/Users', [AdminUsersController::class, 'index']);
Route::get('/Admin/Shows/List', [AdminShowsController::class, 'index']);
Route::get('/Admin/Shows/Seasons', [AdminSeasonsController::class, 'index']);
Route::get('/Admin/Shows/Episodes', [AdminEpisodesController::class, 'index']);

