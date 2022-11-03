<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\HTTP\Controller\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

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
Route::resource('siswa', SiswaController::class);

Route::resource('books', BookController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::resource('siswa', SiswaController::class);
Route::resource('books', BookController::class)->except('store', 'update');


//protected routes
Route::middleware('auth:sanctum')->group(function(){
    Route::resource('books', BookController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
});



