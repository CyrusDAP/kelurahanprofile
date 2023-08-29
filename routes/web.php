<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('homepage');
});

Route::get('/visi-misi', [PageController::class, 'visiMisi']);
Route::get('/struktur-pemerintahan', [PageController::class, 'strukturPemerintahan']);
Route::get('/peta-lokasi', [PageController::class, 'petaLokasi']);
