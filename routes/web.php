<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetrivingResults;

use  App\Http\Controllers\AggregatesController;
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

Route::get('/column', [RetrivingResults::class, 'selectOneColumn']);

Route::get('/multi-column', [RetrivingResults::class, 'multiColumn']);

Route::get('/spdata', [RetrivingResults::class, 'spData']);



Route::get('/count-row', [AggregatesController::class, 'countRow']);

