<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Image;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/file-upload', 'upload');
Route::post('/file-upload', [Image::class, 'store']);
Route::get('/view-uploads', [Image::class, 'viewUploads']);
Route::get('/delete{image}', [Image::class, 'deleteImage'])->name('delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
