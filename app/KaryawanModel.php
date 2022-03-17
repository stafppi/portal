<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    protected $table = "karyawan";

    protected $fillable = [
        'nama', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'agama', 
        'no_telepon', 
        'alamat', 
        'delete',
    ];
}
