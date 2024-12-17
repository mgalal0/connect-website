<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\GalleryController;

Route::middleware(['prevent-back-history','auth'])->group(function () {
  Route::get('/profiles', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profiles', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profiles', [ProfileController::class, 'destroy'])->name('profile.destroy');
  Route::get('/admin', function () { return view('dashboard/index');})->name('home');
});
require __DIR__.'/auth.php';
Route::middleware(['prevent-back-history','auth'])->prefix('dashboard')->name('dashboard.')->group(function(){

  #################### services #################################
  Route::controller(serviceController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{service}', 'edit')->name('edit');
    Route::put('/{service}', 'update')->name('update');
    Route::delete('/{service}', 'destroy')->name('destroy');
   
});

  #################### projects #################################
  Route::controller(ProjectController::class)->prefix('projects')->name('projects.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{project}', 'edit')->name('edit');
    Route::put('/{project}', 'update')->name('update');
    Route::delete('/{project}', 'destroy')->name('destroy');
   
});
 #################### gallery #################################
 Route::controller(GalleryController::class)->prefix('gallery')->name('gallery.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/create', 'create')->name('create');
  Route::post('/', 'store')->name('store');
  Route::get('/{gallery}', 'edit')->name('edit');
  Route::put('/{gallery}', 'update')->name('update');
  Route::delete('/{gallery}', 'destroy')->name('destroy');
 
});
   

 #################### partners #################################
 Route::controller(PartnerController::class)->prefix('partners')->name('partners.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{partner}', 'edit')->name('edit');
    Route::put('/{partner}', 'update')->name('update');
    Route::delete('/{partner}', 'destroy')->name('destroy');
   
});


 #################### videos #################################
 Route::controller(VideoController::class)->prefix('videos')->name('videos.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/create', 'create')->name('create');
  Route::post('/', 'store')->name('store');
  Route::get('/{video}', 'edit')->name('edit');
  Route::put('/{video}', 'update')->name('update');
  Route::delete('/{video}', 'destroy')->name('destroy');
 
});


 #################### contacts #################################
 Route::controller(ContactController::class)->prefix('contacts')->name('contacts.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::delete('/{contact}', 'destroy')->name('destroy');
 
});


 #################### profile #################################
 Route::controller(ProfileController::class)->prefix('profile')->name('profile.')->group(function () {
  Route::get('/edit', 'edit_profile')->name('edit');
  Route::delete('/{contact}', 'destroy')->name('destroy');
 
});

});



 

?>