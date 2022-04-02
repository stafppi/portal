<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;

class TahunAkademikController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Page Tahun Akademik | Portal PPI',
            'judul' => 'Tahun Akademik',
            'subjudul' => 'View Tahun Akademik',
        ];

        $tahun_akademiks = TahunAkademik::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.tahun_akademik.index', compact('data', 'tahun_akademiks'));  
    }

    public function tahunAkademikAdd(Request $request)
    {
        $data = new TahunAkademik();
        // $semester = $data->semester_ta = $request->semester_ta;
        // $ta = $data->tahun_akademik = $request->tahun_akademik;
        // if($semester == 'Ganjil'){
        //     $thn = $ta."10";
        //  }else{
        //      $thn = $ta."20";
        //  }
        //  dd($data);
        $data->tahun_akademik = $request->tahun_akademik;
        $data->semester_ta = $request->semester_ta;
        $data->keterangan = "Tahun Ajaran ".$data->tahun_akademik." Semester ".$data->semester_ta;
        $data->status = 1;
        $data->save();

        return redirect()->route('tahun.akademik.view')->with('massage', 'Data Tahun Akademik Berhasil Ditambahkan');

    }

    public function tahunAkademikEdit($id)
    {
        $data = [
            'title' => 'Page Tahun Akademik | Portal PPI',
            'judul' => 'Tahun Akademik',
            'subjudul' => 'Edit Tahun Akademik',
        ];
        $tahun_akademik = TahunAkademik::find($id);

        return view('admin.tahun_akademik.edit_tahun_akademik', compact('data', 'tahun_akademik')); 
    }

    public function tahunAkademikUpdate(Request $request, $id)
    {
        $data = TahunAkademik::find($id);
        $data->tahun_akademik = $request->tahun_akademik;
        $data->semester_ta = $request->semester_ta;
        $data->keterangan = "Tahun Ajaran ".$data->tahun_akademik." Semester ".$data->semester_ta;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('tahun.akademik.view')->with('massage', 'Data Tahun Akademik Berhasil Dupdate!');
    }

    public function deleteSoft($id)
    {
        TahunAkademik::where('id', $id)->update([
            'is_delete' => 0
        ]);
        
        return redirect()->route('tahun.akademik.view')->with('delete', 'Data Tahun Akademik Berhasil DiHapus!');
    }

    public function indexRestore()
    {
        $data = [
            'title' => 'Page Tahun Akademik | Portal PPI',
            'judul' => 'Tahun Akademik',
            'subjudul' => 'View Restore Tahun Akademik',
        ];

        $tahun_akademiks = TahunAkademik::orderBy ('created_at','desc') ->get();
        //Product::orderBy('created_at','desc')->get();
        return view('admin.tahun_akademik.index_restore', compact('data', 'tahun_akademiks'));  
    }

    public function taRestore($id)
    {
        TahunAkademik::where('id', $id)->update([
            'is_delete' => 1
        ]);
        
        return redirect()->route('tahun.akademik.view')->with('massage', 'Data Tahun Akademik Berhasil Dikembalikan!');
    }

    public function delete($id)
    {
        $data = TahunAkademik::find($id);
        $data->delete();

        return redirect()->route('tahun.akademik.trash')->with('delete', 'Data Berhasil Dihapus!');
    }


}
