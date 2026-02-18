@extends('layouts.app')
@section('content')
<head>
    <style>
        body{
            background-color: #1f1f1f;
            color: white
        }
    </style>
</head>
    <section>
        <!-- hero start -->
        <section class="roof_hero">
            <div class="color-roof">
                <div class="container text-center pad-gym">
                    <div class="h4 fs-6 text-uppercase size-roof1">
                        Premium Rooftop Experience
                    </div><br />
                    <div class="text-capitalize fw-bold text-white size-roof2">
                        Elevate Your Nights at <span class="span-roof-hero">Sekani</span>
                    </div><br />
                    <div class="p text-white size-gym3">
                        Premium drinks, curated music, breathtaking views, and unforgettable vibes above the city.
                    </div><br>
                    <a href="#whatsappForm-roof" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-roof5 blur">
                            Reserve a Table <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                    <a href="#roof-servics" class="text-decoration-none ps-3">
                        <div class="h4 fs-6 text-capitalize size-roof5 blur">
                            View Menu
                        </div>
                    </a>


                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- Our Story start -->
        <section class="container-fluid" style="padding-top: 100dvh; background-color: black;">
            <div class="row g-4 py-5">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('assets/images/roof1.jpg') }}" alt=""
                        style="width: 100%; height: 100%; border-radius: 1rem; object-fit: cover;">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="h4 fs-6 text-uppercase size-roof1">
                        Rooftop Experience
                    </div><br />
                    <div class="text-capitalize fw-bold fs-1 text-white size-roof2">
                        Where the Sky Meets <span class="span-roof-hero">Luxury</span>
                    </div><br />
                    <div class="p text-white size-gym3">
                        Perched high above the city, Sekani Rooftop Lounge offers an escape from the ordinary. Here,
                        sophisticated design meets breathtaking panoramic views, creating the perfect backdrop for
                        unforgettable moments. <br><br>

                        Our curated selection of premium cocktails, world-class spirits, and artisanal cuisine is crafted to
                        delight the most discerning palates. Whether you're celebrating a special occasion or simply seeking
                        an elevated evening, Sekani delivers an experience that transcends expectations.
                    </div><br>
                    <div class="row g-2 pt-4">
                        <div class="col-4">
                            <div class="h1 fw-bold" style="color: #f29e0d;">
                                360°
                            </div>
                            <div class="fs-6" style="opacity: 0.7; color: #f29e0d;">
                                City Views
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="h1 fw-bold" style="color: #f29e0d;">
                                50+
                            </div>
                            <div class="fs-6" style="opacity: 0.7; color: #f29e0d;">
                                Cocktails
                            </div>
                        </div>
                        <div class="col-4" style="color: #f29e0d;">
                            <div class="h1 fw-bold">
                                VIP
                            </div>
                            <div class="fs-6" style="opacity: 0.7; ">
                                Experience
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Story end-->

        <!-- What We Offer start -->
        <section class="container" id="roof-servics">
            <div class="py-5">
                <div class="h4 fs-6 text-uppercase size-roof1">
                    Curated Selection
                </div><br />
                <div class="text-capitalize fw-bold fs-1 text-white size-roof2">
                    Food & <span class="span-roof-hero">Drinks</span>
                </div><br />
                <div class="p text-white size-roof3 pb-5">
                    Indulge in our carefully crafted menu featuring signature cocktails, premium spirits, and exquisite
                    small plates designed to complement your evening.
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6" style="padding-bottom: 19rem;">
                        <div class="card bg-dark text-white">
                            <div class="roof_hero2">
                                <div class="color-roof2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1">
                                            Crafted with Passion
                                        </h4>
                                        <p class="card-text size-roof2">
                                            Signature Cocktails
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-5 pt-lg-0" style="padding-bottom: 19rem;">
                        <div class="card bg-dark text-white">
                            <div class="roof_hero3">
                                <div class="color-roof2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1">
                                            Artisan Cuisine
                                        </h4>
                                        <p class="card-text size-roof2">
                                            Gourmet Small Plates
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-5 g-4">
                    <div class="col-12 col-lg-6 ">
                        <div class="container-fluid roof-price-hover" style="background-color: #141414;">
                            <div class="py-3 size-roof6">
                                <i class="fa-solid fa-glass-cheers pe-3 roof"></i> Signature Cocktails
                            </div>
                            <div class="row pb-3">
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Sekani Sunset
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Bourbon, passion fruit, honey, citrus
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦8,500
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Golden Hour
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Champagne, elderflower, gold flakes
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦12,000
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Sekani SunsetMidnight Sky
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Vodka, blue curaçao, butterfly pea
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦7,500
                                </div>
                                <div class="col-9 roof-price-hover1">
                                    <div class="roof-price-hover2 ">
                                        Rooftop Negroni
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Gin, Campari, sweet vermouth
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦9,000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <div class="container-fluid roof-price-hover" style="background-color: #141414;">
                            <div class="py-3 size-roof6">
                                <i class="fa-solid fa-star pe-3 roof"></i> Premium Spirits
                            </div>
                            <div class="row pb-3">
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Hennessy XO
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Cognac, 70cl bottle
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦180,000
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Moët & Chandon
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Champagne, 75cl
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦95,000
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Macallan 18
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Single malt whisky
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦250,000
                                </div>
                                <div class="col-9 roof-price-hover1">
                                    <div class="roof-price-hover2 ">
                                        Belaire Rosé
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Sparkling wine
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦75,000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <div class="container-fluid roof-price-hover" style="background-color: #141414;">
                            <div class="py-3 size-roof6">
                                <i class="fa-solid fa-utensils pe-3 roof"></i> Small Plates
                            </div>
                            <div class="row pb-3">
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Truffle Fries
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Parmesan, truffle oil, herbs
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦6,500
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Grilled Prawns
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Garlic butter, lemon
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦15,000
                                </div>
                                <div class="col-9 roof-price-hover1">
                                    <div class="roof-price-hover2 ">
                                        Wagyu Sliders
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Caramelized onions, aioli
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦18,500
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Mezze Platter
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Hummus, baba ganoush, pita
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦12,000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <div class="container-fluid roof-price-hover" style="background-color: #141414;">
                            <div class="py-3 size-roof6">
                                <i class="fa-solid fa-beer-mug-empty pe-3 roof"></i> Signature Cocktails
                            </div>
                            <div class="row pb-3">
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Virgin Mojito
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Lime, mint, soda
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦4,500
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Berry Bliss
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Mixed berries, elderflower
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦5,000
                                </div>
                                <div class="col-9 roof-price-hover1 py-2">
                                    <div class="roof-price-hover2 ">
                                        Ginger Spark
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Fresh ginger, lemon, honey
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦4,000
                                </div>
                                <div class="col-9 roof-price-hover1">
                                    <div class="roof-price-hover2 ">
                                        Tropical Sunset
                                    </div>
                                    <div class="" style="opacity: 0.7;">
                                        Mango, pineapple, coconut
                                    </div>
                                </div>
                                <div class="col-3 roof text-end py-2">
                                    ₦5,500
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            </div>
        </section>
        <!-- What We Offer end -->


        <!-- book start -->
        <div class="" style="background-color: #141414;">
            <div class="container pt-5">
                <div class="size-roof1 text-uppercase">
                    Book Your Experience
                </div>
            </div>
            <form id="whatsappForm-roof" class="text-start py-5 container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <label class="form-label text-capitalize"><span
                                    class="span-roof-hero fw-bold fs-3">title</span></label>
                        </div>
                        <select class="form-select text-capitalize text-center select-roof" required name=""
                            id="title">
                            <option selected value="Rooftop Lounge">Rooftop Lounge</option>
                        </select> <br>
                    </div>
                    <div class="col-6">
                        <label class="form-label"><span class="span-roof-hero fw-bold fs-5">Full Name
                                *</span></label>
                        <input type="text" id="name" required placeholder="Your full name"
                            class="form-control input-roof">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-roof-hero fw-bold fs-5">Email
                                *</span></label>
                        <input type="email" id="email" required placeholder="your@email.com"
                            class="form-control input-roof">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-roof-hero fw-bold fs-5">phone
                                Number *</span></label>
                        <input type="number" id="phone" required placeholder="+234 xxx xxx xxxx"
                            class="form-control input-roof">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span
                                class="span-roof-hero fw-bold fs-5">Date*</span></label>
                        <input type="date" id="date" required placeholder="+234 xxx xxx xxxx"
                            class="form-control input-roof">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-roof-hero fw-bold fs-5"><i
                                    class="fa-solid fa-users"></i> Guests *</span></label>
                        <select class="form-select select-roof" required name="" id="guest">
                            <option selected hidden>Number Of Guests</option>
                            <option value="2 guests">2 guests</option>
                            <option value="4 guests">4 guests</option>
                            <option value="6 guests">6 guests</option>
                            <option value="8 guests">8 guests</option>
                            <option value="10+ guests">10+ guests</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-roof-hero fw-bold fs-5"><i
                                    class="fa-solid fa-users"></i> Occasion *</span></label>
                        <select class="form-select select-roof" required name="" id="occasion">
                            <option selected hidden value="">Select Occasion</option>
                            <option value="Birthday" class="text-capitalize">Birthday</option>
                            <option value="Anniversary" class="text-capitalize">Anniversary</option>
                            <option value="Business Meeting" class="text-capitalize">Business Meeting</option>
                            <option value="Date Night" class="text-capitalize">Date Night</option>
                            <option value="Others" class="text-capitalize">Others</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label text-capitalize pt-4"><span class="span-roof-hero fw-bold fs-5">Special
                                Requests</span>
                        </label>
                        <textarea name="" rows="4" id="message" class="form-control input-roof"
                            placeholder="Share any specific requirements..."></textarea>
                    </div>
                    <button class="buttonnn-roof text-white btn mt-3 py-2" type="submit">
                        Send to WhatsApp <i class="fa-regular fa-paper-plane"></i>
                    </button>


                </div>
            </form>
        </div>
        <!-- book end -->
    </section>
@endsection
