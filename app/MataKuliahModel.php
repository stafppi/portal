<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    protected $table = "matakuliah";

    protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'sks',
    ];
}
