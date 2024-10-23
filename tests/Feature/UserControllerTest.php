<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_show_user_details(): void
    {
        $user = User::factory()->create(['name' => 'Pedro']);

        $response = $this->get($user->path());

        $response->assertStatus(200)
           ->assertJsonPath('id', $user->id)
            ->assertJsonPath('name', 'Pedro');

    
        

    }
}
