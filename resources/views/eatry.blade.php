@extends('layouts.app')
@section('content')
    <section class="premium-eatery-page">

        <section class="eatry_hero">
            <div class="hero-overlay"></div>
            <div class="container-fluid">
                <div class="row min-vh-100 align-items-center pt-5">
                    <div class="col-12 col-lg-7 col-xl-6 text-capitalize hero-content">
                        <div class="hero-badge mb-3">
                            Premium Dining Experience
                        </div>

                        <div class="display-3 fw-bold food_hero mb-4">
                            where flavor meets <span class="accent-text">happiness</span>
                        </div>

                        <div class="food_text mb-4">
                            Experience authentic local dishes and premium continental meals crafted with love.
                            From family dinners to event catering, we bring delicious moments to your table.
                        </div>

                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a href="#menu" class="btn premium-btn-primary px-4 py-3 rounded-pill">
                                View Menu <i class="fa-solid fa-utensils ms-2"></i>
                            </a>

                            <a href="#featured-menu" class="btn premium-btn-outline px-4 py-3 rounded-pill">
                                Explore Categories
                            </a>
                        </div>

                        <div class="hero-features">
                            <span><i class="fa-solid fa-leaf"></i> Fresh ingredients</span>
                            <span><i class="fa-solid fa-bowl-food"></i> Made to order</span>
                            <span><i class="fa-solid fa-truck-fast"></i> Fast service</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured Menu Categories --}}
        <section id="featured-menu" class="py-5">
            <div class="container-fluid">
                <div class="text-center py-5 section-heading">
                    <p class="section-mini-title">OUR MENU</p>
                    <h2 class="text-capitalize fw-bold section-title">
                        discover our delicious <span class="accent-text">varieties</span>
                    </h2>
                    <p class="section-subtitle">
                        From authentic Nigerian classics to international favorites, every dish is
                        prepared fresh with premium ingredients.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card premium-menu-card h-100 border-0 overflow-hidden">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="Swallow & Soup"
                                class="card-img-top premium-card-img">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">Swallow & Soup</h3>
                                <p class="text-muted-light mb-3">Authentic Nigerian flavor</p>
                                <ul class="premium-list">
                                    <li>Garri</li>
                                    <li>Semo</li>
                                    <li>Okro Soup</li>
                                    <li>Egusi Soup</li>
                                </ul>
                                <a href="#menu" class="card-link-custom">
                                    Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card premium-menu-card h-100 border-0 overflow-hidden">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="Protein"
                                class="card-img-top premium-card-img">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">Protein</h3>
                                <p class="text-muted-light mb-3">Authentic Nigerian flavor</p>
                                <ul class="premium-list">
                                    <li>Chicken</li>
                                    <li>Beef</li>
                                    <li>Fish</li>
                                    <li>Boiled Egg</li>
                                </ul>
                                <a href="#menu" class="card-link-custom">
                                    Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card premium-menu-card h-100 border-0 overflow-hidden">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="Pasta"
                                class="card-img-top premium-card-img">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">Pasta</h3>
                                <p class="text-muted-light mb-3">Authentic Nigerian flavor</p>
                                <ul class="premium-list">
                                    <li>Jollof Rice</li>
                                    <li>Fried Rice</li>
                                    <li>Jollof Spaghetti</li>
                                    <li>White Rice & Stew</li>
                                </ul>
                                <a href="#menu" class="card-link-custom">
                                    Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card premium-menu-card h-100 border-0 overflow-hidden">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="Beverage"
                                class="card-img-top premium-card-img">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">Beverage</h3>
                                <p class="text-muted-light mb-3">Authentic Nigerian flavor</p>
                                <ul class="premium-list">
                                    <li>Hollandia</li>
                                    <li>Vital Milk</li>
                                    <li>Bottled Water</li>
                                    <li>Exotic Can</li>
                                </ul>
                                <a href="#menu" class="card-link-custom">
                                    Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Full Menu --}}
        <section class="container-fluid py-5" id="menu">
            <div class="container py-5">
                @php
                    use Illuminate\Support\Str;
                @endphp

                <div class="text-center mb-5 section-heading">
                    <p class="section-mini-title">FULL MENU</p>
                    <h2 class="fw-bold display-6 section-title">Our Menu</h2>
                    <p class="section-subtitle">Delicious meals made fresh for you</p>
                </div>

                <div class="row g-4">
                    @foreach ($categories as $category)
                        {{-- CATEGORY TITLE --}}
                        <div class="w-100 mt-5 mb-3">
                            <h3 class="fw-bold text-end pb-2" style="color: orangered;">
                                {{ $category->name }}
                            </h3>
                            <div class="text-end">
                                <hr class="mb-4 mt-0 d-inline-block mx-auto end-0"
                                style="width: 13rem; background-color: wheat; height: 4px" />
                            </div>
                        </div>

                        <div class="row g-4">
                            @forelse($eaterys[$category->id] ?? [] as $eatery)
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
                                            <span
                                                class="badge premium-badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">
                                                {{ $eatery->category->name ?? 'Uncategorized' }}
                                            </span>
                                        </div>

                                        {{-- Eatery Content --}}
                                        <div class="card-bodyy d-flex flex-column p-4" style="background-color: #212529">
                                            <div class="mb-3">
                                                <h5 class="fw-bold mb-2 card-title-custom" style="color: wheat;">{{ $eatery->name }}</h5>

                                                <p class="small mb-0 card-desc" style="color: wheat;">
                                                    {{ Str::limit($eatery->description, 80) }}
                                                </p>
                                            </div>

                                            <div class="mt-auto">
                                                <div class="d-flex justify-content-between align-items-center text-white mb-3">
                                                    <h5 class="fw-bold price-tag mb-0" style="color: wheat;">
                                                        ₦{{ number_format($eatery->price, 2) }}</h5>

                                                    <a href="#" class="btn premium-btn-primary-sm rounded-pill px-4">
                                            Add
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="empty-state text-center rounded-4 shadow-sm p-5">
                                        <h5 class="fw-bold mb-2 text-white">No menu items yet</h5>
                                        <p class="text-light-emphasis mb-0">Fresh dishes will appear here soon.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    @endforeach
                </div>
        </section>

        <style>
            body {
                background: url('{{ asset('assets/images/15796.jpg') }}') center center / cover fixed no-repeat;
                position: relative;
            }

            body::before {
                content: "";
                position: fixed;
                inset: 0;
                background: linear-gradient(180deg, rgba(8, 8, 8, 0.85), rgba(12, 12, 12, 0.92));
                z-index: -1;
            }

            .premium-eatery-page {
                color: #fff;
            }

            .accent-text {
                color: orangered;
            }

            .eatry_hero {
                position: relative;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background: radial-gradient(circle at top left, rgba(255, 69, 0, 0.18), transparent 40%);
                pointer-events: none;
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .hero-badge {
                display: inline-block;
                padding: 0.6rem 1rem;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.08);
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.12);
                font-size: 0.9rem;
                font-weight: 600;
                color: #f8f9fa;
            }

            .food_hero {
                line-height: 1.1;
                letter-spacing: -0.04em;
                color: #fff;
            }

            .food_text {
                max-width: 650px;
                color: rgba(255, 255, 255, 0.78);
                font-size: 1.08rem;
                line-height: 1.8;
            }

            .hero-features {
                display: flex;
                flex-wrap: wrap;
                gap: 1.5rem;
                color: rgba(255, 255, 255, 0.78);
                font-size: 0.95rem;
            }

            .hero-features i {
                color: orangered;
                margin-right: 0.45rem;
            }

            .premium-btn-primary,
            .premium-btn-primary-sm,
            .premium-btn-outline {
                border: none;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .premium-btn-primary {
                background: linear-gradient(135deg, orangered, #ff7a3d);
                color: #fff;
                box-shadow: 0 12px 30px rgba(255, 69, 0, 0.28);
            }

            .premium-btn-primary:hover {
                transform: translateY(-3px);
                color: #fff;
                box-shadow: 0 16px 36px rgba(255, 69, 0, 0.35);
            }

            .premium-btn-primary-sm {
                background: linear-gradient(135deg, orangered, #ff7a3d);
                color: #fff;
                font-size: 0.95rem;
            }

            .premium-btn-primary-sm:hover {
                transform: translateY(-2px);
                color: #fff;
            }

            .premium-btn-outline {
                background: rgba(255, 255, 255, 0.05);
                color: #fff;
                border: 1px solid rgba(255, 255, 255, 0.14);
                backdrop-filter: blur(10px);
            }

            .premium-btn-outline:hover {
                background: rgba(255, 255, 255, 0.1);
                color: #fff;
                transform: translateY(-3px);
            }

            .section-heading {
                max-width: 750px;
                margin: 0 auto;
            }

            .section-mini-title {
                color: orangered;
                font-weight: 700;
                letter-spacing: 0.15em;
                font-size: 0.85rem;
                margin-bottom: 0.8rem;
            }

            .section-title {
                color: #fff;
                letter-spacing: -0.03em;
            }

            .section-subtitle {
                color: rgba(255, 255, 255, 0.72);
                line-height: 1.8;
            }

            .premium-menu-card {
                background: rgba(255, 255, 255, 0.06);
                border: 1px solid rgba(255, 255, 255, 0.08);
                backdrop-filter: blur(14px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.18);
                transition: all 0.35s ease;
                color: #fff;
            }

            .premium-menu-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 24px 45px rgba(0, 0, 0, 0.25);
            }

            .premium-card-img {
                height: 220px;
                object-fit: cover;
                transition: transform 0.45s ease;
            }

            .premium-menu-card:hover .premium-card-img {
                transform: scale(1.05);
            }

            .text-muted-light {
                color: rgba(255, 255, 255, 0.72);
            }

            .premium-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 1.2rem;
            }

            .premium-list li {
                padding: 0.45rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.08);
                text-transform: uppercase;
                font-size: 0.92rem;
                color: rgba(255, 255, 255, 0.88);
            }

            .card-link-custom {
                text-decoration: none;
                color: orangered;
                font-weight: 700;
                transition: all 0.3s ease;
            }

            .card-link-custom:hover {
                color: #ff8c5a;
            }

            .premium-food-card {
                background: transparent;
                box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
                transition: all 0.35s ease;
            }

            .premium-food-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 45px rgba(0, 0, 0, 0.28);
            }

            .image-wrap {
                overflow: hidden;
            }

            .premium-food-card img {
                transition: transform 0.5s ease;
            }

            .premium-food-card:hover img {
                transform: scale(1.08);
            }

            .image-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.02));
            }

            .premium-badge {
                background: rgba(255, 69, 0, 0.95);
                color: #fff;
                font-weight: 600;
                box-shadow: 0 10px 24px rgba(255, 69, 0, 0.28);
            }

            .premium-food-body {
                background: rgba(20, 20, 20, 0.88);
                backdrop-filter: blur(14px);
            }

            .empty-state {
                background: rgba(255, 255, 255, 0.06);
                border: 1px solid rgba(255, 255, 255, 0.08);
                backdrop-filter: blur(14px);
            }

            @media (max-width: 991px) {
                .food_hero {
                    font-size: 2.6rem !important;
                }

                .eatry_hero {
                    min-height: auto;
                    padding: 7rem 0 4rem;
                }
            }

            @media (max-width: 576px) {
                .food_hero {
                    font-size: 2.2rem !important;
                }

                .food_text {
                    font-size: 1rem;
                }

                .hero-features {
                    gap: 0.8rem;
                    flex-direction: column;
                }
            }
        </style>
    </section>
@endsection
