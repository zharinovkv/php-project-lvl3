<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;

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
    return view('home');
});

Route::get('domains', [DomainController::class, 'index'])->name('domains.index');

Route::get('domains/{id}', [DomainController::class, 'show'])->name('domains.show');

Route::post('domains', [DomainController::class, 'store'])->name('domains.store');
