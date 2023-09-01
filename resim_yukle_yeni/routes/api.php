<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/allimages/{userid}", [AdminController::class, "getAllImage"]); // GetAllImageByUserId
Route::delete("/images/{id}/{userid}", [AdminController::class, "deleteImage"]);
Route::get("/paginationimage/{userid}", [AdminController::class, "paginationImage"]); // GetAllImageByUserId with pagination
Route::post("/setprofile/{userid}", [AdminController::class, "setProfileOperation"]);
Route::get("/getprofile/{id}", [AdminController::class, "getProfile"]);


Route::controller(ImageController::class)->group(function(){
    Route::get('/veriler','index')->middleware('auth:api');
    Route::post('/upload','store');
    Route::get('/veri/{id}','show')->middleware('auth:api');
    Route::delete('/veri/{id}', 'destroy')->middleware('auth:api');

});
