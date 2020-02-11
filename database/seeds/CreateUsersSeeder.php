<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'najdi14.ayoub@gmail.com',
                'Role'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'najdiayoub68@gmail.com',
                'Role'=>2,
               'password'=> bcrypt('123456'),
            ],

            [
               'name'=>'User',
                'email'=>'CharlezWilliams@gmail.com',
                 'Role'=>3,
                'password'=> bcrypt('123456'),
             ],

        ];
  
        foreach ($user as $key => $value) {

            User::create($value);
       }
    }

}