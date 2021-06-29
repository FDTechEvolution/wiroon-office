<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;

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
    return view('auth/login');
})->name('login');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/providers')->group(function () {
        Route::get('/', [ProviderController::class, 'index'])->name('provider');
        Route::post('/', [ProviderController::class, 'create']);
        Route::post('/edit', [ProviderController::class, 'edit']);
        Route::get('/delete/{id}', [ProviderController::class, 'delete']);
    });

    Route::prefix('/customers')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer');
        Route::post('/', [CustomerController::class, 'create']);
        Route::post('/edit', [CustomerController::class, 'edit']);
        Route::get('/delete/{id}', [CustomerController::class, 'delete']);
    });

    Route::prefix('/projects')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project');
        Route::post('/', [ProjectController::class, 'create']);
        Route::post('/edit', [ProjectController::class, 'edit']);
        Route::post('/add-item', [ProjectController::class, 'addNewItem']);
        Route::post('/edit-item', [ProjectController::class, 'editItem']);
        Route::get('/delete-item/{item_id}', [ProjectController::class, 'deleteItem']);
        Route::get('/status/{status}/{id}', [ProjectController::class, 'projectStatus']);
    });
});
