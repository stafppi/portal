<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;
use App\ProdiModel;
use App\Semester;
use App\Jenjang;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Mahasiswa'
        ];
        $mahasiswas= MahasiswaModel::orderBy ('created_at','desc')->get();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $jenjang = Jenjang::all();
        //dd($mahasiswas);
        return view('admin.master_data.mahasiswa.index', compact('data','mahasiswas','prodis','semesters','jenjang'));
    }

    public function addMahasiswaAksi (Request $request)
    {
        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'id_prodi' => $request->id_prodi,
            'id_jenjang' => $request->id_jenjang,
            'id_semester' => 1,
            'updated_at' => date('y-m-d')
        ]);

        return redirect()->route('mahasiswa.view')->with('message', 'Data Mahasiswa Berhasil ditambahkan!');
    }


    public function detilMahasiswa($id)
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Detil Mahasiswa',
        ];
        $mahasiswa = MahasiswaModel::find($id);
        //dd($karyawan);
        return view('admin.master_data.mahasiswa.detil', compact('data', 'mahasiswa'));
    }

    public function editMahasiswaAksi(Request $request, $id)
    {
        MahasiswaModel::where('id', $id)->update([
            //'nim' => $request->nim,
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

        return redirect()->route('mahasiswa.view')->with('message', 'Data mahasiswa Berhasil diupdate!');
    }

    public function softDelete($id)
    {
        MahasiswaModel::where('id', $id)->update([
            'is_delete' => 0
        ]);

        return redirect()->route('mahasiswa.view')->with('delete', 'Data mahasiswa Berhasil dihapus!');
    }

    public function indexRestore()
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Master Data',
            'subjudul' => 'Restore Data Mahasiswa',
        ];
        $mahasiswas = MahasiswaModel::all();
        return view('admin.master_data.mahasiswa.restore', compact('data', 'mahasiswas'));
    }

    public function restoreMhs($id)
    {
        MahasiswaModel::where('id', $id)->update([
            'is_delete' => 1
        ]);

        return redirect()->route('mahasiswa.view')->with('message', 'Data mahasiswa Berhasil dikambalikan!');
    }

    public function delete($id)
    {
        $mahasiswa = MahasiswaModel::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.restore')->with('delete', 'Data Berhasil Dihapus!');
    }

    
}
