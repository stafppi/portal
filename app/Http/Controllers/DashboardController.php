<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KaryawanModel;
use App\DosenModel;
use App\MahasiswaModel;



class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $data = [
            'title' => 'Page Dashboard | Portal PPI',
            'judul' => 'Dashboard',
            'subjudul' => 'Dashboard Page'
        ];

        $all_karyawan = KaryawanModel::count();
        $all_dosen = DosenModel::count();
        $all_mahasiswa = MahasiswaModel::count();
        //dd($all_karyawan);
        //$title = 'Page Dashboard | Portal PPI';
        return view('admin.dashboard', compact('data', 'all_karyawan', 'all_dosen', 'all_mahasiswa'));
    }
    
}
