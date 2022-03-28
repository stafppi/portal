<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiModel extends Model
{
    protected $table = "prodi";

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'jenjang',
        'akreditasi',
    ];
}
