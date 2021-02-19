<?php

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

use App\Http\Controllers\Api\AdminController;

Route::prefix('admin')->group(function() {
    Route::post('login', [AdminController::class, 'login']);

    Route::group(['middleware' => ['auth:admin-api']], function(){
        Route::post('logout', [AdminController::class, 'logout']);
        Route::put('landing', [AdminController::class, 'updateLanding']);
    });
});


Route::get('landing', [AdminController::class, 'fetchLanding']);
