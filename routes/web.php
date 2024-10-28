<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function(){
    return redirect()->route('post.index');
});

Route::controller(PostsController::class)->prefix('/posts')->group(function(){
    Route::get('','index')->name('post.index');
    Route::get('/create','create')->name('post.create');
    Route::post('','store')->name('post.store');
    Route::get('/edit','edit')->name('post.edit');
    Route::get('/{post}','show')->name('post.show');
    Route::get('/{post}/edit','edit')->name('post.edit');
    Route::patch('/{post}','update')->name('post.update');
    Route::delete('/{post}','destroy')->name('post.delete');
});



