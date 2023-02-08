<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicJobsController;
use App\Http\Controllers\ShowJobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
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
Route::get('/job', [JobController::class, 'filter'])->name('jobs.filter');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    }
    )->name('verification.notice');
    Route::get('/dashboard', [CompanyController::class, 'index'])->name('jobs.dashboard');
    Route::get('/dashboard/applications', [JobApplicationController::class, 'showApplications'])->name('jobs.applications');
    Route::get('/dashboard/job/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/dashboard/job/store', [JobController::class, 'store'])->name('jobs.store');
    Route::delete('/dashboard/delete', [JobController::class, 'delete'])->name('jobs.delete');
    Route::fallback(
        function () {
            return "<h1>This route doesn't exist</h1>";
        }
    );
});

Auth::routes(['verify' => true]);
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
