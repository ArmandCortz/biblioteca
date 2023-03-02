<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    public function test_login_screen_can_be_rendered(): void
=======
    public function test_login_screen_can_be_rendered()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

<<<<<<< HEAD
    public function test_users_can_authenticate_using_the_login_screen(): void
=======
    public function test_users_can_authenticate_using_the_login_screen()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

<<<<<<< HEAD
    public function test_users_can_not_authenticate_with_invalid_password(): void
=======
    public function test_users_can_not_authenticate_with_invalid_password()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
