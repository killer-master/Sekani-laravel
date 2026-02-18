@extends('layouts.app')
@section('content')
    <section>
        <!-- hero start -->
        <section class="swim_hero">
            <div class="color-swim">
                <div class="container text-center" style="padding-top: 7rem;">
                    <div class="h4 fs-6 text-uppercase size-swim1 blur">
                        Premium Leisure Experience
                    </div><br />
                    <div class="text-capitalize text-white size-swim2">
                        Dive Into Relaxation <span style="color: var(--cyan);">at Sekani</span>
                    </div><br />
                    <div class="p text-white size-swim3">
                        Experience the perfect blend of relaxation and fun at our premium swimming facility. Crystal-clear
                        waters, world-class amenities, and unforgettable moments await you.
                    </div><br>
                    <a href="#swim" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-swim1 blur">
                            view facilities
                        </div>
                    </a>

                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- about us start -->
        <section style="padding-top: 100dvh;" class="container-fluid">
            <div class="py-5">
                <div class="text-capitalize swim-button2">
                    about us
                </div>
                <div class="text-capitalize fs-1 size-swim2" style="color: #0a4976;">
                    Where Relaxation Meets
                </div>
                <div class="p text-dark fs-5 size-swim3">
                    Sekani Swimming Pool is more than just a pool—it's a sanctuary designed for those who seek tranquility,
                    fitness, and unforgettable moments. Our state-of-the-art facility combines luxury with comfort, offering
                    a refreshing escape from the everyday. <br> <br>

                    With professional lifeguards on duty, strict hygiene standards, and world-class amenities, we ensure
                    every visit is safe, enjoyable, and memorable. Whether you're here for a morning swim, a family day out,
                    or a vibrant pool party, Sekani delivers excellence.
                </div>
                <div class="row py-4">
                    <div class="col-4">
                        <div class="text-center py-4" style="background-color: #def5f7; border-radius: 1rem;">
                            <div style="color: #0a4976;" class="fs-2">5000+</div>
                            <small class="text-capitalize">happpy quest</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center py-4" style="background-color: #def5f7; border-radius: 1rem;">
                            <div style="color: #0a4976;" class="fs-2">365</div>
                            <small class="text-capitalize">days open</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center py-4" style="background-color: #def5f7; border-radius: 1rem;">
                            <div style="color: #0a4976;" class="fs-2">100%</div>
                            <small class="text-capitalize">safe & clean</small>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </section>
        <!-- about us end -->

        <!-- Facilities start -->
        <section id="swim">
            <div class="container-fluid pb-5">
                <div class="row g-4">
                    <div class="col-12 col-lg-3">
                        <div class="card container swim_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-droplet swim_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    Crystal clear water
                                </div>
                                <div class="p pt2" style="font-family: Montserrat">
                                    Our pool water is treated with advanced filtration system ensuring pristine clarity and
                                    safety.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card container swim_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-shield swim_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    safe & hygienic
                                </div>
                                <div class="p pb-4" style="font-family: Montserrat">
                                    Professional maintenance and regular safety checks guarantee a worry-free swimming
                                    experience
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card container swim_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-users swim_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    family friendly
                                </div>
                                <div class="p pt2" style="font-family: Montserrat">
                                    Dedication zones for children and families creates the perfect environment for quality
                                    time together
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card container swim_hover" style="border-radius: 1rem; border: solid 2px">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-sun swim_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize pt-4" style="font-family: serif">
                                    All-Day comfort
                                </div>
                                <div class="p pb-4" style="font-family: Montserrat">
                                    Enjoy poolside loungers, shaded cabanas, and comfortable amenities from sunrise to
                                    sunset.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Facilities end -->

        <!-- price start -->
        <section class="container-fluid">
            <div class="py-5 text-center">
                <div class="text-capitalize swim-button2 ">
                    Pricing & Access
                </div>
                <div class="text-capitalize fs-1 size-swim2" style="color: #0a4976;">
                    simple pricing
                </div>
                <div class="p text-dark fs-5 size-swim3">
                    Choose the plan that suits your needs. From dayily memberships, we have options for everyone.
                </div>
                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="my-5 py-5" style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px;">
                            <div class="text-capitalize fw-bold fs-3 size-swim2" style="color: black;">
                                Day pass
                            </div>
                            <small class="p text-dark fs-5 size-swim3">
                                perfect for a refreshing day at the pool
                            </small>
                            <div class="text-capitalize fs-1 size-swim2" style="color: black;">
                                ₦5,000 <small style="color: gray; font-size: small;">per person</small>
                            </div>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Full day pool access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Locker & shower use
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Poolside lounge
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Towel service
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="my-5 py-5"
                            style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px; color: white; background-color: #0a4976;">
                            <div class="text-capitalize fw-bold fs-3 size-swim2 text-white">
                                family package
                            </div>
                            <small class="p text-dark fs-5 text-white size-swim3">
                                ideal for families quanlity time
                            </small>
                            <div class="text-capitalize fs-1 size-swim2 text-white">
                                ₦15,000 <small style="color: gray; font-size: small;">up to 4 people</small>
                            </div>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Full day pool access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Locker & shower use
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Poolside lounge
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #22c3b670; padding: 5px; "></i>
                                    </span>Towel service
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- price end -->
    </section>
@endsection
