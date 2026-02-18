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
        <section class="container-fluid" id="menu" style="color: wheat;">
            <P style="color: orangered;" class="text-center pt-5">OUR FULL MENU</P>
            <h1 class="pt-3 text-capitalize text-end pe-5 fw-bold">
                pasta
            </h1>
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card bg-dark text-white">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-uppercase fw-bold">jollof rice</h3>
                                <p class="card-body">spicy jollof rice made with lots of hot pepper and seasoned to
                                    perfection</p>
                                <div class="text-end">
                                    <p class="btn text-white" style="background-color: orangered;">3,500.00</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- full_menu end -->
    </section>
@endsection
