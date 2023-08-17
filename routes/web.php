<?php

use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriptionController;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/exercices', [ExercicesController::class, 'show'])->name('exercices');
    Route::get('/shop', [ShopController::class, 'show'])->name('shop');
    Route::get('/yourCart', [ShopController::class, 'showCart'])->name('cart');
    Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/subscription', [SubscriptionController::class, 'show'])->name('subscription');
    Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
    // Route::post('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe');
    Route::delete('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe');
});

Route::middleware('admin')->group(function () {
    Route::get('/shop/add-items', [ShopController::class, 'create'])->name('item.create');
    Route::post('/shop/add-items', [ShopController::class, 'store'])->name('item.add');
});

require __DIR__.'/auth.php';
