<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
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
});

Route::get('me', [AuthController::class, 'me']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);

/*Route::get('/author', [AuthorController::class, 'index']);
Route::get('/author/{id}', [AuthorController::class, 'show']);
Route::post('/author', [AuthorController::class, 'store']);
Route::put('/author/{id}', [AuthorController::class, 'update']);
Route::delete('/author/{id}', [AuthorController::class, 'destroy']);
*/

Route::resource('author', AuthorController::class)->except(
    ['create','edit']
);


