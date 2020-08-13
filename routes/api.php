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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Read records 
Route::get('posts','PostsController@readPost');
Route::get('posts/{id}','PostsController@show');
// Add records
Route::post('posts','PostsController@store');
// Update records
Route::put('posts/{id}','PostsController@UpdatePost');
//Delete records
Route::delete('posts/{id}','PostsController@DeletePost');