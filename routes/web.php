<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SessionController;


// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/sesi/index', function () {
//     return view('sesi/index');
// })->name('login');

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

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);


