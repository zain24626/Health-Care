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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Home.index');
});
Route::get('/news', function () {
    return view('News.News');
});

Route::get('/about', function () {
    return view('About.About');
});

Route::get('/contact', function () {
    return view('Contact.Contact');
});
Route::get('/diseases', function () {
    return view('Diseases.Diseases');
});
    Route::get('/inventions', function () {
        return view('Inventions.Inventions');
    });

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dash');
// Route::post('/register', [App\Http\Controllers\UserController::class, 'create'])->name('register');
