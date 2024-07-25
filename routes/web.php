<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShowsController;
use App\Http\Controllers\Frontend\MoviesController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\AdminMoviesController;
use App\Http\Controllers\Backend\AdminCommentsController;
use App\Http\Controllers\Backend\AdminRatingController;
use App\Http\Controllers\Backend\AdminUsersController;
use App\Http\Controllers\Backend\AdminShowsController;
use App\Http\Controllers\Backend\AdminSeasonsController;
use App\Http\Controllers\Backend\AdminEpisodesController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/shows', [ShowsController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/Admin/Index', [AdminHomeController::class, 'index']);
Route::get('/Admin/Movies', [AdminMoviesController::class, 'index']);
Route::get('/Admin/Comments', [AdminCommentsController::class, 'index']);
Route::get('/Admin/Rating', [AdminRatingController::class, 'index']);
Route::get('/Admin/Users', [AdminUsersController::class, 'index']);
Route::get('/Admin/Shows/List', [AdminShowsController::class, 'index']);
Route::get('/Admin/Shows/Seasons', [AdminSeasonsController::class, 'index']);
Route::get('/Admin/Shows/Episodes', [AdminEpisodesController::class, 'index']);
