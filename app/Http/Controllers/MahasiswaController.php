<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Mahasiswa'
        ];
        $mahasiswas = MahasiswaModel::orderBy('created_at', 'desc')->get();
        return view('mahasiswa.index', compact('data', 'mahasiswas'));
    }

    
}
