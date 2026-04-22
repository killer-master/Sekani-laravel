<!-- Footer starts -->
<section class="">
    <footer class=" text-lg-start text-body-light text-black" style="background-color: black">
        <!-- Section: Social media -->

        <section class="d-flex justify-content-between p-4" style="background-color: black">
            <!-- Left -->
            <div class="me-5 text-light">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="#" class="footer-logo me-4" target="_blank" style="text-decoration: none;">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="footer-logo me-4" target="_blank" style="text-decoration: none;">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="#" class="footer-logo me-4" target="_blank" style="text-decoration: none;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                {{-- <a href="google.com" class="footer-logo me-4" target="_blank" style="text-decoration: none;">
                        <i class="fab fa-whatsapp"></i>
                    </a> --}}
                <a href="https://www.instagram.com/leslieamadii" target="_blank" blank class="footer-logo me-4"
                    style="text-decoration: none;">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </section>
        <!-- Right -->

        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <a href="{{ route('home.page') }}">
                            <img src="{{ asset('assets/images/sekani-logo.jpg') }}"
                                style="width: 12rem; border-radius: 1rem;"> <br>
                        </a>
                        <!-- <h1 class="text-uppercase fw-bold"> <span style="color: blue;">se</span><span
                                    style="color: red;">ka</span><span style="color: blue;">ni</span></h1> -->
                        
                        <p class="text-white pt-5">
                            A place where everything meets.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="color: var(--sekani-color);">services</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: black; height: 2px" />
                        <p>
                            <a href="{{ route('eatry.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">Eatery</a>
                        </p>
                        <p>
                            <a href="{{ route('vip.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">vip lounge</a>
                        </p>
                        <p>
                            <a href="{{ route('saloon.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">unisex
                                saloon</a>
                        </p>
                        <p>
                            <a href="{{ route('pool.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">pool bar</a>
                        </p>
                        <p>
                            <a href="{{ route('planning.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">Outdoor catering
                                and event planning</a>
                        </p>
                        <p>
                            <a href="{{ route('game.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">games arena</a>
                        </p>
                        <p>
                            <a href="{{ route('fitness.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">fitness
                                center</a>
                        </p>
                        <p>
                            <a href="{{ route('rooftop.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">rooftop
                                lounge</a>
                        </p>
                        <p>
                            <a href="{{ route('pastry.page') }}"
                                class="text-decoration-none text-capitalize footer-hover">pastry and
                                bread</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="color: var(--sekani-color);">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: black; height: 2px" />
                        <p>
                            <a href="{{ route('home.page') }}" class="footer-hover text-decoration-none text-capitalize">Home</a>
                        </p>
                        <p>
                            <a href="{{ route('profile.edit') }}" class="footer-hover text-decoration-none text-capitalize">profile</a>
                        </p>
                        <p>
                            <a href="{{ route('contact.page') }}" class="footer-hover text-decoration-none text-capitalize">Contact
                                us</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</section>
<!-- footer ends -->
