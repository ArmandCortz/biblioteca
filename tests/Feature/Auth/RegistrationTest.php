<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    public function test_registration_screen_can_be_rendered(): void
=======
    public function test_registration_screen_can_be_rendered()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

<<<<<<< HEAD
    public function test_new_users_can_register(): void
=======
    public function test_new_users_can_register()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
