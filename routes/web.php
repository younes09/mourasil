<?php

// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
    return view('condidat.inscription');
});

Route::resource('/condidats',CondidatController::class);

Route::resource('/inscription', InscriptionController::class);

Route::get('send-mail/{uuid}', [MailController::class, 'index']);

// Route::get('/{page}', [AdminController::class,'index']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
