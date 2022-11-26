<?php

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/contact', [WebController::class, 'about'])->name('contact');


Route::prefix('/client')->group(function (){
    Route::get('/', [ClientController::class, 'index'])->name('client');
    Route::get('/napravlenie/{id}', [ClientController::class, 'napravlenie'])->name('client.napravlenie');
    Route::get('/services', [ClientController::class, 'services'])->name('client.services');
    Route::get('/special', [ClientController::class, 'special'])->name('client.special');
});
