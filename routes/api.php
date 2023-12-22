<?php

use App\Models\HasARole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\api\KelasController;
use App\Http\Controllers\Api\ProdiController;
use App\Http\Controllers\Api\MahasiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::GET('/mahasiswa', [MahasiswaController::class, 'getMhs'])->name('api.mahasiswa');
Route::GET('/mahasiswa/{id}', [MahasiswaController::class, 'getMhsById'])->name('api.mahasiswaById');
Route::POST('/mahasiswa-create', [MahasiswaController::class, 'store'])->name('api.mahasiswa-create');
Route::PATCH('/mahasiswa-update/{id}', [MahasiswaController::class, 'update'])->name('api.mahasiswa-update');
Route::DELETE('/mahasiswa-delete/{id}', [MahasiswaController::class, 'delete'])->name('api.mahasiswa-delete');

Route::GET('/dosen', [DosenController::class, 'getDosen'])->name('api.dosen');
Route::GET('/dosen/{id}', [DosenController::class, 'getDosenById'])->name('api.dosenById');
Route::POST('/dosen-create', [DosenController::class, 'store'])->name('api.dosen-create');
Route::PATCH('/dosen-update/{id}', [DosenController::class, 'update'])->name('api.dosen-update');
Route::DELETE('/dosen-delete/{id}', [DosenController::class, 'delete'])->name('api.dosen-delete');

Route::GET('/kelas', [KelasController::class, 'getKelas'])->name('api.kelas');
Route::GET('/kelas/{id}', [KelasController::class, 'getKelasById'])->name('api.kelasId');
Route::GET('/prodi', [ProdiController::class, 'getProdi'])->name('api.prodi');
Route::GET('/prodi/{id}', [ProdiController::class, 'getProdiById'])->name('api.prodiId');


Route::GET('/hasrole', [RoleController::class, 'getHasARole'])->name('api.HasRole');
Route::GET('/role', [RoleController::class, 'getRole'])->name('api.role');
