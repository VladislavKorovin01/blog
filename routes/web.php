<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function(){
    return redirect()->route('post.index');
});


Route::get('/posts',[PostsController::class,'index'])->name('post.index');
Route::get('/posts/create',[PostsController::class,'create'])->name('post.create');
Route::post('/posts',[PostsController::class,'store'])->name('post.store');

Route::get('/posts/edit',[PostsController::class,'edit'])->name('post.edit');
Route::get('/posts/{post}',[PostsController::class,'show'])->name('post.show');
Route::get('/posts/{post}/edit',[PostsController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}',[PostsController::class,'update'])->name('post.update');
Route::delete('/posts/{post}',[PostsController::class,'destroy'])->name('post.delete');