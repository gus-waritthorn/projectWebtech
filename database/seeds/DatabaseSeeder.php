<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //create admin user
        App\User::create([
            'id' => '1',
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$B6R/MGVkF9QM.oxGlaoO8.1GxMEiua3JILJFfo.WzYFfr.KnyqbPW',
            'point' => '100',
            'pathimg' => 'https://wog.ua/images/user_icon.png',
            'role' => 'admin'
        ]);

        //create student user
        App\User::create([
            'id' => '2',
            'fname' => 'student',
            'lname' => 'student',
            'email' => 'student@example.com',
            'password' => '$2y$10$b81y.gp3Mvqe3/ED6sWnROt9bYQwmhIOKCADpnOUbxLFugYYn3.EG',
            'point' => '100',
            'pathimg' => 'https://wog.ua/images/user_icon.png',
            'role' => 'std'
        ]);
    }
}
