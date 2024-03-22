<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

// Route::get('/kelas2', function () {
//     return view('Halaman kelas2');
// });

// Route::get('/profil', function () {
//     return view('Halaman Profil');
// });

// Route::get('/kelas', function () {
//     return ("<h1>Saya Siswa dari routes </h1>");
// });

Route::get('/rooms/{id}', [RoomsController::class, 'detail']);

Route::get('rooms',[RoomsController::class, 'index']);

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{gedung}', [RoomsController::class, 'index'])->name('rooms.index.gedung');
