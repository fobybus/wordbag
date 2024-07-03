<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response(content:"word bag",status:200);
});

//testing 
Route::get("notes",[NoteController::class,"createPost"]);

Route::get("user",[UserController::class,"index"]);