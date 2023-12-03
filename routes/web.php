<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\FileController;

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
Route::get('/permohonan', function () {
    return view('surat.permohonan', [
        'title' => 'Permohonan'
    ]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/redirectAuthenticatedUsers", [RedirectAuthenticatedUsersController::class, "home"]);

    Route::group(['middleware' => 'checkRole:admin'], function() {
        Route::get('/admin', function () {
            return view('admin.index', [
                'title' => 'Admin Dashboard'
            ]);
        })->name('admin');
        Route::get('/admin/pengajuan', function () {
            return view('admin.pengajuan', [
                'title' => 'Admin Pengajuan'
            ]);
        })->name('admin-pengajuan');
    });

    Route::group(['middleware' => 'checkRole:prodi'], function() {
        Route::get('/prodi', function () {
            return view('prodi.index', [
                'title' => 'Prodi Dashboard'
            ]);
        })->name('prodi');
        Route::get('/prodi/pengajuan', function () {
            return view('prodi.pengajuan', [
                'title' => 'Prodi Pengajuan'
            ]);
        })->name('prodi-pengajuan');
    });

    Route::group(['middleware' => 'checkRole:user'], function() {
        Route::get('/users', function () {
            return view('users.index', [
                'title' => 'User Dashboard'
            ]);
        })->name('users');
        Route::get('/users/pengajuan', function () {
            return view('users.pengajuan', [
                'title' => 'Pengajuan'
            ]);
        })->name('pengajuan');
        Route::get('/users/status', function () {
            return view('users.status', [
                'title' => 'Status'
            ]);
        })->name('status');
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
