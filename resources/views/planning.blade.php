@extends('layouts.app')
@section('content')
    <section>
        <!-- hero start -->
        <section class="plan_hero">
            <div class="color-plan">
                <div class="container-fluid" style="padding-top: 5rem">
                    <div class="h4 fs-6 text-uppercase size-plan1">
                        <i class="fa-regular fa-star" style="color: var(--brown);"></i> Premium Outdoor Catering & Events
                    </div><br />
                    <div class="text-capitalize text-white size-plan2">
                        Exceptional Outdoor Catering & <span style="color: var(--brown);">Unforgettable </span>Events
                    </div><br />
                    <div class="p text-white size-plan3">
                        We transform your outdoor celebrations into extraordinary experiences with exquisite cuisine,
                        stunning décor, and flawless event coordination.
                    </div><br>
                    <a href="#plan" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-plan1 scale blur">
                            view package
                        </div>
                    </a>
                    <a href="#book" class="ms-3 text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-plan1 scale blur">
                            book now
                        </div>
                    </a>

                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- about us start -->
        <section class="container-fluid" style="padding-top: 100dvh; ">
            <div class="row g-2 my-5">
                <div class="col-12 col-lg-6">
                    <div class="text-capitalize plan-button4">
                        about us
                    </div>
                    <div class="text-capitalize fs-1 size-swim2" style="color: black;">
                        Creating Memorable Moments Under the Open Sky
                    </div>
                    <div class="p text-black fs-5 size-plan3">
                        Sekani was born from a simple belief: that the best celebrations happen outdoors, surrounded by
                        nature, great food, and the people you love. Since our founding, we've been dedicated to crafting
                        extraordinary outdoor experiences across Nigeria. <br><br>

                        From intimate garden parties to grand corporate galas, our team brings creativity, precision, and
                        warmth to every event. We handle everything—from gourmet catering and elegant décor to seamless
                        coordination—so you can focus on enjoying your special moments.
                    </div>
                    <div class="row g-2 py-3">
                        <div class="col-6 scale p-2"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 1rem;">
                            <div class="row g-2">
                                <div class="col-3">
                                    <i class="fa-regular fa-heart size-plan5 fs-5 pe-4"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-bold">Passion for Excellence</p>
                                    <p>Every dish we prepare and every event we plan is infused with our passion for
                                        creating unforgettable moments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 scale p-2"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 1rem;">
                            <div class="row g-2">
                                <div class="col-3">
                                    <i class="fa-solid fa-award size-plan5 fs-5 pe-4"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-bold">Premium Quality</p>
                                    <p>We use only the finest ingredients and materials to ensure every detail meets our
                                        exacting standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 scale p-2"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 1rem;">
                            <div class="row g-2">
                                <div class="col-3">
                                    <i class="fa-solid fa-users size-plan5 fs-5 pe-4"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-bold">Expert Team</p>
                                    <p>Our experienced chefs, planners, and coordinators work seamlessly to bring your
                                        vision to life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 scale p-2"
                            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 1rem;">
                            <div class="row g-2">
                                <div class="col-3">
                                    <i class="fa-regular fa-clock size-plan5 fs-5 pe-4"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-bold">Timely Delivery</p>
                                    <p>Punctuality is our promise. We ensure every element is perfectly timed for your
                                        event.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row g-2">
                        <div class="col-6">
                            <img src="{{ asset('assets/images/plan1.jpg') }}" style="width: 100%; height: 100%;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/images/plan2.jpg') }}" style="width: 100%;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/images/plan3.jpg') }}" style="width: 100%;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/images/plan4.jpg') }}" style="width: 100%;">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about us end -->

        <!-- price start -->
        <section class="container-fluid" id="plan">
            <div class="py-5 text-center">
                <div class="text-capitalize plan-button4">
                    pricing and package
                </div>
                <div class="text-capitalize fw-bold fs-1 size-plan2"
                    style="color: #252b37; font-family: Montserrat, sans-serif;">
                    Tailored Packages for Every Occasion
                </div>
                <div class="p text-dark fs-5 size-plan3" style="color: #252b37;">
                    Choose from our carefully curated packages or let us create a custom solution that perfectly fits your
                    vision and budget.
                </div>
                <div class="row g-2">
                    <div class="col-12 col-lg-4">
                        <div class="my-5 py-3" style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px;">
                            <div class="text-capitalize fw-bold  size-plan2" style="color: black; font-size: 26px;">
                                Essential
                            </div><br>
                            <div class="p text-dark size-plan3" style="font-size: 14px;">
                                Perfect for intimate gatherings and small celebrations
                            </div><br>
                            <div class="p text-dark size-plan3 text-uppercase" style="font-size: 15px; color: #676f7e;">
                                starting from
                            </div>
                            <div class="text-capitalize fs-1 size-swim2" style="color: black;">
                                ₦350,000
                            </div><br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Up to 50 guests
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Standard buffet menu
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Basic tent setup
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Standard table & chairs
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Event coordinator
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>4-hour service
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="my-5 py-3"
                            style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px; color: white; background-color: var(--brown);">
                            <div class="text-capitalize fw-bold fs-3 size-plan2 text-white">
                                Premium
                            </div> <br>
                            <div class="p text-dark fs-5 text-white size-plan3">
                                Ideal for medium-sized events with elevated experience
                            </div> <br>
                            <div class="p text-dark size-plan3 text-white text-uppercase" style="font-size: 15px;">
                                starting from
                            </div>
                            <div class="text-capitalize fs-1 size-plan2 text-white">
                                ₦750,000
                            </div> <br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Up to 150 guests
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Premium buffet with live stations
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Elegant tent with draping
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Chiavari chairs & luxury linens
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Floral centerpieces
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Full bar service
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Dedicated event manager
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>6-hour service
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="my-5 py-3" style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px;">
                            <div class="text-capitalize fw-bold  size-swim2" style="color: black; font-size: 26px;">
                                Luxury
                            </div><br>
                            <div class="p text-dark size-plan3" style="font-size: 14px;">
                                The ultimate experience for grand celebrations
                            </div><br>
                            <div class="p text-dark size-plan3 text-uppercase" style="font-size: 15px; color: #676f7e;">
                                starting from
                            </div>
                            <div class="text-capitalize fs-1 size-swim2" style="color: black;">
                                ₦1,500,000
                            </div><br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Up to 300+ guests
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Gourmet multi-course menu
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Premium tent with chandeliers
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Custom décor & lighting
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Premium floral arrangements
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Full premium bar & lounge
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Live cooking experiences
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Full planning team
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>10-hour service
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="border-radius: 50%; background-color: #32674d; padding: 5px; "></i>
                                    </span>Complimentary cleanup
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p text-dark fs-5 text-dark size-plan3">
                        Need something different? We create custom packages tailored to your specific requirements.
                    </div><br>
                    <a href="#book" class="text-decoration-none plan-buttonn">
                        <div class="">
                            Request a Custom Quote <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>


        </section>
        <!-- price end -->


        <section class="container-fluid">
            <div class="row py-5">
                <div class="col-12 col-lg-6">
                    <div class="text-capitalize plan-button4">
                        Get in Touch
                    </div>
                    <div class="text-capitalize fs-1 size-plan2 fw-bold"
                        style="color: #252b37; font-family: Montserrat, sans-serif;">
                        Let's Create Something Beautiful Together
                    </div>
                    <div class="p text-dark fs-5 size-plan3" style="color: #252b37;">
                        Ready to plan your perfect outdoor event? Fill out the form and our team will reach out within 24
                        hours to discuss your vision.
                    </div>
                    <div class="row pt-3 text-dark">
                        <div class="col-2 col-lg-1"><i class="fa-solid fa-phone empire" style="padding-right: 40px"></i></div>
                        <div class="col-10 col-lg-11 fs-5  text-capitalize">
                            <h4 class="ps-3">Phone / WhatsApp</h4>
                            <p class="ps-3">+234 906 540 4205</p>
                        </div>
                        <div class="col-2 col-lg-1"><i class="fa-solid fa-envelope empire" style="padding-right: 40px"></i></div>
                        <div class="col-10 col-lg-11 fs-5 text-capitalize">
                            <h4 class="pt-2 ps-3">Email</h4>
                            <p class="ps-3">hello@sekani.ng</p>
                        </div>
                        <div class="col-2 col-lg-1"><i class="fa-solid fa-location-dot empire" style="padding-right: 40px"></i></div>
                        <div class="col-10 fs-5 col-lg-11 text-capitalize">
                            <h4 class="pt-2 ps-3">Location</h4>
                            <p class="ps-3">Owerri, Ezibodo</p>
                        </div>
                    </div>
                </div>
                <div id="book" class="col-12 col-lg-6 py-5"
                    style=" box-shadow: #63636333 0px 2px 8px 0px; border-radius: 1rem;">
                    <div class="text-capitalize fw-bold  size-swim2" style="color: black; font-size: 26px;">
                        Book Your Event
                    </div><br>
                    <form id="whatsappForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <label class="form-label text-capitalize">title</label>
                                </div>
                                <select class="form-select" required name="" id="title">
                                    <option selected value="Catering and event planning">Catering and event planning
                                    </option>
                                </select> <br>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" id="name" required placeholder="Your full name"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize">Email *</label>
                                <input type="email" id="email" required placeholder="your@email.com"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize">phone Number *</label>
                                <input type="number" id="phone" required placeholder="+234 xxx xxx xxxx"
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize">event type *</label>
                                <select class="form-select" required name="" id="event">
                                    <option selected hidden>Select one</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Corporate Event">Corporate Event</option>
                                    <option value="garden party" class="text-capitalize">garden party</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <i class="fa-regular fa-calendar"></i> <label class="form-label text-capitalize">event
                                    date</label>
                                <input type="date" id="date" required class="form-control">
                            </div>
                            <div class="col-6">
                                <i class="fa-solid fa-users"></i> <label class="form-label text-capitalize">Expected
                                    Guests</label>
                                <select class="form-select" required name="" id="guest">
                                    <option selected hidden>Number Of Guests</option>
                                    <option value="1-50 guests">1-50 guests</option>
                                    <option value="51-100 guests">51-100 guests</option>
                                    <option value="101-200 guests">101-200 guests</option>
                                    <option value="201-300 guests">201-300 guests</option>
                                    <option value="300+ guests">300+ guests</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label text-capitalize">Budget Range</label>
                                <select class="form-select" required name="" id="budget">
                                    <option selected hidden>select budget range</option>
                                    <option value="Below ₦500,000">Below ₦500,000</option>
                                    <option value="₦500,000- ₦1,000,000">₦500,000- ₦1,000,000</option>
                                    <option value="₦1,000,000- ₦2,000,000">₦1,000,000- ₦2,000,000</option>
                                    <option value="₦2,000,000- ₦5,000,000">₦2,000,000- ₦5,000,000</option>
                                    <option value="Above ₦5,000,000">Above ₦5,000,000</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-capitalize">Tell Us About Your Vision</label>
                                <textarea name="" rows="5" id="message" required class="form-control"
                                    placeholder="Share any specific requirements, themes, or details about your event..."></textarea>
                            </div>
                            <!-- <button class="buttonnn btn  mt-3 py-2" type="button" onclick="sendToWhatsapp()">Send to
                                WhatsApp
                                <i class="fa-regular fa-paper-plane"></i></button> -->
                            <button class="buttonnn btn  mt-3 py-2" type="submit">
                                Send to WhatsApp <i class="fa-regular fa-paper-plane"></i>
                            </button>


                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
@endsection
