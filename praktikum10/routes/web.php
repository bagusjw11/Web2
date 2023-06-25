<?php

// Panggil Controller

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TampilanController::class, 'index']);



Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/after_register', function () {
        return view('after_register');
    });

    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        // Routing ke dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);
// Routing ke produk pake controller
Route::get('/produk', [ProdukController::class, 'index']);
// Routing ke halaman form tambah data menggunakan create
Route::get('/produk/create', [ProdukController::class, 'create']);
// bikin routing ke fungsi store
Route::post('/produk/store', [ProdukController::class, 'store']);
// bikin routing untuk form edit
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
// untuk validasi data edit with update
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
// untuk delete data 
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);


    });
    


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
