<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;

class TahunAkademikController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Tahun Akademik | Portal PPI',
            'judul' => 'Tahun Akademik',
            'subjudul' => 'View Tahun Akademik',
        ];

        $tahun_akademiks = TahunAkademik::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.tahun_akademik.index', compact('data', 'tahun_akademiks'));  
    }

    public function tahunAkademikAdd()
    {
        
    }


}
