<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Author',
            'role_id' => 1,
            'email' => 'kumaramk1999@gmail.com',
            'password' => bcrypt('kumaranM@1'),
        ]);
        $user = User::create([
            'name' => 'user',
            'role_id' => 2,
            'email' => 'kumaran1999@gmail.com',
            'password' => bcrypt('kumaranM@1'),
        ]);
    }
}
