<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1/'], function () {
        Route::post('/login', [App\Http\Controllers\Users\AuthController::class, 'store']);
    // Route::put('/log-out', [App\Http\Controllers\Users\AuthController::class, 'destory']);
    Route::post('/registers', [App\Http\Controllers\Users\UserController::class, 'store'])->name('register');
    
  
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
    Route::prefix('v1')->group(function () {
        Route::resource('/users', App\Http\Controllers\Users\UserController::class)->except('store');
        Route::resource('recipes', App\Http\Controllers\Recipes\RecipesController::class);
        Route::resource('searches', App\Http\Controllers\Searches\SearchController::class);
        Route::resource('restaurants', App\Http\Controllers\Restaurants\RestaurantController::class);
        Route::fallback(function () {
            return response()->json(['message' => 'Not Found'], 404);
        });
         
    });
// });
