<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;

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

Route::group(['middleware' => ['web']], function () {
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'App\Http\Controllers\BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('/blog', [BlogController::class, 'getIndex']);
    Route::resource('posts', 'App\Http\Controllers\PostController');
    Route::get('/', [PagesController::class, 'getIndex']);
    Route::get('/about', [PagesController::class, 'getAbout']);
    Route::get('/contact', [PagesController::class, 'getContact']);
});