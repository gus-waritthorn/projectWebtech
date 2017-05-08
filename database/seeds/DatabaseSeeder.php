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

        //add admin user
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

        //add student user
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

        //add promotion
        App\Promotion::create([
            'no' => '1',
            'path' => 'promotion1.jpg'
        ]);
        App\Promotion::create([
            'no' => '2',
            'path' => 'promotion2.jpg'
        ]);
        App\Promotion::create([
            'no' => '3',
            'path' => 'promotion3.png'
        ]);

        //add video
        App\Vdo::create([
            'no' => '1',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);
        App\Vdo::create([
            'no' => '2',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);
        App\Vdo::create([
            'no' => '3',
            'path' => 'https://www.youtube.com/embed/G4cJ4wviwS8'
        ]);

        //add teacher
        App\Teacher::create([
            'no' => '1',
            'path' => 'fat.png',
            'name' => 'Maneenuch',
            'description' =>'The Mask Singer Commentator',
        ]);
        App\Teacher::create([
            'no' => '2',
            'path' => 'jane.jpg',
            'name' => 'Jannifer',
            'description' =>'The Voice Coach',
        ]);
        App\Teacher::create([
            'no' => '3',
            'path' => 'space.jpg',
            'name' => 'Jakkawan',
            'description' =>'The Mask Singer Commentator',
        ]);

        App\Course::create([
            'id' => '1',
            'name' => 'Guitar',
            'numday' => '4',
            'price' => '1500',
            'level' => 'Beginner',
            'path' => 'guitarcourses1.jpg'
        ]);

        App\Course::create([
            'id' => '2',
            'name' => 'Piano',
            'numday' => '4',
            'price' => '1750',
            'level' => 'Beginner',
            'path' => 'pianocourses1.jpg'
        ]);

        App\Course::create([
            'id' => '3',
            'name' => 'Voice',
            'numday' => '4',
            'price' => '2000',
            'level' => 'Beginner',
            'path' => 'singingcourses1.jpg'
        ]);
    }
}
