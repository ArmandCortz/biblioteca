<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
<<<<<<< HEAD
     */
    public function create(): View
=======
     *
     * @return \Illuminate\View\View
     */
    public function create()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
<<<<<<< HEAD
     */
    public function store(LoginRequest $request): RedirectResponse
=======
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
<<<<<<< HEAD
     */
    public function destroy(Request $request): RedirectResponse
=======
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
