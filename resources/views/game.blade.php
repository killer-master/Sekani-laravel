@extends('layouts.app')
@section('content')
<head>
    <style>
        body{
            background-color: #14181f;
        }
    </style>
</head>
    <section>
        <!-- hero start -->
        <section class="game_hero">
            <div class="color-game">
                <div class="container text-center" style="padding-top: 8rem">
                    <div class="h4 fs-6 text-uppercase size-game1 blur">
                        Premium Gaming Arena
                    </div><br />
                    <div class="text-capitalize fw-bold text-white size-game2">
                        Play Hard.<span class="span-game-hero"> Compete.</span> Win.
                    </div><br />
                    <div class="p text-white size-game3">
                        Experience SEKANI — The ultimate destination for gaming, sports, and unforgettable entertainment.
                    </div><br>
                    <a href="#game" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-game1 blur">
                            View Arenas
                        </div>
                    </a>
                    <a href="#whatsappForm" class="text-decoration-none ps-3">
                        <div class="h4 fs-6 text-capitalize size-game1 blur">
                            book now
                        </div>
                    </a>

                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- Why Choose Us start -->
        <section style="padding-top: 100dvh;" class="container-fluid">
            <div class="py-5">
                <div class="text-capitalize text-center" style="font-family: Orbitron, sans-serif; color: #00aeff;">
                    Why Choose Us
                </div>
                <div class="text-capitalize fs-1 size-game2 text-center text-white">
                    The <span class="span-game-hero fw-bold">SEKANI</span> Experience
                </div>
                <div class="p fs-5 size-game3 text-center" style="opacity: 0.7;">
                    We've created the ultimate gaming destination with everything you need for an unforgettable experience.
                </div>
                <div class="row g-3 pt-5">
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-shield game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    Premium Equipment
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Top-tier gaming gear and sports equipment for the ultimate experience.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-clock game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    Open 24/7
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Game anytime, day or night. We never close our doors.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-users game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    Team Building
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Perfect venue for corporate events and team-building activities.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-trophy game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    Tournaments
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Weekly competitions with prizes for champions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-wifi game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    High-Speed WiFi
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Ultra-fast internet for seamless online gaming.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card container game_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-star game_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize game-text pt-4">
                                    VIP Lounges
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Exclusive private rooms for premium gaming.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- Why Choose Us end -->

        <!-- Our Arenas start -->
        <section id="game" class="container-fluid" style="background-color: #0c0e12;">
            <div class="py-5">
                <div class="text-capitalize text-center" style="font-family: Orbitron, sans-serif; color: #00aeff;">
                    Our Arenas
                </div>
                <div class="text-capitalize fs-1 size-game2 text-center text-white">
                    Choose Your <span class="span-game-hero fw-bold">Battleground</span>
                </div>
                <div class="p fs-5 size-game3 text-center" style="opacity: 0.7;">
                    From intense gaming sessions to action-packed sports, SEKANI offers premium experiences for every type
                    of player.
                </div>
            </div>
            <div class="row g-3 pb-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card game-arena-hover game-scale" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/8-pool.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">8 Ball Pool</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Challenge your friends to an intense game of
                                pool on our premium competition-grade tables with professional</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card game-arena-hover game-scale" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/tabletennis.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">Table Tennis</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Fast-paced rallies await on our
                                Olympic-standard
                                tables. Perfect for casual games or intense competitions.</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card game-arena-hover game-scale" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/paintball.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">Paintball Arena</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Gear up for action in our state-of-the-art
                                indoor paintball arena. Team battles, strategy, and pure adrenaline.</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card game-arena-hover game-scale" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/playstation.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">PlayStation Gaming</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Immerse yourself in the latest PlayStation
                                titles on our 4K gaming stations with premium gaming chairs.</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card game-arena-hover game-scale" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/basketball.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">Basketball Court</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Hit the court on our full-size indoor
                                basketball
                                arena with professional flooring and NBA-style hoops.</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card game-arena-hover game-scale pb-4" style="background-color: #0c0e12;">
                        <!-- <div class="text-center serice_sticker">
                            <i class="fa-solid fa-utensils pot"></i>
                        </div> -->
                        <img class="card-img-top game-img-scale" src="{{ asset('assets/images/football.jpg') }}" />
                        <div class="card-body text-white">
                            <h3 class="card-title game-arena-text">Football Field</h3>
                            <p class="card-text pb-3" style="opacity: 0.7;">Experience the beautiful game on our premium
                                turf field, perfect for 5-a-side or 7-a-side matches.</p>
                            <div class="text-center mb-4">
                                <a href="#gamebook" class="fs-5 fw-bold px-5 py-2 game-sticker">Book Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Arenas end -->

        <!-- price start -->
        <section class="container-fluid">
            <div class="py-5 text-center">
                <div class="text-capitalize game-button2 " style="color: #00aeff;">
                    Pricing & Access
                </div>
                <div class="text-capitalize fw-bold fs-1 size-game2" style="color: #00aeff;">
                    Reserve Your <span class="span-game-hero">Arena</span>
                </div>
                <div class="p text-white fs-5 size-game3" style="opacity: 0.7;">
                    Secure your spot and get ready for an epic gaming experience.
                </div>
                <div class="container">
                    <div class="row g-3 pt-5">
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        8 ball pool
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦1,500/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        table tennis
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦2,000/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        paintball arena
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦5,000/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        playstation gaming
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦1,500/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        basketball court
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦2,000/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="card container game_hover text-white">
                                <div class="card-body">
                                    <div class="h4 text-capitalize game-text pt-4">
                                        football field
                                    </div>
                                    <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                        ₦2,000/hr
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form id="whatsappForm" class="text-start py-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <label class="form-label text-capitalize"><span
                                            class="span-game-hero fw-bold fs-3">title</span></label>
                                </div>
                                <select class="form-select text-capitalize text-center select-game" required
                                    name="" id="title">
                                    <option selected value="Game Arena">game arena</option>
                                </select> <br>
                            </div>
                            <div class="col-6">
                                <label class="form-label"><span class="span-game-hero fw-bold fs-5">Full Name
                                        *</span></label>
                                <input type="text" id="name" required placeholder="Your full name"
                                    class="form-control input-game">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize"><span class="span-game-hero fw-bold fs-5">Email
                                        *</span></label>
                                <input type="email" id="email" required placeholder="your@email.com"
                                    class="form-control input-game">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize"><span class="span-game-hero fw-bold fs-5">phone
                                        Number *</span></label>
                                <input type="number" id="phone" required placeholder="+234 xxx xxx xxxx"
                                    class="form-control input-game">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize"><span class="span-game-hero fw-bold fs-5">game
                                        *</span></label>
                                <select class="form-select select-game" required name="" id="games">
                                    <option selected hidden value="">Select a Game</option>
                                    <option value="8 Ball Pool" class="text-capitalize">8 ball pool</option>
                                    <option value="Table Tennis" class="text-capitalize">table tennis</option>
                                    <option value="Paintball Arena" class="text-capitalize">paintball arena</option>
                                    <option value="Playstation Gaming" class="text-capitalize">playstation gaming</option>
                                    <option value="Basketball Court" class="text-capitalize">basketball court</option>
                                    <option value="Football Field" class="text-capitalize">football field</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize"><span class="span-game-hero fw-bold fs-5"><i
                                            class="fa-regular fa-calendar"></i> date *</span></label>
                                <input type="date" id="date" required class="form-control input-game"
                                    style="color: #ff3399;">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize"><span class="span-game-hero fw-bold fs-5"><i
                                            class="fa-solid fa-users"></i> Number of Players *</span></label>
                                <select class="form-select select-game" required name="" id="players">
                                    <option selected hidden value="">Number of Players?</option>
                                    <option value="1 player">1 player</option>
                                    <option value="2 players">2 players</option>
                                    <option value="3 players">3 players</option>
                                    <option value="4 players">4 players</option>
                                    <option value="5 players">5 players</option>
                                    <option value="6 players">6 players</option>
                                    <option value="7 players">7 players</option>
                                    <option value="8 players">8 players</option>
                                    <option value="9 Players">9 Players</option>
                                    <option value="10 players">10 players</option>
                                    <option value="10+ Players">10+ Players</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-capitalize pt-4"><span
                                        class="span-game-hero fw-bold fs-5">Tell Us About Your Vision
                                        (optional)</span></label>
                                <textarea name="" rows="5" id="message" class="form-control input-game"
                                    placeholder="Share any specific requirements..."></textarea>
                            </div>
                            <!-- <button class="buttonnn btn  mt-3 py-2" type="button" onclick="sendToWhatsapp()">Send to
                                WhatsApp
                                <i class="fa-regular fa-paper-plane"></i></button> -->
                            <button class="buttonnn-game btn  mt-3 py-2" type="submit">
                                Send to WhatsApp <i class="fa-regular fa-paper-plane"></i>
                            </button>


                        </div>
                    </form>
                </div>



            </div>
        </section>
        <!-- price end -->
    </section>
@endsection
