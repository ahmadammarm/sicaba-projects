<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/tentang', [UserController::class, 'about'])->name('about');
Route::get('/paket', [UserController::class, 'paket'])->name('paket');
Route::get('/voucher', [UserController::class, 'voucher'])->name('voucher');


use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('/');
    } else {
        return view('user.index');
    }
});

// admin dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [UserController::class, 'index'])->name('index');



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
