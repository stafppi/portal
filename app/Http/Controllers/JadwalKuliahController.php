<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalKuliah;
use App\TahunAkademik;
use App\DosenModel;
use App\ProdiModel;
use App\Semester;
use App\RuangModel;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Jadwal | Portal PPI',
            'judul' => 'BAK',
            'subjudul' => 'Page Jadwal'
        ];

        $jadwalKuliah = JadwalKuliah::orderBy('created_at', 'desc')->get();
        $ta = TahunAkademik::all();
        $dosens = DosenModel::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $ruangs = RuangModel::all();
        return view('admin.bak.jadwal.index_jadwal', compact('data', 'jadwalKuliah', 'ta', 'dosens', 'prodis', 'semesters', 'ruangs'));
    }

    public function jadwalKuliahAdd(Request $request)
    {
        $validate = $request->validate([
            'id_tahun_akademik' => 'required',
            'id_prodi' => 'required',
            'id_semester' => 'required',
            'id_dosen' => 'required',
            'id_ruang' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);

        if($validate){

            $data = new JadwalKuliah();
            $data->id_tahun_akademik = $request->id_tahun_akademik;
            $data->id_prodi = $request->id_prodi;
            $data->id_semester = $request->id_semester;
            $data->id_dosen = $request->id_dosen;
            $data->id_ruang = $request->id_ruang;
            $data->hari = $request->hari;
            $data->jam_masuk = $request->jam_masuk;
            $data->jam_keluar = $request->jam_keluar;
            $data->save();

            return redirect()->route('jadwal.kuliah')->with('message', 'Data Jadwal Kuliah Berhasil ditambahkan!');
        }else{
            return redirect()->route('jadwal.kuliah')->with('delete', '"Error!" Data Gagal Disimpan, Isi data dengan lengkap!');
        }


    }

    public function jadwalKuliahEdit($id)
    {
        $data = [
            'title' => 'Page Edit Jadwal | Portal PPI',
            'judul' => 'BAK',
            'subjudul' => 'Edit Jadwal Kuliah'
        ];

        $jadwalKuliah = JadwalKuliah::find($id);
        $dosens = DosenModel::all();
        $ta = TahunAkademik::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $ruangs = RuangModel::all();
        return view('admin.bak.jadwal.edit_jadwal_kuliah', compact('data', 'jadwalKuliah', 'ta', 'dosens', 'prodis', 'semesters', 'ruangs'));
        // compact('data', 'jadwalKuliah', 'dosens', 'prodis', 'semesters', 'ruangs')
    }

    public function jadwalKuliahUpdate(Request $request, $id)
    {
        $request->validate([
            'id_prodi' => 'required',
            'id_semester' => 'required',
            'id_dosen' => 'required',
            'id_ruang' => 'required',
            'hari' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);

        $data = JadwalKuliah::find($id);
        $data->id_prodi = $request->id_prodi;
        $data->id_semester = $request->id_semester;
        $data->id_dosen = $request->id_dosen;
        $data->id_ruang = $request->id_ruang;
        $data->hari = $request->hari;
        $data->jam_masuk = $request->jam_masuk;
        $data->jam_keluar = $request->jam_keluar;
        $save = $data->save();

        if($save){
            return redirect()->route('jadwal.kuliah')->with('message', 'Data Jadwal Kuliah Berhasil Diupdate!');
        }else{
            return redirect()->route('jadwal.kuliah')->with('delete', 'Data Jadwal Kuliah Gagal Diupdate!');
        }
    }

    public function jadwalKuliahTrash()
    {
        $data = [
            'title' => 'Page Jadwal | Portal PPI',
            'judul' => 'BAK',
            'subjudul' => 'Restore Jadwal Kuliah'
        ];

        $jadwalKuliah = JadwalKuliah::orderBy('created_at', 'desc')->get();
        $ta = TahunAkademik::all();
        $dosens = DosenModel::all();
        $prodis = ProdiModel::all();
        $semesters = Semester::all();
        $ruangs = RuangModel::all();

        return view('admin.bak.jadwal.index_restore', compact('data', 'jadwalKuliah', 'ta', 'dosens', 'prodis', 'semesters', 'ruangs'));
    }

    public function jadwalKuliahSoftDelete($id)
    {
        JadwalKuliah::where('id', $id)->update([
            'is_delete' => 0
        ]);

        return redirect()->route('jadwal.kuliah')->with('delete', 'Data Jadwal Kuliah Berhasil dihapus!');
    }

    public function jadwalKuliahRestore($id)
    {
        JadwalKuliah::where('id', $id)->update([
            'is_delete' => 1
        ]);

        return redirect()->route('jadwal.kuliah')->with('delete', 'Data Jadwal Kuliah Berhasil dikambalikan!');
    }

    public function jadwalKuliahDelete($id)
    {
        $data = JadwalKuliah::find($id);
        $data->delete();

        return redirect()->route('jadwal.kuliah.trash')->with('delete', 'Jadwal Kuliah Berhasil Dihapus PERMANEN!');
    }





}
