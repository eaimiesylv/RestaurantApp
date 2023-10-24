<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1/'], function () {
    Route::post('/login', [App\Http\Controllers\Users\AuthController::class, 'login'])->name('login');
    Route::post('/register', [App\Http\Controllers\Users\UserController::class, 'store']);
  
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
    Route::prefix('v1')->group(function () {
        Route::resource('/users', App\Http\Controllers\Users\UserController::class);
        Route::resource('recipes', App\Http\Controllers\Recipes\RecipesController::class);
        Route::resource('searches', App\Http\Controllers\Searches\SearchController::class);
        Route::resource('restaurants', App\Http\Controllers\Restaurants\RestaurantController::class);
      
         
    });
// });
