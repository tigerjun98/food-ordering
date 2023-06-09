<?php

namespace Tests\Feature\Auth;

use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    // use RefreshDatabase;
    use DatabaseTransactions;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get(route('admin.login'));

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = Admin::factory()->create();
        $response = $this->postJson( route('admin.submit-login'), [
            'email' => $user->email,
            'password' => '123123',
        ]);

        $this->assertAuthenticated('admin');
        $response->assertStatus(201);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->postJson('/admin/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
