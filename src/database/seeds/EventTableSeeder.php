<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1585699200 - 1590969600
        for ($i = 0; $i < 15; $i++) {
            DB::table('event')->insert([
                'name' => 'Event_name_'.Str::random(7),
                'date' => rand(1585699200, 1590969600),
                'city' => 'Санкт-Петербург',
            ]);
        }

    }
}
