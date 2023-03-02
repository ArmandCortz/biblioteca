<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
<<<<<<< HEAD
     */
    public function show(): View
=======
     *
     * @return \Illuminate\View\View
     */
    public function show()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
<<<<<<< HEAD
     */
    public function store(Request $request): RedirectResponse
=======
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
