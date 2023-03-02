<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
<<<<<<< HEAD
     */
    public function authorize(): bool
=======
     *
     * @return bool
     */
    public function authorize()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
<<<<<<< HEAD
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'string'],
=======
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
<<<<<<< HEAD
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('id', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'id' => trans('auth.failed'),
=======
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
<<<<<<< HEAD
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
=======
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
<<<<<<< HEAD
            'id' => trans('auth.throttle', [
=======
            'email' => trans('auth.throttle', [
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
<<<<<<< HEAD
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('id')).'|'.$this->ip());
    }
}
=======
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
