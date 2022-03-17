<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
        'nama', 
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
