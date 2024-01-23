<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get("/", "index")->name("home");
    Route::get("/course/{id}", "viewCourse")->name("viewCourse");
});

Route::prefix("admin")->group(function () {
    Route::controller(AdminController::class)->group(function () {

    });
});
Route::prefix("student")->group(function () {
    Route::controller(StudentController::class)->group(function () {

    });
});

Route::prefix("manager")->group(function () {
    Route::controller(ManagerController::class)->group(function () {

    });
});
