<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Event;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Получить всех пользователей.
     *
     * @return void
     */
    public function testGetUsers()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }

    /**
     * Получить одного пользователя.
     *
     * @return void
     */
    public function testGetUser()
    {
        $users = User::all();
        $response = $this->get('/api/users/' . rand(1, count($users)));
        $response->assertStatus(200);
    }

    /**
     * Фильтрация пользователей по мероприятию.
     *
     * @return void
     */
    public function testFilterUsersByEvent()
    {
        $events = Event::all();
        $response = $this->get('/api/users/event/' . rand(1, count($events)));
        $response->assertStatus(200);
    }
}
