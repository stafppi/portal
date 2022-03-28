<?php

use Illuminate\Database\Seeder;

class DosenJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // data faker 
         $jabatan = 'Ketua';
         $tunjangan_jabatan = 1000000;
         $tunjangan_sks = 200000;
         $jml_komulatif_maksimal = $tunjangan_jabatan + $tunjangan_sks;
 
  
             // insert data dummy m_dosen_jabatan dengan faker
             DB::table('m_dosen_jabatan')->insert([
                 'jabatan' => $jabatan,
                 'tunjangan_jabatan' => $tunjangan_jabatan,
                 'tunjangan_sks' => $tunjangan_sks,
                 'jumlah_komulatif_maksimal' => $jml_komulatif_maksimal,
                 'created_at' => date('y-m-d')
             ]);
    }
}
