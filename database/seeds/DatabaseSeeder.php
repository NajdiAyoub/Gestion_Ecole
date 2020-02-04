<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('email', 'najdiayoub68@gmail.com')->update(['password' => '789']);

        $this->call(CreateUsersSeeder::class);
    }
}
