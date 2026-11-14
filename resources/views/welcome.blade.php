@extends('layouts.app')

@section('content')
    <style>
        .home-preview {
            --home-accent: var(--sekani-color, #ff5a0a);
            --home-bg: #0b0b0b;
            --home-panel: #151515;
            --home-border: rgba(255, 255, 255, .1);
            --home-muted: #a4a4a4;
            overflow: hidden;
            background: var(--home-bg);
            color: #fff;
        }

        .home-preview a {
            text-decoration: none;
        }

        .home-preview-hero {
            position: relative;
            display: flex;
            min-height: min(820px, calc(100svh - 70px));
            align-items: center;
            background:
                linear-gradient(90deg, rgba(7, 7, 7, .9) 0%, rgba(7, 7, 7, .65) 48%, rgba(7, 7, 7, .2) 100%),
                linear-gradient(0deg, #0b0b0b 0%, transparent 28%),
                url('/assets/images/sekani-hero.jpg') center 45% / cover no-repeat,
                #111;
        }

        .home-preview-hero-content {
            width: min(100%, 820px);
            padding-top: clamp(4rem, 11vw, 8rem);
            padding-bottom: clamp(6rem, 13vw, 10rem);
        }

        .home-preview-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .75rem;
            color: var(--home-accent);
            font-size: .73rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .home-preview-eyebrow::before {
            width: 2rem;
            height: 1px;
            background: currentColor;
            content: "";
        }

        .home-preview-title {
            margin: 1rem 0;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.25rem, 10vw, 7.5rem);
            font-weight: 600;
            letter-spacing: -.055em;
            line-height: .96;
        }

        .home-preview-title span {
            color: var(--home-accent);
        }

        .home-preview-lead {
            max-width: 39rem;
            color: #d0d0d0;
            font-size: clamp(1rem, 2vw, 1.25rem);
            line-height: 1.75;
        }

        .home-preview-primary-link,
        .home-preview-outline-link {
            display: inline-flex;
            min-height: 3.25rem;
            align-items: center;
            justify-content: center;
            gap: .65rem;
            border-radius: 999px;
            padding: .8rem 1.35rem;
            font-size: .9rem;
            font-weight: 700;
            transition: transform .2s ease, background-color .2s ease, border-color .2s ease;
        }

        .home-preview-primary-link {
            border: 1px solid var(--home-accent);
            background: var(--home-accent);
            color: #fff;
        }

        .home-preview-primary-link:hover {
            transform: translateY(-2px);
            background: #e94d00;
            color: #fff;
        }

        .home-preview-outline-link {
            border: 1px solid rgba(255, 255, 255, .35);
            color: #fff;
        }

        .home-preview-outline-link:hover {
            transform: translateY(-2px);
            border-color: var(--home-accent);
            color: #fff;
        }

        .home-preview-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: .75rem 1.7rem;
            margin-top: 2.75rem;
            color: #e4e4e4;
            font-size: .88rem;
        }

        .home-preview-highlights i {
            margin-right: .4rem;
            color: var(--home-accent);
        }

        .home-preview-section {
            padding: clamp(4rem, 8vw, 7rem) 0;
        }

        .home-preview-section-heading {
            max-width: 47rem;
            margin: 0 auto clamp(2rem, 5vw, 3.5rem);
            text-align: center;
        }

        .home-preview-section-title {
            margin: .75rem 0;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 500;
            letter-spacing: -.035em;
        }

        .home-preview-section-title span {
            color: var(--home-accent);
        }

        .home-preview-section-copy {
            color: var(--home-muted);
            line-height: 1.75;
        }

        .home-preview-service {
            display: flex;
            height: 100%;
            min-height: 190px;
            flex-direction: column;
            border: 1px solid var(--home-border);
            border-radius: 1rem;
            padding: clamp(1.25rem, 3vw, 1.75rem);
            background: linear-gradient(145deg, #191919, #111);
            color: #fff;
            transition: transform .22s ease, border-color .22s ease, background-color .22s ease;
        }

        .home-preview-service:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 90, 10, .65);
            /* background: linear-gradient(145deg, #201914, #121110); */
            color: #fff;
        }

        .home-preview-service-icon {
            display: grid;
            width: 2.8rem;
            height: 2.8rem;
            place-items: center;
            border: 1px solid rgba(255, 90, 10, .3);
            border-radius: .85rem;
            background: rgba(255, 90, 10, .1);
            color: var(--home-accent);
            font-size: 1.1rem;
        }

        .home-preview-service-title {
            margin: 1.25rem 0 .45rem;
            font-size: 1.05rem;
            font-weight: 700;
        }

        .home-preview-service-copy {
            margin: 0;
            color: var(--home-muted);
            font-size: .88rem;
            line-height: 1.6;
        }

        .home-preview-empire {
            background:
                radial-gradient(ellipse at 90% 50%, rgba(255, 90, 10, .08), transparent 35rem),
                #101010;
        }

        .home-preview-empire-title {
            max-width: 37rem;
            margin: .75rem 0 1.25rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.2rem, 5vw, 3.7rem);
            font-weight: 500;
            letter-spacing: -.04em;
            line-height: 1.08;
        }

        .home-preview-empire-title span {
            color: var(--home-accent);
        }

        .home-preview-feature {
            display: flex;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--home-border);
        }

        .home-preview-feature-icon {
            flex: 0 0 2.5rem;
            color: var(--home-accent);
            font-size: 1.15rem;
            padding-top: .2rem;
        }

        .home-preview-feature h3 {
            margin: 0 0 .3rem;
            font-size: 1rem;
            font-weight: 700;
        }

        .home-preview-feature p {
            margin: 0;
            color: var(--home-muted);
            font-size: .9rem;
            line-height: 1.65;
        }

        .home-preview-gallery {
            display: grid;
            grid-template-columns: 1fr 1.25fr;
            grid-template-rows: repeat(2, minmax(150px, 1fr));
            gap: .8rem;
            min-height: 420px;
        }

        .home-preview-gallery img {
            width: 100%;
            height: 100%;
            min-height: 0;
            border-radius: 1rem;
            object-fit: cover;
        }

        .home-preview-gallery img:first-child {
            grid-row: span 2;
        }

        .home-preview-stats {
            border-top: 1px solid var(--home-border);
            border-bottom: 1px solid var(--home-border);
            background: #101010;
        }

        .home-preview-stat {
            height: 100%;
            padding: 1.7rem 1rem;
            text-align: center;
        }

        .home-preview-stat strong {
            display: block;
            color: var(--home-accent);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 500;
        }

        .home-preview-stat span {
            color: var(--home-muted);
            font-size: .82rem;
        }

        .home-preview-cta {
            padding: clamp(4rem, 8vw, 6rem) 0;
            background:
                radial-gradient(ellipse at center, rgba(255, 90, 10, .11), transparent 38rem),
                #0b0b0b;
        }

        .home-preview-cta-card {
            height: 100%;
            border: 1px solid var(--home-border);
            border-radius: 1rem;
            padding: clamp(1.5rem, 4vw, 2.5rem);
            background: #141414;
        }

        .home-preview-cta-card>i {
            margin-bottom: 1.25rem;
            color: var(--home-accent);
            font-size: 1.5rem;
        }

        .home-preview-cta-card h3 {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.5rem;
        }

        .home-preview-cta-card p {
            min-height: 3rem;
            color: var(--home-muted);
            line-height: 1.65;
        }

        @media (max-width: 575.98px) {
            .home-preview-hero {
                min-height: 680px;
                min-height: min(760px, calc(100svh - 64px));
                background-position: 58% center;
            }

            .home-preview-hero-content {
                padding-top: 4.5rem;
                padding-bottom: 5rem;
            }

            .home-preview-highlights {
                display: grid;
                gap: .65rem;
                margin-top: 2rem;
            }

            .home-preview-service {
                min-height: 175px;
                padding: 1.1rem;
            }

            .home-preview-gallery {
                grid-template-rows: repeat(2, minmax(125px, 1fr));
                min-height: 270px;
                gap: .55rem;
            }

            .home-preview-gallery img {
                border-radius: .7rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .home-preview *,
            .home-preview *::before,
            .home-preview *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>

    <main class="home-preview">
        <section class="home-preview-hero">
            <div class="container">
                <div class="home-preview-hero-content">
                    <div class="home-preview-eyebrow">Welcome to</div>
                    <h1 class="home-preview-title">SEKANI<span>.</span></h1>
                    <p class="home-preview-lead">
                        A destination for exceptional dining, entertainment, relaxation, and the moments worth remembering.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a class="home-preview-primary-link" href="#home-preview-services">
                            Explore Sekani <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                        <a class="home-preview-outline-link" href="{{ route('contact.page') }}">
                            Get in touch
                        </a>
                    </div>
                    <div class="home-preview-highlights">
                        <span><i class="fa-solid fa-circle-check" aria-hidden="true"></i>9+ premium services</span>
                        <span><i class="fa-regular fa-clock" aria-hidden="true"></i>Open daily</span>
                        <span><i class="fa-solid fa-star" aria-hidden="true"></i>World-class experiences</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-preview-services" class="home-preview-section">
            <div class="container-fluid">
                <header class="home-preview-section-heading">
                    <div class="home-preview-eyebrow">Discover Sekani</div>
                    <h2 class="home-preview-section-title">More to enjoy.<br><span>All in one destination.</span></h2>
                    <p class="home-preview-section-copy mb-0">
                        From elevated dining to a full day of leisure, find the experience that fits your moment.
                    </p>
                </header>

                <div class="row g-3 g-lg-4">
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('eatry.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-eat home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-utensils"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Eatery</h3>
                            <p class="home-preview-service-copy">Fine dining and gourmet bites.</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('vip.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-vip home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-martini-glass"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">VIP Lounge</h3>
                            <p class="home-preview-service-copy">An intimate, elevated night out.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('saloon.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-sal home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-scissors"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Unisex Salon</h3>
                            <p class="home-preview-service-copy">Premium grooming and relaxation.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('pool.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-poo home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-water-ladder"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Pool Bar</h3>
                            <p class="home-preview-service-copy">Refresh and unwind by the pool.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('planning.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-pla home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-champagne-glasses"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Events</h3>
                            <p class="home-preview-service-copy">Catering and event planning.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('game.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-gam home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-gamepad"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Game Arena</h3>
                            <p class="home-preview-service-copy">Arcade and board game action.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('fitness.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-fit home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-dumbbell"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Fitness</h3>
                            <p class="home-preview-service-copy">Move, train, and feel your best.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('rooftop.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-roo home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-hotel"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Rooftop Lounge</h3>
                            <p class="home-preview-service-copy">Take in the view and stay awhile.</p>
                        </a></div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('pastry.page') }}"
                            class="text-decoration-none index-services-hover index-services-hover-pas home-preview-service">
                            <span class="home-preview-service-icon"><i class="fa-solid fa-cake-candles"
                                    aria-hidden="true"></i></span>
                            <h3 class="home-preview-service-title">Pastry & Bread</h3>
                            <p class="home-preview-service-copy">Freshly baked treats and bites.</p>
                        </a></div>
                </div>
            </div>
        </section>

        <section class="home-preview-section home-preview-empire">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-12 col-lg-6">
                        <div class="home-preview-eyebrow">The Sekani experience</div>
                        <h2 class="home-preview-empire-title">Where luxury meets <span>endless possibilities.</span></h2>
                        <p class="home-preview-section-copy">
                            Sekani is more than a destination; it’s a lifestyle. From sunrise fitness sessions to sunset
                            cocktails and unforgettable celebrations, every visit has room for something extraordinary.
                        </p>

                        <div class="home-preview-feature">
                            <span class="home-preview-feature-icon"><i class="fa-solid fa-spa"
                                    aria-hidden="true"></i></span>
                            <div>
                                <h3>Salon & spa</h3>
                                <p>Professional grooming, styling, and restorative treatments.</p>
                            </div>
                        </div>
                        <div class="home-preview-feature">
                            <span class="home-preview-feature-icon"><i class="fa-solid fa-vr-cardboard"
                                    aria-hidden="true"></i></span>
                            <div>
                                <h3>Virtual reality</h3>
                                <p>Immersive experiences for a new kind of adventure.</p>
                            </div>
                        </div>
                        <div class="home-preview-feature">
                            <span class="home-preview-feature-icon"><i class="fa-solid fa-crosshairs"
                                    aria-hidden="true"></i></span>
                            <div>
                                <h3>Paintball arena</h3>
                                <p>Team battles, professional gear, and tactical courses.</p>
                            </div>
                        </div>
                        <div class="home-preview-feature">
                            <span class="home-preview-feature-icon"><i class="fa-solid fa-basketball"
                                    aria-hidden="true"></i></span>
                            <div>
                                <h3>Sports complex</h3>
                                <p>Courts and activities to keep you moving.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="home-preview-gallery" aria-label="Scenes from Sekani">
                            <img src="{{ asset('assets/images/public.avif') }}" alt="Sekani leisure space"
                                loading="lazy">
                            <img src="{{ asset('assets/images/public (1).avif') }}" alt="Sekani venue" loading="lazy">
                            <img src="{{ asset('assets/images/publicContain.webp') }}" alt="Sekani experience"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-preview-stats">
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-4 g-0">
                    <div class="col">
                        <div class="home-preview-stat"><strong>9+</strong><span>Premium services</span></div>
                    </div>
                    <div class="col">
                        <div class="home-preview-stat"><strong>24/7</strong><span>Access available</span></div>
                    </div>
                    <div class="col">
                        <div class="home-preview-stat"><strong>VIP</strong><span>Luxury experience</span></div>
                    </div>
                    <div class="col">
                        <div class="home-preview-stat"><strong>100%</strong><span>Satisfaction focused</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-preview-cta">
            <div class="container">
                <header class="home-preview-section-heading">
                    <div class="home-preview-eyebrow">Your next moment starts here</div>
                    <h2 class="home-preview-section-title">Ready to experience <span>SEKANI?</span></h2>
                    <p class="home-preview-section-copy mb-0">Plan a visit, book a table, or talk with our team.</p>
                </header>

                <div class="row g-3 g-lg-4">
                    <div class="col-12 col-lg-6">
                        <article class="home-preview-cta-card">
                            <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                            <h3>Make a reservation</h3>
                            <p>Book your spot for dining, the lounge, or your next event.</p>
                            <a href="{{ route('eatry.page') }}" class="home-preview-primary-link">
                                Book now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </article>
                    </div>
                    <div class="col-12 col-lg-6">
                        <article class="home-preview-cta-card">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                            <h3>Get in touch</h3>
                            <p>Have questions? We’re here to help you plan your visit.</p>
                            <a href="{{ route('contact.page') }}" class="home-preview-outline-link">
                                Contact us <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection