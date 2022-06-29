<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'username' => 'HansPet',
                'lastname' => 'Hans',
                'firstname' => 'Peter',
                'password' => bcrypt(12345678),
                'role_id' => '2',
            ],

            [
                'username' => 'Sweid',
                'lastname' => 'Weidenmann',
                'firstname' => 'Sven',
                'password' => bcrypt(12345678),
                'role_id' => '1',
            ],
            
        ]);
    }
}
