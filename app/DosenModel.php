<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
        'id_dosen_jabatan', 
        'id_prodi', 
        'nama', 
        'nip', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'agama', 
        'email', 
        'no_telepon', 
        'alamat', 
        'hapus',
    ];
}
