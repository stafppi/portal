<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_dosen_jabatan')->unsigned();
           // $table->foreign('id_dosen_jabatan')->references('id')->on('m_dosen_jabatan');
            $table->bigInteger('id_prodi')->unsigned();
           // $table->foreign('id_prodi')->references('id')->on('prodi');
            $table->string('nip', 100);
            $table->string('nidn', 100);
            $table->string('gelar_depan', 10);
            $table->string('nama', 100);
            $table->string('gelar_belakang', 10);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 20);
            $table->string('status_nikah', 20);
            $table->string('agama', 30);
            $table->string('no_telepon', 25);
            $table->string('email', 60);
            $table->string('alamat', 225);
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
        Schema::dropIfExists('dosen');
    }
}
