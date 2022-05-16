<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Muhammad Alvito Aditya',
                'username' => 'vitoooo',
                'password' => \bcrypt('alvitoganteng'),
                'avatar' => 'localhost:8000/images',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
                'email' => 'alvito@gmail.com'
            ],
        ];

        // 1 method
        // foreach ($users as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2 method
        User::insert($users);
    }
}
