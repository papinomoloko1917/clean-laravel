<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_page_is_displayed(): void
    {
        $response = $this->get('/register');

        $response->assertOk();
    }

    public function test_a_guest_can_register(): void
    {
        $response = $this->post(route('register.store'), [
            'name' => 'testUser',
            'email' => 'test@test.ru',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticated();

        $this->assertDatabaseHas('users', [
            'name' => 'testUser',
            'email' => 'test@test.ru',
        ]);
    }

    public function test_a_guest_cannot_register_when_password_confirmation_does_not_match(): void
    {
        $response = $this->post(route('register.store'), [
            'name' => 'testUser',
            'email' => 'test@test.ru',
            'password' => 'password',
            'password_confirmation' => 'password_failure',
        ]);

        $response->assertSessionHasErrors('password');

        $this->assertGuest();

        $this->assertDatabaseMissing('users', [
            'email' => 'test@test.ru',
        ]);
    }

    public function test_a_guest_cannot_register_with_an_existing_email(): void
    {
        User::create([
            'name' => 'testUser',
            'email' => 'test@test.ru',
            'password' => 'password',
        ]);

        $response = $this->post(route('register.store'), [
            'name' => 'testUser',
            'email' => 'test@test.ru',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertGuest();

        $this->assertDatabaseCount('users', 1);
    }

    public function test_an_authenticated_user_cannot_view_the_registration_page(): void
    {
        $user = User::create([
            'name' => 'testUser',
            'email' => 'test@test.ru',
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->get(route('register'));

        $response->assertRedirect('/');
    }
}
