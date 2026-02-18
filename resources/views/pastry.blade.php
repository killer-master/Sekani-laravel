@extends('layouts.app')
@section('content')
    <section>
        <!-- hero start -->
        <section class="bake_hero">
            <div class="color-bake">
                <div class="container text-start" style="padding-top: 9rem;">
                    <div class="h4 fs-6 text-uppercase size-bake1 blur">
                        Artisan Bakery Since 2023
                    </div><br />
                    <div class="text-capitalize fw-bold size-bake2">
                        Freshly Baked <span class="span-bake-hero">Happiness,</span> Every Day
                    </div><br />
                    <div class="p size-bake3">
                        Discover the art of artisan baking at Sekani Pastry & Bread. From golden croissants to decadent
                        cakes, every bite tells a story of passion and perfection.
                    </div><br>
                    <a href="#whatsappForm-bake" class="text-decoration-none">
                        <div class="h4 fs-6 text-capitalize size-bake5 blur">
                            Order Now <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                    <a href="#bake-servics" class="text-decoration-none ps-3">
                        <div class="h4 fs-6 text-capitalize size-bake7 blur">
                            View Menu
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- hero end -->
        <section class="" style="padding-top: 130dvh; background-color: #5c3a23;">
            <div class="container">
                <div class="row g-3 py-5 text-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa-solid fa-star fs-4 pe-5"
                                    style="padding: 1rem; border-radius: 50%; border:  1px; background-color: #f2ede34c; color: #c43501;"></i>
                            </div>
                            <div class="col-9 text-start">
                                <div class="fs-3 fw-bold text-white">
                                    Premium Ingredients
                                </div>
                                <div class="fs-6" style="opacity: 0.7;">
                                    We source only the finest ingredients to ensure every bite is exceptional.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa-solid fa-clock fs-4 pe-5"
                                    style="padding: 1rem; border-radius: 50%; border:  1px; background-color: #f2ede34c; color: #c43501;"></i>
                            </div>
                            <div class="col-9 text-start">
                                <div class="fs-3 fw-bold text-white">
                                    Baked Fresh Daily
                                </div>
                                <div class="fs-6" style="opacity: 0.7;">
                                    Our pastries and bread are prepared fresh each morning, never frozen.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa-solid fa-heart fs-4 pe-5"
                                    style="padding: 1rem; border-radius: 50%; border:  1px; background-color: #f2ede34c; color: #c43501;"></i>
                            </div>
                            <div class="col-9 text-start">
                                <div class="fs-3 fw-bold text-white">
                                    Made with Love
                                </div>
                                <div class="fs-6" style="opacity: 0.7;">
                                    Every creation is crafted with passion by our skilled artisan bakers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Specialties start -->
        <section class="container-fluid">

        </section>
        <!-- Our Specialties end-->

        <!-- What We Offer start -->
        <section class="container-fluid" id="bake-servics">
            <div class="py-5">
                <div class="text-capitalize fw-bold size-bake2 text-center pt-5" style="font-size: 40px;">
                    Our Specialties
                </div><br />
                <div class="p size-bake3 text-center" style="font-style: italic;">
                    From classic favorites to creative delights, explore our handcrafted collection
                </div><br>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 scale-bake" style="padding-bottom: 21rem;">
                        <div class="card text-white">
                            <div class="bake_hero2" style="background-image: url('{{ asset('assets/images/roof2.jpg') }}');">
                                <div class="color-bake2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1 fs-4">
                                            Decadent layer cakes for every celebration
                                        </h4>
                                        <p class="card-text size-roof2 fs-1">
                                            Cakes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pt-5 pt-lg-0 scale-bake" style="padding-bottom: 21rem;">
                        <div class="card text-white">
                            <div class="bake_hero2" style="background-image: url('{{ asset('assets/images/roof3.jpg') }}');">
                                <div class="color-bake2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1 fs-4">
                                            Colorful, creamy, and perfectly portioned
                                        </h4>
                                        <p class="card-text size-roof2 fs-1">
                                            Cupcakes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pt-5 pt-lg-0 scale-bake" style="padding-bottom: 21rem;">
                        <div class="card text-white">
                            <div class="bake_hero2" style="background-image: url('{{ asset('assets/images/roof3.jpg') }}');">
                                <div class="color-bake2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1 fs-4">
                                            Colorful, creamy, and perfectly portioned
                                        </h4>
                                        <p class="card-text size-roof2 fs-1">
                                            Cupcakes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pt-5 pt-lg-0 scale-bake" style="padding-bottom: 21rem;">
                        <div class="card text-white">
                            <div class="bake_hero2" style="background-image: url('{{ asset('assets/images/roof3.jpg') }}');">
                                <div class="color-bake2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1 fs-4">
                                            Colorful, creamy, and perfectly portioned
                                        </h4>
                                        <p class="card-text size-roof2 fs-1">
                                            Cupcakes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pt-5 pt-lg-0 scale-bake" style="padding-bottom: 21rem;">
                        <div class="card text-white">
                            <div class="bake_hero2" style="background-image: url('{{ asset('assets/images/roof3.jpg') }}');">
                                <div class="color-bake2">
                                    <div class="card-img-overlay text-start">
                                        <h4 class="card-title size-roof1 fs-4">
                                            Colorful, creamy, and perfectly portioned
                                        </h4>
                                        <p class="card-text size-roof2 fs-1">
                                            Cupcakes
                                        </p>
                                    </div>
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
        <div class="">
            <div class="container pt-5">
                <div class="size-bake3 text-capitalize">
                    Send us a Message
                </div>
            </div>
            <form id="whatsappForm-bake" class="text-start py-5 container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <label class="form-label text-capitalize"><span
                                    class="span-bake-hero fw-bold fs-3">title</span></label>
                        </div>
                        <select class="form-select text-capitalize text-center select-bake" required name=""
                            id="title">
                            <option selected value="Pastry And Bread">Pastry And Bread</option>
                        </select> <br>
                    </div>
                    <div class="col-12">
                        <label class="form-label"><span class="span-bake-hero fw-bold fs-5">Full Name
                                *</span></label>
                        <input type="text" id="name" required placeholder="Your full name"
                            class="form-control input-bake">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-bake-hero fw-bold fs-5">Email
                                *</span></label>
                        <input type="email" id="email" required placeholder="your@email.com"
                            class="form-control input-bake">
                    </div>
                    <div class="col-6">
                        <label class="form-label text-capitalize"><span class="span-bake-hero fw-bold fs-5">phone
                                Number *</span></label>
                        <input type="number" id="phone" required placeholder="+234 xxx xxx xxxx"
                            class="form-control input-bake">
                    </div>
                    <div class="col-12">
                        <label class="form-label text-capitalize pt-4"><span class="span-bake-hero fw-bold fs-5">Special
                                Requests</span>
                        </label>
                        <textarea name="" rows="4" id="message" class="form-control input-bake"
                            placeholder="Share any specific requirements..."></textarea>
                    </div>
                    <button class="buttonnn-bake text-white btn mt-3 py-2" type="submit">
                        Send to WhatsApp <i class="fa-regular fa-paper-plane"></i>
                    </button>


                </div>
            </form>
        </div>
        <!-- book end -->

        <script>
            document.getElementById("whatsappForm-bake").addEventListener("submit", function(e) {
                e.preventDefault();

                const title = document.getElementById("title").value.trim();
                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const phone = document.getElementById("phone").value.trim();
                const message = document.getElementById("message").value.trim();

                if (
                    !title ||
                    !name ||
                    !email ||
                    !phone
                );

                const whatsappNumber = "2349065404205";

                const whatsappMessage = `Hello, I would like to make an game enquiry.

*Title*: ${title}
*Name*: ${name}
*Email*: ${email}
*Phone*: ${phone}

*Additional Details*:
${message || "None"}`;

                const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

                window.open(whatsappURL, "_blank");
            });
        </script>
    </section>
@endsection
