@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="h1">
            Eatery
        </div>
        <div class="row align-items-center mb-2 g-3">
            <div class="col-md-6">
                <div class="page-title-wrap">
                    <h1 class="fw-bold mb-1 page-title">Eatery</h1>
                    <p class="text-muted mb-0">Manage your delicious food menu with style</p>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('eatery.create') }}" class="btn premium-btn-dark rounded-pill px-4 py-3 shadow-sm">
                    + Add New Food
                </a>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </h1>
            </div>
        </div> --}}
    </div>
@endsection
