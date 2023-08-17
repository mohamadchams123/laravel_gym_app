<?php

use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ShoulderController;
use App\Http\Controllers\ChestController;
use App\Http\Controllers\BicepsWorkoutController;
use App\Http\Controllers\AbsWorkoutController;
use App\Http\Controllers\ObliquesWorkoutController;
use App\Http\Controllers\QuadsWorkoutController;
use App\Http\Controllers\ThighsWorkoutController;
use App\Http\Controllers\CalvesWorkoutController;
use App\Http\Controllers\TrapeziusWorkoutController;
use App\Http\Controllers\TricepsWorkoutController;
use App\Http\Controllers\BackWorkoutController;
use App\Http\Controllers\GlutesWorkoutController;
use App\Http\Controllers\HamstringsWorkoutController;



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
    Route::get('/shoulder-workouts', [ShoulderController::class, 'index'])->name('shoulder-workouts');
    Route::get('/chest-workouts', [ChestController::class, 'index'])->name('chest-workouts');
    Route::get('/biceps-workouts', [BicepsWorkoutController::class, 'index'])->name('biceps-workouts');
    Route::get('/abs-workouts', [AbsWorkoutController::class, 'index'])->name('abs-workouts');
    Route::get('/obliques-workouts', [ObliquesWorkoutController::class, 'index'])->name('obliques-workouts');
    Route::get('/quads-workouts', [QuadsWorkoutController::class, 'index'])->name('quads-workouts');
    Route::get('/thighs-workouts', [ThighsWorkoutController::class, 'index'])->name('thighs-workouts');
    Route::get('/calves-workouts', [CalvesWorkoutController::class, 'index'])->name('calves-workouts');
    Route::get('/trapezius-workouts', [TrapeziusWorkoutController::class, 'index'])->name('trapez-workouts');
    Route::get('/triceps-workouts', [TricepsWorkoutController::class, 'index'])->name('triceps-workouts');
    Route::get('/back-workouts', [BackWorkoutController::class, 'index'])->name('back-workouts');
    Route::get('/glutes-workouts', [GlutesWorkoutController::class, 'index'])->name('glutes-workouts');
    Route::get('/hamstrings-workouts', [HamstringsWorkoutController::class, 'index'])->name('Hamstrings-workouts');
});

Route::middleware('admin')->group(function () {
    Route::get('/shop/add-items', [ShopController::class, 'create'])->name('item.create');
    Route::post('/shop/add-items', [ShopController::class, 'store'])->name('item.add');
});

require __DIR__.'/auth.php';
