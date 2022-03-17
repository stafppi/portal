<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Mahasiswa'
        ];
        return view('mahasiswa.index', compact('data'));
    }

    
}
