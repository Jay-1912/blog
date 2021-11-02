<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Prophecy\Exception\Doubler\ReturnByReferenceException;

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

Route::get('/', function () {return view('user-side.index');});
Route::get('/about-us', function () {return view('user-side.about-us');});
Route::get('/contact-us', function () {return view('user-side.contact-us');});
Route::get('/sign-up', function () {return view('user-side.register');});
Route::get('/write-post',function(){return view('user-side.write-post');});
Route::get('/blog-post',function(){return view('user-side.blog');});
Route::get('/author-post',function(){return view('user-side.author-post');});


Route::post('/register',[UserController::class, 'store']);

//Login and Logout
Route::get('/login',[SessionController::class, 'create']);
Route::post('/login/user',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);


//Post
Route::get('/write-post',[PostController::class, 'create'])->middleware('auth');
Route::get('/blog-posts',[PostController::class, 'index']);
Route::post('/add/post',[PostController::class, 'store']);
Route::get('/posts/{post:title}',function(Post $post){
    return view('User-Side.blog',[
        'post' => $post
    ]);
});

//Tags
Route::get('/tags/{tag:name}',[TagController::class, 'index']);
