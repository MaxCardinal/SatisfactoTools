<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Log;

class LogTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_log_can_list()
    {
        $logs = factory(Log::class, 10)->create();

        $this->getJson('/api/logs')
             ->assertStatus(200)
             ->assertJson($logs->toArray());
    }

    public function test_log_can_get_list_of_specific_user()
    {
        $user = factory(\App\User::class)->create();
        $logs = factory(Log::class, 10)->create([
            'user_id' => $user->id,
        ]);

        $this->getJson('/api/users/' . $user->id . "/logs")
             ->assertStatus(200)
             ->assertJson($logs->toArray());

    }
}
