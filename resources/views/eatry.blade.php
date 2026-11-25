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
                            <div class="image-skeleton premium-card-image image-loading">
                                <img src="{{ asset('assets/images/soup.jpg') }}" alt="Swallow & Soup"
                                    class="card-img-top premium-card-img" loading="lazy" decoding="async"
                                    data-skeleton-image>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">Swallow & Soup</h3>
                                <p class="text-muted-light mb-3">Authentic Nigerian flavor</p>
                                <ul class="premium-list">
                                    <li>Egusi Soup</li>
                                    <li>Okro Soup</li>
                                    <li>Garri</li>
                                    <li>Semo</li>
                                </ul>
                                <a href="#menu" class="card-link-custom">
                                    Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card premium-menu-card h-100 border-0 overflow-hidden">
                            <div class="image-skeleton premium-card-image image-loading">
                                <img src="{{ asset('assets/images/beef_comp.webp') }}" alt="Protein"
                                    class="card-img-top premium-card-img" loading="lazy" decoding="async"
                                    data-skeleton-image>
                            </div>
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
                            <div class="image-skeleton premium-card-image image-loading">
                                <img src="{{ asset('assets/images/fried_rice_comp.webp') }}" alt="Pasta"
                                    class="card-img-top premium-card-img" loading="lazy" decoding="async"
                                    data-skeleton-image>
                            </div>
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
                            <div class="image-skeleton premium-card-image image-loading">
                                <img src="{{ asset('assets/images/watermellon.webp') }}" alt="Beverage"
                                    class="card-img-top premium-card-img" loading="lazy" decoding="async"
                                    data-skeleton-image>
                            </div>
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

        <section class="showcase-menu-section" id="showcase-menu">
            <div class="showcase-menu-heading">
                <div>
                    <p class="showcase-eyebrow"><span></span> FIND YOUR FAVOURITE</p>
                    <h2>Good things<br class="showcase-mobile-break"> are on the menu.</h2>
                </div>
                <p class="showcase-menu-intro">Take your time. Something delicious is waiting for you.</p>
            </div>

            <div class="showcase-controls">
                <div class="showcase-filter-list" role="group" aria-label="Filter menu by category">
                    <button class="showcase-filter is-active" type="button" data-category-filter="all" aria-pressed="true">
                        Everything
                    </button>
                    @foreach ($categories as $category)
                        <button class="showcase-filter" type="button"
                            data-category-filter="{{ $category->id }}" aria-pressed="false">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>
                <div class="showcase-search-wrap">
                    <label class="showcase-search" for="showcase-search">
                        <i class="fa-solid fa-magnifying-glass showcase-search-icon" aria-hidden="true"></i>
                        <span class="visually-hidden">Search menu</span>
                        <input type="search" id="showcase-search" placeholder="Find a dish..." autocomplete="off"
                            aria-controls="showcase-search-suggestions" aria-expanded="false">
                        <button class="showcase-search-clear" type="button" aria-label="Clear search" hidden>
                            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                        </button>
                        <kbd>/</kbd>
                    </label>
                    <div class="showcase-search-popover" id="showcase-search-suggestions" role="listbox"
                        aria-label="Matching dishes" hidden>
                        <p class="showcase-search-popover-heading" aria-hidden="true">MENU MATCHES</p>
                        <div class="showcase-search-suggestions"></div>
                        <p class="showcase-search-empty" hidden>No dishes match that search. Try another word.</p>
                    </div>
                </div>
            </div>

            <p class="showcase-results" id="showcase-results" aria-live="polite"></p>

            @if ($eaterys->flatten()->isEmpty())
                <div class="showcase-empty">
                    <span><i class="fa-solid fa-bowl-food" aria-hidden="true"></i></span>
                    <h3>The menu is getting ready</h3>
                    <p>Check back soon for something delicious.</p>
                </div>
            @else
            @foreach ($categories as $category)
                @php
                    $categoryItems = $eaterys[$category->id] ?? collect();
                @endphp
                @if ($categoryItems->isNotEmpty())
                    <section class="showcase-category" data-category-section="{{ $category->id }}">
                        <div class="showcase-category-heading">
                            <h3>{{ $category->name }}</h3>
                            <span>{{ str_pad($categoryItems->count(), 2, '0', STR_PAD_LEFT) }} <span>delicious picks</span></span>
                        </div>

                        <div class="showcase-grid">
                            @foreach ($categoryItems as $eatery)
                                <article class="showcase-dish"
                                    data-menu-card
                                    data-category-id="{{ $category->id }}"
                                    data-search-text="{{ strtolower($eatery->name . ' ' . $eatery->description . ' ' . $category->name) }}">
                                    <a class="showcase-dish-image" href="{{ route('eateryView.page', $eatery->sku) }}"
                                        aria-label="View {{ $eatery->name }}">
                                        <img src="{{ $eatery->image ? asset('uploads/eatery/' . $eatery->image) : asset('images/default-eatery.jpg') }}"
                                            alt="{{ $eatery->name }}" loading="lazy" decoding="async">
                                        <span class="showcase-dish-category">{{ $category->name }}</span>
                                        <span class="showcase-image-arrow" aria-hidden="true">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </span>
                                    </a>
                                    <div class="showcase-dish-content">
                                        <div class="showcase-dish-copy">
                                            <h4>{{ $eatery->name }}</h4>
                                            <p>{{ \Illuminate\Support\Str::limit($eatery->description, 88) }}</p>
                                        </div>
                                        <div class="showcase-dish-bottom">
                                            <strong>₦{{ number_format($eatery->price, 2) }}</strong>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="eatery" value="{{ $eatery->id }}">
                                                <button class="showcase-add-button" type="submit"
                                                    aria-label="Add {{ $eatery->name }} to cart">
                                                    <i class="fa-solid fa-plus" aria-hidden="true"></i>
                                                    <span>Add</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endforeach
            @endif

            <div class="showcase-no-results" id="showcase-no-results" hidden>
                <span><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></span>
                <h3>No dishes found</h3>
                <p>Try a different search or choose another category.</p>
            </div>
        </section>

        <footer class="showcase-footer">
            <a class="showcase-brand" href="{{ route('home.page') }}">
                <span class="showcase-brand-mark"><i class="fa-solid fa-utensils" aria-hidden="true"></i></span>
                <span>SEKANI Eatery<span class="showcase-brand-period">.</span></span>
            </a>
            <p>Come hungry. Leave happy.</p>
            <a href="#showcase-menu">Back to menu <i class="fa-solid fa-arrow-up ms-1" aria-hidden="true"></i></a>
        </footer>
    </main>

        <style>
            body {
                background: url('{{ asset('assets/images/15796.jpg') }}') center center / cover no-repeat;
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
                box-shadow: 0 12px 30px #ff450047;
            }

            .premium-btn-primary:hover {
                transform: translateY(-3px);
                color: #fff;
                box-shadow: 0 16px 36px #ff450059;
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

            .premium-card-image {
                height: 220px;
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

            .image-skeleton {
                position: relative;
                overflow: hidden;
                background-color: #292929;
            }

            .image-skeleton.image-loading::after {
                position: absolute;
                z-index: 1;
                inset: 0;
                background: linear-gradient(100deg, transparent 20%, #ffffff1a 45%, transparent 70%);
                background-size: 200% 100%;
                animation: image-skeleton-shimmer 1.4s ease-in-out infinite;
                content: "";
                pointer-events: none;
            }

            .image-skeleton img {
                transition: opacity 0.2s ease;
            }

            .image-skeleton.image-loading img {
                opacity: 0;
            }

            .image-skeleton .image-overlay {
                z-index: 2;
            }

            .image-skeleton .premium-badge {
                z-index: 3;
            }

            @keyframes image-skeleton-shimmer {
                to {
                    background-position: -200% 0;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .image-skeleton.image-loading::after {
                    animation: none;
                }
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

            .premium-eatery-page .showcase-menu-section {
                --showcase-ink: #25241f;
                --showcase-muted: #77766f;
                --showcase-paper: #faf9f5;
                --showcase-accent: #d6502a;
                --showcase-line: #e8e5dc;
                width: 100%;
                padding: clamp(3.5rem, 7vw, 6.5rem) clamp(1rem, 4vw, 3rem);
                background: var(--showcase-paper);
                color: var(--showcase-ink);
            }

            .premium-eatery-page .showcase-menu-heading,
            .premium-eatery-page .showcase-controls,
            .premium-eatery-page .showcase-filter-list,
            .premium-eatery-page .showcase-category-heading,
            .premium-eatery-page .showcase-dish-bottom,
            .premium-eatery-page .showcase-footer {
                display: flex;
                align-items: center;
            }

            .premium-eatery-page .showcase-menu-heading,
            .premium-eatery-page .showcase-controls,
            .premium-eatery-page .showcase-results,
            .premium-eatery-page .showcase-category,
            .premium-eatery-page .showcase-empty,
            .premium-eatery-page .showcase-no-results,
            .premium-eatery-page .showcase-footer {
                width: min(1320px, 100%);
                margin-right: auto;
                margin-left: auto;
            }

            .premium-eatery-page .showcase-menu-heading {
                justify-content: space-between;
                gap: 2rem;
                margin-bottom: 2.2rem;
            }

            .premium-eatery-page .showcase-eyebrow {
                display: flex;
                align-items: center;
                gap: .65rem;
                margin: 0 0 .85rem;
                color: var(--showcase-accent);
                font-size: .7rem;
                font-weight: 850;
                letter-spacing: .17em;
            }

            .premium-eatery-page .showcase-eyebrow > span {
                width: 1.8rem;
                height: 2px;
                background: currentColor;
            }

            .premium-eatery-page .showcase-menu-heading h2 {
                margin: 0;
                color: var(--showcase-ink);
                font-family: "DM Serif Display", Georgia, serif;
                font-size: clamp(2.2rem, 4vw, 3.75rem);
                font-weight: 400;
                letter-spacing: -.04em;
                line-height: 1.03;
            }

            .premium-eatery-page .showcase-mobile-break {
                display: none;
            }

            .premium-eatery-page .showcase-menu-intro {
                max-width: 285px;
                margin: 0 0 .25rem;
                color: var(--showcase-muted);
                font-size: .92rem;
                line-height: 1.75;
            }

            .premium-eatery-page .showcase-controls {
                justify-content: space-between;
                gap: 1rem;
                padding: .75rem 0;
                border-top: 1px solid var(--showcase-line);
                border-bottom: 1px solid var(--showcase-line);
            }

            .premium-eatery-page .showcase-filter-list {
                flex-wrap: wrap;
                gap: .45rem;
            }

            .premium-eatery-page .showcase-filter {
                min-height: 2.45rem;
                padding: .55rem .9rem;
                border: 1px solid transparent;
                border-radius: 999px;
                background: transparent;
                color: var(--showcase-muted);
                font: inherit;
                font-size: .82rem;
                font-weight: 700;
                transition: background-color .18s ease, color .18s ease, border-color .18s ease;
            }

            .premium-eatery-page .showcase-filter:hover {
                border-color: var(--showcase-line);
                color: var(--showcase-ink);
            }

            .premium-eatery-page .showcase-filter.is-active {
                background: var(--showcase-ink);
                color: #fff;
            }

            .premium-eatery-page .showcase-search {
                display: flex;
                width: 100%;
                min-height: 2.65rem;
                align-items: center;
                gap: .65rem;
                padding: .45rem .55rem .45rem .9rem;
                border: 1px solid rgba(37, 36, 31, .12);
                border-radius: 999px;
                background: rgba(255, 255, 255, .96);
                color: var(--showcase-muted);
                box-shadow: 0 5px 18px rgba(37, 36, 31, .04);
                transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
            }

            .premium-eatery-page .showcase-search-wrap {
                position: relative;
                z-index: 5;
                width: min(100%, 340px);
                flex: 0 1 340px;
            }

            .premium-eatery-page .showcase-search-wrap:focus-within {
                z-index: 10;
            }

            .premium-eatery-page .showcase-search:focus-within {
                transform: translateY(-1px);
                border-color: rgba(214, 80, 42, .55);
                box-shadow: 0 0 0 4px rgba(214, 80, 42, .1), 0 12px 30px rgba(37, 36, 31, .1);
            }

            .premium-eatery-page .showcase-search-icon {
                color: var(--showcase-accent);
                transition: transform .2s ease;
            }

            .premium-eatery-page .showcase-search:focus-within .showcase-search-icon {
                transform: scale(1.08);
            }

            .premium-eatery-page .showcase-search input {
                width: 100%;
                min-width: 0;
                min-height: 1.7rem;
                padding: 0;
                border: 0;
                outline: 0;
                background: transparent;
                color: var(--showcase-ink);
                font: inherit;
                font-size: .84rem;
                box-shadow: none;
            }

            .premium-eatery-page .showcase-search input::placeholder {
                color: #a09d95;
            }

            .premium-eatery-page .showcase-search input:focus {
                border: 0;
                outline: 0;
                box-shadow: none;
            }

            .premium-eatery-page .showcase-search-clear {
                display: grid;
                width: 1.8rem;
                height: 1.8rem;
                flex: 0 0 auto;
                place-items: center;
                border: 0;
                border-radius: 50%;
                background: #f3eee9;
                color: #77766f;
                transition: background-color .18s ease, color .18s ease;
            }

            .premium-eatery-page .showcase-search-clear:hover {
                background: #f8e4dc;
                color: var(--showcase-accent);
            }

            .premium-eatery-page .showcase-search-clear[hidden],
            .premium-eatery-page .showcase-search-popover[hidden],
            .premium-eatery-page .showcase-search-empty[hidden] {
                display: none;
            }

            .premium-eatery-page .showcase-search kbd {
                display: grid;
                width: 1.45rem;
                height: 1.45rem;
                flex: 0 0 auto;
                place-items: center;
                border: 1px solid var(--showcase-line);
                border-radius: .35rem;
                background: #f7f6f1;
                color: var(--showcase-muted);
                font-size: .75rem;
            }

            .premium-eatery-page .showcase-search-popover {
                position: absolute;
                z-index: 20;
                top: calc(100% + .65rem);
                right: 0;
                left: 0;
                overflow: hidden;
                padding: .65rem;
                border: 1px solid rgba(37, 36, 31, .09);
                border-radius: 1.1rem;
                background: rgba(255, 255, 255, .98);
                box-shadow: 0 22px 55px rgba(37, 36, 31, .18);
                animation: showcase-search-pop-in .16s ease-out;
                backdrop-filter: blur(16px);
            }

            .premium-eatery-page .showcase-search-popover-heading {
                margin: .25rem .55rem .5rem;
                color: #9a958d;
                font-size: .62rem;
                font-weight: 850;
                letter-spacing: .16em;
            }

            .premium-eatery-page .showcase-search-suggestions {
                display: grid;
                gap: .25rem;
                max-height: min(22rem, 55vh);
                overflow-y: auto;
            }

            .premium-eatery-page .showcase-search-suggestion {
                display: flex;
                min-width: 0;
                align-items: center;
                gap: .75rem;
                padding: .55rem;
                border-radius: .8rem;
                color: var(--showcase-ink);
                text-decoration: none;
                transition: background-color .16s ease, transform .16s ease;
            }

            .premium-eatery-page .showcase-search-suggestion:hover,
            .premium-eatery-page .showcase-search-suggestion:focus-visible {
                transform: translateX(2px);
                outline: none;
                background: #fbf3ee;
            }

            .premium-eatery-page .showcase-search-suggestion img {
                width: 2.8rem;
                height: 2.8rem;
                flex: 0 0 auto;
                border-radius: .65rem;
                background: #f0eee8;
                object-fit: cover;
            }

            .premium-eatery-page .showcase-search-suggestion-copy {
                display: grid;
                min-width: 0;
                flex: 1;
                gap: .2rem;
            }

            .premium-eatery-page .showcase-search-suggestion-copy strong {
                overflow: hidden;
                color: var(--showcase-ink);
                font-size: .83rem;
                font-weight: 750;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .premium-eatery-page .showcase-search-suggestion-copy span {
                overflow: hidden;
                color: var(--showcase-muted);
                font-size: .7rem;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .premium-eatery-page .showcase-search-suggestion-price {
                flex: 0 0 auto;
                color: var(--showcase-accent);
                font-size: .75rem;
                font-weight: 800;
                white-space: nowrap;
            }

            .premium-eatery-page .showcase-search-empty {
                margin: 0;
                padding: 1rem .7rem;
                color: var(--showcase-muted);
                font-size: .82rem;
                line-height: 1.5;
            }

            @keyframes showcase-search-pop-in {
                from {
                    opacity: 0;
                    transform: translateY(-5px) scale(.99);
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .premium-eatery-page .showcase-results {
                min-height: 1rem;
                margin-top: .75rem;
                margin-bottom: 0;
                color: var(--showcase-muted);
                font-size: .8rem;
            }

            .premium-eatery-page .showcase-category {
                margin-top: 2.2rem;
            }

            .premium-eatery-page .showcase-category-heading {
                justify-content: space-between;
                gap: 1rem;
                margin-bottom: 1rem;
            }

            .premium-eatery-page .showcase-category-heading h3 {
                margin: 0;
                color: var(--showcase-ink);
                font-family: "DM Serif Display", Georgia, serif;
                font-size: 1.75rem;
                font-weight: 400;
            }

            .premium-eatery-page .showcase-category-heading > span {
                color: var(--showcase-accent);
                font-size: .78rem;
                font-weight: 800;
            }

            .premium-eatery-page .showcase-category-heading > span span {
                color: var(--showcase-muted);
                font-weight: 500;
            }

            .premium-eatery-page .showcase-grid {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 1rem;
            }

            .premium-eatery-page .showcase-dish {
                min-width: 0;
                overflow: hidden;
                border: 1px solid var(--showcase-line);
                border-radius: 1rem;
                background: #fff;
                color: var(--showcase-ink);
                transition: transform .2s ease, box-shadow .2s ease;
            }

            .premium-eatery-page .showcase-dish:hover {
                transform: translateY(-4px);
                box-shadow: 0 18px 40px rgba(37, 36, 31, .1);
            }

            .premium-eatery-page .showcase-dish[hidden],
            .premium-eatery-page .showcase-category[hidden],
            .premium-eatery-page .showcase-no-results[hidden] {
                display: none;
            }

            .premium-eatery-page .showcase-dish-image {
                position: relative;
                display: block;
                aspect-ratio: 1.22;
                overflow: hidden;
                background: #eeeae2;
            }

            .premium-eatery-page .showcase-dish-image::after {
                position: absolute;
                inset: 45% 0 0;
                background: linear-gradient(transparent, rgba(24, 21, 17, .24));
                content: "";
                pointer-events: none;
            }

            .premium-eatery-page .showcase-dish-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform .45s ease;
            }

            .premium-eatery-page .showcase-dish:hover .showcase-dish-image img {
                transform: scale(1.05);
            }

            .premium-eatery-page .showcase-dish-category {
                position: absolute;
                z-index: 1;
                top: .7rem;
                left: .7rem;
                max-width: calc(100% - 3rem);
                overflow: hidden;
                padding: .4rem .65rem;
                border: 1px solid rgba(255, 255, 255, .4);
                border-radius: 999px;
                background: rgba(255, 255, 255, .9);
                color: var(--showcase-ink);
                font-size: .68rem;
                font-weight: 750;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .premium-eatery-page .showcase-image-arrow {
                position: absolute;
                z-index: 1;
                right: .7rem;
                bottom: .7rem;
                display: grid;
                width: 2rem;
                height: 2rem;
                place-items: center;
                border-radius: 50%;
                background: rgba(255, 255, 255, .92);
                color: var(--showcase-ink);
                font-size: .72rem;
            }

            .premium-eatery-page .showcase-dish-content {
                padding: .95rem;
            }

            .premium-eatery-page .showcase-dish-copy h4 {
                margin: 0 0 .4rem;
                color: var(--showcase-ink);
                font-size: 1rem;
                font-weight: 780;
                line-height: 1.3;
                overflow-wrap: anywhere;
            }

            .premium-eatery-page .showcase-dish-copy p {
                min-height: 2.65em;
                margin: 0;
                color: var(--showcase-muted);
                font-size: .78rem;
                line-height: 1.55;
            }

            .premium-eatery-page .showcase-dish-bottom {
                justify-content: space-between;
                gap: .5rem;
                margin-top: 1rem;
                padding-top: .8rem;
                border-top: 1px solid #f0eee8;
            }

            .premium-eatery-page .showcase-dish-bottom > strong {
                color: var(--showcase-ink);
                font-size: .94rem;
                font-weight: 850;
                white-space: nowrap;
            }

            .premium-eatery-page .showcase-add-button {
                display: inline-flex;
                min-height: 2.35rem;
                align-items: center;
                justify-content: center;
                gap: .4rem;
                padding: .5rem .75rem;
                border: 0;
                border-radius: 999px;
                background: #f9e9e2;
                color: #a63c1c;
                font: inherit;
                font-size: .78rem;
                font-weight: 800;
                transition: background-color .18s ease, color .18s ease;
            }

            .premium-eatery-page .showcase-add-button:hover {
                background: var(--showcase-accent);
                color: #fff;
            }

            .premium-eatery-page .showcase-empty,
            .premium-eatery-page .showcase-no-results {
                padding: 4rem 1rem;
                color: var(--showcase-muted);
                text-align: center;
            }

            .premium-eatery-page .showcase-empty > span,
            .premium-eatery-page .showcase-no-results > span {
                display: grid;
                width: 3.5rem;
                height: 3.5rem;
                place-items: center;
                margin: 0 auto 1rem;
                border-radius: 1.2rem;
                background: #f4e8df;
                color: var(--showcase-accent);
                font-size: 1.3rem;
            }

            .premium-eatery-page .showcase-empty h3,
            .premium-eatery-page .showcase-no-results h3 {
                margin: 0 0 .45rem;
                color: var(--showcase-ink);
                font-family: "DM Serif Display", Georgia, serif;
                font-size: 1.7rem;
                font-weight: 400;
            }

            .premium-eatery-page .showcase-empty p,
            .premium-eatery-page .showcase-no-results p {
                margin: 0;
                color: var(--showcase-muted);
                font-size: .9rem;
            }

            .premium-eatery-page .showcase-footer {
                min-height: 90px;
                justify-content: space-between;
                gap: 1rem;
                padding: 1rem 0;
                border-top: 1px solid rgba(255, 255, 255, .2);
                color: #fff;
            }

            .premium-eatery-page .showcase-brand {
                display: inline-flex;
                align-items: center;
                gap: .7rem;
                color: #fff;
                font-size: .88rem;
                font-weight: 850;
                letter-spacing: .14em;
                text-decoration: none;
            }

            .premium-eatery-page .showcase-brand-mark {
                display: grid;
                width: 2.45rem;
                height: 2.45rem;
                place-items: center;
                border-radius: .9rem;
                background: #d6502a;
                color: #fff;
                font-size: .95rem;
            }

            .premium-eatery-page .showcase-brand-period {
                color: #ff8a63;
            }

            .premium-eatery-page .showcase-footer p {
                margin: 0;
                color: rgba(255, 255, 255, .7);
                font-family: "DM Serif Display", Georgia, serif;
                font-size: 1.05rem;
            }

            .premium-eatery-page .showcase-footer > a:last-child {
                color: rgba(255, 255, 255, .8);
                font-size: .82rem;
                font-weight: 700;
                text-decoration: none;
            }

            .premium-eatery-page .showcase-footer > a:last-child:hover {
                color: #ff8a63;
            }

            @media (max-width: 1000px) {
                .premium-eatery-page .showcase-grid {
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                }
            }

            @media (max-width: 720px) {
                .premium-eatery-page .showcase-menu-section {
                    padding: 3.5rem 1rem;
                }

                .premium-eatery-page .showcase-menu-heading {
                    align-items: flex-start;
                    flex-direction: column;
                    gap: .9rem;
                }

                .premium-eatery-page .showcase-mobile-break {
                    display: initial;
                }

                .premium-eatery-page .showcase-menu-intro {
                    max-width: 430px;
                }

                .premium-eatery-page .showcase-controls {
                    align-items: stretch;
                    flex-direction: column-reverse;
                }

                .premium-eatery-page .showcase-search {
                    width: 100%;
                }

                .premium-eatery-page .showcase-search-wrap {
                    width: 100%;
                    max-width: none;
                    flex-basis: auto;
                }

                .premium-eatery-page .showcase-grid {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: .75rem;
                }

                .premium-eatery-page .showcase-dish-content {
                    padding: .75rem;
                }

                .premium-eatery-page .showcase-dish-copy p {
                    min-height: 3.1em;
                    font-size: .75rem;
                }

                .premium-eatery-page .showcase-dish-bottom > strong {
                    font-size: .83rem;
                }

                .premium-eatery-page .showcase-add-button {
                    min-height: 2.2rem;
                    padding: .45rem .65rem;
                }
            }

            @media (max-width: 420px) {
                .premium-eatery-page .showcase-filter-list {
                    gap: .25rem;
                }

                .premium-eatery-page .showcase-filter {
                    min-height: 2.2rem;
                    padding: .45rem .65rem;
                    font-size: .75rem;
                }

                .premium-eatery-page .showcase-grid {
                    gap: .55rem;
                }

                .premium-eatery-page .showcase-dish-image {
                    aspect-ratio: .95;
                }

                .premium-eatery-page .showcase-dish-copy h4 {
                    font-size: .9rem;
                }

                .premium-eatery-page .showcase-dish-copy p {
                    font-size: .71rem;
                }

                .premium-eatery-page .showcase-add-button span {
                    display: none;
                }

                .premium-eatery-page .showcase-footer p {
                    display: none;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .premium-eatery-page .showcase-menu-section *,
                .premium-eatery-page .showcase-menu-section *::before,
                .premium-eatery-page .showcase-menu-section *::after,
                .premium-eatery-page .showcase-footer *,
                .premium-eatery-page .showcase-footer *::before,
                .premium-eatery-page .showcase-footer *::after {
                    scroll-behavior: auto !important;
                    transition-duration: .01ms !important;
                    animation-duration: .01ms !important;
                }
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

        <script>
            (() => {
                document.querySelectorAll('[data-skeleton-image]').forEach((image) => {
                    const container = image.parentElement;
                    const finishLoading = () => container.classList.remove('image-loading');

                    if (image.complete) {
                        finishLoading();
                        return;
                    }

                    image.addEventListener('load', finishLoading, { once: true });
                    image.addEventListener('error', finishLoading, { once: true });
                });

                const page = document.querySelector('.premium-eatery-page');
                const search = page?.querySelector('#showcase-search');
                if (!page || !search) return;

                const cards = [...page.querySelectorAll('[data-menu-card]')];
                const sections = [...page.querySelectorAll('[data-category-section]')];
                const filters = [...page.querySelectorAll('[data-category-filter]')];
                const searchWrap = page.querySelector('.showcase-search-wrap');
                const searchLabel = page.querySelector('.showcase-search');
                const clearButton = page.querySelector('.showcase-search-clear');
                const popover = page.querySelector('#showcase-search-suggestions');
                const suggestions = page.querySelector('.showcase-search-suggestions');
                const emptyMessage = page.querySelector('.showcase-search-empty');
                const results = page.querySelector('#showcase-results');
                const noResults = page.querySelector('#showcase-no-results');
                let activeCategory = 'all';
                let searchIsOpen = false;

                const getMatches = (query) => {
                    const terms = query.toLocaleLowerCase().trim().split(/\s+/).filter(Boolean);

                    return cards.filter((card) => {
                        const categoryMatches = activeCategory === 'all'
                            || card.dataset.categoryId === activeCategory;
                        const searchableText = card.dataset.searchText.toLocaleLowerCase();
                        const textMatches = terms.every((term) => searchableText.includes(term));

                        return categoryMatches && textMatches;
                    });
                };

                const addSuggestion = (card) => {
                    const link = document.createElement('a');
                    const image = card.querySelector('.showcase-dish-image img');
                    const title = card.querySelector('.showcase-dish-copy h4');
                    const category = card.querySelector('.showcase-dish-category');
                    const price = card.querySelector('.showcase-dish-bottom > strong');
                    const copy = document.createElement('span');
                    const suggestionTitle = document.createElement('strong');
                    const suggestionCategory = document.createElement('span');
                    const suggestionPrice = document.createElement('span');
                    const suggestionImage = document.createElement('img');

                    link.className = 'showcase-search-suggestion';
                    link.href = card.querySelector('.showcase-dish-image').href;

                    if (image) {
                        suggestionImage.src = image.currentSrc || image.src;
                        suggestionImage.alt = '';
                        suggestionImage.loading = 'lazy';
                        suggestionImage.decoding = 'async';
                        link.append(suggestionImage);
                    }

                    copy.className = 'showcase-search-suggestion-copy';
                    suggestionTitle.textContent = title?.textContent.trim() || 'Menu item';
                    suggestionCategory.textContent = category?.textContent.trim() || 'Menu';
                    copy.append(suggestionTitle, suggestionCategory);

                    suggestionPrice.className = 'showcase-search-suggestion-price';
                    suggestionPrice.textContent = price?.textContent.trim() || '';

                    link.append(copy, suggestionPrice);
                    suggestions.append(link);
                };

                const updateMenu = () => {
                    const query = search.value.trim();
                    const matches = getMatches(query);
                    const matchedCards = new Set(matches);

                    cards.forEach((card) => {
                        card.hidden = !matchedCards.has(card);
                    });

                    sections.forEach((section) => {
                        section.hidden = !section.querySelector('[data-menu-card]:not([hidden])');
                    });

                    if (noResults) {
                        noResults.hidden = cards.length === 0 || matches.length > 0;
                    }

                    if (results) {
                        results.textContent = cards.length === 0
                            ? ''
                            : `${matches.length} ${matches.length === 1 ? 'dish' : 'dishes'} to explore`;
                    }

                    clearButton.hidden = query.length === 0;
                    suggestions.replaceChildren();

                    matches.slice(0, 6).forEach(addSuggestion);
                    emptyMessage.hidden = query.length === 0 || matches.length > 0;
                    popover.hidden = !searchIsOpen || query.length === 0;
                    search.setAttribute('aria-expanded', String(!popover.hidden));
                };

                filters.forEach((filter) => {
                    filter.addEventListener('click', () => {
                        activeCategory = filter.dataset.categoryFilter;
                        filters.forEach((item) => {
                            const selected = item === filter;
                            item.classList.toggle('is-active', selected);
                            item.setAttribute('aria-pressed', String(selected));
                        });
                        updateMenu();
                    });
                });

                search.addEventListener('input', updateMenu);
                search.addEventListener('focus', () => {
                    searchIsOpen = true;
                    updateMenu();
                });
                search.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape') {
                        searchIsOpen = false;
                        search.blur();
                        updateMenu();
                    } else if (event.key === 'Enter' && !popover.hidden) {
                        const firstSuggestion = suggestions.querySelector('a');
                        if (firstSuggestion) {
                            event.preventDefault();
                            window.location.assign(firstSuggestion.href);
                        }
                    }
                });

                clearButton.addEventListener('click', () => {
                    search.value = '';
                    searchIsOpen = true;
                    search.focus();
                    updateMenu();
                });

                document.addEventListener('click', (event) => {
                    if (!searchWrap.contains(event.target)) {
                        searchIsOpen = false;
                        updateMenu();
                    }
                });

                page.addEventListener('keydown', (event) => {
                    if (event.key === '/' && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
                        event.preventDefault();
                        searchIsOpen = true;
                        search.focus();
                    }
                });

                updateMenu();
            })();
        </script>
    </section>
@endsection
