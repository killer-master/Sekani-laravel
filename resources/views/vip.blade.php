@extends('layouts.app')
@section('content')
<head>
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
    <section>
        <!-- hero start -->
        <section class="loundge_hero">
            <div class="color-vip">
                <div class="container text-center" style="padding-top: 8rem;">
                    <div class="h4 fs-5 text-uppercase gold size1">
                        Welcome to Sekani's VIP lounge
                    </div><br />
                    <div class="text-capitalize text-white size2">
                        Experience Luxury
                        <p style="color: var(--gold);">Beyond Ordinary</p>
                    </div><br />
                    <div class="p text-white size3">
                        Where exclusivity meets exceptional nightlife. Discover a world of refined elegance and
                        unforgettable moments.
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- the Experience start -->
        <section style="padding-top: 90dvh; background-color: black;">
            <div class="container-fluid text-center pad pb-5">
                <div class="h4 fs-5 text-uppercase gold size1">
                    the Experience
                </div><br />
                <div class="text-capitalize text-white size2">
                    What Awaits You
                </div><br />
                <div class="p text-white size3">
                    Every VIP experience at Sekani is designed to exceed your expectations.
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 g-3 scale-vip"
                        style="background-color: #14141482; border-radius: 1rem; border: solid gold 1px;">
                        <div class=" text-center">
                            <i class="fa-solid fa-crown m-4 fs-1 gold"
                                style="background-color: #ffd9001c; border-radius: 50%; padding-top: 30px;  padding-right: 70px; padding-left: 30px; padding-bottom: 30px;"></i>
                            <div class="h4 text-white" style="font-family: Playfair Display, serif;">
                                VIP Tables & Booths
                            </div>
                            <div class="p text-white" style="font-family: Montserrat ;opacity: 0.5;">
                                Elevated seating with the best views, personalized service, and the privacy you deserve.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 g-3 scale-vip"
                        style="background-color: #14141482; border-radius: 1rem; border: solid gold 1px;">
                        <div class=" text-center">
                            <i class="fa-solid fa-wine-glass m-4 fs-1 gold"
                                style="background-color: #ffd9001c; border-radius: 50%; padding-top: 30px;  padding-right:60px; padding-left: 30px; padding-bottom: 30px;"></i>
                            <div class="h4 text-white" style="font-family: Playfair Display, serif;">
                                Bottle Service
                            </div>
                            <div class="p text-white" style="font-family: Montserrat ;opacity: 0.5;">
                                Premium spirits and champagnes presented with flair by our expert mixologists.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 g-3 scale-vip"
                        style="background-color: #14141482; border-radius: 1rem; border: solid gold 1px;">
                        <div class=" text-center">
                            <i class="fa-solid fa-user-group m-4 fs-1 gold"
                                style="background-color: #ffd9001c; border-radius: 50%; padding-top: 30px;  padding-right: 70px; padding-left: 30px; padding-bottom: 30px;"></i>
                            <div class="h4 text-white" style="font-family: Playfair Display, serif;">
                                Private Rooms
                            </div>
                            <div class="p text-white" style="font-family: Montserrat ;opacity: 0.5;">
                                Intimate spaces for exclusive celebrations, business entertaining, or special occasions.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 g-3 scale-vip"
                        style="background-color: #14141482; border-radius: 1rem; border: solid gold 1px;">
                        <div class="text-center">
                            <i class="fa-solid fa-star m-4 fs-1 gold"
                                style="background-color: #ffd9001c; border-radius: 50%; padding-top: 30px;  padding-right: 70px; padding-left: 30px; padding-bottom: 30px;"></i>
                            <div class="h4 text-white" style="font-family: Playfair Display, serif;">
                                Personalized Experience
                            </div>
                            <div class="p text-white" style="font-family: Montserrat ;opacity: 0.5;">
                                From music preferences to dietary requirements, we tailor every detail to your wishes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- the Experience end -->

        <!-- gallary start -->
        <section style="background-color: black;">
            <div class="container-fluid text-center py-5">
                <div class="h4 text-uppercase gold" style="font-family: mont">
                    Gallery
                </div>
                <br />
                <div class="h1 text-capitalize text-white" style="font-family: serif">
                    A Glimpse Inside
                </div>
                <br />
                <div class="p text-white" style="font-family: Montserrat">
                    A visual journey through our luxurious spaces and unforgettable nights.
                </div>
                <div class="container-fluid pt-5 row">
                    <div class="col-6">
                        <img src="{{ asset('assets/images/vip1.jpg') }}" style="width: 100%; height: 100%; border: solid gold 1px;"
                            alt="">
                    </div>
                    <div class="col-6">
                        <div class="col-12">
                            <img src="{{ asset('assets/images/vip2.jpg') }}" style="width: 100%; height: 100%; border: solid gold 1px;"
                                alt="">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('assets/images/vip3.jpg') }}" style="width: 100%; height: 100%; border: solid gold 1px;"
                                alt="">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('assets/images/vip4.jpg') }}" style="width: 100%; height: 100%; border: solid gold 1px;"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallary END -->
    </section>
@endsection
