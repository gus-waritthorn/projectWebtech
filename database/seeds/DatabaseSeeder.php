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
    }
}
