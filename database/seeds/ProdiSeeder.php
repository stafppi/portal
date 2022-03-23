<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // data faker indonesia
         $kd_prodi = 'AK001';
         $prodi = 'Akuntansi';
         $jenjang = 'S1';
         $akreditasi = 'A';
 
  
             // insert data dummy karyawan dengan faker
             DB::table('prodi')->insert([
                 'kode_prodi' => $kd_prodi,
                 'prodi' => $prodi,
                 'jenjang' => $jenjang,
                 'akreditasi' => $akreditasi,
                 'created_at' => date('y-m-d')
             ]);
  
         
    }
}
