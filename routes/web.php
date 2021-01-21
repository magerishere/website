<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminMediaController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\CommentRepliesController;
use App\Http\Controllers\PostIndexController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminIndex;
use Illuminate\Http\Request;







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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware'=>'admin'],function(){

Route::get('/admin/showTest',[AdminCategoriesController::class,'showTest']);

Route::resource('/admin/users',AdminUsersController::class);

Route::resource('/admin/posts',AdminPostsController::class);

Route::resource('/admin/categories',AdminCategoriesController::class);

Route::resource('/admin/media',AdminMediaController::class);

Route::get('/admin',[AdminIndex::class,'index']);

Route::put('/admin/users/active/{active}',[AdminUsersController::class,'active']);

Route::post('/admin/users/activeSelectUser',[AdminUsersController::class,'activeSelectUser']);

Route::get('/admin/users/profile/panel',[AdminUsersController::class,'profile']);

// Route::get('/admin/posts/paginate/{paginate}',[AdminPostsController::class,'paginate']);


Route::post('/admin/categories/deleteSelectCategory',[AdminCategoriesController::class,'deleteSelectCategory']);
Route::get('/admin/session',[AdminIndex::class,'session']);
Route::post('/duplicate',[AdminCategoriesController::class,'duplicate']);
Route::post('/admin/users/deleteSelectUser',[AdminUsersController::class,'deleteSelectUser']);

});

Route::resource('/admin/comments',PostCommentsController::class);

Route::resource('/admin/comments/replies',CommentRepliesController::class);

Route::resource('/index',PostIndexController::class);
Route::get('/index/category/{category}',[PostIndexController::class,'category']);



Route::resource('/chat',ChatController::class);





