<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\CastawayboatController;
use App\Http\Controllers\CastawayController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DecorationController;
use App\Http\Controllers\RescueController;
use App\Http\Controllers\RescuerController;
use App\Http\Controllers\RescuerRescueController;
use App\Http\Controllers\RescuerRoleController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\UserController;
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
    // Protected routes
});

Route::resource('articles', ArticleController::class);
Route::resource('boats', BoatController::class);
Route::resource('castaway-boats', CastawayboatController::class);
Route::resource('castaways', CastawayController::class);
Route::resource('categories', CategoryController::class);
Route::resource('decorations', DecorationController::class);
Route::resource('rescues', RescueController::class);
Route::resource('rescuers', RescuerController::class);
Route::resource('rescuer-rescues', RescuerRescueController::class);
Route::resource('rescuer-roles', RescuerRoleController::class);
Route::resource('stations', StationController::class);
Route::resource('testimonies', TestimonyController::class);
Route::resource('users', UserController::class);

Route::post('auth', [UserController::class, 'authenticate']);
