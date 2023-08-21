<?php

use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/exercices', [ExercicesController::class, 'index'])->name('exercices');
    Route::get('/shoulder-workouts', [ExercicesController::class, 'shoulder'])->name('shoulder-workouts');
    Route::get('/chest-workouts', [ExercicesController::class, 'chest'])->name('chest-workouts');
    Route::get('/biceps-workouts', [ExercicesController::class, 'biceps'])->name('biceps-workouts');
    Route::get('/abs-workouts', [ExercicesController::class, 'abs'])->name('abs-workouts');
    Route::get('/obliques-workouts', [ExercicesController::class, 'obliques'])->name('obliques-workouts');
    Route::get('/quads-workouts', [ExercicesController::class, 'quads'])->name('quads-workouts');
    Route::get('/thighs-workouts', [ExercicesController::class, 'thighs'])->name('thighs-workouts');
    Route::get('/calves-workouts', [ExercicesController::class, 'calves'])->name('calves-workouts');
    Route::get('/trapezius-workouts', [ExercicesController::class, 'trapez'])->name('trapez-workouts');
    Route::get('/triceps-workouts', [ExercicesController::class, 'triceps'])->name('triceps-workouts');
    Route::get('/back-workouts', [ExercicesController::class, 'back'])->name('back-workouts');
    Route::get('/glutes-workouts', [ExercicesController::class, 'glutes'])->name('glutes-workouts');
    Route::get('/hamstrings-workouts', [ExercicesController::class, 'hamstrings'])->name('Hamstrings-workouts');
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
    Route::post('/checkout/{item}', [ShopController::class, 'checkout'])->name('checkout');

});

Route::middleware('admin')->group(function () {
    Route::get('/shop/add-items', [ShopController::class, 'create'])->name('item.create');
    Route::post('/shop/add-items', [ShopController::class, 'store'])->name('item.add');
    Route::post('/items/{item}/update', [ShopController::class, 'update'])->name('item.update');
    Route::delete('/items/{item}', [ShopController::class, 'destroy'])->name('item.destroy');
    Route::get('/exercices/add-workouts', [ExercicesController::class, 'create'])->name('workout.create');
    Route::post('/exercices/add-workouts', [ExercicesController::class, 'store'])->name('workout.store');
});

require __DIR__.'/auth.php';
