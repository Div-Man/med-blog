<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexPage;


use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialController;




Route::get('login/{provider}', [SocialController::class, 'redirect']);
Route::get('login/{provider}/callback', [SocialController::class, 'Callback']);


Route::get('/', IndexPage::class);

Route::get('/my-login', [FormController::class, 'login'])->name('my-login')->middleware(['guest']);
Route::get('/logout', [FormController::class, 'logout']);
Route::post('/user/authenticate', [FormController::class, 'authenticate']);

Route::get('/my-register', [RegisterController::class, 'create']);
Route::post('/my-register', [RegisterController::class, 'store']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/post/{id}', [BlogController::class, 'show'])->name('post');
Route::get('/post/create', [BlogController::class, 'create'])->middleware(['auth', 'verify_email']);
Route::get('/post/edit/{id}', [BlogController::class, 'edit'])->middleware(['auth', 'verify_email', 'check.post.owner']);
Route::post('/post/store', [BlogController::class, 'store'])->middleware(['auth', 'verify_email']);
Route::put('/post/update', [BlogController::class, 'update'])->middleware(['auth', 'verify_email']);
Route::delete('/post/delete/{id}', [BlogController::class, 'destroy'])->middleware(['auth', 'verify_email', 'check.post.owner']);


Route::post('/store-comment', [CommentController::class, 'store'])->middleware(['auth', 'verify_email']);

Route::get('/search/tag/{tag}', [BlogController::class, 'searchTag']);
Route::get('/post/category/{category}', [BlogController::class, 'searchCategory']);
Route::get('/search/post/', [BlogController::class, 'searchPost']);


Route::get('dashboard', [FormController::class, 'dashboard'])->middleware(['auth', 'verify_email']);
Route::get('account/verify/{token}', [FormController::class, 'verifyAccount'])->name('user.verify'); 



Route::get( '/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'sendOnEmail']);
Route::post('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'forgotPassword']);


Route::post('/reset-password', [App\Http\Controllers\ResetPasswordController::class, 'resetPassword'])->name('password.store');

Route::get('/reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'newPassword']);

