<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KocakController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    [HomeController::class, "show"]
);

Route::get('/about', [AboutController::class, "show"]);

Route::get("/kocak", [KocakController::class, "show"]);

// Route::get('/blogs  ', [BlogController::class, "index"]);
// Route::get("/blogs/{blog:slug}", [BlogController::class, "show"]);

Route::get("/posts", [PostController::class, "index"]);
Route::get("/posts/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", [CategoryController::class, "index"]);
Route::get("/categories/{category:slug}", [CategoryController::class, "show"]);
