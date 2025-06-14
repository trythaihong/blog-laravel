<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class,'homepage']);

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/create_post',[HomeController::class,'create_post']);
Route::post('/user_post',[HomeController::class,'user_post']);
Route::get('/aboutpage',[HomeController::class,'aboutpage']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/servicepage',[HomeController::class,'servicepage']);
Route::get('/my_post',[HomeController::class,'my_post']);
Route::get('/post_detail/{id}',[HomeController::class,'post_detail']);
Route::get('/delete_post_user/{id}',[HomeController::class,'delete_post_user']);
Route::get('/update_post_user/{id}',[HomeController::class,'update_post_user']);
Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data']);
Route::post('/send_message',[HomeController::class,'send_message']);





Route::middleware(['auth', \App\Http\Middleware\Admin::class])->group(function () {
    Route::post('/add_post',[AdminController::class,'add_post']);
    Route::get('/show_post',[AdminController::class,'show_post']);
    Route::get('/accept_post/{id}',[AdminController::class,'accept_post']);
    Route::get('/post_page',[AdminController::class,'post_page']);
    Route::get('/reject_post/{id}',[AdminController::class,'reject_post']);
    Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);
    Route::get('/update_post/{id}',[AdminController::class,'update_post']);
    Route::post('/edit_post/{id}',[AdminController::class,'edit_post']);
    Route::get('/show_message',[AdminController::class,'show_message']);
    Route::get('/delete_message/{id}',[AdminController::class,'delete_message']);
    Route::get('/userpage',[AdminController::class,'userpage']);
    Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
    Route::get('/update_user/{id}',[AdminController::class,'update_user']);
    Route::post('/edit_userid/{id}',[AdminController::class,'edit_userid']);
    Route::get('/about_post',[AdminController::class,'about_post']);
    Route::post('/post_about',[AdminController::class,'post_about']);
    Route::get('/show_about',[AdminController::class,'show_about']);
    Route::get('/delete_about/{id}',[AdminController::class,'delete_about']);
    Route::get('/update_about/{id}',[AdminController::class,'update_about']);
    Route::post('/edit_about/{id}',[AdminController::class,'edit_about']);



});