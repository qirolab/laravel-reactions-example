<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReactionsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', [PostsController::class, 'show'])
    ->name('posts.show');

Route::post('/posts/{post}/reaction', [ReactionsController::class, 'toggle'])
    ->middleware('auth');

Route::get('/home', [PostsController::class, 'index'])
    ->middleware(['auth'])
    ->name('home');

require __DIR__ . '/auth.php';