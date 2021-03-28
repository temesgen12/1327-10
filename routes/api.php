<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller2;
use App\Http\Controllers\apicontroller;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/save_prison', [apicontroller2::class,"save"]);
Route::put('/prison_update/{id}', [apicontroller2::class,'prison_update']);
Route::delete('/delete_prison/{id}',[apicontroller2::class,'delete_by_id']);
Route::get('/display_prison',[apicontroller2::class,'getprison']);
Route::get('/get/{id}',[apicontroller2::class,'getById']);

Route::post('/save_inspector', [apicontroller::class,"save"]);
Route::put('/inspector_update/{id}', [apicontroller::class,'prison_update']);
Route::delete('/delete_inspector/{id}',[apicontroller::class,'delete_by_id']);
Route::get('/display_inspector',[apicontroller::class,'getprison']);
Route::get('/get_inspector/{id}',[apicontroller::class,'getById']);