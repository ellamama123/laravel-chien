<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User; 
use App\Post;

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
Route::get('/hello-world',function(Request $request){
    return response()->json('Hello world',200);
});
Route::get('/users1',function(){
    return User::all();
});
// getPost
Route::get('post', 'PostController@index');
// searchPost
Route::get('post/{post}', 'PostController@show');
// createPost
Route::post('post', 'PostController@store');
// updatePost
Route::put('post/{post}', 'PostController@update');
// deletePost
Route::delete('post/{post}', 'PostController@delete');

