<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SweetalertController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/",[HomeController::class,"index"]);

Route::get("/dash",[HomeController::class,"dash"]);

Route::get("/about",[HomeController::class,"about"]);

Route::get("/deletecon/{id}",[AdminController::class,"deletecon"]);

Route::post("/contactinfo",[UserController::class,"infosave"]);

Route::get("/applications",[AdminController::class,"applications"]);

Route::get("/viewcom",[AdminController::class,"viewcom"]);

Route::get("/viewapp",[AdminController::class,"viewapp"]);

Route::get("/deletecomp/{id}",[AdminController::class,"deletecomp"]);

Route::get("/deletebank/{id}",[AdminController::class,"deletebank"]);

Route::get("/deleteapp/{id}",[AdminController::class,"deleteapp"]);

Route::get("/updateapp/{id}",[AdminController::class,"updateapp"]);
Route::get("/rejectapp/{id}",[AdminController::class,"rejectapp"]);

Route::post("/uploadnews",[AdminController::class,"uploadnews"]);

Route::get("/contact",[AdminController::class,"contact"]);
Route::get("/bankdetails",[AdminController::class,"bankdetails"]);

Route::get("/reject",[AdminController::class,"reject"]);

Route::get("/approved",[AdminController::class,"approved"]);

Route::get("/news",[AdminController::class,"news"]);
Route::get("/deletenews/{id}",[AdminController::class,"deletenews"]);

Route::get("/appdelete/{id}",[AdminController::class,"appdelete"]);

Route::get("/app",[UserController::class,"app"]);
Route::get("/my",[UserController::class,"my"]);
Route::get("/again",[UserController::class,"again"]);

Route::get("/complain",[UserController::class,"complain"]);

Route::post("/uploadcom",[UserController::class,"uploadcom"]);

Route::post("/bankup",[UserController::class,"bankup"]);

Route::post("/uploadapp",[UserController::class,"uploadapp"]);

Route::post("/upload",[UserController::class,"upload"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('sweetalert/{type}','SweetalertController@notification');


Route::get("/downloadpdf",[AdminController::class,"downloadpdf"]);
Route::get("/details",[AdminController::class,"details"]);