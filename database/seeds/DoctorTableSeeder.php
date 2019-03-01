<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'id'=>'1',
            'name'=>'hhs',
            'password'=>bcrypt('666'),
            'email'=>'777'
        ]);
    }
}
