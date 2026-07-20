@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Welcome Back</h1>
                <p>Sign in to continue to your account.</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="sek-login-group">
                    <x-input-label class="sek-login-label" for="email" :value="__('Email Address')" />

                    <x-text-input
                        id="email"
                        class="sek-login-input"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="example@gmail.com"
                    />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="sek-login-group">
                    <x-input-label class="sek-login-label" for="password" :value="__('Password')" />

                    <x-text-input
                        id="password"
                        class="sek-login-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember -->
                <div class="sek-login-remember">

                    <label class="sek-login-checkbox">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember">

                        <span>Remember Me</span>

                    </label>

                </div>

                <div class="sek-login-actions">

                    <a href="{{ route('register') }}" class="sek-login-register">
                        Register
                    </a>

                    @if (Route::has('password.request'))
                        <a
                            href="{{ route('password.request') }}"
                            class="sek-login-forgot">

                            Forgot Password?
                        </a>
                    @endif

                </div>

                <button class="sek-login-btn">
                    Log In
                </button>

            </form>

        </div>

    </div>

@endsection