<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index');

//======== MODULE KARYAWAN =========//
Route::get('/karyawan', 'KaryawanController@index');
Route::post('/add-karyawan', 'KaryawanController@addKaryawanAksi');
Route::get('/detil-karyawan/{id}', 'KaryawanController@detilKaryawan');
Route::post('/edit-karyawan/{id}', 'KaryawanController@editKaryawanAksi');
Route::get('/restore-karyawan', 'KaryawanController@indexRestore');
Route::get('/restore-kry/{id}', 'KaryawanController@restore');
Route::get('/delete-karyawan/{id}', 'KaryawanController@softDelete');
Route::get('/delete-kry/{id}', 'KaryawanController@delete');
//========= END KARYAWAN ===========//

//========== MODULE MAHASISWA =========//
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa', 'MahasiswaController@index');
//========== END MAHASISWA ============//

//========== MODULE DOSEN ==============//
Route::get('/dosen', 'DosenController@index');
Route::post('/add-dosen', 'DosenController@addDosenAksi');
Route::get('/detil-dosen/{id}', 'DosenController@detilDosen');
Route::post('/edit-dosen/{id}', 'DosenController@editDosenAksi');
Route::get('/restore-dosen', 'DosenController@indexRestore');
Route::get('/restore-dsn/{id}', 'DosenController@restore');
Route::get('/delete-dosen/{id}', 'DosenController@softDelete');
Route::get('/delete-dsn/{id}', 'DosenController@delete');

Route::get('/jabatan', 'DosenController@jabatan');
Route::get('/dosen-pembimbing', 'DosenController@dosenPembimbing');

//========= END DOSEN ==================//

Route::get('/all-information', 'PusatInformationController@index');
Route::get('/information-mhs', 'PusatInformationController@mahasiswa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
