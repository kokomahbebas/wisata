<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);
Route::post('/daftar', [AuthController::class, 'daftarStore']);
Route::post('/auth', [AuthController::class, 'login']);
Route::post('/auth/verifikasi-token', [AuthController::class, 'verifikasiToken']);
Route::get('/verifikasi-akun', [AuthController::class, 'verifikasiTokenPage']);

Route::prefix('admin')->group(function () {
    Route::get('/index', [AdminController::class, 'index']);
    Route::get('/wisata', [AdminController::class, 'wisata']);
    Route::post('/wisata/store', [AdminController::class, 'wisataStore']);
    Route::get('/layanan', [AdminController::class, 'layanan']);
    Route::post('/layanan/store', [AdminController::class, 'layananStore']);
});