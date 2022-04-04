<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;
use App\TahunAkademik;
use App\ProdiModel;
use App\Semester;
use App\Jenjang;

class PendaftarMahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Calon Mahasiswa | Portal PPI',
            'judul' => 'Resepsionis',
            'subjudul' => 'Pendaftar Mahasiswa Baru'
        ];

        $mahasiswas= MahasiswaModel::orderBy('created_at','desc')->get();
        $ta = TahunAkademik::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $jenjang = Jenjang::all();
        //dd($mahasiswas);
        return view('admin.resepsionis.pendaftar_mahasiswa.index', compact('data','ta','mahasiswas','prodis','semesters','jenjang'));
    }

    public function pendaftarAdd(Request $request)
    {
        MahasiswaModel::create([
           //'nim' => $request->nim,
            'nama' => $request->nama,
            'id_tahun_akademik' => $request->id_tahun_akademik,
            'id_prodi' => $request->id_prodi,
            'id_jenjang' => $request->id_jenjang,
            'id_semester' => 1,
            'updated_at' => date('y-m-d')
        ]);

        return redirect()->route('pendaftar.view')->with('message', 'Data Mahasiswa Berhasil ditambahkan!');
    }


    public function pendaftarDetil($id)
    {
        $data = [
            'title' => 'Page Pendafat | Portal PPI',
            'judul' => 'Resepsionis',
            'subjudul' => 'Detil Calon Mahasiswa Baru',
        ];
        $mahasiswa = MahasiswaModel::find($id);
        //dd($karyawan);
        return view('admin.resepsionis.pendaftar_mahasiswa.pendaftar_detil', compact('data', 'mahasiswa'));
    }

    public function pendaftarEdit(Request $request, $id)
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

        return redirect()->route('pendaftar.view')->with('message', 'Data Calon Mahasiswa Berhasil diupdate!');
    }

    public function softDelete($id)
    {
        MahasiswaModel::where('id', $id)->update([
            'is_delete' => 0
        ]);

        return redirect()->route('pendaftar.view')->with('delete', 'Data mahasiswa Berhasil dihapus!');
    }

    public function indexRestoreCalonMhs()
    {
        $data = [
            'title' => 'Page Mahasiswa | Portal PPI',
            'judul' => 'Resepsionis',
            'subjudul' => 'Restore Data Calon Mahasiswa Baru',
        ];
        $mahasiswas = MahasiswaModel::all();
        return view('admin.resepsionis.pendaftar_mahasiswa.restore_index', compact('data', 'mahasiswas'));
    }

    public function restoreBack($id)
    {
        MahasiswaModel::where('id', $id)->update([
            'is_delete' => 1
        ]);

        return redirect()->route('pendaftar.view')->with('message', 'Data Calon Mahasiswa Berhasil dikambalikan!');
    }

    public function delete($id)
    {
        $mahasiswa = MahasiswaModel::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('pendaftar.restore')->with('delete', 'Data Berhasil Dihapus!');
    }



    public function mhsMigrate($id)
    {
        MahasiswaModel::where('id', $id)->update([
            'mhs_status' => 'Aktif',
        ]);

        return redirect()->route('pendaftar.view')->with('message', 'Data Mahasiswa Berhasil Termigrasi!');
    }

    
}
