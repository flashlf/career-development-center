<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('application/homepage');
});

// Route::get('/lowongan', function () {
//   return view('application/jobs');
// });
Route::get('/lowongan', [Controllers\Lowongan::class, 'show']);
Route::post('/lowongan', [Controllers\Lowongan::class, 'store']);
Route::get('/lowongan/detail', function () {
  return view('application/jobdetail');
});


//Route::view('/homepage', 'application/test');
