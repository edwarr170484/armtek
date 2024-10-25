<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CheckoutController;

Route::controller(PageController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/about", "about");
    Route::get("/personal", "personal");
    Route::get("/oferta", "oferta");
    Route::get("/cookie", "cookie");
    Route::get("/payments", "payments");
    Route::get("/sales", "sales")->name('sales');
    Route::get("/rent", "rent");
});

Route::controller(ContactController::class)->group(function(){
    Route::get("/contacts", "contacts");
});

Route::controller(CatalogController::class)->group(function(){
    Route::get("/courses/{name?}", "courses");
    Route::get("/trainings/{name?}", "trainings");
    Route::get("/programs/{name?}", "programs");
    Route::get("/certificates","certificates");
});

Route::controller(CheckoutController::class)->prefix('checkout')->group(function(){
    Route::get("/cart", "cart");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
