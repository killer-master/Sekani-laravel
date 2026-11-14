@extends('layouts.app')

@section('content')
    <style>
        .eatery-preview {
            --preview-ink: #f7f1e7;
            --preview-muted: #b6ada0;
            --preview-accent: var(--sekani-color, #ff5a0a);
            min-height: 100vh;
            padding: clamp(1.25rem, 4vw, 4rem) 0;
            background:
                radial-gradient(ellipse at 15% 15%, rgba(255, 90, 10, .12), transparent 36rem),
                radial-gradient(ellipse at 90% 85%, rgba(117, 53, 24, .13), transparent 32rem),
                #10100f;
        }

        .eatery-preview-shell {
            max-width: 1240px;
        }

        .eatery-preview-back {
            display: inline-flex;
            align-items: center;
            gap: .7rem;
            color: #d0c8bc;
            font-size: .9rem;
            font-weight: 500;
            text-decoration: none;
            transition: color .2s ease;
        }

        .eatery-preview-back:hover {
            color: var(--preview-accent);
        }

        .eatery-preview-card {
            overflow: hidden;
            border: 1px solid rgba(255, 90, 10, .24);
            border-radius: clamp(1rem, 2.5vw, 1.65rem);
            background: linear-gradient(135deg, #1d1b19 0%, #151413 100%);
            box-shadow: 0 30px 90px rgba(0, 0, 0, .48);
        }

        .eatery-preview-image-panel {
            position: relative;
            display: flex;
            min-height: 100%;
            align-items: center;
            justify-content: center;
            padding: clamp(1rem, 3vw, 2.25rem);
            background: #0c0c0b;
        }

        .eatery-preview-image-panel::before {
            position: absolute;
            inset: 0;
            border: 1px solid rgba(255, 90, 10, .12);
            content: "";
            pointer-events: none;
        }

        .eatery-preview-image {
            display: block;
            width: 100%;
            max-height: 620px;
            aspect-ratio: 4 / 5;
            border-radius: .8rem;
            object-fit: cover;
            box-shadow: 0 24px 60px rgba(0, 0, 0, .4);
        }

        .eatery-preview-details {
            display: flex;
            height: 100%;
            flex-direction: column;
            justify-content: center;
            padding: clamp(1.5rem, 5vw, 4.75rem);
        }

        .eatery-preview-kicker {
            display: inline-flex;
            align-items: center;
            gap: .65rem;
            color: var(--preview-accent);
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .eatery-preview-kicker::before {
            width: 2rem;
            height: 1px;
            background: var(--preview-accent);
            content: "";
        }

        .eatery-preview-title {
            color: var(--preview-ink);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.25rem, 4.7vw, 4rem);
            font-weight: 500;
            letter-spacing: -.035em;
            line-height: 1.06;
            overflow-wrap: anywhere;
        }

        .eatery-preview-rule {
            width: 4rem;
            height: 2px;
            margin: .4rem 0 1.5rem;
            background: var(--preview-accent);
        }

        .eatery-preview-description {
            color: var(--preview-muted);
            font-size: clamp(.95rem, 1.15vw, 1.05rem);
            line-height: 1.9;
            white-space: pre-line;
        }

        .eatery-preview-price-block {
            border-top: 1px solid rgba(255, 90, 10, .24);
        }

        .eatery-preview-price {
            color: var(--preview-accent);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(1.85rem, 3vw, 2.5rem);
            font-weight: 500;
            letter-spacing: -.025em;
            white-space: nowrap;
        }

        .eatery-preview-price-label {
            color: #aaa194;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .eatery-preview-add {
            display: inline-flex;
            min-height: 3.4rem;
            align-items: center;
            justify-content: center;
            gap: .75rem;
            border: 1px solid var(--preview-accent);
            border-radius: .35rem;
            background: var(--preview-accent);
            color: #171411;
            font-size: .82rem;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
            transition: transform .2s ease, background-color .2s ease, color .2s ease, box-shadow .2s ease;
        }

        .eatery-preview-add:hover {
            transform: translateY(-2px);
            background: transparent;
            box-shadow: 0 12px 30px rgba(255, 90, 10, .18);
            color: var(--preview-accent);
        }

        @media (max-width: 767.98px) {
            .eatery-preview {
                padding-top: 1rem;
                padding-bottom: 1.5rem;
            }

            .eatery-preview-card {
                border-radius: 1rem;
            }

            .eatery-preview-image-panel {
                min-height: auto;
                padding: clamp(.75rem, 4vw, 1.25rem);
            }

            .eatery-preview-image {
                width: 100%;
                max-height: min(72vh, 560px);
                aspect-ratio: 5 / 4;
                border-radius: .65rem;
            }

            .eatery-preview-details {
                padding: clamp(1.25rem, 6vw, 2.25rem);
            }

            .eatery-preview-price-block {
                align-items: stretch !important;
            }

            .eatery-preview-price-block form {
                flex: 1 1 100%;
            }
        }

        @media (max-width: 399.98px) {
            .eatery-preview-price-block {
                display: block !important;
            }

            .eatery-preview-price-block form {
                margin-top: 1rem;
            }
        }

        @media (max-width: 359.98px) {
            .eatery-preview-shell {
                padding-right: .75rem;
                padding-left: .75rem;
            }

            .eatery-preview-details {
                padding: 1.1rem;
            }

            .eatery-preview-add {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .eatery-preview-add,
            .eatery-preview-back {
                transition: none;
            }
        }
    </style>

    <main class="eatery-preview">
        <div class="container eatery-preview-shell">
            <nav aria-label="Breadcrumb" class="mb-4">
                <a href="{{ route('eatry.page') }}" class="eatery-preview-back">
                    <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                    <span>Back to menu</span>
                </a>
            </nav>

            <article class="eatery-preview-card">
                <div class="row g-0">
                    <div class="col-12 col-md-6">
                        <div class="eatery-preview-image-panel">
                            <img
                                src="{{ $eateryview->image ? asset('uploads/eatery/' . $eateryview->image) : asset('images/default-eatery.jpg') }}"
                                class="eatery-preview-image"
                                alt="{{ $eateryview->name }}"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="eatery-preview-details">
                            <div class="eatery-preview-kicker mb-4">Sekani signature dining</div>
                            <h1 class="eatery-preview-title mb-3">{{ $eateryview->name }}</h1>
                            <div class="eatery-preview-rule"></div>
                            <p class="eatery-preview-description mb-5">{{ $eateryview->description }}</p>

                            <div class="eatery-preview-price-block d-flex flex-wrap justify-content-between align-items-center gap-4 pt-4">
                                <div>
                                    <div class="eatery-preview-price-label mb-1">Experience price</div>
                                    <div class="eatery-preview-price">₦{{ number_format($eateryview->price, 2) }}</div>
                                </div>

                                <form action="{{ route('cart.store') }}" method="POST" class="flex-grow-1">
                                    @csrf
                                    <input type="hidden" name="eatery" value="{{ $eateryview->id }}">

                                    @error('eatery')
                                        <div class="small fw-semibold text-danger mb-2">{{ $message }}</div>
                                    @enderror

                                    <button type="submit" class="btn eatery-preview-add w-100">
                                        <i class="fa-solid fa-bag-shopping" aria-hidden="true"></i>
                                        Add to cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
@endsection
