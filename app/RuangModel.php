<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangModel extends Model
{
    protected $table = 'ruang';

    protected $fillable = [
        'kode_ruang',
        'nama_ruang',
    ];
    
}
