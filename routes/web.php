<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicJobsController;
use App\Http\Controllers\ShowJobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobFilterController;
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
//Public Routes
Route::get('/', PublicJobsController::class)->name('jobs.home')->middleware(['open_modify']);
Route::get('/job/{job}', [ShowJobController::class, 'showJob'])->name('jobs.show')->middleware(['open_job']);
Route::post('/job', [JobApplicationController::class, 'apply'])->name('jobs.apply');
Route::get('/job', [JobFilterController::class, 'filter'])->name('jobs.filter');
Route::get('/apply', [CompanyApplicationController::class, 'apply'])->name('companyApplication.apply');
Route::post('/apply', [CompanyApplicationController::class, 'store'])->name('companyApplication.store');

//Admin routes
Route::get('/admin/login', [AdminLoginController::class, 'loginForm'])->name('admin.form');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.auth');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/inactive', [AdminController::class, 'inactive'])->name('admin.inactive');
Route::middleware(['auth:admin', 'verified','active'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dash');
    Route::get('/admin/dashboard/edit/{company}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/dashboard/stats/{company}', [AdminController::class, 'stats'])->name('admin.stats');
    Route::get('/admin/dashboard/create', [AdminController::class, 'createCompanyForm'])->name('admin.create');
    Route::get('/admin/requests', [AdminController::class, 'company_requests'])->name('admin.requests');
    Route::post('/admin/dashboard/store/{id?}', [AdminController::class, 'store'])->name('admin.store');
    Route::delete('/admin/dashboard/delete', [AdminController::class, 'delete'])->name('admin.delete');
});

//Company routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');
    Route::get('/dashboard', [CompanyController::class, 'index'])->name('jobs.dashboard');
    Route::get('/dashboard/applications', [JobApplicationController::class, 'showApplications'])->name('jobs.applications');
    Route::get('/dashboard/job/create', [JobController::class, 'create'])->name('jobs.create');
    Route::get('/dashboard/edit/{job}', [JobController::class, 'edit'])->name('jobs.edit');
    Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::post('/profile/edit', [CompanyController::class, 'store'])->name('company.store');
    Route::post('/dashboard/job/store/{id?}', [JobController::class, 'store'])->name('jobs.store');
    Route::delete('/dashboard/delete', [JobController::class, 'delete'])->name('jobs.delete');
});
Route::fallback(
    function () {
        return "<h1>This route doesn't exist</h1>";
    }
);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
