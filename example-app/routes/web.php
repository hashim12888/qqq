<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\P;

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

Route::get('/', [P::class,'show']);
Route::get('/add', [P::class,'create']);
Route::post('/contact', [P::class,'store']);Route::get('/{id}/edit', [P::class,'edit']);
Route::patch('/update/{id}', [P::class,'update']);
Route::delete('/{id}/delete', [P::class,'delete']);
