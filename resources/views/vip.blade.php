@extends('layouts.app')

@section('content')
    <style>
        .vip-preview {
            --vip-orange: #ff5a0a;
            --vip-orange-light: #ff9a68;
            --vip-bg: #090909;
            --vip-panel: #121212;
            --vip-muted: #aaa69d;
            overflow: hidden;
            background: var(--vip-bg);
            color: #f7f4ed;
        }

        .vip-preview-hero {
            position: relative;
            display: flex;
            min-height: min(760px, 88svh);
            align-items: flex-end;
            background:
                linear-gradient(90deg, rgba(7, 7, 7, .88) 0%, rgba(7, 7, 7, .5) 52%, rgba(7, 7, 7, .1) 100%),
                linear-gradient(0deg, var(--vip-bg) 0%, transparent 42%),
                url('{{ asset('assets/images/vip1.jpg') }}') center 48% / cover no-repeat,
                #111;
        }

        .vip-preview-hero-content {
            width: 100%;
            padding-top: 7rem;
            padding-bottom: clamp(5rem, 11vw, 9rem);
        }

        .vip-preview-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .75rem;
            color: var(--vip-orange-light);
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .24em;
            text-transform: uppercase;
        }

        .vip-preview-eyebrow::before {
            width: 2.5rem;
            height: 1px;
            background: currentColor;
            content: "";
        }

        .vip-preview-title {
            max-width: 760px;
            margin: 1.15rem 0 1.25rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.2rem, 9vw, 7.5rem);
            font-weight: 500;
            letter-spacing: -.055em;
            line-height: .96;
        }

        .vip-preview-title em {
            color: var(--vip-orange-light);
            font-weight: 400;
        }

        .vip-preview-lead {
            max-width: 540px;
            margin: 0;
            color: #dedbd4;
            font-size: clamp(1rem, 2vw, 1.15rem);
            line-height: 1.8;
        }

        .vip-preview-actions {
            display: flex;
            flex-wrap: wrap;
            gap: .85rem;
            margin-top: 2rem;
        }

        .vip-preview-button {
            display: inline-flex;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--vip-orange);
            border-radius: 999px;
            padding: .8rem 1.35rem;
            color: #111;
            background: var(--vip-orange);
            font-size: .82rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-decoration: none;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }

        .vip-preview-button:hover {
            transform: translateY(-2px);
            color: #111;
            background: var(--vip-orange-light);
        }

        .vip-preview-button--quiet {
            color: #f7f4ed;
            background: rgba(10, 10, 10, .25);
        }

        .vip-preview-button--quiet:hover {
            color: #111;
        }

        .vip-preview-section {
            padding: clamp(4rem, 8vw, 7.5rem) 0;
        }

        .vip-preview-section-heading {
            max-width: 680px;
            margin: 0 auto clamp(2.5rem, 5vw, 4rem);
            text-align: center;
        }

        .vip-preview-kicker {
            margin-bottom: .85rem;
            color: var(--vip-orange);
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .vip-preview-heading {
            margin: 0 0 .9rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 500;
            letter-spacing: -.035em;
        }

        .vip-preview-description {
            margin: 0;
            color: var(--vip-muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        .vip-preview-card {
            height: 100%;
            border: 1px solid rgba(255, 90, 10, .19);
            border-radius: 1.1rem;
            padding: clamp(1.4rem, 3vw, 2rem);
            background: linear-gradient(145deg, #171715, #101010 75%);
            transition: transform .25s ease, border-color .25s ease;
        }

        .vip-preview-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 90, 10, .55);
        }

        .vip-preview-card-icon {
            display: grid;
            width: 3.25rem;
            height: 3.25rem;
            margin-bottom: 1.35rem;
            place-items: center;
            border: 1px solid rgba(255, 90, 10, .27);
            border-radius: 1rem;
            color: var(--vip-orange-light);
            background: rgba(255, 90, 10, .08);
            font-size: 1.15rem;
        }

        .vip-preview-card h3 {
            margin: 0 0 .7rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.45rem;
            font-weight: 500;
        }

        .vip-preview-card p {
            margin: 0;
            color: var(--vip-muted);
            font-size: .94rem;
            line-height: 1.75;
        }

        .vip-preview-gallery {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            grid-template-rows: repeat(2, minmax(180px, 270px));
            gap: 1rem;
        }

        .vip-preview-gallery-item {
            position: relative;
            min-height: 180px;
            overflow: hidden;
            border: 1px solid rgba(255, 90, 10, .23);
            border-radius: 1rem;
            background: #171717;
        }

        .vip-preview-gallery-item:first-child {
            grid-row: span 2;
        }

        .vip-preview-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .vip-preview-gallery-item:hover img {
            transform: scale(1.04);
        }

        .vip-preview-gallery-item::after {
            position: absolute;
            inset: 45% 0 0;
            background: linear-gradient(0deg, rgba(0, 0, 0, .35), transparent);
            content: "";
            pointer-events: none;
        }

        .vip-preview-footer {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding: 1.5rem 0;
            color: #8e8a82;
            font-size: .78rem;
            text-align: center;
        }

        .vip-preview a:focus-visible {
            outline: 2px solid var(--vip-orange-light);
            outline-offset: 4px;
        }

        @media (max-width: 575.98px) {
            .vip-preview-hero {
                min-height: min(690px, 82svh);
                background-position: 58% center;
            }

            .vip-preview-hero-content {
                padding-top: 6rem;
                padding-bottom: 5rem;
            }

            .vip-preview-actions {
                align-items: stretch;
                flex-direction: column;
                max-width: 290px;
            }

            .vip-preview-gallery {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 260px 150px;
                gap: .65rem;
            }

            .vip-preview-gallery-item:first-child {
                grid-column: span 2;
                grid-row: auto;
            }

            .vip-preview-gallery-item {
                min-height: 140px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .vip-preview-card,
            .vip-preview-button,
            .vip-preview-gallery-item img {
                transition: none;
            }

            .vip-preview-card:hover,
            .vip-preview-button:hover {
                transform: none;
            }
        }
    </style>

    <div class="vip-preview">
        <section class="vip-preview-hero" aria-labelledby="vip-preview-title">
            <div class="container vip-preview-hero-content">
                <div class="vip-preview-eyebrow">Sekani's VIP Lounge</div>
                <h1 class="vip-preview-title" id="vip-preview-title">Luxury, <em>without limits.</em></h1>
                <p class="vip-preview-lead">
                    Step into a more personal kind of nightlife, with refined spaces, thoughtful service, and
                    unforgettable moments made around you.
                </p>
                <div class="vip-preview-actions">
                    <a class="vip-preview-button" href="#vip-preview-experience">Discover the experience</a>
                    <a class="vip-preview-button vip-preview-button--quiet" href="#vip-preview-gallery">View the gallery</a>
                </div>
            </div>
        </section>

        <section class="vip-preview-section" id="vip-preview-experience" aria-labelledby="vip-preview-experience-title">
            <div class="container">
                <header class="vip-preview-section-heading">
                    <div class="vip-preview-kicker">The Sekani difference</div>
                    <h2 class="vip-preview-heading" id="vip-preview-experience-title">An evening, elevated.</h2>
                    <p class="vip-preview-description">
                        Every detail is designed to make your time with us feel effortless, exclusive, and entirely yours.
                    </p>
                </header>

                <div class="row g-3 g-lg-4">
                    <div class="col-12 col-sm-6">
                        <article class="vip-preview-card">
                            <div class="vip-preview-card-icon" aria-hidden="true"><i class="fa-solid fa-crown"></i></div>
                            <h3>VIP Tables &amp; Booths</h3>
                            <p>Settle into elevated seating with prime views, attentive service, and the privacy to enjoy the night your way.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6">
                        <article class="vip-preview-card">
                            <div class="vip-preview-card-icon" aria-hidden="true"><i class="fa-solid fa-wine-glass"></i></div>
                            <h3>Bottle Service</h3>
                            <p>Explore premium spirits and champagne, served with care by our experienced team.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6">
                        <article class="vip-preview-card">
                            <div class="vip-preview-card-icon" aria-hidden="true"><i class="fa-solid fa-user-group"></i></div>
                            <h3>Private Rooms</h3>
                            <p>Find a more intimate setting for special celebrations, business entertaining, and time together.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6">
                        <article class="vip-preview-card">
                            <div class="vip-preview-card-icon" aria-hidden="true"><i class="fa-solid fa-star"></i></div>
                            <h3>Personalized Experience</h3>
                            <p>From the atmosphere to the small details, we shape the experience around what matters to you.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="vip-preview-section pt-0" id="vip-preview-gallery" aria-labelledby="vip-preview-gallery-title">
            <div class="container">
                <header class="vip-preview-section-heading">
                    <div class="vip-preview-kicker">A look inside</div>
                    <h2 class="vip-preview-heading" id="vip-preview-gallery-title">Made for the moment.</h2>
                    <p class="vip-preview-description">A glimpse of the spaces and nights waiting at Sekani's VIP lounge.</p>
                </header>
                <div class="vip-preview-gallery">
                    <figure class="vip-preview-gallery-item">
                        <img src="{{ asset('assets/images/vip1.jpg') }}" alt="An elegant view inside Sekani's VIP lounge" loading="lazy">
                    </figure>
                    <figure class="vip-preview-gallery-item">
                        <img src="{{ asset('assets/images/vip2.jpg') }}" alt="VIP lounge interior" loading="lazy">
                    </figure>
                    <figure class="vip-preview-gallery-item">
                        <img src="{{ asset('assets/images/vip3.jpg') }}" alt="A detail from the VIP lounge" loading="lazy">
                    </figure>
                </div>
            </div>
        </section>

        <footer class="vip-preview-footer">
            <div class="container">Sekani VIP Lounge · Experience the extraordinary</div>
        </footer>
    </div>
@endsection
