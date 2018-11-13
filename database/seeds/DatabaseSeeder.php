<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */users
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}
