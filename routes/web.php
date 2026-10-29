<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("/", [AuthController::class, "viewLogin"])->name("login");

Route::get("/register", [AuthController::class, "viewRegister"])->name(
  "register"
);
Route::post("/register", [AuthController::class, "postRegister"])->name(
  "postRegister"
);

Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::post("/login", [AuthController::class, "postLogin"])->name("postLogin");

Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function () {
  Route::get("/admin", [AuthController::class, "admin"])->name("admin");
  Route::get("/camaba", [AuthController::class, "camaba"])->name("camaba");
});
