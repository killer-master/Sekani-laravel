@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Reset Password</h1>
                <p>Create a new secure password for your account.</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input
                    type="hidden"
                    name="token"
                    value="{{ $request->route('token') }}"
                >

                <!-- Email -->
                <div class="sek-login-group">

                    <x-input-label
                        class="sek-login-label"
                        for="email"
                        :value="__('Email Address')"
                    />

                    <x-text-input
                        id="email"
                        class="sek-login-input"
                        type="email"
                        name="email"
                        :value="old('email', $request->email)"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Enter your email"
                    />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2"
                    />

                </div>

                <!-- Password -->
                <div class="sek-login-group">

                    <x-input-label
                        class="sek-login-label"
                        for="password"
                        :value="__('New Password')"
                    />

                    <x-text-input
                        id="password"
                        class="sek-login-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Create a new password"
                    />

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2"
                    />

                </div>

                <!-- Confirm Password -->
                <div class="sek-login-group">

                    <x-input-label
                        class="sek-login-label"
                        for="password_confirmation"
                        :value="__('Confirm Password')"
                    />

                    <x-text-input
                        id="password_confirmation"
                        class="sek-login-input"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirm your password"
                    />

                    <x-input-error
                        :messages="$errors->get('password_confirmation')"
                        class="mt-2"
                    />

                </div>

                <button
                    type="submit"
                    class="sek-login-btn">

                    Reset Password

                </button>

            </form>

            <div class="sek-login-actions">

                <a
                    href="{{ route('login') }}"
                    class="sek-login-forgot">

                    ← Back to Login

                </a>

            </div>

        </div>

    </div>
@endsection