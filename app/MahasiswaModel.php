<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = [
        'nim', 
        'nama', 
        'id_tahun_akademik',
        'id_jenjang', 
        'id_prodi', 
        'id_semester', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'agama', 
        'email', 
        'no_telepon', 
        'alamat', 
        
    ];

    public function prodi_model()
    {
        return $this->belongsTo(ProdiModel::class,'id_prodi','id');
    }

    public function ta()
    {
        return $this->belongsTo(TahunAkademik::class,'id_tahun_akademik','id');
    }
}
