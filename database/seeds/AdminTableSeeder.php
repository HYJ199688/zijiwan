<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('admins')->insert([
//            'id'=>'666',
//            'name'=>'xiexie',
//            'email'=>'123@123. com',
//            'password'=>'123',
//        ]);

        DB::table('admins')->insert([
            'id'=>'3',
            'name'=>'hh',
            'email'=>'123',
            'password'=>bcrypt('123'),
        ]);
    }
}
