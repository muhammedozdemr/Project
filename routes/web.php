<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('clients')->group(function () {
        Route::get('/', [ClientsController::class, 'index'])
            ->name('clients');
        Route::post('/update/{id}', [ClientsController::class, 'update'])
            ->name('clients.update');
        Route::get('/update/{id}', [ClientsController::class, 'updateView']);
        Route::get('/delete/{id}', [ClientsController::class, 'delete'])
            ->name('clients.delete');
        Route::post('/new', [ClientsController::class, 'create'])
            ->name('clients.new');
        Route::get('/new', [ClientsController::class, 'createView']);
    });

    Route::prefix('cars')->group(function () {
        Route::get('/', [CarsController::class, 'index'])
            ->name('cars');
        Route::post('/update/{id}', [CarsController::class, 'update'])
            ->name('cars.update');
        Route::get('/update/{id}', [CarsController::class, 'updateView']);
        Route::get('/delete/{id}', [CarsController::class, 'delete'])
            ->name('cars.delete');
        Route::post('/new', [CarsController::class, 'create'])
            ->name('cars.new');
        Route::get('/new', [CarsController::class, 'createView']);
    });
});
