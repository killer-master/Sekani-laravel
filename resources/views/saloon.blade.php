@extends('layouts.app')
@section('content')
    <section>
        <!-- hero start -->
        <section class="saloon_hero">
            <div class="container row">
                <div class="col-11 col-lg-8 saloon_gradient my-5">
                    <div class="saloon_text">
                        <div class="h4 text-uppercase" style="font-family: mont">
                            Premium Unisex Salon
                        </div>
                        <div class="h1 text-capitalize" style="font-family: serif">
                            Where Style Meets <span class="gold">Confidence</span>
                        </div>
                        <div class="p" style="font-family: Montserrat">
                            Experience luxury grooming and beauty services for both men and
                            women. Expert stylists, premium products, and an atmosphere of
                            pure elegance.
                        </div>
                    </div>
                    <a href="#saloon_services" class="btn button_saloon2 my-5 fs-4">
                        Our Services
                    </a>
                </div>
                <div class="col-1 col-lg-4"></div>
            </div>
        </section>
        <!-- hero end -->

        <!-- about us start -->
        <section class="container-fluid py-5">
            <div class="h4 text-uppercase gold" style="font-family: mont">
                about us
            </div>
            <br />
            <div class="h1 text-capitalize" style="font-family: serif">
                Crafting Beauty, <br />
                Building Confidence
            </div>
            <br />
            <div class="p" style="font-family: Montserrat">
                At Sekani Unisex Salon, we believe that everyone deserves to look and
                feel their absolute best. Our team of skilled stylists combines artistry
                with expertise to deliver transformative results that enhance your
                natural beauty. <br /><br />
                From precision cuts to stunning color work, from beard grooming to
                elegant wig installations, we offer comprehensive services in a
                luxurious, welcoming environment.
            </div>
        </section>
        <!-- about us end -->

        <!-- our services start -->
        <section style="background-color: #e9e6e2">
            <div class="container-fluid">
                <div class="text-center py-5">
                    <div class="h4 text-uppercase gold" style="font-family: mont">
                        our services
                    </div>
                    <br />
                    <div class="h1 text-capitalize" style="font-family: serif">
                        what we offer
                    </div>
                    <br />
                    <div class="p" style="font-family: Montserrat">
                        Comprehensive grooming and beauty services designed to bring out
                        your best self
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12 col-lg-4">
                        <div class="card container saloon_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-scissors saloon_moji pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    Precision Cuts
                                </div>
                                <div class="p pt2" style="font-family: Montserrat">
                                    Expert haircuts tailored to your style and face shape
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container saloon_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-star saloon_moji pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    Hair Treatments
                                </div>
                                <div class="p pb-4" style="font-family: Montserrat">
                                    Nourishing treatments for healthy, vibrant hair
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container saloon_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-spa saloon_moji pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    spa
                                </div>
                                <div class="p pt2" style="font-family: Montserrat">
                                    An Escape Into Pure Tranquility, Where Relaxation Becomes a Lifestyle
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our services end -->

        <!-- list start -->
        <section class="container-fluid" id="saloon_services">
            <div class="row py-5">
                <div class="col-3 col-lg-1 text-center">
                    <i class="fa-solid fa-scissors saloon_moji pt-4 pe-5" style="color: white; background-color: black"></i>
                </div>
                <div class="col-9 col-lg-11">
                    <div class="row">
                        <div class="h2 fw-bold text-capitalize" style="font-family: serif">
                            Men's Services
                        </div>
                        <div class="col-12">
                            <div class="p pt2" style="font-family: Montserrat">
                                Expert grooming for the modern gentleman
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Classic Haircut
                                    </div>
                                </div>
                                <div class="col-3 gold">₦5,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Precision cut with wash and style
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Fade & Shape-Up
                                    </div>
                                </div>
                                <div class="col-3 gold">₦4,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Clean fade with sharp edges
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Beard Grooming
                                    </div>
                                </div>
                                <div class="col-3 gold">₦3,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Trim, shape, and conditioning
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Hot Towel Shave
                                    </div>
                                </div>
                                <div class="col-3 gold">₦4,500</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Traditional straight razor shave
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Hair Coloring
                                    </div>
                                </div>
                                <div class="col-3 gold">₦8,000+</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Full color or highlights
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Scalp Treatment
                                    </div>
                                </div>
                                <div class="col-3 gold">₦6,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Deep conditioning and massage
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Kids Cut (Under 12)
                                    </div>
                                </div>
                                <div class="col-3 gold">₦3,500</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Patient styling for young gents
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid" style="background-color: #e9e6e2">
            <div class="row py-5">
                <div class="col-3 col-lg-1 text-center">
                    <i class="fa-solid fa-star saloon_moji pt-4 pe-5" style="color: white; background-color: black"></i>
                </div>
                <div class="col-9 col-lg-11">
                    <div class="row">
                        <div class="h2 fw-bold text-capitalize" style="font-family: serif">
                            Women's Services
                        </div>
                        <div class="col-12">
                            <div class="p pt2" style="font-family: Montserrat">
                                Transformative beauty experiences
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Wash & Blowout
                                    </div>
                                </div>
                                <div class="col-3 gold">₦5,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Shampoo, condition, and style
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Haircut & Style
                                    </div>
                                </div>
                                <div class="col-3 gold">₦8,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Cut with professional styling
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Silk Press
                                    </div>
                                </div>
                                <div class="col-3 gold">₦12,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Sleek, straight finish with protection
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Braiding
                                    </div>
                                </div>
                                <div class="col-3 gold">₦15,000+</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Various styles available
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Wig Installation
                                    </div>
                                </div>
                                <div class="col-3 gold">₦8,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Intensive repair and hydration
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Loc Maintenance
                                    </div>
                                </div>
                                <div class="col-3 gold">₦10,000+</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                Retwist and styling
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container-fluid" id="saloon_services">
            <div class="row py-5">
                <div class="col-3 col-lg-1 text-center">
                    <i class="fa-solid fa-spa saloon_moji pt-4 pe-5" style="color: white; background-color: black"></i>
                </div>
                <div class="col-9 col-lg-11">
                    <div class="row">
                        <div class="h2 fw-bold text-capitalize" style="font-family: serif">
                            spa
                        </div>
                        <div class="col-12">
                            <div class="p pt2" style="font-family: Montserrat">
                                Where Relaxation Becomes a Lifestyle
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        full body Massage
                                    </div>
                                </div>
                                <div class="col-3 gold">₦35,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                relieve muscle tension, and promote deep relaxation.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Couples Massage
                                    </div>
                                </div>
                                <div class="col-3 gold">₦20,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                relaxing spa where couples receive massages at the same time in a room
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Acne / Deep Cleanse
                                    </div>
                                </div>
                                <div class="col-3 gold">₦15,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                facial treatment that deeply cleans pores, controls oil and healthier skin.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Body Scrub
                                    </div>
                                </div>
                                <div class="col-3 gold">₦10,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                body scrub exfoliates dead skin, leaving the skin smooth, and glowing.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Manicure
                                    </div>
                                </div>
                                <div class="col-3 gold">₦5,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                manicure treatment shapes, cleans, and polishes nails
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 list_hover g-3">
                    <div class="card" style="background-color: #f8f6f2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="h3 text-capitalize list_hov" style="font-family: serif">
                                        Pedicure
                                    </div>
                                </div>
                                <div class="col-3 gold">₦5,000</div>
                            </div>

                            <div class="p" style="font-family: Montserrat">
                                pedicure treatment cleans, trims, and beautifies the feet and toenails.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- list end -->
    </section>
@endsection
