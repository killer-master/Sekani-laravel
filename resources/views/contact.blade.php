@extends('layouts.app')
@section('content')
    <section>
        <!-- contact us start -->
        <section style="background-image: linear-gradient(black, red); color: white; padding-top: 3rem">
            <div class="container">
                <div class="text-center">
                    <div class="container text-center py-5 fw-semibold" style="font-size: 3rem; font-family: sans-serif;">
                        GET IN TOUCH
                    </div>
                    <div class="row text-capitalize fw-semubold " style="font-size: 1rem; font-family: sans-serif">
                        <div class="col-12 col-lg-4  pb-5">
                            <i class="fa-solid fa-location-dot" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                ADDRESS
                            </div><br>
                            <p class="fw-bold">Sekani Empire</p>
                            <a class="touch" target="_blank" style="color: white;"
                                href="https://www.google.com/maps/place/Sekani+Mall/@5.3751462,6.998362,774m/data=!3m2!1e3!4b1!4m6!3m5!1s0x10425df2c645a82d:0x284a1999ec8e450!8m2!3d5.3751462!4d7.0009369!16s%2Fg%2F11k56qdtyh!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D">
                                Dominion City Road, Opp Macjay Lodge, Eziobodo, FUTO Road, Owerri, Eziobodo 460103, Imo
                            </a>
                        </div>

                        <div class="col-12 col-lg-4">
                            <i class="fa-solid fa-phone pt-lg-3" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                PHONE
                            </div><br>
                            <p class="fw-bold">
                                Sekani Empire
                            </p>
                            <p>
                                <a href="tel:09040570782" class="touch" style="color: white;">+234 904 057 0782</a>

                            </p>
                        </div>

                        <div class="col-12 col-lg-4">
                            <i class="fa-solid fa-message" style="font-size: 3rem;"></i> <br><br>
                            <div class="fw-bold" style="font-size: 2rem;">
                                EMAIL
                            </div> <br>
                            <p class="fw-bold">
                                Sekani Empire
                            </p>
                            <p class="text-lowercase">
                                leslieamadi9@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us start -->

        <!-- message us start -->
        <section class="container-fluid">
            <p class="text-uppercase fw-bold px-5 pt-5 pb-3" style="font-size: 3rem;">
                message us
            </p>
            <div class="row px-5">
                <div class="col-12 col-lg-6">
                    if you wish to be considered for employment at Sekani, please do not message here - instead messages
                    our instagram page and our Human Resources department will contact you after their review of your
                    submitted information.
                    <img src="assets/images/photo_2025-11-29_19-13-15.jpg" class="pt-5 " alt="">
                    <!-- <div class="container pt-5 fw-semibold" style="font-size: 5rem; font-family: sans-serif;">
                        <span style="color: blue;">se</span><span style="color: red;">ka</span><span style="color: blue;">ni</span>
                    </div> -->
                </div>

                <div class="col-12 col-lg-6 ">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="" id=""
                                        placeholder="First Name" />
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="" id=""
                                        placeholder="Last Name" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="" id=""
                                aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Comment</label>
                            <textarea class="form-control" name="" id="" rows="8"></textarea>
                        </div>
                        <button type="submit" class="btn button" style="border: black solid 2px;">
                            Submit
                        </button>

                    </form>

                </div>
            </div>
        </section>
        <!-- message us end -->

        <!-- map start -->
        <section class="pt-5">
            <div class="text-center pt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.2950004415097!2d6.998361974157239!3d5.3751461946037535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425df2c645a82d%3A0x284a1999ec8e450!2sSekani%20Mall!5e1!3m2!1sen!2sng!4v1765039766028!5m2!1sen!2sng"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- map end -->

    </section>
@endsection
