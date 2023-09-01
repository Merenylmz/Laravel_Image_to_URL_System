<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\HomeController;



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/',[HomeController::class, 'resim_yukle'])->name('resim_yukle');
Route::get('/',[HomeController::class, 'vericek'])->name('resim_yukle');

Route::get("/setprofilepage", [HomeController::class, "setProfilePage"])->name("setprofilepage");
Route::get("/imageslist", [HomeController::class, "imagePage"])->name("imagesList");