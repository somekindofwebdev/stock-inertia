<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return Inertia::render('Births', [
        'animal' => 'sheep',
    ]);
});

Route::get('/births', function () {
    return Inertia::render('Births', [
        'animal' => 'sheep',
    ]);
});


Route::get('/deaths', function () {
    return Inertia::render('Deaths', [
        'animal' => 'sheep',
    ]);
});


Route::get('/inventory', function () {
    return Inertia::render('Inventory', [
        'animal' => 'sheep',
    ]);
});


Route::get('/movements', function () {
    return Inertia::render('Movements', [
        'animal' => 'sheep',
    ]);
});


Route::get('/tags', function () {
    return Inertia::render('Tags', [
        'animal' => 'sheep',
    ]);
});

require __DIR__.'/auth.php';
