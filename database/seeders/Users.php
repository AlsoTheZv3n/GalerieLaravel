<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'role' => 'Benutzer',
            ],

            [
                'username' => 'Sweid',
                'lastname' => 'Weidenmann',
                'firstname' => 'Sven',
                'role' => 'Admin',
            ],
            
        ]);
    }
}
