<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdiModel;

class ProdiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Prodi | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Prodi',
        ];

        $prodis= ProdiModel::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.master_data.prodi.index', compact('data', 'prodis'));      
    }

    public function addProdiAksi(Request $request)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
            'jenjang' => 'required',
            'akreditasi' => 'required',
        ]);

        if($validatedData){
            ProdiModel::create([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'jenjang' => $request->jenjang,
            'akreditasi' => $request->akreditasi,
            ]);

            return redirect()->route('prodi.view')->with('massage', 'Data Prodi Berhasil Ditambahkan');
        }else{
            return redirect()->route('prodi.view')->with('delete', 'Data Prodi Gagal Ditambahkan');
        }
    }

    public function detilProdi($id)
    {
        $data = [
            'title' => 'Page Prodi | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Prodi',
        ];
        $prodi = ProdiModel::find($id);
        return view('admin.master_data.prodi.detil', compact('data', 'prodi'));
    }

    public function editProdiAKsi(Request $request, $id)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
            'jenjang' => 'required',
            'akreditasi' => 'required',
        ]);
        
        if($validatedData){
            ProdiModel::where('id', $id)->update([
               'kode_prodi' => $request->kode_prodi,
               'nama_prodi' => $request->nama_prodi,
               'jenjang' => $request->jenjang,
               'akreditasi' => $request->akreditasi,
           ]);
           return redirect()->route('prodi.view')->with('message', 'Data Prodi Berhasil DiUpdate!');
        }else{
            return redirect()->route('prodi.view')->with('delete', 'Data Prodi Gagal DiUpdate!');
        }
    }

    public function softDelete($id)
    {
        ProdiModel::where('id', $id)->update([
            'hapus' => 0
        ]);
        
        return redirect()->route('prodi.view')->with('delete', 'Data Prodi Berhasil DiHapus!');
    }

    public function IndexRestore()
    {
        $data = [
            'title' => 'Page Prodi | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Prodi',
        ];

        $prodis = ProdiModel::all();
        return view('admin.master_data.Prodi.restore', compact('data', 'prodis'));
    }
    
    public function restorePrd($id)
    {
        ProdiModel::where('id', $id)->update([
            'hapus' => 1
        ]);

        return redirect()->route('prodi.view')->with('message', 'Data Prodi Berhasil Dikambalikan!');
    }

    public function delete($id)
    {
        $prodi = ProdiModel::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.restore')->with('delete', 'Data Berhasil Dihapus!');
    }

    
}

