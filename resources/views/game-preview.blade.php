@extends('layouts.app')

@section('content')
    <style>
        .game-preview {
            --game-orange: #ff5a0a;
            --game-orange-light: #ff9a68;
            --game-bg: #0b0c0e;
            --game-panel: #141518;
            --game-muted: #a7a9ad;
            overflow: hidden;
            background: var(--game-bg);
            color: #f7f7f7;
        }

        .game-preview-hero {
            display: flex;
            min-height: min(760px, 88svh);
            align-items: flex-end;
            background:
                linear-gradient(90deg, rgba(5, 6, 8, .91) 0%, rgba(5, 6, 8, .58) 52%, rgba(5, 6, 8, .15) 100%),
                linear-gradient(0deg, var(--game-bg), transparent 46%),
                url('{{ asset('assets/images/game-hero.jpg') }}') center / cover no-repeat,
                #101114;
        }

        .game-preview-hero-content {
            width: 100%;
            padding-top: 7rem;
            padding-bottom: clamp(4.5rem, 10vw, 8rem);
        }

        .game-preview-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .75rem;
            color: var(--game-orange-light);
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .game-preview-eyebrow::before {
            width: 2rem;
            height: 1px;
            background: currentColor;
            content: "";
        }

        .game-preview-title {
            max-width: 850px;
            margin: 1.1rem 0 1rem;
            font-family: "Orbitron", "Montserrat", sans-serif;
            font-size: clamp(2.6rem, 8vw, 6.7rem);
            font-weight: 800;
            letter-spacing: -.055em;
            line-height: 1.02;
        }

        .game-preview-title span {
            color: var(--game-orange);
        }

        .game-preview-lead {
            max-width: 570px;
            margin: 0;
            color: #d3d4d7;
            font-size: clamp(1rem, 2vw, 1.15rem);
            line-height: 1.8;
        }

        .game-preview-actions {
            display: flex;
            flex-wrap: wrap;
            gap: .8rem;
            margin-top: 1.8rem;
        }

        .game-preview-button {
            display: inline-flex;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            gap: .55rem;
            border: 1px solid var(--game-orange);
            border-radius: 999px;
            padding: .8rem 1.35rem;
            background: var(--game-orange);
            color: #fff;
            font-size: .82rem;
            font-weight: 800;
            letter-spacing: .04em;
            text-decoration: none;
            transition: transform .2s ease, background-color .2s ease;
        }

        .game-preview-button:hover {
            transform: translateY(-2px);
            background: #e94d00;
            color: #fff;
        }

        .game-preview-button--quiet {
            border-color: rgba(255, 255, 255, .35);
            background: rgba(10, 10, 10, .35);
        }

        .game-preview-button--quiet:hover {
            border-color: var(--game-orange);
        }

        .game-preview-section {
            padding: clamp(4rem, 8vw, 7rem) 0;
        }

        .game-preview-heading {
            max-width: 720px;
            margin: 0 auto clamp(2.2rem, 5vw, 3.8rem);
            text-align: center;
        }

        .game-preview-kicker {
            margin-bottom: .8rem;
            color: var(--game-orange);
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .game-preview-heading h2 {
            margin: 0 0 .85rem;
            font-family: "Orbitron", "Montserrat", sans-serif;
            font-size: clamp(1.8rem, 5vw, 3.25rem);
            font-weight: 700;
            letter-spacing: -.04em;
            line-height: 1.15;
        }

        .game-preview-heading p {
            margin: 0;
            color: var(--game-muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        .game-preview-benefit,
        .game-preview-price {
            height: 100%;
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 1rem;
            padding: clamp(1.25rem, 3vw, 1.7rem);
            background: linear-gradient(145deg, #191a1d, #111214);
            transition: border-color .2s ease, transform .2s ease;
        }

        .game-preview-benefit:hover,
        .game-preview-price:hover {
            transform: translateY(-3px);
            border-color: rgba(255, 90, 10, .48);
        }

        .game-preview-icon {
            display: grid;
            width: 3rem;
            height: 3rem;
            margin-bottom: 1.1rem;
            place-items: center;
            border: 1px solid rgba(255, 90, 10, .3);
            border-radius: .9rem;
            background: rgba(255, 90, 10, .1);
            color: var(--game-orange-light);
            font-size: 1.05rem;
        }

        .game-preview-benefit h3,
        .game-preview-price h3 {
            margin: 0 0 .55rem;
            font-size: 1.15rem;
            font-weight: 750;
        }

        .game-preview-benefit p,
        .game-preview-price p {
            margin: 0;
            color: var(--game-muted);
            font-size: .92rem;
            line-height: 1.7;
        }

        .game-preview-arena {
            display: flex;
            height: 100%;
            overflow: hidden;
            flex-direction: column;
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1rem;
            background: var(--game-panel);
            transition: transform .25s ease, border-color .25s ease;
        }

        .game-preview-arena:hover {
            transform: translateY(-4px);
            border-color: rgba(255, 90, 10, .5);
        }

        .game-preview-arena img {
            width: 100%;
            height: clamp(190px, 22vw, 260px);
            object-fit: cover;
        }

        .game-preview-arena-content {
            display: flex;
            height: 100%;
            flex-direction: column;
            padding: 1.25rem;
        }

        .game-preview-arena h3 {
            margin: 0 0 .6rem;
            font-size: 1.2rem;
            font-weight: 750;
        }

        .game-preview-arena p {
            flex: 1;
            margin: 0 0 1.2rem;
            color: var(--game-muted);
            font-size: .92rem;
            line-height: 1.7;
        }

        .game-preview-arena-book {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            color: var(--game-orange-light);
            font-size: .88rem;
            font-weight: 750;
            text-decoration: none;
        }

        .game-preview-arena-book:hover {
            color: #fff;
        }

        .game-preview-price {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .game-preview-price .game-preview-icon {
            flex: 0 0 3rem;
            margin: 0;
        }

        .game-preview-price strong {
            display: block;
            margin-top: .35rem;
            color: var(--game-orange-light);
            font-size: 1rem;
        }

        .game-preview-booking {
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1.2rem;
            padding: clamp(1.2rem, 4vw, 2.4rem);
            background: linear-gradient(145deg, #18191c, #101113);
            box-shadow: 0 22px 65px rgba(0, 0, 0, .25);
        }

        .game-preview-booking .form-label {
            color: #f2f2f2;
            font-size: .85rem;
            font-weight: 700;
        }

        .game-preview-booking .form-control,
        .game-preview-booking .form-select {
            min-height: 3rem;
            border: 1px solid rgba(255, 255, 255, .14);
            border-radius: .65rem;
            background-color: #0d0e10;
            color: #f7f7f7;
        }

        .game-preview-booking .form-select {
            --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ff9a68' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        }

        .game-preview-booking .form-control::placeholder {
            color: #777a80;
        }

        .game-preview-booking .form-control:focus,
        .game-preview-booking .form-select:focus {
            border-color: var(--game-orange);
            box-shadow: 0 0 0 .2rem rgba(255, 90, 10, .16);
        }

        .game-preview-booking textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .game-preview-submit {
            width: 100%;
            min-height: 3.2rem;
            border: 0;
            border-radius: .75rem;
            padding: .8rem 1.2rem;
            background: var(--game-orange);
            color: #fff;
            font-weight: 800;
            transition: background-color .2s ease, transform .2s ease;
        }

        .game-preview-submit:hover {
            transform: translateY(-2px);
            background: #e94d00;
        }

        .game-preview-note {
            margin: .85rem 0 0;
            color: var(--game-muted);
            font-size: .8rem;
            line-height: 1.6;
        }

        .game-preview a:focus-visible,
        .game-preview button:focus-visible {
            outline: 2px solid var(--game-orange-light);
            outline-offset: 3px;
        }

        @media (max-width: 575.98px) {
            .game-preview-hero {
                min-height: min(690px, 84svh);
                background-position: 58% center;
            }

            .game-preview-hero-content {
                padding-top: 6rem;
                padding-bottom: 4.5rem;
            }

            .game-preview-actions {
                align-items: stretch;
                flex-direction: column;
                max-width: 300px;
            }

            .game-preview-price {
                padding: 1rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .game-preview-button,
            .game-preview-benefit,
            .game-preview-price,
            .game-preview-arena,
            .game-preview-submit {
                transition: none;
            }

            .game-preview-button:hover,
            .game-preview-benefit:hover,
            .game-preview-price:hover,
            .game-preview-arena:hover,
            .game-preview-submit:hover {
                transform: none;
            }
        }
    </style>

    <main class="game-preview">
        <section class="game-preview-hero" aria-labelledby="game-preview-title">
            <div class="container game-preview-hero-content">
                <div class="game-preview-eyebrow">Sekani Gaming Arena</div>
                <h1 class="game-preview-title" id="game-preview-title">Play hard.<br><span>Compete. Win.</span></h1>
                <p class="game-preview-lead">
                    From friendly matches to full-throttle competition, discover your next favorite way to play at Sekani.
                </p>
                <div class="game-preview-actions">
                    <a class="game-preview-button" href="#game-preview-arenas">Explore the arenas</a>
                    <a class="game-preview-button game-preview-button--quiet" href="#game-preview-booking">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Book on WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <section class="game-preview-section" aria-labelledby="game-preview-benefits-title">
            <div class="container">
                <header class="game-preview-heading">
                    <div class="game-preview-kicker">More than a game</div>
                    <h2 id="game-preview-benefits-title">The Sekani experience</h2>
                    <p>Bring your friends, build your team, and enjoy premium play in a space made for great competition.</p>
                </header>
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-solid fa-shield"></i></div>
                            <h3>Premium equipment</h3>
                            <p>Enjoy quality gaming gear and sports equipment for a better experience.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-regular fa-clock"></i></div>
                            <h3>Open 24/7</h3>
                            <p>Pick a time that works for you and get your game on, day or night.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-solid fa-users"></i></div>
                            <h3>Team building</h3>
                            <p>Give your group or company a fun setting to connect and compete.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-solid fa-trophy"></i></div>
                            <h3>Tournaments</h3>
                            <p>Take part in regular competitions and play for the top spot.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-solid fa-wifi"></i></div>
                            <h3>High-speed Wi-Fi</h3>
                            <p>Stay connected for smooth online play and a seamless visit.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-benefit">
                            <div class="game-preview-icon" aria-hidden="true"><i class="fa-solid fa-star"></i></div>
                            <h3>VIP lounges</h3>
                            <p>Make your gaming session feel special in an exclusive private space.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="game-preview-section pt-0" id="game-preview-arenas" aria-labelledby="game-preview-arenas-title">
            <div class="container">
                <header class="game-preview-heading">
                    <div class="game-preview-kicker">Choose your challenge</div>
                    <h2 id="game-preview-arenas-title">Find your arena.</h2>
                    <p>Six ways to play, compete, and make the most of your time at Sekani.</p>
                </header>

                <div class="row g-3 g-lg-4">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/8-pool.jpg') }}" alt="Competition-grade pool table" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>8 Ball Pool</h3>
                                <p>Challenge your friends on premium competition-grade tables.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="8 Ball Pool">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/tabletennis.jpg') }}" alt="Table tennis arena" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>Table Tennis</h3>
                                <p>Play a casual rally or bring your best game to the competition.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="Table Tennis">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/paintball.jpg') }}" alt="Paintball arena" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>Paintball Arena</h3>
                                <p>Team up for a high-energy battle of tactics, teamwork, and adrenaline.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="Paintball Arena">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/playstation.jpg') }}" alt="PlayStation gaming station" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>PlayStation Gaming</h3>
                                <p>Play the latest titles at 4K stations with premium gaming chairs.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="Playstation Gaming">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/basketball.jpg') }}" alt="Indoor basketball court" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>Basketball Court</h3>
                                <p>Get on the court for a full-size indoor basketball experience.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="Basketball Court">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <article class="game-preview-arena">
                            <img src="{{ asset('assets/images/football.jpg') }}" alt="Football field" loading="lazy">
                            <div class="game-preview-arena-content">
                                <h3>Football Field</h3>
                                <p>Bring your team for a 5-a-side or 7-a-side match on premium turf.</p>
                                <a class="game-preview-arena-book" href="#game-preview-booking" data-game-choice="Football Field">Book this arena <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="game-preview-section pt-0" aria-labelledby="game-preview-prices-title">
            <div class="container">
                <header class="game-preview-heading">
                    <div class="game-preview-kicker">Straightforward pricing</div>
                    <h2 id="game-preview-prices-title">Pick your play.</h2>
                    <p>Hourly rates for the arenas. Message us to confirm availability and booking details.</p>
                </header>
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-billiard-ball"></i></div><div><h3>8 Ball Pool</h3><strong>₦1,500 / hour</strong></div></article></div>
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-table-tennis-paddle-ball"></i></div><div><h3>Table Tennis</h3><strong>₦2,000 / hour</strong></div></article></div>
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-bullseye"></i></div><div><h3>Paintball Arena</h3><strong>₦5,000 / hour</strong></div></article></div>
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-gamepad"></i></div><div><h3>PlayStation Gaming</h3><strong>₦1,500 / hour</strong></div></article></div>
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-basketball"></i></div><div><h3>Basketball Court</h3><strong>₦2,000 / hour</strong></div></article></div>
                    <div class="col-12 col-sm-6 col-lg-4"><article class="game-preview-price"><div class="game-preview-icon"><i class="fa-solid fa-futbol"></i></div><div><h3>Football Field</h3><strong>₦2,000 / hour</strong></div></article></div>
                </div>
            </div>
        </section>

        <section class="game-preview-section pt-0" id="game-preview-booking" aria-labelledby="game-preview-booking-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-xl-8">
                        <header class="game-preview-heading">
                            <div class="game-preview-kicker">Your next match starts here</div>
                            <h2 id="game-preview-booking-title">Book your session.</h2>
                            <p>Complete the details and we’ll prepare a WhatsApp message for Sekani’s team.</p>
                        </header>
                        <div class="game-preview-booking">
                            <form id="game-preview-booking-form">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label" for="game-preview-title-choice">Booking type</label>
                                        <select class="form-select" id="game-preview-title-choice" required>
                                            <option value="Game Arena" selected>Game Arena</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-name">Full name</label>
                                        <input class="form-control" id="game-preview-name" type="text" autocomplete="name" placeholder="Your full name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-email">Email</label>
                                        <input class="form-control" id="game-preview-email" type="email" autocomplete="email" placeholder="you@example.com" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-phone">Phone number</label>
                                        <input class="form-control" id="game-preview-phone" type="tel" autocomplete="tel" placeholder="+234 xxx xxx xxxx" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-game">Choose an arena</label>
                                        <select class="form-select" id="game-preview-game" required>
                                            <option value="" selected disabled>Select an arena</option>
                                            <option>8 Ball Pool</option>
                                            <option>Table Tennis</option>
                                            <option>Paintball Arena</option>
                                            <option>Playstation Gaming</option>
                                            <option>Basketball Court</option>
                                            <option>Football Field</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-date">Preferred date</label>
                                        <input class="form-control" id="game-preview-date" type="date" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="game-preview-players">Number of players</label>
                                        <select class="form-select" id="game-preview-players" required>
                                            <option value="" selected disabled>Select number of players</option>
                                            <option>1 player</option><option>2 players</option><option>3 players</option>
                                            <option>4 players</option><option>5 players</option><option>6 players</option>
                                            <option>7 players</option><option>8 players</option><option>9 players</option>
                                            <option>10 players</option><option>10+ players</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="game-preview-message">Anything else we should know? <span class="fw-normal text-secondary">(optional)</span></label>
                                        <textarea class="form-control" id="game-preview-message" rows="4" placeholder="Share any special requirements..."></textarea>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <button class="game-preview-submit" type="submit">
                                            <i class="fa-brands fa-whatsapp me-2" aria-hidden="true"></i>Continue to WhatsApp
                                        </button>
                                        <p class="game-preview-note">Your message will be sent to Sekani at +234 906 540 4205. WhatsApp will open so you can review and send it.</p>
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
            const form = document.getElementById('game-preview-booking-form');
            const gameSelect = document.getElementById('game-preview-game');
            const dateInput = document.getElementById('game-preview-date');

            if (!form || !gameSelect || !dateInput) {
                return;
            }

            const today = new Date();
            today.setMinutes(today.getMinutes() - today.getTimezoneOffset());
            dateInput.min = today.toISOString().split('T')[0];

            document.querySelectorAll('[data-game-choice]').forEach((link) => {
                link.addEventListener('click', () => {
                    gameSelect.value = link.dataset.gameChoice;
                });
            });

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                if (!form.reportValidity()) {
                    return;
                }

                const message = [
                    'Hello Sekani, I would like to make a game arena booking.',
                    '',
                    `Booking type: ${document.getElementById('game-preview-title-choice').value}`,
                    `Name: ${document.getElementById('game-preview-name').value.trim()}`,
                    `Email: ${document.getElementById('game-preview-email').value.trim()}`,
                    `Phone: ${document.getElementById('game-preview-phone').value.trim()}`,
                    `Arena: ${gameSelect.value}`,
                    `Preferred date: ${dateInput.value}`,
                    `Players: ${document.getElementById('game-preview-players').value}`,
                    `Additional details: ${document.getElementById('game-preview-message').value.trim() || 'None'}`
                ].join('\n');

                const whatsappUrl = `https://wa.me/2349065404205?text=${encodeURIComponent(message)}`;
                window.location.assign(whatsappUrl);
            });
        })();
    </script>
@endsection
