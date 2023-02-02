<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicJobsController;
use App\Http\Controllers\ShowJobController;
use App\Http\Controllers\JobApplicationController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', PublicJobsController::class)->name('jobs.home');
Route::get('/job/{job}', [ShowJobController::class, 'showJob'])->name('jobs.show');
Route::post('/job', [JobApplicationController::class, 'apply'])->name('jobs.apply');

Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
