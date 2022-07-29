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

// Route::get('/', function () {
//     return view('Home.index');
// });
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
// Route::get('/search', function () {
//     return view('SearchedDoctors.SearchedDoctors');
// });

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
// Route::get('/dash', function () {
//     return view('Dashboard.Dashboard');
// });
Route::get('/Appointment', function () {
    return view('Appointment.Apointment');
});
Route::get('/schedule', function () {
    return view('Schedule.Schedule');
});
// Route::get('/info', function () {
//     return view('DoctorInfo.DoctorInfo');
// });
Route::get('/registerasdoctor', function () {
    return view('auth.RegisterAsDoctor.RegisterAsDoctor');
});
Route::get('/registeraspatient', function () {
    return view('auth.RegisterAsPatient.RegisterAsPatient');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');
Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('/info');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('/search');
Route::get('/dash', [App\Http\Controllers\AdminController::class, 'index'])->name('/dash');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('registerasdoctor', [App\Http\Controllers\RegisterAsDoctorController::class, 'registerDoctorView'])->name('registerasdoctor');
Route::post('doctorregistered', [App\Http\Controllers\RegisterAsDoctorController::class, 'createDoctor'])->name('doctorregistered');

Route::get('registeraspatient', [App\Http\Controllers\RegisterAsPatientController::class, 'registerPatientView'])->name('registeraspatient');
Route::post('patientregistered', [App\Http\Controllers\RegisterAsPatientController::class, 'createPatient'])->name('patientregistered');
