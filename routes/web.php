<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/agenda', 'agenda')->name('agenda');

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Rutas por si quiero agregar editor de mis perfiles de users estandar
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas de admin
    Route::middleware('admin')->group(function () {
        
        
        Route::view('/admin/dashboard', 'admin')->name('admin.dashboard');
       
        Route::get('/admin/colaboradores', [UserController::class, 'index'])->name('admin.colaboradores');
        Route::post('/admin/colaboradores/store', [UserController::class, 'store'])->name('admin.users.store');

        // Editar desde el admin
        Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

        // Todo lo relacionado con mis reservas
        Route::get('/admin/reservation', [RentalController::class, 'index'])->name('admin.reservation');
        Route::get('/reservations/create', [RentalController::class, 'create'])->name('reservations.create');
        Route::post('/reservations/store', [RentalController::class, 'store'])->name('reservations.store');
        Route::get('/reservations/edit/{folio}', [RentalController::class, 'edit'])->name('reservations.edit');
        Route::put('/reservations/update/{folio}', [RentalController::class, 'update'])->name('reservations.update');
        Route::delete('/reservations/destroy/{folio}', [RentalController::class, 'destroy'])->name('reservations.destroy');
    });
});

require __DIR__.'/auth.php';