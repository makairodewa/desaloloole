<?php

use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KategoriDesaController;
use App\Http\Controllers\KontakDesaController;
use App\Http\Controllers\PemerintahDesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\RoleController;
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

Route::get('/auth', [UserController::class, 'showLoginForm'])->name('auth.index');
Route::post('/login', [UserController::class, 'login'])->name('auth.login')->middleware('guest');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index']);
    Route::post('/logout', [UserController::class, 'logout'])->name('auth.logout');
    Route::prefix('settings/roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('/{role}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    });
    Route::prefix('settings/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    });
    Route::prefix('master/profil-desa')->group(function () {
        Route::get('/', [ProfilDesaController::class, 'index'])->name('pd.index');
        Route::get('/create', [ProfilDesaController::class, 'create'])->name('pd.create');
        Route::post('/', [ProfilDesaController::class, 'store'])->name('pd.store');
        Route::get('/{profilDesa}/edit', [ProfilDesaController::class, 'edit'])->name('pd.edit');
        Route::put('/{profilDesa}', [ProfilDesaController::class, 'update'])->name('pd.update');
        Route::delete('/{profilDesa}', [ProfilDesaController::class, 'destroy'])->name('pd.destroy');
    });
    Route::prefix('master/kontak-desa')->group(function () {
        Route::get('/', [KontakDesaController::class, 'index'])->name('kd.index');
        Route::get('/create', [KontakDesaController::class, 'create'])->name('kd.create');
        Route::post('/', [KontakDesaController::class, 'store'])->name('kd.store');
        Route::get('/{kd}/edit', [KontakDesaController::class, 'edit'])->name('kd.edit');
        Route::put('/{kd}', [KontakDesaController::class, 'update'])->name('kd.update');
        Route::delete('/{kd}', [KontakDesaController::class, 'destroy'])->name('kd.destroy');
    });
    Route::prefix('master/pemerintahan-desa')->group(function () {
        Route::get('/', [PemerintahDesaController::class, 'index'])->name('pmd.index');
        Route::get('/create', [PemerintahDesaController::class, 'create'])->name('pmd.create');
        Route::post('/', [PemerintahDesaController::class, 'store'])->name('pmd.store');
        Route::get('/{pd}/edit', [PemerintahDesaController::class, 'edit'])->name('pmd.edit');
        Route::put('/{pd}', [PemerintahDesaController::class, 'update'])->name('pmd.update');
        Route::delete('/{pd}', [PemerintahDesaController::class, 'destroy'])->name('pmd.destroy');
    });
    Route::prefix('/berita')->group(function () {
        Route::get('/', [BeritaDesaController::class, 'index'])->name('berita.index');
        Route::get('/create', [BeritaDesaController::class, 'create'])->name('berita.create');
        Route::post('/', [BeritaDesaController::class, 'store'])->name('berita.store');
        Route::get('/{profilDesa}/edit', [BeritaDesaController::class, 'edit'])->name('berita.edit');
        Route::put('/{profilDesa}', [BeritaDesaController::class, 'update'])->name('berita.update');
        Route::delete('/{profilDesa}', [BeritaDesaController::class, 'destroy'])->name('berita.destroy');
    });
    Route::prefix('/berita/kategori')->group(function () {
        Route::get('/', [KategoriDesaController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriDesaController::class, 'create'])->name('kategori.create');
        Route::post('/', [KategoriDesaController::class, 'store'])->name('kategori.store');
        Route::get('/{kategori}/edit', [KategoriDesaController::class, 'edit'])->name('kategori.edit');
        Route::put('/{kategori}', [KategoriDesaController::class, 'update'])->name('kategori.update');
        Route::delete('/{kategori}', [KategoriDesaController::class, 'destroy'])->name('kategori.destroy');
    });
});
Route::get('/', [GuestController::class, 'index'])->name('guest.index');
