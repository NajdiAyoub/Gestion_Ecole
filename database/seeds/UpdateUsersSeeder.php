<?php

use Illuminate\Database\Seeder;

class UpdateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->where('email', 'najdiayoub68@gmail.com')->update(['password' => '789']);

    }
}
