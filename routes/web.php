<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signUp;
use Illuminate\Support\Facades\Route;

//dashboard Route 
Route::get("/",function()
{
  return redirect("Note");
})->name("dashboard");


//login routes 
Route::get("login",[LoginController::class,"index"])->name("login");
Route::post("login",[LoginController::class,"LoginIn"])->name("login.login");

//notes  routes 
Route::get("Note",[NoteController::class,"index"])->name("notes");

Route::get("Note",[NoteController::class,"createnote"])->name("note.create.show");
Route::post("Note",[NoteController::class,"createnote"])->name("note.create");

Route::get("Note/update/{id}",[NoteController::class,"updatenote"])->name("note.update.show");
Route::post("Note/update/{id}",[NoteController::class,"updatenote"])->name("note.update");

Route::get("Note/info/{id}",[NoteController::class,"noteinfo"])->name("note.info");
Route::get("Note/delete/{id}",[NoteController::class,"deletenote"])->name("note.delete");

//signup 
Route::get("signup",[signUp::class]);
Route::post("signup",[signUp::class,"signup"]);