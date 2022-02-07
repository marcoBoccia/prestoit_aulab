<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementModelController;

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

Route::get('/' , [PublicController::class , "welcome"])->name("welcome");

// ROTTE PER IL FORM DEGLI ANNUNCI

Route::get('/annunci' , [AnnouncementModelController::class , "index"])->name("announcement_index");
Route::get('/annunci/form' , [AnnouncementModelController::class , "create"])->name("announcement_form");
Route::post('/annunci/submit' , [AnnouncementModelController::class , "store"])->name("announcement_submit");
