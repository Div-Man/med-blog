<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-login', [FormController::class, 'login'])->name('my-login');
Route::get('/logout', [FormController::class, 'logout']);
Route::post('/user/authenticate', [FormController::class, 'authenticate']);

Route::get('/my-register', [RegisterController::class, 'create']);
Route::post('/my-register', [RegisterController::class, 'store']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/post/{id}', [BlogController::class, 'show']);





/*

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 * 
 */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('dashboard', [FormController::class, 'dashboard'])->middleware(['auth', 'verify_email']);
Route::get('account/verify/{token}', [FormController::class, 'verifyAccount'])->name('user.verify'); 



    
   