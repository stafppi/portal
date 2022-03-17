<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 30; $x++){
 
        	// insert data dummy karyawan dengan faker
        	DB::table('pegawai')->insert([
        		'nama' => $faker->name,
        		'tempat_lahir' => $faker->state,
        		'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'jenis_kelamin' => '',
                'agama' => '',
        		'no_telepon' => $faker->phoneNumber,
        		'alamat' => $faker->address,
        	]);
 
        }
    }
}
