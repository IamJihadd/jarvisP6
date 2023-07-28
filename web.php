<?php

use App\Http\Controllers\Taskcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//route untuk menampilkan semua task
Route::get('/', [Taskcontroller::class, 'index']);

//route untuk menampilkan data task berdasarkan id
Route::get('/task/{id}', [Taskcontroller::class, 'show']);