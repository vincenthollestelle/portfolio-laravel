<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/', function() {
    return view('welcome');
});

route::resource('/articles', ArticleController::class);

route::resource('/faq', FaqController::class);

route::get('/profile', [ProfileController::class, 'show']);

route::resource('/dashboard', GradeController::class);

route::get('/motivation', [MotivationController::class, 'show']);

route::get('/jobs', [JobsController::class, 'show']);

route::resource('/grades', GradeController::class);

route::get('/posts/{post}', [PostsController::class, 'show']);



