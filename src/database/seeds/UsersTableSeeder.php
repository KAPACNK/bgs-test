<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('user')->insert([
                'email' => Str::random(7) . '@mail.ru',
                'first_name' => Str::random(7),
                'last_name' => Str::random(7),
            ]);
        }
    }
}
