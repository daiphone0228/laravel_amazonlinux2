<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert admin user
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'daiphone0228@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
