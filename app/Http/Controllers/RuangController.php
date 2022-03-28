<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuangModel;

class RuangController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Ruang | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Ruang',
        ];

        $ruangs= RuangModel::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.master_data.ruang.index', compact('data', 'ruangs'));      
    }

    public function addRuangAksi(Request $request)
    {
        $data = new RuangModel();
        $data->kode_ruang = $request->kd_ruang;
        $data->nama_ruang = $request->nama_ruang;
        $data->save();

        return redirect()->route('ruang.view')->with('massage', 'Data Ruang Berhasil Ditambahkan');
    }

    public function detilRuang($id)
    {
        $data = [
            'title' => 'Page Ruang | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Ruang',
        ];
        $ruang = RuangModel::find($id);
        return view('admin.master_data.ruang.detil', compact('data', 'ruang'));
    }

    public function editRuangAksi(Request $request, $id)
    {
        RuangModel::where('id', $id)->update([
        'kode_ruang' => $request->kode_ruang,
        'nama_ruang' => $request->nama_ruang,
        ]);
        
        return redirect()->route('ruang.view')->with('message', 'Data Ruang Berhasil DiUpdate!');
    }

    public function softDelete($id)
    {
        RuangModel::where('id', $id)->update([
            'hapus' => 0
        ]);
        
        return redirect()->route('ruang.view')->with('delete', 'Data Ruang Berhasil DiHapus!');
    }

    public function IndexRestore()
    {
        $data = [
            'title' => 'Page Ruang | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Ruang',
        ];

        $ruangs = RuangModel::all();
        return view('admin.master_data.ruang.restore', compact('data', 'ruangs'));
    }
    
    public function restorerg($id)
    {
        RuangModel::where('id', $id)->update([
            'hapus' => 1
        ]);

        return redirect()->route('ruang.view')->with('message', 'Data ruang Berhasil Dikambalikan!');
    }

    public function delete($id)
    {
        $ruang = RuangModel::findOrFail($id);
        $ruang->delete();

        return redirect()->route('ruang.restore')->with('delete', 'Data Berhasil Dihapus!');
    }

    
}


