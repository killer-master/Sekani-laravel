@extends('layouts.app')
@section('content')
    <section class="container py-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb premium-breadcrumb px-3 py-2 rounded-pill d-inline-flex">
                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Eatery</li>
            </ol>
        </nav>

        <div class="row align-items-center mb-5 g-3">
            <div class="col-md-6">
                <div class="page-title-wrap">
                    <h1 class="fw-bold mb-1 page-title">Eatery Category</h1>
                    <p class="text-muted mb-0">Add more catergories</p>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('eaterycategory.index') }}" class="btn premium-btn-dark rounded-pill px-4 py-3 shadow-sm">
                    + Add New Categories
                </a>
            </div>
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


        @php
            use Illuminate\Support\Str;
        @endphp

        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 section-title">Our Menu</h2>
            <p class="text-muted fs-6">Delicious meals made fresh for you</p>
        </div>

        <div class="row g-4">
            @forelse($eateryss as $eatery)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card eatery-card border-0 rounded-4 h-100 overflow-hidden premium-card">

                        {{-- Eatery Image --}}
                        <div class="position-relative image-wrap">
                            <img src="{{ $eatery->image ? asset('uploads/eatery/' . $eatery->image) : asset('images/default-eatery.jpg') }}"
                                class="card-img-top" alt="{{ $eatery->name }}"
                                style="height: 230px; object-fit: cover;">
                            {{-- Overlay --}}
                            <div class="image-overlay"></div>

                            {{-- Category Badge --}}
                            <span class="badge premium-badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">
                                {{ $eatery->category->name ?? 'Uncategorized' }}
                            </span>
                        </div>

                        {{-- Eatery Content --}}
                        <div class="card-body d-flex flex-column p-4">
                            <div class="mb-3">
                                <h5 class="fw-bold mb-2 card-title-custom">{{ $eatery->name }}</h5>

                                <p class="text-muted small mb-0 card-desc">
                                    {{ Str::limit($eatery->description, 80) }}
                                </p>
                            </div>

                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="fw-bold price-tag mb-0">₦{{ number_format($eatery->price, 2) }}</h5>

                                    <a href="#" class="btn premium-btn-dark-soft rounded-pill px-4">
                                        Add
                                    </a>
                                </div>

                                <div class="d-flex justify-content-between align-items-center gap-2 pt-2 border-top action-row">
                                    <a href="{{ route('eatery.edit', $eatery->sku) }}"
                                        class="btn premium-btn-warning w-100">
                                        Edit
                                    </a>

                                    <form action="{{ route('eatery.destroy', $eatery->sku) }}" method="post"
                                        class="w-100 delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn premium-btn-danger w-100 delete-form">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state text-center rounded-4 shadow-sm p-5">
                        <h5 class="fw-bold mb-2">No eatery items yet</h5>
                        <p class="text-muted mb-3">Start by adding your first food item to the menu.</p>
                        <a href="{{ route('eatery.create') }}" class="btn premium-btn-dark rounded-pill px-4 py-2">
                            Add New Food
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        

        {{-- Custom Styling --}}
        <style>
            body {
                background: linear-gradient(180deg, #f8f9fc 0%, #ffffff 100%);
            }

            .page-title {
                font-size: clamp(2rem, 4vw, 2.8rem);
                letter-spacing: -0.03em;
                color: #111827;
            }

            .section-title {
                color: #111827;
                letter-spacing: -0.03em;
            }

            .premium-breadcrumb {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 25px rgba(17, 24, 39, 0.06);
                border: 1px solid rgba(0, 0, 0, 0.04);
            }

            .premium-breadcrumb .breadcrumb-item a {
                text-decoration: none;
                color: #6b7280;
                font-weight: 500;
                transition: 0.3s ease;
            }

            .premium-breadcrumb .breadcrumb-item a:hover {
                color: #111827;
            }

            .premium-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(12px);
                box-shadow: 0 12px 35px rgba(17, 24, 39, 0.07);
                border: 1px solid rgba(0, 0, 0, 0.04);
                transition: all 0.35s ease;
            }

            .eatery-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 22px 45px rgba(17, 24, 39, 0.12) !important;
            }

            .image-wrap {
                overflow: hidden;
            }

            .eatery-card img {
                transition: transform 0.5s ease;
            }

            .eatery-card:hover img {
                transform: scale(1.08);
            }

            .image-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.22), rgba(0, 0, 0, 0.02));
                pointer-events: none;
            }

            .premium-badge {
                background: rgba(255, 193, 7, 0.95);
                color: #111827;
                font-weight: 600;
                box-shadow: 0 8px 20px rgba(255, 193, 7, 0.25);
            }

            .card-title-custom {
                font-size: 1.15rem;
                color: #111827;
                letter-spacing: -0.02em;
            }

            .card-desc {
                line-height: 1.7;
                min-height: 48px;
            }

            .price-tag {
                font-size: 1.25rem;
                color: #111827;
            }

            .premium-btn-dark,
            .premium-btn-dark-soft,
            .premium-btn-warning,
            .premium-btn-danger {
                border: none;
                border-radius: 999px;
                font-weight: 600;
                transition: all 0.3s ease;
                padding: 0.65rem 1.1rem;
            }

            .premium-btn-dark {
                background: linear-gradient(135deg, #111827, #1f2937);
                color: #fff;
                box-shadow: 0 10px 25px rgba(17, 24, 39, 0.18);
            }

            .premium-btn-dark:hover {
                transform: translateY(-2px);
                color: #fff;
                box-shadow: 0 14px 28px rgba(17, 24, 39, 0.24);
            }

            .premium-btn-dark-soft {
                background: #111827;
                color: #fff;
            }

            .premium-btn-dark-soft:hover {
                background: #000;
                color: #fff;
                transform: translateY(-2px);
            }

            .premium-btn-warning {
                background: rgba(255, 193, 7, 0.15);
                color: #b7791f;
                border: 1px solid rgba(255, 193, 7, 0.25);
            }

            .premium-btn-warning:hover {
                background: #ffc107;
                color: #111827;
                transform: translateY(-2px);
            }

            .premium-btn-danger {
                background: rgba(220, 53, 69, 0.1);
                color: #dc3545;
                border: 1px solid rgba(220, 53, 69, 0.18);
            }

            .premium-btn-danger:hover {
                background: #dc3545;
                color: #fff;
                transform: translateY(-2px);
            }

            .action-row .btn {
                border-radius: 14px;
                padding: 0.7rem 1rem;
                font-weight: 600;
            }

            .empty-state {
                background: rgba(255, 255, 255, 0.9);
                border: 1px solid rgba(0, 0, 0, 0.04);
                box-shadow: 0 12px 30px rgba(17, 24, 39, 0.06);
            }

            @media (max-width: 767px) {
                .page-title-wrap {
                    text-align: center;
                }

                .card-desc {
                    min-height: auto;
                }

                .action-row {
                    flex-direction: column;
                }

                .action-row .btn,
                .action-row form {
                    width: 100% !important;
                }
            }
        </style>
    </section>
@endsection
