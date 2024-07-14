<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Public routes
Route::get('/', [UserController::class, 'getTestimonials']);
Route::get('/navbar', function () {
    return view('landingPage/macro/navbar');
});
Route::get('/abjad', [UserController::class, 'getAbjad']);
Route::get('/words', [UserController::class, 'getWord']);
Route::get('/aboutUs', function () {
    return view('landingPage/macro/aboutUs');
});
Route::post('/contactUs/create', [UserController::class, 'storeContactUs']);
Route::get('/testimonials', function () {
    return view('landingPage/macro/testimonials');
});
Route::get('/testimonials/create', [UserController::class, 'create'])->name('createTestimonial');
Route::post('/testimonials/create', [UserController::class, 'storeTestimonials'])->name('storeTestimonial');

// Route::post('/testimonials/create', [UserController::class, 'storeTestimonials']);

// Route::get('/editProfile', [UserController::class, 'editProfile']);
Route::get('/profile', function () {
    return view('landingPage/macro/profile');
});
Route::get('/editProfile/{id}', [UserController::class, 'editProfile'])->name('editProfile');
// Route::post('/profile/update/{id}', [AuthController::class, 'updateProfile']);
Route::post('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('updateProfile');


// Route::get('/editProfile', function () {
//     return view('landingPage/macro/edit_profile');
// });

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/loginUser', [AuthController::class, 'login'])->name('login');
    Route::post('/loginUser', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'store']);

    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password.form');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('forgot-password.send');
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


    
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    // Admin routes
    Route::middleware('checkRole:admin')->group(function () {
        Route::get('/dashAdmin', function () {
            return view('admin/dashboard');
        });
        Route::get('/addAlphabet', function () {
            return view('admin/alphabet/add_alphabet');
        });
        Route::get('/dashAlphabet', [AdminController::class, 'dashAlphabet']);
        Route::post('/alphabet/create', [AdminController::class, 'storeAlphabet']);
        Route::delete('/alphabet/delete/{id}', [AdminController::class, 'deleteAlphabet'])->name('alphabet.destroy');
        Route::post('/alphabet/{id}', [AdminController::class, 'editAlphabet']);
        Route::post('/alphabet/update/{id}', [AdminController::class, 'updateAlphabet']);
        Route::get('/addWord', function () {
            return view('admin/word/add_word');
        });
        Route::get('/dashWord', [AdminController::class, 'dashWord']);
        Route::post('/word/create', [AdminController::class, 'storeWord']);
        Route::post('/word/{id}', [AdminController::class, 'editWord']);
        Route::post('/word/update/{id}', [AdminController::class, 'updateWord']);
        Route::delete('/word/delete/{id}', [AdminController::class, 'deleteWord'])->name('word.destroy');
        Route::get('/dashTestimoni', [AdminController::class, 'dashTestimonials']);
        
        Route::post('/testimonials/update-status/{id}', [AdminController::class, 'updateTestimonialStatus'])->name('testimonials.updateStatus');
        Route::post('/testimonials/{id}', [AdminController::class, 'getContact']);

        Route::get('/dashContact', [AdminController::class, 'dashContact']);

        Route::get('/dashUser', [AdminController::class, 'dashUser']);
    });
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
