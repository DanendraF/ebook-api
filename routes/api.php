<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\HTTP\Controller\HeloController;
use App\Http\Controllers\SiswaController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('hello', function(){
    return ["me" => "Ganteng"];
});

//Route::get('haloController', [HeloController::class,index]);
//Route::post('haloController', [HeloController::class,store]);
//Route::get('haloController', [HeloController::class,show]);
//Route::put('haloController', [HeloController::class,update]);
//Route::detele('haloController', [HeloController::class,destroy]);
Route::resource('HalController', HeloController :: class);