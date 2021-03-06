<?php

use App\Http\Controllers\Api\ApiCategoryController;
use App\Http\Controllers\Api\ApiFoodController;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix("/foods")->group(function(){
    Route::get("", [ApiFoodController::class,"all"]);
    Route::get("/{id}", [ApiFoodController::class,"get"]);
    Route::post("", [ApiFoodController::class, "create"]);
    Route::put("/{id}", [ApiFoodController::class, "update"]);
    Route::delete("/{id}", [ApiFoodController::class, "delete"]);
    // Route::get("/{id}", [ApiFoodController::class. "search"]);

});
Route::get("/categories/statistics", [ApiCategoryController::class, "statistics"]);
Route::get('search/{key}', [ApiFoodController::class, 'search']);