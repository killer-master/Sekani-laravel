@extends('layouts.app')

@section('content')
    <style>
        .rooftop-preview {
            --roof-orange: #ff5a0a;
            --roof-orange-light: #ff9a68;
            --roof-ink: #0b0b0b;
            --roof-panel: #151413;
            --roof-muted: #aaa6a0;
            overflow: hidden;
            background: var(--roof-ink);
            color: #f7f4ef;
        }

        .rooftop-preview-hero {
            display: flex;
            min-height: min(790px, 90svh);
            align-items: flex-end;
            border-bottom: 1px solid rgba(255, 90, 10, .2);
            background:
                radial-gradient(ellipse at 75% 30%, rgba(255, 90, 10, .12), transparent 34%),
                linear-gradient(90deg, rgba(6, 6, 6, .9) 0%, rgba(6, 6, 6, .62) 49%, rgba(6, 6, 6, .16) 100%),
                linear-gradient(0deg, var(--roof-ink), transparent 55%),
                url('{{ asset('assets/images/roof-hero.jpg') }}') center 50% / cover no-repeat,
                #111;
        }

        .rooftop-preview-hero-content {
            width: 100%;
            padding-top: 7rem;
            padding-bottom: clamp(4.5rem, 10vw, 8rem);
        }

        .rooftop-preview-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .75rem;
            color: var(--roof-orange-light);
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .rooftop-preview-eyebrow::before {
            width: 2rem;
            height: 1px;
            background: currentColor;
            content: "";
        }

        .rooftop-preview-title {
            max-width: 860px;
            margin: 1.15rem 0 1.1rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3rem, 8.5vw, 7rem);
            font-weight: 500;
            letter-spacing: -.055em;
            line-height: .98;
        }

        .rooftop-preview-title em {
            color: var(--roof-orange-light);
            font-weight: 400;
        }

        .rooftop-preview-lead {
            max-width: 570px;
            margin: 0;
            color: #d3d0cb;
            font-size: clamp(1rem, 2vw, 1.15rem);
            line-height: 1.8;
        }

        .rooftop-preview-actions {
            display: flex;
            flex-wrap: wrap;
            gap: .8rem;
            margin-top: 2rem;
        }

        .rooftop-preview-button {
            display: inline-flex;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            gap: .55rem;
            border: 1px solid var(--roof-orange);
            border-radius: 999px;
            padding: .8rem 1.4rem;
            background: linear-gradient(110deg, #ff5a0a, #e94d00);
            color: #fff;
            font-size: .82rem;
            font-weight: 750;
            letter-spacing: .04em;
            text-decoration: none;
            transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
        }

        .rooftop-preview-button:hover {
            transform: translateY(-2px);
            filter: brightness(1.08);
            color: #fff;
            box-shadow: 0 10px 28px rgba(255, 90, 10, .2);
        }

        .rooftop-preview-button--quiet {
            border-color: rgba(255, 255, 255, .35);
            background: rgba(10, 10, 10, .32);
        }

        .rooftop-preview-button--quiet:hover {
            border-color: var(--roof-orange);
        }

        .rooftop-preview-section {
            padding: clamp(4rem, 8vw, 7rem) 0;
        }

        .rooftop-preview-section-heading {
            max-width: 700px;
            margin: 0 auto clamp(2.4rem, 5vw, 4rem);
            text-align: center;
        }

        .rooftop-preview-kicker {
            margin-bottom: .85rem;
            color: var(--roof-orange-light);
            font-size: .69rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .rooftop-preview-heading {
            margin: 0 0 .9rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.15rem, 5vw, 3.8rem);
            font-weight: 500;
            letter-spacing: -.04em;
            line-height: 1.1;
        }

        .rooftop-preview-description {
            margin: 0;
            color: var(--roof-muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        .rooftop-preview-story-image {
            width: 100%;
            height: clamp(320px, 48vw, 580px);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1.2rem;
            object-fit: cover;
            box-shadow: 0 28px 70px rgba(0, 0, 0, .35);
        }

        .rooftop-preview-story-copy {
            color: #c5c1bb;
            font-size: .98rem;
            line-height: 1.9;
        }

        .rooftop-preview-stat {
            height: 100%;
            border-left: 1px solid rgba(255, 90, 10, .42);
            padding-left: .9rem;
        }

        .rooftop-preview-stat strong {
            display: block;
            color: var(--roof-orange-light);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 500;
        }

        .rooftop-preview-stat span {
            color: var(--roof-muted);
            font-size: .75rem;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .rooftop-preview-feature {
            position: relative;
            min-height: 300px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1.1rem;
            background-color: #171615;
            background-position: center;
            background-size: cover;
        }

        .rooftop-preview-feature::before {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(5, 5, 5, .88), rgba(5, 5, 5, .06) 80%);
            content: "";
        }

        .rooftop-preview-feature--cocktails {
            background-image: url('{{ asset('assets/images/roof2.jpg') }}');
        }

        .rooftop-preview-feature--plates {
            background-image: url('{{ asset('assets/images/roof3.jpg') }}');
        }

        .rooftop-preview-feature-content {
            position: absolute;
            inset: auto 0 0;
            padding: clamp(1.3rem, 4vw, 2rem);
        }

        .rooftop-preview-feature-content span {
            color: var(--roof-orange-light);
            font-size: .68rem;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
        }

        .rooftop-preview-feature-content h3 {
            margin: .55rem 0 0;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(1.7rem, 4vw, 2.4rem);
            font-weight: 500;
        }

        .rooftop-preview-menu-card {
            height: 100%;
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 1.1rem;
            padding: clamp(1.2rem, 3vw, 1.7rem);
            background: linear-gradient(145deg, #191817, #111);
            box-shadow: inset 0 1px rgba(255, 255, 255, .03);
        }

        .rooftop-preview-menu-title {
            display: flex;
            align-items: center;
            gap: .75rem;
            margin: 0 0 1.1rem;
            padding-bottom: .9rem;
            border-bottom: 1px solid rgba(255, 255, 255, .09);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.35rem;
            font-weight: 500;
        }

        .rooftop-preview-menu-title i {
            color: var(--roof-orange-light);
            font-size: 1rem;
        }

        .rooftop-preview-menu-item {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: .75rem;
            padding: .85rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, .06);
        }

        .rooftop-preview-menu-item:last-child {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .rooftop-preview-menu-item h4 {
            margin: 0 0 .3rem;
            font-size: .92rem;
            font-weight: 700;
        }

        .rooftop-preview-menu-item p {
            margin: 0;
            color: var(--roof-muted);
            font-size: .8rem;
            line-height: 1.55;
        }

        .rooftop-preview-menu-price {
            color: var(--roof-orange-light);
            font-size: .88rem;
            font-weight: 750;
            white-space: nowrap;
        }

        .rooftop-preview-booking-wrap {
            background:
                radial-gradient(ellipse at 50% 0, rgba(255, 90, 10, .1), transparent 38rem),
                #10100f;
        }

        .rooftop-preview-booking-card {
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1.25rem;
            padding: clamp(1.2rem, 4vw, 2.5rem);
            background: linear-gradient(145deg, #1a1918, #121211 70%);
            box-shadow: 0 28px 75px rgba(0, 0, 0, .3);
        }

        .rooftop-preview-booking-card .form-label {
            color: #e8e4de;
            font-size: .84rem;
            font-weight: 700;
        }

        .rooftop-preview-booking-card .form-control,
        .rooftop-preview-booking-card .form-select {
            min-height: 3.1rem;
            border: 1px solid rgba(255, 255, 255, .13);
            border-radius: .7rem;
            background-color: #0c0c0b;
            color: #f6f3ef;
        }

        .rooftop-preview-booking-card .form-control::placeholder {
            color: #77736e;
        }

        .rooftop-preview-booking-card .form-control:focus,
        .rooftop-preview-booking-card .form-select:focus {
            border-color: var(--roof-orange);
            box-shadow: 0 0 0 .2rem rgba(255, 90, 10, .15);
        }

        .rooftop-preview-booking-card textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .rooftop-preview-submit {
            width: 100%;
            min-height: 3.25rem;
            border: 1px solid var(--roof-orange);
            border-radius: .75rem;
            background: linear-gradient(110deg, #ff5a0a, #e94d00);
            color: white;
            font-weight: 800;
            transition: transform .2s ease, filter .2s ease;
        }

        .rooftop-preview-submit:hover {
            transform: translateY(-2px);
            filter: brightness(1.08);
        }

        .rooftop-preview-note {
            margin: .85rem 0 0;
            color: var(--roof-muted);
            font-size: .8rem;
            line-height: 1.6;
        }

        .rooftop-preview a:focus-visible,
        .rooftop-preview button:focus-visible {
            outline: 2px solid var(--roof-orange-light);
            outline-offset: 3px;
        }

        @media (max-width: 575.98px) {
            .rooftop-preview-hero {
                min-height: min(690px, 85svh);
                background-position: 58% center;
            }

            .rooftop-preview-hero-content {
                padding-top: 6rem;
                padding-bottom: 4.5rem;
            }

            .rooftop-preview-actions {
                align-items: stretch;
                flex-direction: column;
                max-width: 290px;
            }

            .rooftop-preview-feature {
                min-height: 245px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .rooftop-preview-button,
            .rooftop-preview-submit {
                transition: none;
            }

            .rooftop-preview-button:hover,
            .rooftop-preview-submit:hover {
                transform: none;
            }
        }
    </style>

    <main class="rooftop-preview">
        <section class="rooftop-preview-hero" aria-labelledby="rooftop-preview-title">
            <div class="container rooftop-preview-hero-content">
                <div class="rooftop-preview-eyebrow">Sekani Rooftop Lounge</div>
                <h1 class="rooftop-preview-title" id="rooftop-preview-title">Above the ordinary.<br><em>Beyond the night.</em></h1>
                <p class="rooftop-preview-lead">
                    Signature cocktails, considered cuisine, and a spectacular setting for evenings worth remembering.
                </p>
                <div class="rooftop-preview-actions">
                    <a class="rooftop-preview-button" href="#rooftop-preview-booking">Reserve your table</a>
                    <a class="rooftop-preview-button rooftop-preview-button--quiet" href="#rooftop-preview-menu">Explore the menu</a>
                </div>
            </div>
        </section>

        <section class="rooftop-preview-section" aria-labelledby="rooftop-preview-story-title">
            <div class="container">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-12 col-lg-6">
                        <img class="rooftop-preview-story-image" src="{{ asset('assets/images/roof1.jpg') }}"
                            alt="An elegant evening at Sekani Rooftop Lounge" loading="lazy">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="rooftop-preview-eyebrow">A higher perspective</div>
                        <h2 class="rooftop-preview-heading mt-3" id="rooftop-preview-story-title">Where the sky meets luxury.</h2>
                        <p class="rooftop-preview-story-copy">
                            Perched above the city, Sekani Rooftop Lounge is an escape from the ordinary. Sophisticated
                            design and panoramic views set the scene for evenings that stay with you.
                        </p>
                        <p class="rooftop-preview-story-copy">
                            Discover signature cocktails, world-class spirits, and artisanal small plates—whether you’re
                            celebrating something special or simply making tonight count.
                        </p>
                        <div class="row g-3 mt-4">
                            <div class="col-4"><div class="rooftop-preview-stat"><strong>360°</strong><span>City views</span></div></div>
                            <div class="col-4"><div class="rooftop-preview-stat"><strong>50+</strong><span>Cocktails</span></div></div>
                            <div class="col-4"><div class="rooftop-preview-stat"><strong>VIP</strong><span>Experience</span></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooftop-preview-section pt-0" aria-labelledby="rooftop-preview-offers-title">
            <div class="container">
                <header class="rooftop-preview-section-heading">
                    <div class="rooftop-preview-kicker">The evening, thoughtfully curated</div>
                    <h2 class="rooftop-preview-heading" id="rooftop-preview-offers-title">A taste of the good life.</h2>
                    <p class="rooftop-preview-description">
                        Crafted cocktails and beautifully prepared plates, served in a setting made to slow the night down.
                    </p>
                </header>
                <div class="row g-3 g-lg-4">
                    <div class="col-12 col-md-6">
                        <article class="rooftop-preview-feature rooftop-preview-feature--cocktails">
                            <div class="rooftop-preview-feature-content">
                                <span>Crafted with passion</span>
                                <h3>Signature Cocktails</h3>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6">
                        <article class="rooftop-preview-feature rooftop-preview-feature--plates">
                            <div class="rooftop-preview-feature-content">
                                <span>Artisan cuisine</span>
                                <h3>Gourmet Small Plates</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooftop-preview-section pt-0" id="rooftop-preview-menu" aria-labelledby="rooftop-preview-menu-title">
            <div class="container">
                <header class="rooftop-preview-section-heading">
                    <div class="rooftop-preview-kicker">A selection from the bar</div>
                    <h2 class="rooftop-preview-heading" id="rooftop-preview-menu-title">The menu.</h2>
                    <p class="rooftop-preview-description">A few favorites for a memorable evening above the city.</p>
                </header>
                <div class="row g-3 g-lg-4">
                    <div class="col-12 col-lg-6">
                        <article class="rooftop-preview-menu-card">
                            <h3 class="rooftop-preview-menu-title"><i class="fa-solid fa-martini-glass-citrus" aria-hidden="true"></i> Signature Cocktails</h3>
                            <div class="rooftop-preview-menu-item"><div><h4>Sekani Sunset</h4><p>Bourbon, passion fruit, honey, citrus</p></div><span class="rooftop-preview-menu-price">₦8,500</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Golden Hour</h4><p>Champagne, elderflower, gold flakes</p></div><span class="rooftop-preview-menu-price">₦12,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Midnight Sky</h4><p>Vodka, blue curaçao, butterfly pea</p></div><span class="rooftop-preview-menu-price">₦7,500</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Rooftop Negroni</h4><p>Gin, Campari, sweet vermouth</p></div><span class="rooftop-preview-menu-price">₦9,000</span></div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-6">
                        <article class="rooftop-preview-menu-card">
                            <h3 class="rooftop-preview-menu-title"><i class="fa-solid fa-star" aria-hidden="true"></i> Premium Spirits</h3>
                            <div class="rooftop-preview-menu-item"><div><h4>Hennessy XO</h4><p>Cognac, 70cl bottle</p></div><span class="rooftop-preview-menu-price">₦180,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Moët &amp; Chandon</h4><p>Champagne, 75cl</p></div><span class="rooftop-preview-menu-price">₦95,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Macallan 18</h4><p>Single malt whisky</p></div><span class="rooftop-preview-menu-price">₦250,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Belaire Rosé</h4><p>Sparkling wine</p></div><span class="rooftop-preview-menu-price">₦75,000</span></div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-6">
                        <article class="rooftop-preview-menu-card">
                            <h3 class="rooftop-preview-menu-title"><i class="fa-solid fa-utensils" aria-hidden="true"></i> Small Plates</h3>
                            <div class="rooftop-preview-menu-item"><div><h4>Truffle Fries</h4><p>Parmesan, truffle oil, herbs</p></div><span class="rooftop-preview-menu-price">₦6,500</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Grilled Prawns</h4><p>Garlic butter, lemon</p></div><span class="rooftop-preview-menu-price">₦15,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Wagyu Sliders</h4><p>Caramelized onions, aioli</p></div><span class="rooftop-preview-menu-price">₦18,500</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Mezze Platter</h4><p>Hummus, baba ganoush, pita</p></div><span class="rooftop-preview-menu-price">₦12,000</span></div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-6">
                        <article class="rooftop-preview-menu-card">
                            <h3 class="rooftop-preview-menu-title"><i class="fa-solid fa-leaf" aria-hidden="true"></i> Zero-proof Signatures</h3>
                            <div class="rooftop-preview-menu-item"><div><h4>Virgin Mojito</h4><p>Lime, mint, soda</p></div><span class="rooftop-preview-menu-price">₦4,500</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Berry Bliss</h4><p>Mixed berries, elderflower</p></div><span class="rooftop-preview-menu-price">₦5,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Ginger Spark</h4><p>Fresh ginger, lemon, honey</p></div><span class="rooftop-preview-menu-price">₦4,000</span></div>
                            <div class="rooftop-preview-menu-item"><div><h4>Tropical Sunset</h4><p>Mango, pineapple, coconut</p></div><span class="rooftop-preview-menu-price">₦5,500</span></div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooftop-preview-section rooftop-preview-booking-wrap" id="rooftop-preview-booking"
            aria-labelledby="rooftop-preview-booking-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <header class="rooftop-preview-section-heading">
                            <div class="rooftop-preview-kicker">Make it an occasion</div>
                            <h2 class="rooftop-preview-heading" id="rooftop-preview-booking-title">Reserve your evening.</h2>
                            <p class="rooftop-preview-description">
                                Tell us a little about your plans. We’ll open WhatsApp with your reservation request ready to send.
                            </p>
                        </header>
                        <div class="rooftop-preview-booking-card">
                            <form id="rooftop-preview-booking-form">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label" for="rooftop-preview-type">Experience</label>
                                        <select class="form-select" id="rooftop-preview-type" required>
                                            <option value="Rooftop Lounge" selected>Rooftop Lounge</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-name">Full name</label>
                                        <input class="form-control" id="rooftop-preview-name" type="text"
                                            autocomplete="name" placeholder="Your full name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-email">Email</label>
                                        <input class="form-control" id="rooftop-preview-email" type="email"
                                            autocomplete="email" placeholder="you@example.com" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-phone">Phone number</label>
                                        <input class="form-control" id="rooftop-preview-phone" type="tel"
                                            autocomplete="tel" placeholder="+234 xxx xxx xxxx" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-date">Preferred date</label>
                                        <input class="form-control" id="rooftop-preview-date" type="date" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-guests">Number of guests</label>
                                        <select class="form-select" id="rooftop-preview-guests" required>
                                            <option value="" selected disabled>Select guests</option>
                                            <option>2 guests</option><option>4 guests</option><option>6 guests</option>
                                            <option>8 guests</option><option>10+ guests</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="rooftop-preview-occasion">Occasion</label>
                                        <select class="form-select" id="rooftop-preview-occasion" required>
                                            <option value="" selected disabled>Select occasion</option>
                                            <option>Birthday</option><option>Anniversary</option>
                                            <option>Business Meeting</option><option>Date Night</option><option>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="rooftop-preview-message">
                                            Special requests <span class="fw-normal text-secondary">(optional)</span>
                                        </label>
                                        <textarea class="form-control" id="rooftop-preview-message" rows="4"
                                            placeholder="Share any details that will help us prepare..."></textarea>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <button class="rooftop-preview-submit" type="submit">
                                            <i class="fa-brands fa-whatsapp me-2" aria-hidden="true"></i>Continue to WhatsApp
                                        </button>
                                        <p class="rooftop-preview-note">
                                            WhatsApp opens with your request ready. Review it and tap Send to contact Sekani.
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        (() => {
            const form = document.getElementById('rooftop-preview-booking-form');
            const dateInput = document.getElementById('rooftop-preview-date');

            if (!form || !dateInput) {
                return;
            }

            const today = new Date();
            today.setMinutes(today.getMinutes() - today.getTimezoneOffset());
            dateInput.min = today.toISOString().split('T')[0];

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                if (!form.reportValidity()) {
                    return;
                }

                const value = (id) => document.getElementById(id).value.trim();
                const request = [
                    'Hello Sekani, I would like to reserve a table at the Rooftop Lounge.',
                    '',
                    `Experience: ${value('rooftop-preview-type')}`,
                    `Name: ${value('rooftop-preview-name')}`,
                    `Email: ${value('rooftop-preview-email')}`,
                    `Phone: ${value('rooftop-preview-phone')}`,
                    `Preferred date: ${value('rooftop-preview-date')}`,
                    `Number of guests: ${value('rooftop-preview-guests')}`,
                    `Occasion: ${value('rooftop-preview-occasion')}`,
                    `Special requests: ${value('rooftop-preview-message') || 'None'}`
                ].join('\n');

                window.location.assign(
                    `https://wa.me/2349065404205?text=${encodeURIComponent(request)}`
                );
            });
        })();
    </script>
@endsection
