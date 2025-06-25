<?php

use App\Http\Controllers\PostController;
use App\Models\posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/post',[PostController::class,'index']);
