@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Create Account</h1>
                <p>Join us today and start your journey.</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="sek-login-group">
                    <x-input-label
                        class="sek-login-label"
                        for="name"
                        :value="__('Full Name')"
                    />

                    <x-text-input
                        id="name"
                        class="sek-login-input"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Enter your full name"
                    />

                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <!-- Phone -->
                <div class="sek-login-group">
                    <x-input-label
                        class="sek-login-label"
                        for="phone_number"
                        :value="__('Phone Number')"
                    />

                    <x-text-input
                        id="phone_number"
                        class="sek-login-input"
                        type="text"
                        name="phone_number"
                        :value="old('phone_number')"
                        required
                        autocomplete="tel"
                        placeholder="+234 00 0000 000"
                    />

                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                </div>

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
                        autocomplete="username"
                        placeholder="example@gmail.com"
                    />

                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <!-- Password -->
                <div class="sek-login-group">
                    <x-input-label
                        class="sek-login-label"
                        for="password"
                        :value="__('Password')"
                    />

                    <x-text-input
                        id="password"
                        class="sek-login-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Create a password"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
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

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                </div>

                <div class="sek-login-actions">

                    <a
                        href="{{ route('login') }}"
                        class="sek-login-forgot">

                        Already have an account?
                    </a>

                </div>

                <button type="submit" class="sek-login-btn">
                    Create Account
                </button>

            </form>

        </div>

    </div>
@endsection