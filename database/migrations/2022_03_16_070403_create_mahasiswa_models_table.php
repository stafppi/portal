<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_prodi')->unsigned();
            $table->bigInteger('id_semester')->unsigned();
            $table->bigInteger('id_jenjang')->unsigned();
            $table->string('nim', 30);
            $table->string('nama', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 20);
            $table->string('agama', 30);
            $table->string('no_telepon', 25);
            $table->string('email', 60);
            $table->string('alamat', 225);
            $table->string('status', 20);
            $table->string('photo', 225);
            $table->string('password', 225);
            $table->string('remember_token', 225);
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
        Schema::dropIfExists('mahasiswa');
    }
}
