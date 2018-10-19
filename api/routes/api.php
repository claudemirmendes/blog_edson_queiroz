<?php

use Illuminate\Http\Request;
Use App\Post;

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


Route::get('posts', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Post::all();
});
 
Route::get('post/{id}', function($id) {
    return Post::find($id);
});

Route::post('post', function(Request $request) {
    return Post::create($request->all);
});


Route::get('posts', 'PostController@index');
Route::get('post/{id}', 'PostController@show');
Route::post('post', 'PostController@store');
Route::put('post/{post}', 'PostController@update');
Route::delete('post/{post}', 'PostController@delete');
