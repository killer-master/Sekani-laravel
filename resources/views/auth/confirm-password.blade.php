@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Confirm Password</h1>
                <p>
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

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
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    />

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2"
                    />

                </div>

                <button
                    type="submit"
                    class="sek-login-btn">

                    Confirm Password

                </button>

            </form>

        </div>

    </div>
@endsection