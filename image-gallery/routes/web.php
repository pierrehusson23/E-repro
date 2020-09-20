<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Image;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
})->name('welcome');
