<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function register_get_route()
    {
        $response = $this->get('register')
            ->assertStatus(200);
    }

    /** @test */
    public function register_post_route()
    {
        $data = factory(User::class)->make()->toArray();
        $data['password'] = 'admin123';
        $data['password_confirmation'] = 'admin123';
        
        $response = $this->post('register', $data)
            ->assertRedirect('/home');

        $this->assertDatabaseHas('users', ['email' => $data['email']]);
    }
}
