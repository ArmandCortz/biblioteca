<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    public function test_reset_password_link_screen_can_be_rendered(): void
=======
    public function test_reset_password_link_screen_can_be_rendered()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $response = $this->get('/forgot-password');

        $response->assertStatus(200);
    }

<<<<<<< HEAD
    public function test_reset_password_link_can_be_requested(): void
=======
    public function test_reset_password_link_can_be_requested()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class);
    }

<<<<<<< HEAD
    public function test_reset_password_screen_can_be_rendered(): void
=======
    public function test_reset_password_screen_can_be_rendered()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
            $response = $this->get('/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

<<<<<<< HEAD
    public function test_password_can_be_reset_with_valid_token(): void
=======
    public function test_password_can_be_reset_with_valid_token()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post('/reset-password', [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
