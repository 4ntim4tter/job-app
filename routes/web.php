<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ShowJobController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', JobsController::class)->name('jobs.home');
Route::get('/job/{job}', [ShowJobController::class, 'showJob'])->name('jobs.show');
Route::post('/job/*', [JobApplicationController::class, 'apply'])->name('jobs.apply');
