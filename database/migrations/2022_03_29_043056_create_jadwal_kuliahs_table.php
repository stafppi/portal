<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tahun_akademik');
            $table->bigInteger('id_prodi');
            $table->bigInteger('id_semester');
            $table->bigInteger('id_dosen');
            $table->bigInteger('id_ruang');
            $table->bigInteger('hari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
}
