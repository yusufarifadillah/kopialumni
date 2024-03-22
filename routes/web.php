<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BahanbakuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;

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
    // return view('welcome');
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// dashboardbootstrap
Route::get('/dashboardbootstrap', function () {
    return view('dashboardbootstrap');
})->middleware(['auth'])->name('dashboardbootstrap');

// route untuk validasi login
Route::post('/validasi_login', [App\Http\Controllers\LoginController::class, 'show']);
// route supplier
Route::resource('/supplier', SupplierController::class)->middleware(['auth']);
Route::get('/supplier/destroy/{id}', [App\Http\Controllers\SupplierController::class,'destroy'])->middleware(['auth']);
// route Pegawai
Route::resource('/pegawai', PegawaiController::class)->middleware(['auth']);
Route::get('/pegawai/destroy/{id}', [App\Http\Controllers\PegawaiController::class,'destroy'])->middleware(['auth']);
// route Bahan Baku
Route::resource('/bahanbaku', BahanbakuController::class)->middleware(['auth']);
Route::get('/bahanbaku/destroy/{id}', [App\Http\Controllers\BahanbakuController::class,'destroy'])->middleware(['auth']);
// route Menu
Route::resource('/menu', MenuController::class)->middleware(['auth']);
Route::get('/menu/destroy/{id}', [App\Http\Controllers\MenuController::class,'destroy'])->middleware(['auth']);
// route Pelanggan
Route::resource('/pelanggan', PelangganController::class)->middleware(['auth']);
Route::get('/pelanggan/destroy/{id}', [App\Http\Controllers\PelangganController::class,'destroy'])->middleware(['auth']);


require __DIR__.'/auth.php';
