<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gigtalentRegistrationController;
use App\Http\Controllers\gigtalentseekerRegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\joblistController;
use App\Http\Controllers\evaluationController;
use App\Http\Controllers\jobsummaryController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('gigtalent_Registration');
    
// });
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::post('/commitlogin', [LoginController::class, 'Login'])->name('Login');
    Route::get('/home', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/jobposting', [JobPostingController::class, 'index'])->name('jobposting');
    Route::post('/jobpost', [JobPostingController::class, 'store'])->name('jobpost');
    Route::get('/login', [LoginController::class, 'index'])->name('OpenLogin');
    Route::get('/joblist', [joblistController::class, 'index'])->name('joblist');
    
});
Route::get('/evaluationupdate', [evaluationController::class, 'update'])->name('evaluationupdate');
Route::get('/evaluation/{jID}', [evaluationController::class, 'index'])->name('evaluation');
Route::get('/gtsjoblist', [evaluationController::class, 'gtsjoblist'])->name('gtsjoblist');
Route::get('/evaluationapp', [evaluationController::class, 'refreshHighlight'])->name('refreshHighlight');
Route::get('/GTRegistration', [gigtalentRegistrationController::class, 'index'])->name('gtRegistration');
Route::post('/gtregister', [gigtalentRegistrationController::class, 'store'])->name('gtRegister');
Route::get('/GTSRegistration', [gigtalentseekerRegistrationController::class, 'index'])->name('gtsRegistration');
Route::post('/gtsregister', [gigtalentseekerRegistrationController::class, 'store'])->name('gtsRegister');
Route::get('/logout', [dashboardController::class, 'logout'])->name('logout');
Route::post('joblist-fetch', [joblistController::class, 'refresh'])->name('joblistfetch');
Route::post('/jobitem-fetch', [joblistController::class, 'jobitemrefresh'])->name('jobitem');
Route::post('/ApplyJob', [joblistController::class, 'apply'])->name('apply');
Route::get('/jobsummary', [jobsummaryController::class, 'index'])->name('jobsummary');
Route::get('/jobsummarycontract', [jobsummaryController::class, 'pdf'])->name('jobsummarycontract');
Route::get('/pdfread', [jobsummaryController::class, 'pdfread'])->name('pdfread');
Route::get('/adminhkKhNknLIgqTSdp03dG', [AdminController::class, 'adminverication'])->name('adminverication');

