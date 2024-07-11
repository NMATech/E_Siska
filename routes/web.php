<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerAdmin;
use App\Http\Controllers\controllerMk;
use App\Http\Controllers\controllerProdi;
use App\Http\Controllers\controllerKelas;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\controllerUser;

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logoutAdmin', [LoginController::class, 'logoutAdmin'])->name('logout');
Route::get('/logout', [controllerUser::class, 'logout'])->name('logout.user');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/regist', [RegisterController::class, 'create'])->name('register');

Route::get('/', [controllerUser::class, 'home'])->name('home');
Route::get('/krs', [controllerUser::class, 'krs'])->name('krs');
Route::get('/kelas_user', [controllerUser::class, 'kelas'])->name('kelas.user');

Route::middleware('admin')->group(function () {
    Route::get('/admin', [controllerAdmin::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/matakuliah', [controllerAdmin::class, 'matakuliah'])->name('admin.matakuliah');
    Route::get('/add_matakuliah', [controllerAdmin::class, 'add_mk'])->name('admin.add_mk');
    Route::post('/add', [controllerMk::class, 'store'])->name('matakuliah.add');
    Route::get('/edit/{id}', [controllerMk::class, 'editView'])->name('matakuliah.edit');
    Route::post('/update/{id}', [controllerMk::class, 'update'])->name('matakuliah.update');
    Route::get('/delete_mk/{id}', [controllerMk::class, 'delete'])->name('admin.delete_mk');

    Route::get('/kelas', [controllerAdmin::class, 'kelas'])->name('admin.kelas');
    Route::get('/add_kelas', [controllerAdmin::class, 'add_kelas'])->name('admin.add_kelas');
    Route::post('/addKelas', [controllerKelas::class, 'store'])->name('kelas.add');
    Route::get('/edit_kelas/{id}', [controllerKelas::class, 'editView'])->name('admin.edit_kelas');
    Route::post('/editKelas/{id}', [controllerKelas::class, 'edit'])->name('kelas.edit');
    Route::get('/deleteKelas/{id}', [controllerKelas::class, 'delete'])->name('kelas.delete');

    Route::get('/prodi', [controllerAdmin::class, 'add_prodi'])->name('admin.prodi');
    Route::post('/add_prodi', [controllerProdi::class, 'store'])->name('admin.add_prodi');
    Route::get('/prodi/{id}', [controllerProdi::class, 'editView'])->name('prodi.edit');
    Route::post('/edit/{id}', [controllerProdi::class, 'update'])->name('admin.edit_prodi');
    Route::get('/delete/{id}', [controllerProdi::class, 'delete'])->name('admin.delete_prodi');
});