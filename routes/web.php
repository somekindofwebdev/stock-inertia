<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\BirthsController;
use App\Http\Controllers\DeathsController;
use App\Http\Controllers\MovementsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\InventoryController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::controller(AnimalsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/animals', 'index');
});

Route::controller(BirthsController::class)->group(function () {
    Route::get('/births', 'index');
});

Route::controller(DeathsController::class)->group(function () {
    Route::get('/deaths', 'index');
});

Route::controller(MovementsController::class)->group(function () {
    Route::get('/movements', 'index');
});

Route::controller(TagsController::class)->group(function () {
    Route::get('/tags', 'index');
});

Route::controller(InventoryController::class)->group(function () {
    Route::get('/inventory', 'index');
});

require __DIR__.'/auth.php';
