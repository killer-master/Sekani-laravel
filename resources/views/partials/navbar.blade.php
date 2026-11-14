<style>
    .sekani-nav-preview {
        --nav-orange: var(--sekani-color, #ff5a0a);
        position: relative;
        z-index: 1030;
        border-bottom: 1px solid rgba(255, 255, 255, .09);
        background: rgba(17, 17, 17, .97);
        box-shadow: 0 12px 32px rgba(0, 0, 0, .22);
    }

    .sekani-nav-preview .nav-shell {
        min-height: 82px;
    }

    .sekani-nav-preview .brand-mark {
        display: inline-flex;
        align-items: center;
        gap: .8rem;
        min-width: max-content;
        color: #fff;
        text-decoration: none;
    }

    .sekani-nav-preview .brand-mark img {
        width: 58px;
        height: 48px;
        border: 1px solid rgba(255, 255, 255, .15);
        border-radius: .65rem;
        object-fit: cover;
    }

    .sekani-nav-preview .brand-copy {
        display: grid;
        gap: .1rem;
    }

    .sekani-nav-preview .brand-name {
        color: #fff;
        font-family: "Playfair Display", Georgia, serif;
        font-size: 1.15rem;
        letter-spacing: .04em;
        line-height: 1;
    }

    .sekani-nav-preview .brand-caption {
        color: #a7a29b;
        font-size: .58rem;
        letter-spacing: .19em;
        text-transform: uppercase;
    }

    .sekani-nav-preview .navbar-toggler {
        border: 1px solid rgba(255, 255, 255, .2);
        border-radius: .65rem;
        padding: .55rem .7rem;
    }

    .sekani-nav-preview .navbar-toggler:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 90, 10, .25);
    }

    .sekani-nav-preview .navbar-nav {
        align-items: center;
        gap: .15rem;
    }

    .sekani-nav-preview .nav-link {
        position: relative;
        padding: .7rem .85rem !important;
        color: #d3d0cb;
        font-size: .87rem;
        font-weight: 500;
        transition: color .18s ease;
    }

    .sekani-nav-preview .nav-link:hover,
    .sekani-nav-preview .nav-link:focus,
    .sekani-nav-preview .nav-link.is-active {
        color: #fff;
    }

    .sekani-nav-preview .nav-link.is-active::after {
        position: absolute;
        right: .85rem;
        bottom: .28rem;
        left: .85rem;
        height: 2px;
        border-radius: 2px;
        background: var(--nav-orange);
        content: "";
    }

    .sekani-nav-preview .dropdown-menu {
        min-width: 13rem;
        margin-top: .5rem;
        padding: .5rem;
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: .85rem;
        background: #1d1c1a;
        box-shadow: 0 18px 40px rgba(0, 0, 0, .35);
    }

    .sekani-nav-preview .dropdown-item {
        border-radius: .5rem;
        padding: .65rem .75rem;
        color: #d3d0cb;
        font-size: .87rem;
    }

    .sekani-nav-preview .dropdown-item:hover,
    .sekani-nav-preview .dropdown-item:focus,
    .sekani-nav-preview .dropdown-item.is-active {
        background: rgba(255, 90, 10, .13);
        color: #fff;
    }

    .sekani-nav-preview .dropdown-divider {
        border-color: rgba(255, 255, 255, .1);
    }

    .sekani-nav-preview .nav-actions {
        gap: .6rem;
    }

    .sekani-nav-preview .cart-link {
        display: inline-grid;
        width: 2.65rem;
        height: 2.65rem;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, .13);
        border-radius: 50%;
        color: #fff;
        font-size: 1rem;
        text-decoration: none;
        transition: border-color .18s ease, background-color .18s ease;
    }

    .sekani-nav-preview .cart-link:hover {
        border-color: var(--nav-orange);
        background: rgba(255, 90, 10, .12);
    }

    .sekani-nav-preview .cart-count {
        position: absolute;
        top: -.35rem;
        right: -.35rem;
        display: grid;
        width: 1.15rem;
        height: 1.15rem;
        place-items: center;
        border: 2px solid #111;
        border-radius: 50%;
        background: var(--nav-orange);
        color: white;
        font-size: .62rem;
        font-weight: 700;
        line-height: 1;
    }

    .sekani-nav-preview .contact-link {
        display: inline-flex;
        min-height: 2.65rem;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--nav-orange);
        border-radius: 999px;
        padding: .6rem 1rem;
        color: #fff;
        font-size: .84rem;
        font-weight: 650;
        text-decoration: none;
        transition: background-color .18s ease, color .18s ease;
    }

    .sekani-nav-preview .contact-link:hover {
        background: var(--nav-orange);
        color: #fff;
    }

    .sekani-nav-preview .user-toggle {
        max-width: 11rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    @media (max-width: 991.98px) {
        .sekani-nav-preview .nav-shell {
            min-height: 72px;
        }

        .sekani-nav-preview .navbar-collapse {
            max-height: none;
            overflow: visible;
            padding: .75rem 0 1rem;
        }

        .sekani-nav-preview .navbar-nav {
            align-items: stretch;
            gap: 0;
        }

        .sekani-nav-preview .nav-link {
            padding: .75rem .85rem !important;
        }

        .sekani-nav-preview .nav-link.is-active::after {
            right: auto;
            bottom: .35rem;
            left: .85rem;
            width: 1.5rem;
        }

        .sekani-nav-preview .dropdown-menu {
            position: static !important;
            float: none;
            width: 100%;
            margin: .15rem 0 .6rem;
            border: 0;
            background: rgba(255, 255, 255, .045);
            box-shadow: none;
        }

        .sekani-nav-preview .dropdown-item {
            padding-left: 1rem;
        }

        .sekani-nav-preview .nav-actions {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            padding: .65rem .85rem .25rem;
        }

        .sekani-nav-preview .nav-actions .dropdown-menu {
            position: static !important;
        }
    }

    @media (max-width: 359.98px) {
        .sekani-nav-preview .brand-mark {
            gap: .55rem;
        }

        .sekani-nav-preview .brand-mark img {
            width: 48px;
            height: 42px;
        }

        .sekani-nav-preview .brand-name {
            font-size: 1rem;
        }

        .sekani-nav-preview .brand-caption {
            font-size: .52rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .sekani-nav-preview *,
        .sekani-nav-preview *::before,
        .sekani-nav-preview *::after {
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark sekani-nav-preview">
    <div class="container-fluid nav-shell px-3 px-xl-4">
        <a class="d-flex text-decoration-none" href="{{ route('home.page') }}" aria-label="Sekani home">
            <img src="{{ asset('assets/images/sekani-logo.jpg') }}" width="100" style="border-radius: 0.5rem;">
            <span class="brand-copy align-items-center">
                <span class="brand-name ps-2">SEKANI</span>
                {{-- <span class="brand-caption">Leisure & dining</span> --}}
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#sekaniPreviewNavigation" aria-controls="sekaniPreviewNavigation"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="sekaniPreviewNavigation">
            <ul class="navbar-nav mx-auto my-3 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'is-active' : '' }}"
                        href="{{ route('home.page') }}" @if (request()->is('/')) aria-current="page" @endif>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('game') ? 'is-active' : '' }}"
                        href="{{ route('game.page') }}">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('eatry') || request()->is('eateryView/*') ? 'is-active' : '' }}"
                        href="{{ route('eatry.page') }}">Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('fitness', 'vip', 'saloon', 'pool', 'planning', 'rooftop', 'pastry') ? 'is-active' : '' }}"
                        href="#" id="sekaniPreviewServices" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="sekaniPreviewServices">
                        <li><a class="dropdown-item {{ request()->is('fitness') ? 'is-active' : '' }}" href="{{ route('fitness.page') }}">Fitness Center</a></li>
                        <li><a class="dropdown-item {{ request()->is('vip') ? 'is-active' : '' }}" href="{{ route('vip.page') }}">VIP Lounge</a></li>
                        <li><a class="dropdown-item {{ request()->is('saloon') ? 'is-active' : '' }}" href="{{ route('saloon.page') }}">Saloon</a></li>
                        <li><a class="dropdown-item {{ request()->is('pool') ? 'is-active' : '' }}" href="{{ route('pool.page') }}">Pool Bar</a></li>
                        <li><a class="dropdown-item {{ request()->is('planning') ? 'is-active' : '' }}" href="{{ route('planning.page') }}">Catering & event planning</a></li>
                        <li><a class="dropdown-item {{ request()->is('rooftop') ? 'is-active' : '' }}" href="{{ route('rooftop.page') }}">Rooftop Lounge</a></li>
                        <li><a class="dropdown-item {{ request()->is('pastry') ? 'is-active' : '' }}" href="{{ route('pastry.page') }}">Pastry & Bread</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav nav-actions">
                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="cart-link position-relative"
                        aria-label="Shopping cart">
                        <i class="fa-solid fa-bag-shopping" aria-hidden="true"></i>
                        @auth
                            <span class="cart-count">{{ Auth::user()->cartItems->count() }}</span>
                        @endauth
                    </a>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-toggle" href="#" id="sekaniPreviewAccount"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user me-1" aria-hidden="true"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="sekaniPreviewAccount">
                            @if (Auth::user()->role === 'admin')
                                <li><a class="dropdown-item" href="{{ route('eatery.index') }}">Eatery</a></li>
                                <li><a class="dropdown-item" href="{{ route('eaterycategory.index') }}">Eatery Categories</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.index') }}">User List</a></li>
                                <li><a class="dropdown-item" href="{{ route('AdminHistory.index') }}">Order History</a></li>
                                <li><hr class="dropdown-divider"></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">{{ __('Logout') }}</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

                <li class="nav-item">
                    <a href="{{ route('contact.page') }}"
                        class="contact-link {{ request()->is('contact') ? 'active' : '' }}">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
