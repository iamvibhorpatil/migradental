<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

// clear cache

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "done ";
});

Route::get('/optimize', function () {
    Artisan::call('optimize');
    return "Optimize";
});


// Home Controller

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('treatment', [HomeController::class, 'treatment'])->name('treatment');

Route::get('special', [HomeController::class, 'special'])->name('special');

Route::get('international', [HomeController::class, 'international'])->name('international');

Route::get('video', [HomeController::class, 'video'])->name('video');

Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('orofacial_pain', [HomeController::class, 'orofacial_pain'])->name('orofacial_pain');



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('logout', [DashboardController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Patient Form
    Route::get('patient_form', [PatientFormController::class, 'index'])->name('patient_form');
    Route::post('store_patient_form', [PatientFormController::class, 'store']);
    Route::get('patient_form/delete/{id}', [PatientFormController::class, 'destroy']);
    Route::get('patient_detail', [PatientFormController::class, 'show'])->name('detail');
    Route::get('patient_form/detail/{id}', [PatientFormController::class, 'patient_detail_view'])->name('patient_detail_view');
    Route::get('patient_detail/export/{id}', [PatientFormController::class, 'export'])->name('export');
    Route::get('patient_form/edit/{id}', [PatientFormController::class, 'edit']);
    Route::post('patient_form/update/{id}', [PatientFormController::class, 'update']);
});

require __DIR__ . '/auth.php';
