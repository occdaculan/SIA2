<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AboutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UsersController::class, 'home'])->name('home');
Route::get('/create-blog', [UsersController::class, 'createBlog']);
Route::get('/blog', [UsersController::class, 'blog']);
Route::post('/save-blog', [UsersController::class, 'saveBlog'])->name('save-blog');
// Route::get('contacts', function () {
//     return view('contact');
// })->name('contacts');

Route::get('contacts', [UsersController::class, 'contactPage'])->name('contacts');
Route::get('about-us', [AboutController::class, 'about'])->name('about');
Route::get('save-blog', [AboutController::class, 'saveBlog']);



