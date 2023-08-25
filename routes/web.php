<?php

use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserCardController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/exercices', [ExercicesController::class, 'index'])->name('exercices');
    Route::get('/exercices/{category}', [ExercicesController::class, 'show'])->name('exercices.show');
    Route::get('/shop', [ShopController::class, 'show'])->name('shop');
    Route::get('/yourCart', [ShopController::class, 'showCart'])->name('cart');
    Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/subscription', [SubscriptionController::class, 'show'])->name('subscription');
    Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
    Route::delete('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe');
    Route::delete('/feedbacks/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    Route::get('/item/{item}', [ShopController::class, 'showItemDetail'])->name('item.detail');
    Route::post('/cart/add/{item}', [ShopController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{item}', [ShopController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/checkout', [ShopController::class, 'checkout'])->name('checkout');
    Route::get('/payments', [UserCardController::class, 'create'])->name('payments.create');
    Route::post('/payments/add', [UserCardController::class, 'store'])->name('payments.add');
    Route::delete('/payments/remove/{id}', [UserCardController::class, 'destroy'])->name('payments.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('/shop/add-items', [ShopController::class, 'create'])->name('item.create');
    Route::post('/shop/add-items', [ShopController::class, 'store'])->name('item.add');
    Route::post('/items/{item}/update', [ShopController::class, 'update'])->name('item.update');
    Route::delete('/items/{item}', [ShopController::class, 'destroy'])->name('item.destroy');
    Route::get('/add-workouts', [ExercicesController::class, 'create'])->name('workout.create');
    Route::post('/add-workouts', [ExercicesController::class, 'store'])->name('workout.store');
    Route::delete('/workouts/{exercices}', [ExercicesController::class, 'destroy'])->name('workout.destroy');
});

require __DIR__.'/auth.php';
