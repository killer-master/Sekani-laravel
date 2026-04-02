@extends('layouts.app')
@section('content')
    <section class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Eatery</li>
            </ol>
        </nav>

        <div class="row">
            <div class="h1 col-6">Eatery</div>
            <div class="col-6 text-end text-capitalize">
                <a href="{{ route('eatery.create') }}" class="btn btn-dark">
                    Add new food
                </a>

            </div>
        </div>


        @php
            use Illuminate\Support\Str;
        @endphp

        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6">Our Menu</h2>
                <p class="text-muted">Delicious meals made fresh for you</p>
            </div>

            <div class="row g-4">
                @forelse($eaterys as $eatery)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card eatery-card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                            {{-- eatery Image --}}
                            <div class="position-relative">
                                <img src="{{ $eatery->image ? asset('uploads/eatery/' . $eatery->image) : asset('images/default-eatery.jpg') }}"
                                    class="card-img-top" alt="{{ $eatery->name }}"
                                    style="height: 230px; object-fit: cover;">

                                {{-- Category Badge --}}
                                <span
                                    class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm">
                                    {{ $eatery->category->name ?? 'Uncategorized' }}
                                </span>
                            </div>

                            {{-- eatery Content --}}
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="fw-bold mb-2">{{ $eatery->name }}</h5>

                                <p class="text-muted small mb-3">
                                    {{ Str::limit($eatery->description, 80) }}
                                </p>

                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold text-dark mb-0">₦{{ number_format($eatery->price, 2) }}</h5>

                                    <a href="#" class="btn btn-dark rounded-pill px-4">
                                        Add
                                    </a>
                                </div>
                                <div class="mt-auto d-flex justify-content-between align-items-center pt-2">
                                    <a href="{{ route('eatery.edit', $eatery->sku) }}" class="btn btn-warning">Edit</a>

                                    <form action="{{ route('eatery.destroy', $eatery->sku) }}" onsubmit="return confirm('Are you sure you want to delete this product?')" method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning text-center rounded-4 shadow-sm">
                            No eaterys available at the moment.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Custom Styling --}}
        <style>
            .eatery-card {
                transition: all 0.3s ease;
            }

            .eatery-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 18px 35px rgba(0, 0, 0, 0.08) !important;
            }

            .eatery-card img {
                transition: transform 0.4s ease;
            }

            .eatery-card:hover img {
                transform: scale(1.05);
            }
        </style>
    </section>
@endsection
