<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/produk',[ProdukController::class,'index']);
    Route::get('/produk/pesanan',[PesananController::class,'pesanan']);
    Route::get('/produk/create',[ProdukController::class,'create']);
    Route::post('/produk/store',[ProdukController::class,'store']);
    Route::get('/produk/edit/{id}',[ProdukController::class,'edit']);
    Route::post('/produk/update',[ProdukController::class,'update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
