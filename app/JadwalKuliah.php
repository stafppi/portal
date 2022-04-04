<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = 'jadwal_kuliah';

    protected $fillable = [
        'id_tahun_akademik', 
        'id_prodi', 
        'id_semester', 
        'id_dosen', 
        'id_ruang', 
        'hari', 
        'jam_masuk', 
        'jam_keluar', 
        'is_delete',
    ];

    public function thn_akademik()
    {
        return $this->belongsTo(TahunAkademik::class, 'id_tahun_akademik', 'id');
    }

    public function jadwal_kuliah()
    {
        return $this->belongsTo(ProdiModel::class, 'id_prodi', 'id');
    }

    public function SemesterModel()
    {
        return $this->belongsTo(Semester::class, 'id_semester', 'id');
    }

    public function DosenModel()
    {
        return $this->belongsTo(DosenModel::class, 'id_dosen', 'id');
    }

    public function RuangModel()
    {
        return $this->belongsTo(RuangModel::class, 'id_ruang', 'id');
    }



    

}
