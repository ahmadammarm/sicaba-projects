<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\VoucherController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// User routes
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/tentangkami', [UserController::class, 'tentangkami'])->name('tentangkami');
Route::get('/paketmakanan', [MakananController::class, 'paketmakanan'])->name('paketmakanan');
Route::get('/voucher', [VoucherController::class, 'voucher'])->name('voucher');
Route::get('troli', [MakananController::class, 'troli'])->name('troli');

// Admin
Route::get('/haladmin', [UserController::class, 'haladmin'])->name('haladmin');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin route
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified', 'role:admin']);

require __DIR__.'/auth.php';
