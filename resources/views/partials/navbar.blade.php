<section>

    <!-- navbar start -->
    <section>
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand {{ request()->is('/') ? 'activee' : '' }}" href="{{ route('home.page') }}"><img
                        src="{{ asset('assets/images/photo_2025-11-29_19-13-15.jpg') }}" width="75" alt="logo"></a>

                <button class="navbar-toggler d-lg-none background_orange" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav text-center mx-auto mt-lg-0 "
                        style="border: solid 1px; border-radius: 100vmax;
                ">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0 d-flex flex-wrap text-center">
                            <li class="nav-item">
                                <a class="white nav-link {{ request()->is('/') ? 'activee' : '' }}"
                                    href="{{ route('home.page') }}" aria-current="page">Home
                                    <span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="white nav-link nav-hover {{ request()->is('game') ? 'activee' : '' }}"
                                    href="{{ route('game.page') }}">Games</a>
                            </li>
                            <li class="nav-item">
                                <a class="white {{ request()->is('eatry') ? 'activee' : '' }} nav-link nav-hover"
                                    href="{{ route('eatry.page') }}">Menu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="white nav-link dropdown-toggle" href="#" id="dropdownId"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId"
                                    style="background-color: #212529;">
                                    <a class="dropdown-item text-center wheat {{ request()->is('fitness') ? 'activee' : '' }}"
                                        href="{{ route('fitness.page') }}">Fitness Center</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('vip') ? 'activee' : '' }}"
                                        href="{{ route('vip.page') }}">VIP Loudge</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('saloon') ? 'activee' : '' }}"
                                        href="{{ route('saloon.page') }}">Saloon</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('pool') ? 'activee' : '' }}"
                                        href="{{ route('pool.page') }}">Pool Bar</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('planning') ? 'activee' : '' }}"
                                        href="{{ route('planning.page') }}">Catering and event
                                        planning</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('rooftop') ? 'activee' : '' }}"
                                        href="{{ route('rooftop.page') }}">Rooftop Lounge</a>
                                    <hr class="wheat">
                                    <a class="dropdown-item text-center wheat {{ request()->is('pastry') ? 'activee' : '' }}"
                                        href="{{ route('pastry.page') }}">Pastry And Bread</a>
                                    <hr class="wheat">
                                </div>
                            </li>
                        </ul>

                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0 d-flex flex-wrap text-center">

                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Cart') }}</a> --}}
                            <a href="#" class="nav-link position-relative me-3">
                                <i class="fa-solid fa-shopping-cart text-white"></i>
                                @auth
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle text-bg-danger d-grid border border-light rounded-circle"
                                        style="width: 20px; height: 20px; place-content: center;">
                                        <small class="small" style="font-size: 10px;">
                                            {{ Auth::user()->count() }}
                                        </small>
                                    </span>
                                @endauth
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">

                                    @if (Auth::user()->role == 'admin')
                                        <a href="#" class="dropdown-item text-white"> Categories </a>
                                        <a href="#" class="dropdown-item wheat"> Gallery </a>
                                        <a href="#" class="dropdown-item"> Products </a>
                                        <a href="#" class="dropdown-item"> Orders </a>
                                    @else
                                        <a href="#" class="dropdown-item">My Cart </a>
                                        <a href="#" class="dropdown-item">My Orders </a>
                                        <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                                    @endif


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <div class="text-center text-sm-center">
                            <a href="{{ route('contact.page') }}">
                                <div button type="button"
                                    class="button_eatry btn btn white {{ request()->is('contact') ? 'activee' : '' }}"
                                    style=" border: solid 1px; border-radius: 100vmax;">
                                    contact us
                                </div>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar end -->

</section>
