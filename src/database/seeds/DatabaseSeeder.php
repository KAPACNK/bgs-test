<?php

use App\EventUser;
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
        $this->call(UsersTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(EventUserTableSeeder::class);
    }
}
