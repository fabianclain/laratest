<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//index
//show
//create - sjpw form to create new listing
//store - store new listing 
//edit - show form to edit listin 
//update
//destroy

Route::get('/', [ListingController::class, 'index']);

Route::get ('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//SHOW CREATE

//show register/create form
Route::get('/register', [UserController::class, 'create']);
Route::POST('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/users/authentificate', [UserController::class, 'authentificate']);
