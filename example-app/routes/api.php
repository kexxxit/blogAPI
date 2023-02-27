<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Middleware\CorsMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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






Route::middleware([CorsMiddleware::class])-> group(function (){
    Route::get('posts', 'App\Http\Controllers\Posts\PostsController@posts');
    Route::post('posts', 'App\Http\Controllers\Posts\PostsController@addNewPost') -> middleware('auth:api');
    Route::get('user', [RegisterController::class, 'getUser']);
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [RegisterController::class, 'login']);
});


