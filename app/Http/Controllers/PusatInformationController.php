<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusatInformationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Information | Portal PPI',
            'judul' => 'Pusat Informasi',
            'subjudul' => 'Seluruh Informasi'
        ];
        return view('information.index', compact('data'));
    }

    public function mahasiswa()
    {
        $data = [
            'title' => 'Page Information | Portal PPI',
            'judul' => 'Pusat Informasi',
            'subjudul' => 'Informasi Mahasiswa'
        ];
        return view('information.mahasiswa', compact('data'));
    }
}
