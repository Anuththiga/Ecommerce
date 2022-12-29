<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [AdminController::class, 'product']);
Route::get('/show-product', [AdminController::class, 'showProduct']);
Route::get('/delete-product/{id}', [AdminController::class, 'deleteProduct']);
Route::get('/update-product/{id}', [AdminController::class, 'updateProduct']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
Route::post('/updateproduct/{id}', [AdminController::class, 'update']);
Route::get('/search', [HomeController::class, 'search']);
Route::post('/add-cart', [HomeController::class, 'addCart']);





