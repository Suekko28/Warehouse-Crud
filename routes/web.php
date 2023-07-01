<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\FinishedController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RawController;
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

Route::get('/', function () {
    return view('/dashboard');
});

// Route::get('/finished', function(){
//     return view('/admin/finished/finished');
// });

Route::get('/create', function(){
    return view('/admin/create');
});


// Routing page finished 
Route::resource('finished', FinishedController::class);


// Routing page raw material

Route::resource('raw', RawController::class);

// Routing page child part & komponen
Route::resource('child', ChildController::class);
