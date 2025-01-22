<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('index', [
        'title' => 'Home',
    ]);
});

Route::get('about', function(){
    return view('tentang', [
        'title' => 'About',
        'nama' => 'Nanda',
        'asal' => 'Madiun',
    ]);
});

Route::get('blog', [PostController::class, 'index']);

Route::get('post/{slug}', [PostController::class, 'show']);