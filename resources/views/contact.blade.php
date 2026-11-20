@extends('layouts.app')

@section('content')
    <style>
        .contact-preview {
            --contact-orange: var(--sekani-color, #ff5a0a);
            --contact-bg: #0c0c0c;
            --contact-panel: #151515;
            --contact-border: rgba(255, 255, 255, .1);
            --contact-muted: #a7a7a7;
            background: var(--contact-bg);
            color: #fff;
        }

        .contact-preview-hero {
            position: relative;
            display: flex;
            min-height: clamp(330px, 48vw, 520px);
            align-items: flex-end;
            background:
                linear-gradient(90deg, rgba(5, 5, 5, .88), rgba(5, 5, 5, .3)),
                linear-gradient(0deg, #0c0c0c 0%, transparent 58%),
                url('{{ asset('assets/images/sekani-hero.jpg') }}') center 48% / cover no-repeat,
                #111;
        }

        .contact-preview-hero-content {
            padding-top: 5rem;
            padding-bottom: clamp(3rem, 8vw, 5rem);
        }

        .contact-preview-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .7rem;
            color: var(--contact-orange);
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .contact-preview-eyebrow::before {
            width: 2rem;
            height: 1px;
            background: currentColor;
            content: "";
        }

        .contact-preview-title {
            margin: .8rem 0;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.8rem, 8vw, 5.5rem);
            font-weight: 500;
            letter-spacing: -.045em;
            line-height: 1;
        }

        .contact-preview-lead {
            max-width: 39rem;
            margin: 0;
            color: #cecece;
            font-size: clamp(1rem, 2vw, 1.15rem);
            line-height: 1.75;
        }

        .contact-preview-section {
            padding: clamp(3.5rem, 7vw, 6rem) 0;
        }

        .contact-preview-info-card {
            display: flex;
            height: 100%;
            gap: 1rem;
            border: 1px solid var(--contact-border);
            border-radius: 1rem;
            padding: clamp(1.1rem, 3vw, 1.5rem);
            background: linear-gradient(145deg, #191919, #121212);
        }

        .contact-preview-icon {
            display: grid;
            width: 2.8rem;
            height: 2.8rem;
            flex: 0 0 2.8rem;
            place-items: center;
            border: 1px solid rgba(255, 90, 10, .3);
            border-radius: .85rem;
            background: rgba(255, 90, 10, .1);
            color: var(--contact-orange);
            font-size: 1.05rem;
        }

        .contact-preview-info-title {
            margin: .15rem 0 .45rem;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .contact-preview-info-card p,
        .contact-preview-info-card a {
            margin: 0;
            color: var(--contact-muted);
            font-size: .9rem;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .contact-preview-info-card a:hover {
            color: var(--contact-orange);
        }

        .contact-preview-section-heading {
            margin-bottom: 1rem;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 500;
            letter-spacing: -.035em;
        }

        .contact-preview-copy {
            color: var(--contact-muted);
            line-height: 1.8;
        }

        .contact-preview-photo {
            width: 100%;
            max-height: 440px;
            border: 1px solid var(--contact-border);
            border-radius: 1rem;
            object-fit: cover;
        }

        .contact-preview-form-card {
            border: 1px solid var(--contact-border);
            border-radius: 1.1rem;
            padding: clamp(1.25rem, 4vw, 2.25rem);
            background: var(--contact-panel);
            box-shadow: 0 22px 60px rgba(0, 0, 0, .22);
        }

        .contact-preview-form-card .form-label {
            color: #eee;
            font-size: .85rem;
            font-weight: 650;
        }

        .contact-preview-form-card .form-control {
            min-height: 3rem;
            border: 1px solid rgba(255, 255, 255, .14);
            border-radius: .65rem;
            background: #0f0f0f;
            color: #fff;
        }

        .contact-preview-form-card textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .contact-preview-form-card .form-control::placeholder {
            color: #777;
        }

        .contact-preview-form-card .form-control:focus {
            border-color: var(--contact-orange);
            box-shadow: 0 0 0 .2rem rgba(255, 90, 10, .16);
        }

        .contact-preview-submit {
            display: inline-flex;
            min-height: 3.1rem;
            align-items: center;
            justify-content: center;
            gap: .6rem;
            border: 1px solid var(--contact-orange);
            border-radius: 999px;
            padding: .7rem 1.35rem;
            background: var(--contact-orange);
            color: #fff;
            font-weight: 700;
            transition: transform .2s ease, background-color .2s ease;
        }

        .contact-preview-submit:hover {
            transform: translateY(-2px);
            background: #e94d00;
            color: #fff;
        }

        .contact-preview-map {
            height: clamp(300px, 42vw, 480px);
            border: 0;
            border-radius: 1rem;
            filter: grayscale(.85) contrast(1.05);
        }

        @media (max-width: 575.98px) {
            .contact-preview-hero {
                min-height: 390px;
                background-position: 58% center;
            }

            .contact-preview-hero-content {
                padding-bottom: 3rem;
            }

            .contact-preview-section {
                padding: 3rem 0;
            }

            .contact-preview-map {
                height: 320px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .contact-preview-submit {
                transition: none;
            }
        }
    </style>

    <main class="contact-preview">
        {{-- <section class="contact-preview-hero">
            <div class="container contact-preview-hero-content">
                <div class="contact-preview-eyebrow">Sekani Empire</div>
                <h1 class="contact-preview-title">Let's connect.</h1>
                <p class="contact-preview-lead">
                    Questions, plans, or a special occasion? Our team is here to help make your Sekani experience exceptional.
                </p>
            </div>
        </section> --}}
        <!-- contact us start -->
        <section style="background-image: linear-gradient(black, var(--sekani-color) ); color: white; padding-top: 3rem">
            <div class="container">
                <div class="text-center">
                    <div class="container text-center py-5 fw-semibold" style="font-size: 3rem; font-family: sans-serif;">
                        GET IN TOUCH
                    </div>
                    <div class="row text-capitalize fw-semubold " style="font-size: 1rem; font-family: sans-serif">
                        <div class="col-12 col-lg-4  pb-5">
                            <i class="fa-solid fa-location-dot" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                ADDRESS
                            </div><br>
                            <p class="fw-bold">Sekani Empire</p>
                            <a class="touch" target="_blank" style="color: white;"
                                href="https://www.google.com/maps/place/Sekani+Mall/@5.3751462,6.998362,774m/data=!3m2!1e3!4b1!4m6!3m5!1s0x10425df2c645a82d:0x284a1999ec8e450!8m2!3d5.3751462!4d7.0009369!16s%2Fg%2F11k56qdtyh!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D">
                                Dominion City Road, Opp Macjay Lodge, Eziobodo, FUTO Road, Owerri, Eziobodo 460103, Imo
                            </a>
                        </div>

                        <div class="col-12 col-lg-4">
                            <i class="fa-solid fa-phone pt-lg-3" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                PHONE
                            </div><br>
                            <p class="fw-bold">
                                Sekani Empire
                            </p>
                            <p>
                                <a href="tel:09065404205" class="touch" style="color: white;">+234 906 540 4205</a>

                            </p>
                        </div>

                        <div class="col-12 col-lg-4">
                            <i class="fa-solid fa-message" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                EMAIL
                            </div> <br>
                            <p class="fw-bold">
                                Sekani Empire
                            </p>
                            <p class="text-lowercase">
                                <a href="mailto:leslieamadi9@gmail.com" class="touch"
                                    style="color: white;">leslieamadi9@gmail.com</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us start -->

        <section class="container contact-preview-section" aria-label="Contact information">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="contact-preview-info-card">
                        <span class="contact-preview-icon"><i class="fa-solid fa-location-dot"
                                aria-hidden="true"></i></span>
                        <div>
                            <h2 class="contact-preview-info-title">Visit us</h2>
                            <p class="fw-semibold text-white mb-1">Sekani Empire</p>
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.google.com/maps/place/Sekani+Mall/@5.3751462,6.998362,774m/data=!3m2!1e3!4b1!4m6!3m5!1s0x10425df2c645a82d:0x284a1999ec8e450!8m2!3d5.3751462!4d7.0009369!16s%2Fg%2F11k56qdtyh!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D">
                                Dominion City Road, Opp Macjay Lodge, Eziobodo, FUTO Road, Owerri, Imo
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="contact-preview-info-card">
                        <span class="contact-preview-icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></span>
                        <div>
                            <h2 class="contact-preview-info-title">Call us</h2>
                            <p class="fw-semibold text-white mb-1">Sekani Empire</p>
                            <a href="tel:+2349065404205">+234 906 540 4205</a>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="contact-preview-info-card">
                        <span class="contact-preview-icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></span>
                        <div>
                            <h2 class="contact-preview-info-title">Email us</h2>
                            <p class="fw-semibold text-white mb-1">Sekani Empire</p>
                            <a href="mailto:leslieamadi9@gmail.com">leslieamadi9@gmail.com</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="container contact-preview-section pt-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-12 col-lg-5">
                    <div class="contact-preview-eyebrow">We'd love to hear from you</div>
                    <h2 class="contact-preview-section-heading mt-3">Send us a message</h2>
                    <p class="contact-preview-copy">
                        If you wish to be considered for employment at Sekani, please message our Instagram page instead.
                        Our Human Resources department will contact you after reviewing your information.
                    </p>
                    <img src="{{ asset('assets/images/sekani-logo.jpg') }}" class="contact-preview-photo mt-3"
                        alt="Sekani Empire" loading="lazy">
                </div>

                <div class="col-12 col-lg-7">
                    <div class="contact-preview-form-card">
                        <form action="">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <div class="row g-2">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="First name"
                                            aria-label="First name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Last name"
                                            aria-label="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="contact-preview-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="contact-preview-email"
                                    placeholder="you@example.com">
                            </div>
                            <div class="mb-4">
                                <label for="contact-preview-message" class="form-label">Message</label>
                                <textarea class="form-control" id="contact-preview-message" rows="5" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="submit" class="contact-preview-submit">
                                Send message <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container contact-preview-section pt-0" aria-label="Sekani location map">
            <div class="contact-preview-eyebrow mb-3">Find us</div>
            <h2 class="contact-preview-section-heading">Come by and say hello.</h2>
            <iframe class="contact-preview-map w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.2950004415097!2d6.998361974157239!3d5.3751461946037535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425df2c645a82d%3A0x284a1999ec8e450!2sSekani%20Mall!5e1!3m2!1sen!2sng!4v1765039766028!5m2!1sen!2sng"
                title="Map showing the location of Sekani Mall" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection
