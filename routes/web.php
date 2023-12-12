<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

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
// Route::get('/keterangan', function () {
//     return view('surat.keterangan', [
//         'title' => 'Keterangan BSS'
//     ]);
// })->name('surat-keterangan');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::post('/keterangan/{id}', [AdminController::class, 'keterangan'])->name('surat-keterangan');
    Route::get('/keterangan/{id}', [AdminController::class, 'keterangan'])->name('surat-keterangan-get');
    Route::post('/batalkan/{id}', [AdminController::class, 'tolak'])->name('tolak');

    Route::group(['middleware' => 'checkRole:admin'], function() {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin/pengajuan', [AdminController::class, 'pengajuan'])->name('admin-pengajuan');
        Route::get('/admin/pengajuan/{id}', [AdminController::class, 'detail'])->name('admin-pengajuan-detail');
        Route::post('/admin/pengajuan', [AdminController::class, 'confirm'])->name('admin-confirm-pengajuan');
        Route::get('/admin/status', [AdminController::class, 'status'])->name('admin-status');
        Route::post('/admin/status', [AdminController::class, 'verify'])->name('admin-verify');
    });

    Route::group(['middleware' => 'checkRole:prodi'], function() {
        Route::get('/prodi', [Prodicontroller::class, 'index'])->name('prodi');
        Route::get('/prodi/pengajuan', [ProdiController::class, 'pengajuan'])->name('prodi-pengajuan');
        Route::get('/prodi/pengajuan/{id}', [ProdiController::class, 'detail'])->name('prodi-pengajuan-detail');
        Route::post('/prodi/pengajuan', [ProdiController::class, 'uploadTtd'])->name('prodi-pengajuan-upload');
        Route::get('/prodi/permohonan/{id}', [ProdiController::class, 'permohonan'])->name('prodi-permohonan');
        Route::get('/permohonan/{id}', [ProdiController::class, 'printPermohonan'])->name('print-permohonan');
    });

    Route::group(['middleware' => 'checkRole:user'], function() {
        Route::get('/users', [MahasiswaController::class, 'index'])->name('users');
        Route::get('/users/pengajuan', [MahasiswaController::class, 'pengajuan'])->name('pengajuan');
        Route::get('/users/status', [MahasiswaController::class, 'status'])->name('status');
        Route::post('/users/confirm', [MahasiswaController::class, 'confirm'])->name('confirm');
        Route::post('/upload', [FileController::class, 'upload'])
        ->name('upload');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
