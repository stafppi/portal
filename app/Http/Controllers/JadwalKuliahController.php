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





}
