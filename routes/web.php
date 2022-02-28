<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoGalleryController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    $files = Storage::disk('google')->allFiles();
    return view('photoGallery', compact('files'));
})->name('photoGallery');

Route::post('/upload', [PhotoGalleryController::class, 'upload'])->name('upload');
Route::get('/delete/{id}', [PhotoGalleryController::class, 'delete'])->name('delete');