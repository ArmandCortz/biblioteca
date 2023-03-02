<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
=======
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
<<<<<<< HEAD
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
=======
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
