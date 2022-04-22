<?php

use App\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = Roles::create(['name' => 'admin']);
        $user   = Roles::create(['name' => 'user']);
        $author = Roles::create(['name' => 'author']);
    }
}
