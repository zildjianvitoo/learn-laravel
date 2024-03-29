<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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




Route::get("/posts", [PostController::class, "index"]);
Route::get("/posts/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", [CategoryController::class, "index"]);

Route::post("/users", [UserController::class, "store"])->name("users.store");
Route::get("/users", [UserController::class, "index"])->name("users.index")->middleware("auth");

Route::delete("/users/{user}", [UserController::class, "destroy"])->name("users.destroy");
Route::get("/users/update/{user}", [UserController::class, "show"])->name("users.show");
Route::patch("/users/update/{user}", [UserController::class, "update"])->name("users.update");

Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/dashboard", function () {
    return view("dashboard.index", ["title" => "Dashboard", "active" => "dashboard"]);
})->middleware("auth");


Route::get("/dashboard/posts/checkSlug", [DashboardPostController::class, "checkSlug"])->middleware("auth");
Route::resource("/dashboard/posts", DashboardPostController::class)->middleware("auth");
