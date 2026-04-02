@extends('layouts.app')
@section('content')

    <head>
        <style>
            body {
                background-image: url('{{ asset('assets/images/15796.jpg') }}');
            }
        </style>
    </head>
    <section>
        <!-- hero start -->
        <section class="eatry_hero">
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-12 col-lg-6 text-capitalize">
                        <div class="h1 food_hero">
                            where flavor meets <span style="color: orangered;">happiness</span>
                        </div>
                        <div class="food_text" style="color: wheat;">
                            Experince authentic local dishes and premium continetal meals crafted with love. From family
                            dinners to event catering, we bring delicious moments to your table.
                        </div><br>
                        <a href="#menu">
                            <div class="btn btn-dark button px-3 py-2" style="color: wheat;">
                                View Menu <i class="fa-solid fa-utensils"></i>
                            </div>
                        </a><br><br>
                        <div style="color: wheat;">
                            <i class="fa-solid fa-leaf" style="color: orangered;"></i> Fresh ingredients .
                            <i class="fa-solid fa-bowl-food" style="color: orangered;"></i> Made to order
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- hero end -->

        <!-- menu start -->
        <section>
            <div class="container-fluid" style="color: wheat;">
                <div class="text-center py-5">
                    <P style="color: orangered;">OUR MENU</P>
                    <P class="text-capitalize h1 fw-bold">
                        discoverour our delicious <span style="color: orangered;">varieties</span>
                    </P>
                    <p class="">
                        From authentic Nigerian classics to international favorites, every dish is <br>prepared fresh with
                        premium ingredients
                    </p>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase">Swallow & Soup</h3>
                                Authentic Nigerian flavor
                                <p class="card-text">
                                <ul class="container">
                                    <li class="text-uppercase">Garri</li>
                                    <li class="text-uppercase">Semo</li>
                                    <li class="text-uppercase">okro soup </li>
                                    <li class="text-uppercase">egusi soup</li>
                                </ul>
                                </p>
                                <a href="#" class="fs-5 fw-bold" style="text-decoration: none; color: orangered;">
                                    Learn
                                    More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase">protein</h3>
                                Authentic Nigerian flavor
                                <p class="card-text">
                                <ul class="container">
                                    <li class="text-uppercase">chicken</li>
                                    <li class="text-uppercase">beef</li>
                                    <li class="text-uppercase">fish </li>
                                    <li class="text-uppercase"> boiled egg</li>
                                </ul>
                                </p>
                                <a href="#" class="fs-5 fw-bold" style="text-decoration: none; color: orangered;">
                                    Learn
                                    More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase">pasta</h3>
                                Authentic Nigerian flavor
                                <p class="card-text">
                                <ul class="container">
                                    <li class="text-uppercase">jollof rice</li>
                                    <li class="text-uppercase">fried rice</li>
                                    <li class="text-uppercase">jollof spaghetti </li>
                                    <li class="text-uppercase">white rice & stew</li>
                                </ul>
                                </p>
                                <a href="#" class="fs-5 fw-bold" style="text-decoration: none; color: orangered;">
                                    Learn
                                    More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase">beverage</h3>
                                Authentic Nigerian flavor
                                <p class="card-text container">
                                <ul class="container">
                                    <li class="text-uppercase">hollandia</li>
                                    <li class="text-uppercase">vital milk</li>
                                    <li class="text-uppercase">bottle water </li>
                                    <li class="text-uppercase">exotic can</li>
                                </ul>
                                </p>
                                <a href="#" class="fs-5 fw-bold" style="text-decoration: none; color: orangered;">
                                    Learn
                                    More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- menu end -->

        <!-- full_menu start -->
        <section class="container-fluid" id="menu">
            <div class="container-fluid py-5">
                <div class="row">
                    @php
                        use Illuminate\Support\Str;
                    @endphp

                    <div class="container py-5">
                        <div class="text-center mb-5" style="color: orangered">
                            <h1 class="fw-bold display-6">Our Menu</h1>
                            <p class="wheat">Delicious meals made fresh for you</p>
                        </div>

                        <h2 class="pt-3 text-capitalize text-end pe-5 fw-bold" style="color: orangered;">
                            pasta
                        </h2>

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
                                                class="badge wheat position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm"
                                                style="background-color: orangered">
                                                {{ $eatery->category->name ?? 'Uncategorized' }}
                                            </span>
                                        </div>

                                        {{-- eatery Content --}}
                                        <div class="card-body d-flex flex-column p-4" style="background-color: #212529">
                                            <h5 class="fw-bold wheat mb-2">{{ $eatery->name }}</h5>

                                            <p class="wheat small mb-3">
                                                {{ Str::limit($eatery->description, 80) }}
                                            </p>

                                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                                <h5 class="fw-bold wheat mb-0">₦{{ number_format($eatery->price, 2) }}
                                                </h5>

                                                <a href="#" class="btn btn text-white rounded-pill px-4"
                                                    style="background-color: orangered">
                                                    Add
                                                </a>
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
                    {{-- <style>
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
        </style> --}}
                </div>

            </div>
        </section>
        <!-- full_menu end -->
    </section>
@endsection
