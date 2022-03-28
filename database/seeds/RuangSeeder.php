<?php

use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $kd_ruang = 'R001';
        $ruang = 'Gedung A';

 
            // insert data dummy karyawan dengan faker
            DB::table('ruangs')->insert([
                'kode_ruang' => $kd_ruang,
                'ruang' => $ruang,
                'created_at' => date('y-m-d')
            ]);
 
    }
}
