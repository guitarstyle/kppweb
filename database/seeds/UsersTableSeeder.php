<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Thanawat',
            'surename' => 'Kamkuntod',
            'email' => 'admin@guitardev.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qweasd2525'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
