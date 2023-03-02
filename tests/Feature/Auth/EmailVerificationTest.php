<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< HEAD
    public function test_email_verification_screen_can_be_rendered(): void
=======
    public function test_email_verification_screen_can_be_rendered()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($user)->get('/verify-email');

        $response->assertStatus(200);
    }

<<<<<<< HEAD
    public function test_email_can_be_verified(): void
=======
    public function test_email_can_be_verified()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        Event::fake();

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        $response = $this->actingAs($user)->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($user->fresh()->hasVerifiedEmail());
        $response->assertRedirect(RouteServiceProvider::HOME.'?verified=1');
    }

<<<<<<< HEAD
    public function test_email_is_not_verified_with_invalid_hash(): void
=======
    public function test_email_is_not_verified_with_invalid_hash()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($user)->get($verificationUrl);

        $this->assertFalse($user->fresh()->hasVerifiedEmail());
    }
}
