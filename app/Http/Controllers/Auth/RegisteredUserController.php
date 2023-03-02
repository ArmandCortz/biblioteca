<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
=======
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
<<<<<<< HEAD
use Illuminate\View\View;
=======
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
<<<<<<< HEAD
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
=======
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
<<<<<<< HEAD
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'id' => $request->id,
=======
            'name' => $request->name,
            'email' => $request->email,
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
