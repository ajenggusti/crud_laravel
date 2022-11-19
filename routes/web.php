<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/footbar', function () {
//      return view('partials/footbar');
// });
route::get('/',[mahasiswaController::class,'index']);
route::get('/input',[mahasiswaController::class,'input']);
route::get('/about',[mahasiswaController::class,'about']);
route::POST('/store',[mahasiswaController::class,'store']);
route::get('/show/{id}',[mahasiswaController::class,'show']);
route::post('/update/{id}',[mahasiswaController::class,'update']);
route::get('/destroy/{id}',[mahasiswaController::class,'destroy']);