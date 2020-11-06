<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CommentController;
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

Route::post('comments', [ CommentController::class, 'store' ]);
Route::post('articles/likes/{id}', [ ArticleController::class, 'incrementLikes' ]);
Route::post('articles/views/{id}', [ ArticleController::class, 'incrementViews' ]);
