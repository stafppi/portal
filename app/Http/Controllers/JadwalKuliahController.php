<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalKuliah;
use App\DosenModel;
use App\ProdiModel;
use App\Semester;
use App\RuangModel;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Jadwal | Portal PPI',
            'judul' => 'BAK',
            'subjudul' => 'Page Jadwal'
        ];

        $jadwalKuliah = jadwalKuliah::orderBy('created_at', 'desc')->get();
        $dosens = DosenModel::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $ruangs = RuangModel::all();
        return view('admin.bak.jadwal.index_jadwal', compact('data', 'jadwalKuliah', 'dosens', 'prodis', 'semesters', 'ruangs'));
    }

    public function jadwalKuliahAdd(Request $request)
    {
        $data = new jadwalKuliah();
        $data->id_prodi = $request->id_prodi;
        $data->id_semester = $request->id_semester;
        $data->id_dosen = $request->id_dosen;
        $data->id_ruang = $request->id_ruang;
        $data->hari = $request->hari;
        $data->jam_masuk = $request->jam_masuk;
        $data->jam_keluar = $request->jam_keluar;
        $data->save();

        return redirect()->route('jadwal.kuliah')->with('message', 'Data Jadwal Kuliah Berhasil ditambahkan!');
    }

    public function jadwalKuliahEdit($id)
    {
        $data = [
            'title' => 'Page Edit Jadwal | Portal PPI',
            'judul' => 'BAK',
            'subjudul' => 'Edit Jadwal Kuliah'
        ];

        $jadwalKuliah = jadwalKuliah::find($id);
        $dosens = DosenModel::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $ruangs = RuangModel::all();
        return view('admin.bak.jadwal.edit_jadwal_kuliah', compact('data', 'jadwalKuliah', 'dosens', 'prodis', 'semesters', 'ruangs'));
        // compact('data', 'jadwalKuliah', 'dosens', 'prodis', 'semesters', 'ruangs')
    }

    public function jadwalKuliahUpdate(Request $request, $id)
    {
        $data = jadwalKuliah::find($id);
        $data->id_prodi = $request->id_prodi;
        $data->id_semester = $request->id_semester;
        $data->id_dosen = $request->id_dosen;
        $data->id_ruang = $request->id_ruang;
        $data->hari = $request->hari;
        $data->jam_masuk = $request->jam_masuk;
        $data->jam_keluar = $request->jam_keluar;
        $data->save();

        return redirect()->route('jadwal.kuliah')->with('message', 'Data Jadwal Kuliah Berhasil Diupdate!');
    }





}
