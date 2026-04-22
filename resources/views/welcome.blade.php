@extends('layouts.app')
@section('content')
<head>
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
    <!-- hero start -->
    <section class="index-hero">
        <div class="color-index">
            <div class="hero text-center text-capitalize text-white">
                <div class="hero-color" style="font-family: Outfit, sans-serif; font-size: 16px;">
                    WELCOME TO
                </div>
                <div class="container fw-bold py-3" style="font-size: 72px; font-family: Playfair Display, serif;">
                    SEKANI</div>
                <div class="container fs-5 pb-3" style="font-family: Outfit, sans-serif;">
                    Experience Luxury, Fun & Comfort
                </div>
                <div class="container fs-5 pb-3" style="font-family: Outfit, sans-serif; opacity: 0.7;">
                    Your premium destination for entertainment, relaxation & lifestyle
                </div>
                <a class="btn fs-4 button-index-service" href="#our_services">
                    <div>
                        <i class="fa-solid fa-compass"></i>
                        explore our serices
                    </div>
                </a>
                <!-- <a class="btn fs-4 button-index-service" href="#our_services">
                                <div>
                                    <i class="fab fa-whatsapp"></i>
                                    For more information
                                </div>
                            </a> -->

                <div class="fs-6 row container hero_emoji text-lg-end text-start">
                    <div class="col-12 col-lg-4">
                        <i class="fs-6 fa-solid fa-circle-check"></i> 9+ Premium services
                    </div>
                    <div class="col-12 col-lg-4">
                        <i class="fa-solid fa-clock"></i> Open Daily
                    </div>
                    <div class="col-12 col-lg-4">
                        <i class="fa-solid fa-star"></i> world-class Experience
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->
    <section style="padding-top: 100dvh;"></section>



    <!-- services start -->
    <section id="our_services" class="container-fluid" style="background-color: #1f1f1f4c; ">
        <div class="hero-color text-uppercase text-center pt-5" style="font-family: Outfit, sans-serif; font-size: 16px;">
            our service
        </div>
        <div class="fs-1 text-center text-white text-capitalize fw-bold">
            9+ premium services, <span style="color: var(--sekani-color);">one destination</span>
        </div>
        <p class="text-center text-white fs-5">Everything you need for the perfect day, night, or weekend getaway</p>

        <div class="row g-2 py-5">
            <a href="{{ route('eatry.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-eat">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-utensils fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Eatery
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Fine dining & gourmet bites
                    </div>
                </div>
            </a>
            <a href="{{ route('vip.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-vip">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-martini-glass fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        VIP Lounge
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Exclusive bottle service
                    </div>
                </div>
            </a>
            <a href="{{ route('saloon.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-sal">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-scissors fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Unisex Saloon
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Premium grooming services
                    </div>
                </div>
            </a>
            <a href="{{ route('pool.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-poo">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-water-ladder fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Pool Bar
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Day & night pool experiences
                    </div>
                </div>
            </a>
            <a href="{{ route('planning.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-pla">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-champagne-glasses fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Outdoor catering and event planning
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        food, party, DJ dance floor
                    </div>
                </div>
            </a>
            <a href="{{ route('game.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-gam">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-gamepad fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Game Arena
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Arcade & board games
                    </div>
                </div>
            </a>
            <a href="{{ route('fitness.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-fit">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-dumbbell fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Fitness Center
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        State-of-the-art fitnes
                    </div>
                </div>
            </a>
            <a href="{{ route('rooftop.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-roo">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-hotel fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover">
                        Rooftop Lounge
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Luxury rooftop accommodation
                    </div>
                </div>
            </a>
            <a href="{{ route('pastry.page') }}" class="col-6 col-lg-3 text-decoration-none index-services-hover index-services-hover-pas">
                <div class="container py-3 ">
                    <div class="">
                        <i class="fa-solid fa-cake-candles fs-2 index-moji-hover pe-5"></i>
                    </div>
                    <div class="pb-2 pt-3 index-text-hover text-capitalize">
                        pastry and bread
                    </div>
                    <div class="text-white py-2" style="font-family: Outfit, sans-serif; opacity: 0.5;">
                        Bread, Cake, Pastries, Bugers
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- services end -->

    <!-- sekani empire start -->
    <section style="background-color: black;">
        <div class="container-fluid row py-5">
            <div class="col-12 col-lg-6">
                <div style="text-transform: uppercase; color: var(--sekani-color);">
                    the sekani empire
                </div> <br>
                <div class="" style="text-transform: uppercase; color: white; font-size: 2rem;">
                    where luxury meets <br>
                    <span style="color: var(--sekani-color);">
                        endless possibilities
                    </span>
                </div>
                <p style="color: white;" class="fs-5">
                    Sekani isn't just a destination-it's lifestyle. From sunrise fitness sessions to sunset cocktails,
                    from intense paintball battles to serene spa treatments, we've created a world where every moment is
                    extraordinary.
                </p>
                <div class="row">
                    <div class="col-2 col-lg-1"><i class="fa-solid fa-seedling empire" style="padding-right: 38px"></i></div>
                    <div class="col-10 col-lg-11 fs-5  text-capitalize">
                        <h4 style="color: white;" class="pt-2 ps-3">Unisex salon & spa</h4>
                        <p style="color: white;" class="ps-3">Professional grooming, styling, manicure, pedicure, and
                            relaxation treatments.</p>
                    </div>
                    <div class="col-2 col-lg-1"><i class="fa-solid fa-vr-cardboard empire" style="padding-right: 38px"></i></div>
                    <div class="col-10 col-lg-11 fs-5 text-capitalize">
                        <h4 style="color: white;" class="pt-2 ps-3">virtual reality room</h4>
                        <p style="color: white;" class="ps-3">immersive VR experiences and cutting-edges simulations for
                            next-level enterainment.</p>
                    </div>
                    <div class="col-2 col-lg-1"><i class="fa-solid fa-crosshairs empire" style="padding-right: 38px"></i></div>
                    <div class="col-10 fs-5 col-lg-11 text-capitalize">
                        <h4 style="color: white;" class="pt-2 ps-3">paintball arena</h4>
                        <p style="color: white;" class="ps-3">Adrenaline-pumping team battles with professional gear and
                            tactical courses.</p>
                    </div>
                    <div class="col-2 col-lg-1"><i class="fa-solid fa-basketball empire" style="padding-right: 38px"></i></div>
                    <div class="col-10 col-lg-11 fs-5 text-capitalize">
                        <h4 style="color: white;" class="pt-2 ps-3">sports complex</h4>
                        <p style="color: white;" class="ps-3">Football, basketball courts, and comprehensive fitness
                            activities.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row  text-center image">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/public.avif') }}" style="width: 100%;" alt="">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/public (1).avif') }}" style="width: 100%;" alt="">
                    </div>
                    <div class="col-6 pt-3">
                        <img src="{{ asset('assets/images/publicContain.webp') }}" style="width: 100%;" alt="">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/public (2).avif') }}" style="width: 100%;" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- sekani empire END-->

    <!-- 24/7 start -->
    <section class="container">
        <div class="row text-center py-5 open g-3">
            <div class="col-6 p-5">
                <p class="h1">9+</p>
                <p>premium serices</p>
            </div>
            <div class="col-6 p-5">
                <P class="h1">24/7</P>
                <P>Access Available</P>
            </div>
            <div class="col-6 p-5">
                <p class="h1">VIP</p>
                <p>Luxury Experience</p>
            </div>
            <div class="col-6 p-5">
                <p class="h1">100%</p>
                <p>Satisfaction Focused</p>
            </div>
        </div>
    </section>
    <!-- 24/7 end -->

    <!-- experince start -->
    <section class="container-fluid py-5" style="background-color: black;">
        <div class="text-center" style="color: white;">
            <P class="h1 text-capitalize">
                ready to experiences <span style="color: var(--sekani-color);">SEKANI</span>?
            <p>
            </P>
            Join us today and discover why SEKANI is the ultimate destination for luxury, enterainment, and relaxation
            </p>
        </div>
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-12 col-lg-6 text-center experince-card">
                    <i class="fa-solid fa-calendar-check moji mt-5 pe-5"></i>
                    <h2>Make a reservation</h2>
                    <p class="white">Book your spot for dining, lounge, lodging, or events</p>
                    <a href="{{ route('eatry.page') }}" class="">
                        <button class="btn fw-bold text-capitalize white px-5 mb-3 experince-card-button">
                            book now <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
                {{-- <div class="col-12 col-lg-4 text-center experince-card">
                    <i class="fa-solid fa-images moji mt-5 pe-5"></i>
                    <h2 class="h2 white">Explore Our Gallery</h2>
                    <p class="white">See photos and video of our stunning facilities</p>
                    <a href="#" class="">
                        <button class="btn fw-bold text-capitalize white px-5 mb-3 experince-card-button">
                            veiw now <i class="fa-solid fa-arrow-right" style="color: var(--sekani-color);"></i>
                        </button>
                    </a>
                </div> --}}
                <div class="col-12 col-lg-6 text-center experince-card">
                    <i class="fa-solid fa-phone moji mt-5 pe-5"></i>
                    <h2 class="">Get in Touch</h2>
                    <p class="white">Have questions? We're here to help you plan</p>
                    <a href="{{ route('contact.page') }}" class="">
                        <button class="btn fw-bold text-capitalize white px-5 mb-3 experince-card-button">
                            contact us <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
    </section>
    <!-- experince end -->
@endsection
