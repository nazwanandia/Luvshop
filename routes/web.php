<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

route::get('/', [HomeController::class, 'home']);
route::get('/shop', [HomeController::class, 'shop']);
route::get('/checkout', [HomeController::class, 'checkout']);
// route::get('/', [HomeController::class, 'shop']);
// route::get('/', [HomeController::class, 'checkout']);
// Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Route::get('/', [HomeController::class, 'shop'])->name('home.shop');

// route::get('/shop', function(){
//     return view('home/shop');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; 

route::get('admin/dashboard', [HomeController::class,'index']);
