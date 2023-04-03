<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DuniaKerjaController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/index", [HomeController::class, "index"]);
Route::get("/about", [AboutController::class, "index"]);
Route::get("/Dunia Kerja", [DuniaKerjaController::class, "index"]);