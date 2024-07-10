<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\signUp;
use App\Http\Controllers\test;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

//dashboard Route 
Route::get("/", function () {
  return redirect("Note");
})->name("dashboard");


//login routes 
Route::get("login", [LoginController::class, "index"])->name("login");
Route::post("login", [LoginController::class, "login"])->name("login.login");
Route::get("logout", [LoginController::class, "logout"])->name("logout");

//signup 
Route::get("signup", [signUp::class, "index"])->name("signup");
Route::post("signup", [signUp::class, "signup"])->name("create");

//protected routes
Route::middleware('auth')->group(function () {

  //notes routes 
  Route::get("Note", [NoteController::class, "index"])->name("notes");

  Route::get("Note/create", [NoteController::class, "createform"])->name("note.create.show");
  Route::post("Note", [NoteController::class, "createnote"])->name("note.create");

  Route::get("Note/update/{id}", [NoteController::class, "updateform"])->name("note.update.show");
  Route::post("Note/update/{id}", [NoteController::class, "updatenote"])->name("note.update");

  Route::get("Note/info/{id}", [NoteController::class, "noteinfo"])->name("note.info");
  Route::get("Note/delete/{id}", [NoteController::class, "deletenote"])->name("note.delete");

  //user routes 
  Route::get("User", [user::class, "index"])->name('profile');
  Route::get("setting", [user::class, "setting"])->name('setting');
  Route::post("setting", [user::class, "changePassword"])->name('setting.change');
});


//test controller 
Route::resource('test', test::class);
