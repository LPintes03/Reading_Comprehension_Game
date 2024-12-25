<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\GameController;




Route::get('/', function () {
    return view('welcome');
});

//user access
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/leaderboard',[UserController::class, 'leaderboard'])->name('leaderboard');
    Route::get('/characters',[UserController::class, 'characters'])->name('characters');
    Route::get('/play',[UserController::class, 'play'])->name('play');
    Route::get('/settings',[UserController::class, 'settings'])->name('settings');
    Route::get('/characters',[UserController::class, 'characters'])->name('characters');
    Route::get('/chapters',[UserController::class, 'chapters'])->name('chapters');
    Route::get('/chapters/{number}', [ChapterController::class, 'show'])->name('chapters.show');
    Route::get('/games/{number}', [GameController::class, 'showGame'])->name('games.show');


});

// Route::get('/audio/{filename}', function ($filename) {
//     $path = storage_path('app/public/audio/' . $filename);

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     return response()->file($path);
// });

//profille
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//make sures na ma-meet muna yung desired score to access next game and chapter
// Route::middleware('CheckScore')->group(function () {

//     Route::get('/chapters/{number}', [ChapterController::class, 'show'])->name('chapters.show');
//     Route::get( '/games/{id}', [GameController::class, 'play'])->name('games.play');
// });

require __DIR__.'/auth.php';


Route::get('admin/dashboard', [HomeController::class, 'index']);
