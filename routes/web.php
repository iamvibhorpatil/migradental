<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TreatmentTypeController;
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



// Route::get('/add_column', function () {
//     DB::statement('ALTER TABLE treatments ADD status VARCHAR(255) AFTER treatment_type');
       
//         return 'Column added successfully.';
     
// });

// Home Controller

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('treatment', [HomeController::class, 'treatment'])->name('treatment');

Route::get('special', [HomeController::class, 'special'])->name('special');

Route::get('international', [HomeController::class, 'international'])->name('international');

Route::get('video', [HomeController::class, 'video'])->name('video');

Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('laser_dentistry', [HomeController::class, 'laser_dentistry'])->name('laser_dentistry');

Route::get('image', [HomeController::class, 'image'])->name('image');

Route::get('blog', [HomeController::class, 'blog'])->name('blog');

Route::get('blog_info', [HomeController::class, 'blog_info'])->name('blog_info');

Route::get('logout', [DashboardController::class, 'logout']);

// view tretment 
Route::get('view_treatment', [TreatmentController::class, 'view_treatment'])->name('view_treatment');
Route::get('get_view_treatment_id', [TreatmentController::class, 'get_view_treatment_id']);



// admin routes 

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

    //treatment 
    Route::get('adm_treatment', [TreatmentController::class, 'index'])->name('adm_treatment');  
    Route::post('store_treatment', [TreatmentController::class, 'store']);
    Route::get('treatment/edit/{id}', [TreatmentController::class, 'edit']);
    Route::post('treatment/update/{id}', [TreatmentController::class, 'update']);
    Route::get('treatment/delete/{id}', [TreatmentController::class, 'destroy']);

    //treatment  type
    Route::get('treatment_type', [TreatmentTypeController::class, 'index'])->name('treatment_type');  
    Route::post('store_treatment_type', [TreatmentTypeController::class, 'store']);
    Route::get('treatment_type/edit/{id}', [TreatmentTypeController::class, 'edit']);
    Route::post('treatment_type/update/{id}', [TreatmentTypeController::class, 'update']);
    Route::get('treatment_type/delete/{id}', [TreatmentTypeController::class, 'destroy']);
    Route::get('get_treatment_type', [TreatmentTypeController::class, 'get_treatment_type']);


});

require __DIR__ . '/auth.php';
