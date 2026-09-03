<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_log_out(): void
    {
        $user = User::create([
            'name' => 'testUser',
            'email' => 'test@mail.ru',
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->post(route('logout'));

        $response->assertRedirect('/');

        $this->assertGuest();
    }
}
