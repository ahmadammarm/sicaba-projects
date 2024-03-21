<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;


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
//     return view('welcome');
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/paketmakanan', function () {
//     return view('user.paketmakanan');
// })->middleware(['auth'])->name('paketmakanan');


// User routes
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/tentangkami', [UserController::class, 'tentangkami'])->name('tentangkami');
Route::get('/paketmakanan', [MakananController::class, 'paketmakanan'])->name('paketmakanan');
Route::get('/voucher', [VoucherController::class, 'voucher'])->name('voucher');
Route::get('troli', [MakananController::class, 'troli'])->name('troli');

// Route Google
Route::get('/home', [UserController::class, 'index'])->name('home');


// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Google login
Route::middleware('guest')->group(function () {
    Route::get('/auth/google/redirect', [UserAuthController::class, 'redirect'])->name('auth.google.login');
    Route::get('/auth/google/callback', [UserAuthController::class, 'handleGoogleCallback']);
    });


// Admin route
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/product', function () {
    return view('admin.product');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/payment', function () {
    return view('admin.payment');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/orders', function () {
    return view('admin.orders');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/vouchers', function () {
    return view('admin.voucher');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('/users', function () {
    return view('admin.users');
})->middleware(['auth', 'verified', 'role:admin']);

require __DIR__.'/auth.php';
