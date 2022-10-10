<?php
use Illuminate\Support\Facades\Route;
use \JsWebsolutions\Contact\Controllers\ContactController;



Route::resource('contact', ContactController::class);


//Route::get('contact', [ContactController::class, 'index']);
//Route::get('/user', [UserController::class, 'index']);