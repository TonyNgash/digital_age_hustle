<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateAuthController;
use App\Http\Controllers\CandidateController;

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
//     return view('out.home');
// });
// Route::get('/search', function () {
//     return view('in.search');
// });
Route::view('/','out.home');
Route::view('/search','in.search');
Route::view('/choose','out.choose');

Route::get('/candidates/login',[CandidateAuthController::class,'showLoginForm'])->name('candidates.login');
Route::post('/candidates/login',[CandidateAuthController::class,'login'])->name('candidates.login.submit');
Route::get('/candidates/register',[CandidateAuthController::class,'showRegForm'])->name('candidates.register');
Route::post('/candidates/register',[CandidateAuthController::class,'register'])->name('candidates.register.submit');
Route::middleware(['auth.candidate'])->group(function(){
    Route::get('/candidates/search',[CandidateController::class,'search'])->name('candidates.search');
});
