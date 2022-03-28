<?php

use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $semester = 'SEMESTER 1';

        for($x = 1; $x <= 8; $x++){
            // insert data dummy karyawan dengan faker
            DB::table('semesters')->insert([
                'semester' => $semester,
                'created_at' => date('y-m-d')
            ]);
        }
    }
}
