<?php

use App\Http\Controllers\UserProfileController;
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
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World!';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '2341720008, Haikal Muhammad Rafli';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan ID {$id}";
});

Route::get('/user/{name?}', function ($name = "John") {
    return 'Nama saya ' . $name;
});

// Route::get('/user/profile', function () {
//     return 'Ini adalah profile pengguna';
// })->name('profile');

// Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');
