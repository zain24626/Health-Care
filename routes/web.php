<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use app\Http\Controllers\AdminController;

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
Route::get('/search', function () {
    return view('SearchedDoctors.SearchedDoctors');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/dash', function () {
    return view('Dashboard.Dashboard');
});
Route::get('/Appointment', function () {
    return view('Appointment.Apointment');
});
Route::get('/schedule', function () {
    return view('Schedule.Schedule');
});
Route::get('/info', function () {
    return view('DoctorInfo.DoctorInfo');
});
Route::get('/registerasdoctor', function () {
    return view('auth.RegisterAsDoctor.RegisterAsDoctor');
});
Route::get('/registeraspatient', function () {
    return view('auth.RegisterAsPatient.RegisterAsPatient');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dash', [AdminController::class, 'index'])->name('dash');
