<?php

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
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
// landing
Route::get('/', [HomeController::class, 'landing'])->name('landing');
// service
Route::get('/service', [HomeController::class, 'service'])->name('service');
// gallery
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
// contact
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// projects
Route::get('/projects', [ProjectController::class, 'index'])->name('project');
Route::get('projects/{service_id}',[ProjectController::class,'filter'])->name('product.filter');