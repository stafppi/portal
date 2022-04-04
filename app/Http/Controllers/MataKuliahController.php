<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataKuliahModel;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page MataKuliah | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'MataKuliah',
        ];

        $matakuliahs= MataKuliahModel::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.master_data.matakuliah.index', compact('data', 'matakuliahs'));      
    }

    public function addmatakuliahAksi (Request $request)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
            'sks' => 'required',
        ]);

        if($validatedData){
            MataKuliahModel::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
            ]);

            return redirect()->route('matakuliah.view')->with('massage', 'Data MataKuliah Berhasil Ditambahkan');
        }else{
            return redirect()->route('matakuliah.view')->with('delete', 'Data MataKuliah Gagal Ditambahkan');
        }
    }

    public function detilMataKuliah($id)
    {
        $data = [
            'title' => 'Page MataKuliah | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'MataKuliah',
        ];
        $matakuliah = MataKuliahModel::find($id);
        return view('admin.master_data.matakuliah.detil', compact('data', 'matakuliah'));
    }

    public function editMataKuliahAKsi(Request $request, $id)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
            'sks' => 'required',
        ]);

        if($validatedData){
            MataKuliahModel::where('id', $id)->update([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
            ]);

            return redirect()->route('matakuliah.view')->with('message', 'Data MataKuliah Berhasil DiUpdate!');
        }else{
            return redirect()->route('matakuliah.view')->with('delete', 'Data MataKuliah Gagal DiUpdate!');
        }
    }

    public function softDelete($id)
    {
        MataKuliahModel::where('id', $id)->update([
            'hapus' => 0
        ]);
        
        return redirect()->route('matakuliah.view')->with('delete', 'Data MataKuliah Berhasil DiHapus!');
    }

    public function IndexRestore()
    {
        $data = [
            'title' => 'Page MataKuliah | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'MataKuliah',
        ];

        $matakuliahs = MataKuliahModel::all();
        return view('admin.master_data.matakuliah.restore', compact('data', 'matakuliahs'));
    }

    public function restoremk($id)
    {
        MataKuliahModel::where('id', $id)->update([
            'hapus' => 1
        ]);

        return redirect()->route('matakuliah.view')->with('message', 'Data MataKuliah Berhasil Dikambalikan!');
    }

    public function delete($id)
    {
        $matakuliah = MataKuliahModel::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.restore')->with('delete', 'Data Berhasil Dihapus!');
    }

    
}

