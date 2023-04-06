<?php

use App\Http\Controllers\BloodDonationController;
use App\Http\Controllers\DonorListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZillaController;
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
    return view('layouts.HomePage.home');
})->name('home');

Route::get('/dashboard', [BloodDonationController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/donorss', [DonorListController::class, 'filter'])->name('filter');
Route::get('/donors', [DonorListController::class, 'filterUsers'])->name('donor-list');
Route::get('/users/{id}/contact', [UserController::class, 'showContactForm'])->middleware(['auth', 'verified'])->name('users.contact');
Route::get('/get-thanas', [ZillaController::class, 'getThanas'])->name('get-thanas');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/blood-donations', [BloodDonationController::class, 'create'])->middleware(['auth', 'verified'])->name('blood-donations.create');
Route::get('/blood-donation/{bloodDonation}/edit', [BloodDonationController::class, 'edit'])->middleware(['auth', 'verified'])
    ->name('bloodDonation.edit');

Route::delete('/blood-donation/{bloodDonation}', [BloodDonationController::class, 'destroy'])->middleware(['auth', 'verified'])
    ->name('bloodDonation.destroy');

Route::put('/blood-donations/{id}/update', [BloodDonationController::class, 'update'])->middleware(['auth', 'verified'])->name('blood-donations.update');



require __DIR__ . '/auth.php';