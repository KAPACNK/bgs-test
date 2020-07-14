<?php

use App\Event;
use App\EventUser;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $events = Event::all();

        $user_id = rand(1, count($users));
        $event_id = rand(1, count($events));

        for ($i = 0; $i < 50; $i++) {
            $event_user = EventUser::where('user_id', $user_id)->where('event_id', $event_id)->first();
            while($event_user){
                $user_id = rand(1, count($users));
                $event_id = rand(1, count($events));
                $event_user = EventUser::where('user_id', $user_id)->where('event_id', $event_id)->first();
            }

            DB::table('event_user')->insert([
                'user_id' => $user_id,
                'event_id' => $event_id,
            ]);
        }
    }
}
