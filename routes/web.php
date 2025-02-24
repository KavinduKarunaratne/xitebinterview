<?php

use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PrescriptionController;
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

Route::get('/', function () {
    return redirectBasedOnRole();
})->name('dashboard');

Route::get('/dashboard', function () {
    return redirectBasedOnRole();
})->name('dashboard');

Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
    Route::resource('prescription', PrescriptionController::class);
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::resource('pharmacy', PharmacyController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


function redirectBasedOnRole()
{
    $user = Auth::user();

    if (!$user) {
        return redirect('/login');
    }

    // Redirect based on roles
    switch ($user->role) {
        case 'admin':
            return redirect('/pharmacy');
        case 'user':
            return redirect('/prescription');
    }
}

require __DIR__ . '/auth.php';
