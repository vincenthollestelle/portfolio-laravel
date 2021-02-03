<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PageController;
route::get('/{value}', [PageController::class, 'show']);

use App\Http\Controllers\PostsController;
route::get('/posts/{post}', [PostsController::class, 'show']);


