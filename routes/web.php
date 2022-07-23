<?php

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


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

Route::get("/",[TaskController::class, 'index']);
Route::get('/savedata',[TaskController::class, 'store']);
Route::get('/singletask/{id}',[TaskController::class, 'singletask']);
Route::get("/register",[TaskController::class, 'register']);
Route::post("/signup",[TaskController::class, 'signup']);

Route::get('/contacts', [ContactController::class, 'contacts']);
Route::get('/contact/{email}',[ContactController::class, 'getContactByEmail']);
Route::get('/deletecontact/{id}',[ContactController::class,'deletecontact']);
Route::get('/updatecontact/{id}',[ContactController::class, 'updatecontact']);
Route::get("/signup",[UserController::class, 'signup']);
Route::post("/register",[UserController::class, 'register']);
Route::get('addphone', [UserController::class, 'addphone']);
Route::post("addcontact",[UserController::class, 'addcontact']);
