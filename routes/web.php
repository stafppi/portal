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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.view');

//======== MODULE KARYAWAN =========//
Route::prefix('karyawan')->group(function(){

    Route::get('/view', 'KaryawanController@index')->name('karyawan.view');
    Route::post('/add', 'KaryawanController@addKaryawanAksi')->name('karyawan.add');
    Route::get('/detil/{id}', 'KaryawanController@detilKaryawan')->name('karyawan.detil');
    Route::post('/edit/{id}', 'KaryawanController@editKaryawanAksi')->name('karyawan.edit');
    Route::get('/restore', 'KaryawanController@indexRestore')->name('karyawan.restore');
    Route::get('/restore-kry/{id}', 'KaryawanController@restore')->name('karyawan.back');
    Route::get('/delete/{id}', 'KaryawanController@softDelete')->name('karyawan.delete.soft');
    Route::get('/delete-kry/{id}', 'KaryawanController@delete')->name('karyawan.delete');

});
//========= END KARYAWAN ===========//

//========== MODULE MAHASISWA =========//
Route::prefix('mahasiswa')->group(function(){

    Route::get('/view', 'MahasiswaController@index')->name('mahasiswa.view');
    Route::get('/mahasiswa', 'MahasiswaController@index');
    
});
//========== END MAHASISWA ============//

//========== MODULE DOSEN ==============//
Route::prefix('dosen')->group(function(){

    Route::get('/view', 'DosenController@index')->name('dosen.view');
    Route::post('/add', 'DosenController@addDosenAksi')->name('dosen.add');
    Route::get('/detil/{id}', 'DosenController@detilDosen')->name('dosen.detil');
    Route::post('/edit/{id}', 'DosenController@editDosenAksi')->name('dosen.edit');
    Route::get('/restore', 'DosenController@indexRestore')->name('dosen.restore');
    Route::get('/restore-dsn/{id}', 'DosenController@restore')->name('dosen.back');
    Route::get('/delete-dosen/{id}', 'DosenController@softDelete')->name('dosen.delete.soft');
    Route::get('/delete-dsn/{id}', 'DosenController@delete')->name('dosen.delete');

    Route::get('/jabatan', 'DosenController@jabatan');
    Route::get('/dosen-pembimbing', 'DosenController@dosenPembimbing');

});
//========= END DOSEN ==================//

//========== MODULE PRODI ==============//
Route::prefix('prodi')->group(function(){

    Route::get('/view', 'ProdiController@index')->name('prodi.view');
    Route::get('/add', 'ProdiController@index')->name('prodi.add');
    Route::get('/detil/{id}', 'ProdiController@index')->name('prodi.detil');
    Route::get('/delete-dosen/{id}', 'ProdiController@index')->name('prodi.delete.soft');

});
//========= END PRODI ==================//

Route::get('/all-information', 'PusatInformationController@index');
Route::get('/information-mhs', 'PusatInformationController@mahasiswa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
