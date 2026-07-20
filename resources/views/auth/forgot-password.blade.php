@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Forgot Password?</h1>
                <p>
                    Enter your email address below and we'll send you a link to reset your password.
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

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
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="Enter your email address"
                    />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2"
                    />

                </div>

                <button
                    type="submit"
                    class="sek-login-btn">

                    Send Password Reset Link

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