<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DosenModel;

class DosenController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Dosen'
        ];

        $dosens = DosenModel::orderBy('created_at', 'desc')->get();
        return view('dosen.index', compact('data', 'dosens'));
    }

    public function addDosenAksi(Request $request)
    {
        //VALIDATION DATA RESPONSE
        // $validatedData = $request->validate([
        //     'nama' => 'required|unique:posts|max:100',
        //     'body' => 'required',
        // ]);

        DosenModel::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'hapus' => 1,
            'updated_at' => date('y-m-d')
        ]);

        return redirect()->route('dosen.view')->with('message', 'Data Dosen Berhasil ditambahkan!');
    }

    public function detilDosen($id)
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Detil Dosen',
        ];
        $dosen = DosenModel::find($id);
        //dd($karyawan);
        return view('dosen.detil', compact('data', 'dosen'));
    }

    public function editDosenAksi(Request $request, $id)
    {
        DosenModel::where('id', $id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'updated_at' => date('y-m-d')
        ]);

        //dd($data);

        return redirect()->route('dosen.view')->with('message', 'Data Dosen Berhasil diupdate!');
    }

    public function softDelete($id)
    {
        DosenModel::where('id', $id)->update([
            'hapus' => 0
        ]);

        return redirect()->route('dosen.view')->with('delete', 'Data Dosen Berhasil dihapus!');
    }

    public function indexRestore()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Restore Data Dosen',
        ];
        $dosens = DosenModel::all();
        return view('dosen.restore', compact('data', 'dosens'));
    }

    public function restore($id)
    {
        DosenModel::where('id', $id)->update([
            'hapus' => 1
        ]);

        return redirect()->route('dosen.view')->with('message', 'Data Dosen Berhasil dikambalikan!');
    }

    public function delete($id)
    {
        $dosen = DosenModel::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.restore')->with('delete', 'Data Berhasil Dihapus!');
    }

    public function jabatan()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Jabatan Dosen'
        ];
        return view('dosen.jabatan', compact('data'));
    }

    public function dosenPembimbing()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Dosen Pembimbing'
        ];
        return view('dosen.dosen-pembimbing', compact('data'));
    }
}
