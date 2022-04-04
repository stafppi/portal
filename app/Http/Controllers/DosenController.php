<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DosenModel;
use App\M_DosenJabatan;
use App\ProdiModel;

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
        $jabatans = M_DosenJabatan::all();
        $prodis = ProdiModel::all();
        return view('admin.master_data.dosen.index', compact('data', 'dosens','jabatans','prodis'));
    }

    public function addDosenAksi(Request $request)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'id_dosen_jabatan' => 'required',
            'id_prodi' => 'required',
        ]);

        if($validatedData){

            DosenModel::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'id_dosen_jabatan' => $request->id_dosen_jabatan,
                'id_prodi' => $request->id_prodi,
                'updated_at' => date('y-m-d')
            ]);

            return redirect()->route('dosen.view')->with('message', 'Data Dosen Berhasil ditambahkan!');
            
        }else{

            return redirect()->route('dosen.view')->with('delete', 'Data Dosen Gagal ditambahkan!');

        }
        

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
        return view('admin.master_data.dosen.detil', compact('data', 'dosen'));
    }

    public function editDosenAksi(Request $request, $id)
    {
        //VALIDATION DATA RESPONSE
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        if($validatedData){

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
            return redirect()->route('dosen.view')->with('message', 'Data Dosen Berhasil diupdate!');
        }else{
            return redirect()->route('dosen.view')->with('delete', 'Data Dosen Gagal diupdate!');
        }

        //dd($data);

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
        return view('admin.master_data.dosen.restore', compact('data', 'dosens'));
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



//SEGEMENT DOSEN JABATAN
    public function jabatan()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Jabatan Dosen'
        ];

        $jabatans = M_DosenJabatan::orderBy('created_at', 'desc')->get();

        return view('admin.master_data.dosen.jabatan', compact('data', 'jabatans'));
    }

    public function jabatanAdd(Request $request)
    {
        $validatedData = $request->validate([
            'jabatan' => 'required',
            'tunjangan_jabatan' => 'required',
            'tunjangan_sks' => 'required',
            'jumlah_komulatif_maksimal' => 'required',
        ]);

        if($validatedData){

            $jabatan = new M_DosenJabatan();
            $jabatan->jabatan = $request->jabatan;
            $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
            $jabatan->tunjangan_sks = $request->tunjangan_sks;
            $jabatan->jumlah_komulatif_maksimal = $jabatan->tunjangan_jabatan + $jabatan->tunjangan_sks;
            $jabatan->save();

            return redirect()->route('jabatan.dosen.view')->with('message', 'Data Jabatan Berhasil Disimpan!');
        }else{
            return redirect()->route('jabatan.dosen.view')->with('delete', 'Data Jabatan Gagal Disimpan!');
        }


    }

    public function jabatanEdit($id)
    {
        $data = [
            'title' => 'Page Dosen Jabatan | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Edit Jabatan Dosen'
        ];

        $jabatan = M_DosenJabatan::find($id);
        
        return view('admin.master_data.dosen.jabatan_edit', compact('data', 'jabatan'));
    }

    public function jabatanUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jabatan' => 'required',
            'tunjangan_jabatan' => 'required',
            'tunjangan_sks' => 'required',
            'jumlah_komulatif_maksimal' => 'required',
        ]);

        if($validatedData){
            $jabatan = M_DosenJabatan::find($id);
            $jabatan->jabatan = $request->jabatan;
            $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
            $jabatan->tunjangan_sks = $request->tunjangan_sks;
            $jabatan->jumlah_komulatif_maksimal = $jabatan->tunjangan_jabatan + $jabatan->tunjangan_sks;
            $jabatan->save();

            return redirect()->route('jabatan.dosen.view')->with('message', 'Data Jabatan Berhasil Diupdate!');
        }else{
            return redirect()->route('jabatan.dosen.view')->with('delete', 'Data Jabatan Gagal Diupdate!');
        }

    }

    public function isDelete($id)
    {
        M_DosenJabatan::where('id', $id)->update([
            'is_delete' => 0
        ]);

        return redirect()->route('jabatan.dosen.view')->with('delete', 'Data Jabatan Berhasil dihapus!');
    }

    public function jabatanIndexRestore()
    {
        $data = [
            'title' => 'Page Dosen Jabatan | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Trash Jabatan Dosen'
        ];

        $jabatans = M_DosenJabatan::all();
        
        return view('admin.master_data.dosen.jabatan_restore', compact('data', 'jabatans'));
    }

    public function jabatanDelete($id)
    {
        $jabatan = M_DosenJabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.restore.view')->with('delete', 'Data Berhasil Dihapus!');
    }



//SEGEMENT DOSEN PEMBIMBING
    public function dosenPembimbing()
    {
        $data = [
            'title' => 'Page Dosen | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Dosen Pembimbing'
        ];
        return view('admin.master_data.dosen.dosen-pembimbing', compact('data'));
    }
}
