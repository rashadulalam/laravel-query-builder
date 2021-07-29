<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetrivingResults;
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

Route::get('/', [RetrivingResults::class, 'allRows']);

Route::get('/single-row', [RetrivingResults::class, 'selectOneRow']);
Route::get('/find-row', [RetrivingResults::class, 'findRows']);