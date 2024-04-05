<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> "Timo van den Berg",
            'email'=>"timo@gemail.nl",
            'password'=>bcrypt('timo1234'),
            'role'=>"Admin",
        ]);

        DB::table('users')->insert([
            'name'=> "Mark Rutte",
            'email'=>"mk@gemail.nl",
            'password'=>bcrypt('markrutte1234'),
            'role'=>"User",
        ]);
    }
}
