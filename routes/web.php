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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.view');


 //======== MODULE TAHUN AKDEMIK =========//   
    Route::prefix('tahun-akademik')->group(function(){

        Route::get('/view', 'TahunAkademikController@index')->name('tahun.akademik.view');
        Route::post('/add', 'TahunAkademikController@tahunAkademikAdd')->name('tahun.akademik.add');
        Route::get('/edit/{id}', 'TahunAkademikController@tahunAkademikEdit')->name('tahun.akademik.edit');
        Route::post('/update/{id}', 'TahunAkademikController@tahunAkademikUpdate')->name('tahun.akademik.update');
        Route::get('/delete/soft/{id}', 'TahunAkademikController@deleteSoft')->name('ta.delete.soft');
        Route::get('/trash', 'TahunAkademikController@indexRestore')->name('tahun.akademik.trash');
        Route::get('/restore/{id}', 'TahunAkademikController@taRestore')->name('tahun.akademik.restore');
        Route::get('/delete/ta/{id}', 'TahunAkademikController@delete')->name('ta.delete');
    
    });


  //======== MODULE BAK =========//
    Route::prefix('bak')->group(function(){
    
        Route::get('/jadwal/kuliah', 'JadwalKuliahController@index')->name('jadwal.kuliah');
        Route::post('/jadwal/kuliah/add', 'JadwalKuliahController@jadwalKuliahAdd')->name('jadwal.kuliah.add');
        Route::get('/jadwal/kuliah/edit/{id}', 'JadwalKuliahController@jadwalKuliahEdit')->name('jadwal.kuliah.edit');
        Route::post('/jadwal/kuliah/update/{id}', 'JadwalKuliahController@jadwalKuliahUpdate')->name('jadwal.kuliah.update');
        Route::get('/jadwal/kuliah/trash', 'JadwalKuliahController@jadwalKuliahTrash')->name('jadwal.kuliah.trash');
        Route::get('/jadwal/kuliah/soft-delete/{id}', 'JadwalKuliahController@jadwalKuliahSoftDelete')->name('jadwal.kuliah.soft.delete');
        Route::get('/jadwal/kuliah/restore/{id}', 'JadwalKuliahController@jadwalKuliahRestore')->name('jadwal.kuliah.restore');
        Route::get('/jadwal/kuliah/delete/{id}', 'JadwalKuliahController@jadwalKuliahDelete')->name('jadwal.kuliah.delete');
    
    });


  //======== MODULE MASTER DATA =========//
    Route::prefix('master-data')->group(function(){

        //Management Route Karyawan
        Route::get('/karyawan/view', 'KaryawanController@index')->name('karyawan.view');
        Route::post('/karyawan/add', 'KaryawanController@addKaryawanAksi')->name('karyawan.add');
        Route::get('/karyawan/detil/{id}', 'KaryawanController@detilKaryawan')->name('karyawan.detil');
        Route::post('/karyawan/edit/{id}', 'KaryawanController@editKaryawanAksi')->name('karyawan.edit');
        Route::get('/karyawan/restore', 'KaryawanController@indexRestore')->name('karyawan.restore');
        Route::get('/karyawan/restore-kry/{id}', 'KaryawanController@restore')->name('karyawan.back');
        Route::get('/karyawandelete/{id}', 'KaryawanController@softDelete')->name('karyawan.delete.soft');
        Route::get('/karyawan/delete-kry/{id}', 'KaryawanController@delete')->name('karyawan.delete');

        //Management Route Mahasiswa-n
        Route::get('/mahasiswa/view', 'MahasiswaController@index')->name('mahasiswa.view');
        Route::post('/mahasiswa/add', 'MahasiswaController@addMahasiswaAksi')->name('mahasiswa.add');
        Route::get('/mahasiswa/detil{id}', 'MahasiswaController@detilMahasiswa')->name('mahasiswa.detil');
        Route::post('/mahasiswa/edit/{id}', 'MahasiswaController@editMahasiswaAksi')->name('mahasiswa.edit');
        Route::get('/mahasiswa/restore', 'MahasiswaController@indexRestore')->name('mahasiswa.restore');
        Route::get('/mahasiswa/restore-mhs/{id}', 'MahasiswaController@restoreMhs')->name('mahasiswa.back');
        Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@softDelete')->name('mahasiswa.delete.soft');
        Route::get('/mahasiswa/delete-mhs/{id}', 'MahasiswaController@delete')->name('mahasiswa.delete');

        //Management Route Dosen
        Route::get('/dosen/view', 'DosenController@index')->name('dosen.view');
        Route::post('/dosen/add', 'DosenController@addDosenAksi')->name('dosen.add');
        Route::get('/dosen/detil/{id}', 'DosenController@detilDosen')->name('dosen.detil');
        Route::post('/dosen/edit/{id}', 'DosenController@editDosenAksi')->name('dosen.edit');
        Route::get('/dosen/restore', 'DosenController@indexRestore')->name('dosen.restore');
        Route::get('/dosen/restore-dsn/{id}', 'DosenController@restore')->name('dosen.back');
        Route::get('/dosen/delete-dosen/{id}', 'DosenController@softDelete')->name('dosen.delete.soft');
        Route::get('/dosen/delete-dsn/{id}', 'DosenController@delete')->name('dosen.delete');
        //dosen jabatan
        Route::get('/dosen/jabatan/view', 'DosenController@jabatan')->name('jabatan.dosen.view');
        Route::post('/dosen/jabatan/add', 'DosenController@jabatanAdd')->name('jabatan.dosen.add');
        Route::get('/dosen/jabatan/edit/{id}', 'DosenController@jabatanEdit')->name('jabatan.dosen.edit');
        Route::post('/dosen/jabatan/update/{id}', 'DosenController@jabatanUpdate')->name('jabatan.dosen.update');
        Route::get('/dosen/jabatan/is-delete/{id}', 'DosenController@isDelete')->name('jabatan.delete.soft');
        Route::get('/dosen/jabatan/restore', 'DosenController@jabatanIndexRestore')->name('jabatan.restore.view');
        Route::get('/dosen/jabatan/delete/{id}', 'DosenController@jabatanDelete')->name('jabatan.delete');

        //Management Route Ruang-n
        Route::get('/ruang/view', 'RuangController@index')->name('ruang.view');
        Route::post('/ruang/add', 'RuangController@addRuangAksi')->name('ruang.add');
        Route::get('/ruang/detil/{id}', 'RuangController@detilRuang')->name('ruang.detil');
        Route::post('/ruang/edit/{id}', 'RuangController@editRuangAksi')->name('ruang.edit');
        Route::get('/ruang/restore', 'RuangController@indexRestore')->name('ruang.restore');
        Route::get('/ruang/restore-rg/{id}', 'RuangController@restoreRg')->name('ruang.back');
        Route::get('/ruang/delete-/{id}', 'RuangController@softDelete')->name('ruang.delete.soft');
        Route::get('/ruang/delete-rg/{id}', 'RuangController@delete')->name('ruang.delete');

        //Management Route Prodi-n
        Route::get('/prodi/view', 'ProdiController@index')->name('prodi.view');
        Route::post('/prodi/add', 'ProdiController@addProdiAksi')->name('prodi.add');
        Route::get('/prodi/detil/{id}', 'ProdiController@detilProdi')->name('prodi.detil');
        Route::post('/prodi/edit/{id}', 'ProdiController@editProdiAksi')->name('prodi.edit');
        Route::get('/prodi/restore', 'ProdiController@indexRestore')->name('prodi.restore');
        Route::get('/prodi/restore-prd/{id}', 'ProdiController@restorePrd')->name('prodi.back');
        Route::get('/prodi/delete-/{id}', 'ProdiController@softDelete')->name('prodi.delete.soft');
        Route::get('/prodi/delete-prd/{id}', 'ProdiController@delete')->name('prodi.delete');

        //Management Route Matakuliah-n
        Route::get('/matakuliah/view', 'MataKuliahController@index')->name('matakuliah.view');
        Route::post('/matakuliah/add', 'MataKuliahController@addMataKuliahAksi')->name('matakuliah.add');
        Route::get('/matakuliah/detil/{id}', 'MataKuliahController@detilMataKuliah')->name('matakuliah.detil');
        Route::post('/matakuliah/edit/{id}', 'MataKuliahController@editMataKuliahAksi')->name('matakuliah.edit');
        Route::get('/matakuliah/restore', 'MataKuliahController@indexRestore')->name('matakuliah.restore');
        Route::get('/matakuliah/restore-mk/{id}', 'MataKuliahController@restoreMK')->name('matakuliah.back');
        Route::get('/matakuliah/delete/{id}', 'MataKuliahController@softDelete')->name('matakuliah.delete.soft');
        Route::get('/matakuliah/delete-mk/{id}', 'MataKuliahController@delete')->name('matakuliah.delete');

    });



  //======== MODULE MAHASISWA BARU =========//
    Route::prefix('resepsionis')->group(function(){
    
        Route::get('/pendaftar/view', 'PendaftarMahasiswaController@index')->name('pendaftar.view');
        Route::post('/pendaftar/add', 'PendaftarMahasiswaController@pendaftarAdd')->name('pendaftar.add');
        Route::get('/pendaftar/detil/{id}', 'PendaftarMahasiswaController@pendaftarDetil')->name('pendaftar.detil');
        Route::post('/pendaftar/edit/{id}', 'PendaftarMahasiswaController@pendaftarEdit')->name('pendaftar.edit');
        Route::get('/pendaftar/delete-s/{id}', 'PendaftarMahasiswaController@softDelete')->name('pendaftar.delete.soft');
        Route::get('/pendaftar/restore', 'PendaftarMahasiswaController@indexRestoreCalonMhs')->name('pendaftar.restore');
        Route::get('/pendaftar/restore/back/{id}', 'PendaftarMahasiswaController@restoreBack')->name('pendaftar.back');
        Route::get('/pendaftar/migrate/{id}', 'PendaftarMahasiswaController@mhsMigrate')->name('mahasiswa.migrate');
        Route::get('/pendaftar/delete/{id}', 'PendaftarMahasiswaController@delete')->name('mahasiswa.delete');
    
    });





    Route::get('/all-information', 'PusatInformationController@index');
    Route::get('/information-mhs', 'PusatInformationController@mahasiswa');




});

















