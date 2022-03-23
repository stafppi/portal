<?php

namespace App\Http\Controllers;
use App\Prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Prodi | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Prodi'
        ];
        $prodis = Prodi::orderBy('created_at', 'desc')->get();
        return view('prodi.index', compact('data', 'prodis'));
    }
}
