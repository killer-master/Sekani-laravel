@extends('layouts.app')
@section('content')
    <div class="sek-login-wrapper">

        <div class="sek-login-card">

            <div class="sek-login-header">
                <h1>Verify Your Email</h1>
                <p>
                    Thanks for signing up! Before getting started, please verify your email address by clicking the verification link we just sent to your inbox.
                    If you didn't receive the email, you can request another one below.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="sek-auth-success">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <button
                    type="submit"
                    class="sek-login-btn">

                    Resend Verification Email

                </button>

            </form>

            <div class="sek-login-actions">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="sek-auth-link-btn">

                        Log Out

                    </button>

                </form>

            </div>

        </div>

    </div>
@endsection