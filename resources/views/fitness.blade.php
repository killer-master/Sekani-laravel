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
        <section class="gym_hero">
            <div class="color-gym">
                <div class="container text-center " style="padding-top: 8rem;">
                    <div class="h4 fs-6 text-uppercase size-gym1 blur">
                        Premium Fitness Experience
                    </div><br />
                    <div class="text-capitalize fw-bold text-white size-gym2">
                        TRANSFORM YOUR <span class="span-gym-hero">BODY & MIND</span>
                    </div><br />
                    <div class="p text-white size-gym3">
                        Experience world-class training at Sekani Fitness Center. State-of-the-art equipment, certified
                        trainers, and programs designed for champions.
                    </div><br>
                    <a href="#whatsappForm-gym" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-gym1 blur">
                            Join Now <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                    <a href="#gym-servics" class="text-decoration-none ps-3">
                        <div class="h4 fs-6 text-capitalize size-gym1 blur">
                            <i class="fa-solid fa-play"></i> explor our services
                        </div>
                    </a>
                    <div class="row g-2 pt-4">
                        <div class="col-4">
                            <div class="h1 fw-bold" style="color: #ec1313;">
                                500+
                            </div>
                            <div class="fs-6" style="opacity: 0.7; color: #ec1313;">
                                Active Members
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="h1 fw-bold" style="color: orange;">
                                15+
                            </div>
                            <div class="fs-6" style="opacity: 0.7; color: orange;">
                                Expert Trainers
                            </div>
                        </div>
                        <div class="col-4" style="color: #ec1313;">
                            <div class="h1 fw-bold">
                                1K+
                            </div>
                            <div class="fs-6" style="opacity: 0.7; ">
                                Transformations
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- hero end -->

        <section style="padding-top: 130dvh;"></section>

        <!-- What We Offer start -->
        <section class="container-fluid" id="gym-servics">
            <div class="py-5">
                <div class="text-capitalize text-center" style="font-family: Orbitron, sans-serif; color: #ec1313;">
                    What We Offer
                </div>
                <div class="text-capitalize fs-1 size-game2 text-center text-white">
                    PREMIUM <span class="span-gym-hero fw-bold">SERVICES</span>
                </div>
                <div class="p fs-5 size-game3 text-center" style="opacity: 0.7;">
                    From personal training to group classes, we offer everything you need to transform your body and achieve
                    peak performance.
                </div>
                <div class="row g-3 pt-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-users gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Personal Training
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    One-on-one sessions with certified trainers to achieve your specific goals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-dumbbell gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Strength Training
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Build muscle and power with our comprehensive strength programs.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-heart gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Cardio Training
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Boost endurance and heart health with state-of-the-art cardio equipment.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-bullseye gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Weight Loss
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Proven programs to help you shed weight and keep it off for good.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-bolt gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Muscle Building
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    Expert guidance for hypertrophy and lean muscle development.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card container gym_hover text-white">
                            <div class="row">
                                <div class="col-2 pt-4 ps-4">
                                    <i class="fa-solid fa-trophy gym_moji scale pt-4 pe-5"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 text-capitalize gym-text pt-4">
                                    Group Classes
                                </div>
                                <div class="p pt2" style="font-family: Montserrat; opacity: 0.7;">
                                    High-energy group sessions for motivation and community support.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- What We Offer end -->

        <!-- price start -->
        <section class="container-fluid text-white" id="plan">
            <div class="py-5 text-center">
                <div class="text-capitalize plan-button4" style="color: #ec1313;">
                    Membership Plans
                </div>
                <div class="text-capitalize fs-1 size-plan2" style="font-family: Montserrat, sans-serif;">
                    INVEST IN <span class="span-gym-hero">YOURSELF</span>
                </div>
                <div class="p fs-5 size-plan3" style="opacity: 0.7;">
                    Choose from our carefully curated packages or let us create a custom solution that perfectly fits your
                    vision and budget.
                </div>
                <div class="row g-2">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="my-5 py-3" style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px;">
                            <div class="text-capitalize fw-bold  size-plan2" style="font-size: 26px;">
                                Starter
                            </div><br>
                            <div class="p size-plan3" style="font-size: 14px; opacity: 0.7;">
                                Perfect for beginners starting their fitness journey.
                            </div><br>
                            <div class="text-capitalize fs-1 size-swim2">
                                <span class="size-plan3 text-uppercase" style="opacity: 0.6;">₦</span>50,000<span
                                    class="fs-5 size-plan3 text-uppercase" style="opacity: 0.6;">/month</span>
                            </div><br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>Gym access (6AM - 10PM)
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>Basic equipment access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>Locker room access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px; "></i>
                                    </span>1 fitness assessment
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="my-5 py-3"
                            style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px; color: white; background-color: #ec131356;">
                            <div class="text-capitalize fw-bold fs-3 size-plan2 text-white">
                                pro
                            </div> <br>
                            <div class="p size-plan3" style="font-size: 14px; opacity: 0.7;">
                                Our most popular plan for serious fitness enthusiasts.
                            </div><br>
                            <div class="text-capitalize fs-1 size-swim2">
                                <span class="size-plan3 text-uppercase" style="opacity: 0.6;">₦</span>80,000<span
                                    class="fs-5 size-plan3 text-uppercase" style="opacity: 0.6;">/month</span>
                            </div><br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>24/7 gym access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>Full equipment access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>Group classes included
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>2 personal training sessions
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>Nutrition consultation
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #ec131346; padding: 5px;"></i>
                                    </span>Priority support
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="my-5 py-3" style="border-radius: 2rem; box-shadow: #63636333 0px 2px 8px 0px;">
                            <div class="text-capitalize fw-bold  size-plan2" style="font-size: 26px;">
                                Elite
                            </div><br>
                            <div class="p size-plan3" style="font-size: 14px; opacity: 0.7;">
                                The ultimate experience for peak performance.
                            </div><br>
                            <div class="text-capitalize fs-1 size-swim2">
                                <span class="size-plan3 text-uppercase" style="opacity: 0.6;">₦</span>150,000<span
                                    class="fs-5 size-plan3 text-uppercase" style="opacity: 0.6;">/month</span>
                            </div><br>
                            <div class="text-start">
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>24/7 VIP gym access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>Full equipment access
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px;"></i>
                                    </span>Unlimited group classes
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px; "></i>
                                    </span>8 personal training sessions
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px; "></i>
                                    </span>Custom meal plans
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px; "></i>
                                    </span>Body composition tracking
                                </div>
                                <div class="px-5 py-2">
                                    <span class="text-end"><i class="fa-solid fa-check me-3"
                                            style="color: #ec1313; border-radius: 50%; background-color: #141414; padding: 5px; "></i>
                                    </span>Dedicated coach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p fs-5 size-plan3">
                        Need something different? We create custom packages tailored to your specific requirements.
                    </div><br>
                    <a href="#book-gym" class="text-decoration-none plan-buttonn">
                        <div class="" style="color: #ec1313;">
                            Request a Custom Quote <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>


        </section>
        <!-- price end -->

        <!-- book start -->
        <form id="whatsappForm-gym" class="text-start py-5 container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <label class="form-label text-capitalize"><span
                                class="span-gym-hero fw-bold fs-3">title</span></label>
                    </div>
                    <select class="form-select text-capitalize text-center select-gym" required name=""
                        id="title">
                        <option selected value="Fitness Center">fitness center</option>
                    </select> <br>
                </div>
                <div class="col-6">
                    <label class="form-label"><span class="span-gym-hero fw-bold fs-5">Full Name
                            *</span></label>
                    <input type="text" id="name" required placeholder="Your full name"
                        class="form-control input-gym">
                </div>
                <div class="col-6">
                    <label class="form-label text-capitalize"><span class="span-gym-hero fw-bold fs-5">Email
                            *</span></label>
                    <input type="email" id="email" required placeholder="your@email.com"
                        class="form-control input-gym">
                </div>
                <div class="col-6">
                    <label class="form-label text-capitalize"><span class="span-gym-hero fw-bold fs-5">phone
                            Number *</span></label>
                    <input type="number" id="phone" required placeholder="+234 xxx xxx xxxx"
                        class="form-control input-gym">
                </div>
                <div class="col-6" hidden>
                    <label class="form-label text-capitalize"><span class="span-gym-hero fw-bold fs-5">plan
                            *</span></label>
                    <select class="form-select select-gym" required id="plan">
                        <option selected hidden>membership plan</option>
                        <option value="Starters" class="text-capitalize">Starters</option>
                        <option value="Pro" class="text-capitalize">pro</option>
                        <option value="Elite" class="text-capitalize">Elite</option>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label text-capitalize"><span class="span-gym-hero fw-bold fs-5"><i
                                class="fa-solid fa-users"></i> Number of Players *</span></label>
                    <select class="form-select select-gym" required name="" id="players">
                        <option selected hidden value="">Membership plan</option>
                        <option value="Starters" class="text-capitalize">Starters</option>
                        <option value="Pro" class="text-capitalize">pro</option>
                        <option value="Elite" class="text-capitalize">Elite</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label text-capitalize pt-4"><span class="span-gym-hero fw-bold fs-5">message</span>
                    </label>
                    <textarea name="" rows="4" id="message" class="form-control input-gym"
                        placeholder="Share any specific requirements..."></textarea>
                </div>
                <button class="buttonnn-gym text-white btn mt-3 py-2" type="submit">
                    Send to WhatsApp <i class="fa-regular fa-paper-plane"></i>
                </button>


            </div>
        </form>
        <!-- book end -->

        <script>
            document.getElementById("whatsappForm-gym").addEventListener("submit", function(e) {
                e.preventDefault();

                const title = document.getElementById("title").value.trim();
                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const phone = document.getElementById("phone").value.trim();
                const plan = document.getElementById("plan").value;
                const players = document.getElementById("players").value;
                const message = document.getElementById("message").value.trim();

                if (
                    !title ||
                    !name ||
                    !email ||
                    !phone ||
                    !plan ||
                    !players
                );

                const whatsappNumber = "2349065404205";

                const whatsappMessage = `Hello, I would like to make an game enquiry.

*Title*: ${title}
*Name*: ${name}
*Email*: ${email}
*Phone*: ${phone}
*Plan*: ${players}

*Additional Details*:
${message || "None"}`;

                const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

                window.open(whatsappURL, "_blank");
            });
        </script>
    </section>
@endsection
