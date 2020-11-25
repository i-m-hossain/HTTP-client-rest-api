<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [\App\Http\Controllers\ClientController::class, 'getAllPost'])->name('getAllPost');

//single id GET method
Route::get('/single/{id}', [\App\Http\Controllers\ClientController::class, 'getOnePost'])->name('getOnePost');

//Single Id POST method
           //---create form-----//
Route::get('/post', [\App\Http\Controllers\ClientController::class, 'createID'])->name('createID');
            //---retrieve post---//
Route::post('/post', [\App\Http\Controllers\ClientController::class, 'getPost'])->name('getPost');

//Insert data into client
Route::get('/add-post', [\App\Http\Controllers\ClientController::class, 'addPost'])->name('add.post');

//Update Post
Route::get('/update-post', [\App\Http\Controllers\ClientController::class, 'updatePost'])->name('update.post');

//Delete post
Route::get('/delete-post', [\App\Http\Controllers\ClientController::class, 'deletePost'])->name('delete.post');

