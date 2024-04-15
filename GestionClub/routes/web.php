<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
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

//Page bienvenue
Route::get('/', function () {
    return view('bienvenue');
});

//Page Contact
Route::get('/contact', function () {
    return view('contact');
});

//Page A propos
Route::get('/apropos', function () {
    return view('aPropos');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->name('profile.edit');


//Page users si identifié, sinon login
Route::get('/users', [UsersController::class, 'index'])->middleware(['auth',
    'admin'])->name('users');

//Supprimer un user
Route::delete('/users/{id}', [UsersController::class,
    'destroy'])->middleware(['auth', 'admin'])->name('users.destroy');

//Route ajouté
Route::get('/dashboard', function () { return view('dashboard');} )
    ->middleware(['auth'])->name('dashboard');

Route::get('/users', [UsersController::class, 'index'])->middleware(['auth',
    'admin'])->name('users');

Route::get('/users/profile/{user}', [UsersController::class, 'show'])
    ->name('users.show');

Route::get('/users/{user}', [UsersController::class, 'edit'])
    ->middleware(['auth'])->name('users.edit');

Route::put('/users/{user}', [UsersController::class, 'update'])
    ->middleware(['auth'])->name('users.update');

Route::delete('/users/{user}', [UsersController::class, 'destroy'])
    ->middleware(['auth', 'admin'])->name('users.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

