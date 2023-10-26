<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TreatmentTypeController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\TestimonialCategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ImagesCategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideosCategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CallRequestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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


// Route::get('/rename_column', function () {
//     if (Schema::hasTable('videos') && Schema::hasColumn('videos', 'image')) {
//         DB::statement('ALTER TABLE videos CHANGE image video VARCHAR(255)');
//         return 'Column renamed successfully.';
//     } else {
//         return 'Table or old column does not exist.';
//     }
// });

// Route::get('/add_column', function () {
//     DB::statement('ALTER TABLE internationals ADD status VARCHAR(255) AFTER image');

//         return 'Column added successfully.';

// });

// Home Controller

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('international', [InternationalController::class, 'international'])->name('international');
Route::get('testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('image', [ImageController::class, 'image'])->name('image');
Route::get('video', [VideoController::class, 'video'])->name('video');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('blog_info', [HomeController::class, 'blog_info'])->name('blog_info');

// view tretment 
Route::get('view_treatment', [TreatmentController::class, 'view_treatment'])->name('view_treatment');
Route::get('get_view_treatment_id', [TreatmentController::class, 'get_view_treatment_id']);



// admin routes 

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('logout', [DashboardController::class, 'logout']);

    // request callback
    Route::get('adm_contact', [CallRequestController::class, 'index'])->name('adm_contact'); 
    Route::get('contact/delete/{id}', [CallRequestController::class, 'destroy_contact']);
    Route::get('request_callback', [CallRequestController::class, 'request_callback'])->name('request_callback'); 
    Route::post('request_callback_store', [CallRequestController::class, 'store']); 
    Route::post('store_contact', [CallRequestController::class, 'store_contact']);
    Route::get('call_request/delete/{id}', [CallRequestController::class, 'destroy']); 

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
    //international_client
    Route::get('international_client', [InternationalController::class, 'index'])->name('international_client');
    Route::post('store_international_client', [InternationalController::class, 'store']);
    Route::get('international_client/edit/{id}', [InternationalController::class, 'edit']);
    Route::post('international_client/update/{id}', [InternationalController::class, 'update']);
    Route::get('international_client/delete/{id}', [InternationalController::class, 'destroy']);
    //adm_testimonial
    Route::get('adm_testimonial', [TestimonialController::class, 'index'])->name('adm_testimonial');
    Route::post('store_adm_testimonial', [TestimonialController::class, 'store']);
    Route::get('adm_testimonial/edit/{id}', [TestimonialController::class, 'edit']);
    Route::post('adm_testimonial/update/{id}', [TestimonialController::class, 'update']);
    Route::get('adm_testimonial/delete/{id}', [TestimonialController::class, 'destroy']);
    Route::get('get_category_id', [TestimonialController::class, 'get_category_id']);
    //TestimonialCategory
    Route::get('testimonial_category', [TestimonialCategoryController::class, 'index'])->name('testimonial_category');
    Route::post('store_testimonial_category', [TestimonialCategoryController::class, 'store']);
    Route::get('testimonial_category/edit/{id}', [TestimonialCategoryController::class, 'edit']);
    Route::post('testimonial_category/update/{id}', [TestimonialCategoryController::class, 'update']);
    Route::get('testimonial_category/delete/{id}', [TestimonialCategoryController::class, 'destroy']);
    //adm Images
    Route::get('adm_images', [ImageController::class, 'index'])->name('adm_images');
    Route::post('store_adm_images', [ImageController::class, 'store']);
    Route::get('adm_images/edit/{id}', [ImageController::class, 'edit']);
    Route::post('adm_images/update/{id}', [ImageController::class, 'update']);
    Route::get('adm_images/delete/{id}', [ImageController::class, 'destroy']);
    Route::get('get_images_category_id', [ImageController::class, 'get_images_category_id']);
    //Images
    Route::get('images_category', [ImagesCategoryController::class, 'index'])->name('images_category');
    Route::post('store_images_category', [ImagesCategoryController::class, 'store']);
    Route::get('images_category/edit/{id}', [ImagesCategoryController::class, 'edit']);
    Route::post('images_category/update/{id}', [ImagesCategoryController::class, 'update']);
    Route::get('images_category/delete/{id}', [ImagesCategoryController::class, 'destroy']);
    //adm Videos
    Route::get('adm_videos', [VideoController::class, 'index'])->name('adm_videos');
    Route::post('store_adm_videos', [VideoController::class, 'store']);
    Route::get('adm_videos/edit/{id}', [VideoController::class, 'edit']);
    Route::post('adm_videos/update/{id}', [VideoController::class, 'update']);
    Route::get('adm_videos/delete/{id}', [VideoController::class, 'destroy']);
    Route::get('get_videos_category_id', [VideoController::class, 'get_videos_category_id']);
    //Videos
    Route::get('videos_category', [VideosCategoryController::class, 'index'])->name('videos_category');
    Route::post('store_videos_category', [VideosCategoryController::class, 'store']);
    Route::get('videos_category/edit/{id}', [VideosCategoryController::class, 'edit']);
    Route::post('videos_category/update/{id}', [VideosCategoryController::class, 'update']);
    Route::get('videos_category/delete/{id}', [VideosCategoryController::class, 'destroy']);
    //adm Blog
    Route::get('adm_blog', [BlogController::class, 'index'])->name('adm_blog');
    Route::post('store_adm_blog', [BlogController::class, 'store']);
    Route::get('adm_blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('adm_blog/update/{id}', [BlogController::class, 'update']);
    Route::get('adm_blog/delete/{id}', [BlogController::class, 'destroy']);
    Route::get('get_blog_category_id', [BlogController::class, 'get_blog_category_id']);
    //Blog
    Route::get('blog_category', [BlogCategoryController::class, 'index'])->name('blog_category');
    Route::post('store_blog_category', [BlogCategoryController::class, 'store']);
    Route::get('blog_category/edit/{id}', [BlogCategoryController::class, 'edit']);
    Route::post('blog_category/update/{id}', [BlogCategoryController::class, 'update']);
    Route::get('blog_category/delete/{id}', [BlogCategoryController::class, 'destroy']);


});

require __DIR__ . '/auth.php';
