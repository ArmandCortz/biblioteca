<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
=======
use Illuminate\Http\Request;
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
<<<<<<< HEAD
     */
    public function __invoke(Request $request): RedirectResponse|View
=======
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-email');
    }
}
