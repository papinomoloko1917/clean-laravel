<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_log_in(): void
    {
        $user = User::create([
            'name' => 'testUser',
            'email' => 'test@mail.ru',
            'password' => 'test_password',
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'test@mail.ru',
            'password' => 'test_password',
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
    }

    public function test_a_user_cannot_log_in_with_an_invalid_password(): void
    {
        User::create([
            'name' => 'testUser',
            'email' => 'test@mail.ru',
            'password' => 'password',
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'test@mail.ru',
            'password' => 'password_failure',
        ]);

        $response->assertSessionHasErrors('email');

        $this->assertGuest();
    }

    public function test_a_user_can_log_in_with_remember_me(): void
    {
        $user = User::create([
            'name' => 'testUser',
            'email' => 'test@mail.ru',
            'password' => 'password',
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'test@mail.ru',
            'password' => 'password',
            'remember' => '1',
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticatedAs($user);

        $response->assertCookie(
            Auth::guard()->getRecallerName()
        );

        $this->assertNotNull($user->fresh()->remember_token);
    }

    public function test_login_page_is_displayed(): void
    {
        $response = $this->get(route('login'));

        $response->assertOk();

        $response->assertSee('Войти в аккаунт');
    }

    public function test_an_authenticated_user_cannot_view_the_login_page(): void
    {
        $user = User::create([
            'name' => 'testUser',
            'email' => 'test@mail.ru',
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->get(route('login'));

        $response->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
    }
}
