<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementModelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RevisorController;
use App\Models\AnnouncementModel;

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

// ! ROTTA HOMEPAGE
Route::get('/' , [PublicController::class , "welcome"])->name("welcome");

//! ROTTE RELATIVE AGLI ANNUNCI
Route::get('/annunci' , [AnnouncementModelController::class , "index"])->name("announcement_index");

Route::get('/annunci/form' , [AnnouncementModelController::class , "create"])->name("announcement_form");

Route::post('/annunci/submit' , [AnnouncementModelController::class , "store"])->name("announcement_submit");

Route::get('/annunci/dettaglio/{a}' , [AnnouncementModelController::class , "show"])->name("announcement_detail");

//!ROTTE RELATIVE ALLE IMMAGINI DEGLI ANNUNCI
Route::post('/announcement/images/upload',[AnnouncementModelController::class,"uploadImage"])->name("announcement.image.upload");

//! ROTTE RELATIVE ALLE CATEGORIE
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category_index');

// !ROTTE RELATIVE AI REVISORI
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor_index');

Route::post('/revisor/announcements/{id}/accept', [RevisorController::class,'accept'])->name('revisor_accepted');

Route::post('/revisor/announcements/{id}/reject' , [RevisorController::class, 'reject'])->name('revisor_reject');


// cerca
Route::get('/search', [PublicController::class, 'search'])->name("search");