<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDosenJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_dosen_jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan', 50);
            $table->string('tunjangan_jabatan', 50);
            $table->string('tunjangan_sks', 50);
            $table->string('jumlah_komulatif_maksimal', 50);
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
        Schema::dropIfExists('m_dosen_jabatan');
    }
}
