<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_el_modelo_user_tiene_el_metodo_path(): void
    {
       //arrange
       $user = User::factory()->create();

       $path = $user->path();

        $this->assertEquals('/users/' . $user->id, $path);
    }
}
