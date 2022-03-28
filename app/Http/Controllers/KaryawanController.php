<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KaryawanModel;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Karyawan | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Karyawan',
        ];
        $karyawans = KaryawanModel::orderBy('created_at', 'desc')->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.master_data.karyawan.index', compact('data', 'karyawans'));
    }

    public function addKaryawanAksi(Request $request)
    {
        //VALIDATION DATA RESPONSE
        // $validatedData = $request->validate([
        //     'nama' => 'required|unique:posts|max:100',
        //     'body' => 'required',
        // ]);

        KaryawanModel::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'delete' => 1,
            'updated_at' => date('y-m-d')
        ]);

        return redirect()->route('karyawan.view')->with('message', 'Data Karyawan Berhasil ditambahkan!');
    }

    public function detilKaryawan($id)
    {
        $data = [
            'title' => 'Page Karyawan | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Detil Karyawan',
        ];
        $karyawan = KaryawanModel::find($id);
        //dd($karyawan);
        return view('admin.master_data.karyawan.detil', compact('data', 'karyawan'));
    }

    public function editKaryawanAksi(Request $request, $id)
    {
        KaryawanModel::where('id', $id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'updated_at' => date('y-m-d')
        ]);

        //dd($data);

        return redirect()->route('karyawan.view')->with('message', 'Data Karyawan Berhasil diupdate!');
    }

    public function softDelete(Request $request, $id)
    {
        KaryawanModel::where('id', $id)->update([
            'delete' => 0
        ]);

        return redirect()->route('karyawan.view')->with('delete', 'Data Karywan Berhasil Dihapus!');
    }

    public function indexRestore()
    {
        $data = [
            'title' => 'Page Karyawan | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Restore Data Karyawan',
        ];
        $karyawans = KaryawanModel::all();
        return view('admin.master_data.karyawan.restore', compact('data', 'karyawans'));
    }

    public function restore(Request $request, $id)
    {
        KaryawanModel::where('id', $id)->update([
            'delete' => 1
        ]);

        return redirect()->route('karyawan.view')->with('message', 'Data Karyawan Berhasil diRestore');
    }

    public function delete($id)
    {
        $karyawan = KaryawanModel::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.restore')->with('delete', 'Data Berhasil Dihapus!');
    }



}

