@extends('layouts.app')

@section('content')
    @php
        $cartItems = Auth::user()->cartItems;
        $cartTotal = $cartItems->sum('amount');
        $cartQuantity = $cartItems->sum('quantity');
    @endphp

    <style>
        .cart-preview {
            --cart-ink: #20231f;
            --cart-muted: #777b74;
            --cart-line: #e9e9e3;
            --cart-paper: #f7f7f2;
            --cart-accent: #ed5a24;
            min-height: calc(100vh - 70px);
            padding: clamp(2rem, 5vw, 4.5rem) 0;
            background:
                radial-gradient(ellipse at 5% 0%, rgba(237, 90, 36, .09), transparent 34rem),
                var(--cart-paper);
            color: var(--cart-ink);
        }

        .cart-preview a {
            color: inherit;
        }

        .cart-preview-shell {
            width: min(1120px, calc(100% - 2rem));
            margin-inline: auto;
        }

        .cart-preview-topbar,
        .cart-preview-heading,
        .cart-preview-item,
        .cart-preview-item-actions,
        .cart-preview-total-line {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .cart-preview-topbar {
            margin-bottom: clamp(2rem, 5vw, 4rem);
        }

        .cart-preview-brand {
            display: inline-flex;
            align-items: center;
            gap: .7rem;
            color: var(--cart-ink);
            font-size: .9rem;
            font-weight: 800;
            letter-spacing: .08em;
            text-decoration: none;
            text-transform: uppercase;
        }

        .cart-preview-brand-mark {
            display: grid;
            width: 2.4rem;
            height: 2.4rem;
            place-items: center;
            border-radius: .85rem;
            background: var(--cart-accent);
            color: #fff;
        }

        .cart-preview-history {
            color: var(--cart-muted);
            font-size: .9rem;
            font-weight: 650;
            text-decoration: none;
        }

        .cart-preview-history:hover,
        .cart-preview-back:hover {
            color: var(--cart-accent);
        }

        .cart-preview-heading {
            align-items: flex-end;
            margin-bottom: 1.5rem;
        }

        .cart-preview-eyebrow {
            margin-bottom: .6rem;
            color: var(--cart-accent);
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .cart-preview-title {
            margin: 0;
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 800;
            letter-spacing: -.06em;
            line-height: 1;
        }

        .cart-preview-count {
            display: inline-flex;
            min-width: 2rem;
            height: 2rem;
            align-items: center;
            justify-content: center;
            margin-left: .4rem;
            padding-inline: .5rem;
            border-radius: 999px;
            background: #fce8df;
            color: #bd4317;
            font-size: .85rem;
            letter-spacing: 0;
            vertical-align: middle;
        }

        .cart-preview-back {
            color: var(--cart-muted);
            font-size: .9rem;
            font-weight: 700;
            text-decoration: none;
        }

        .cart-preview-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(280px, 360px);
            align-items: start;
            gap: clamp(1.25rem, 3vw, 2rem);
        }

        .cart-preview-list {
            display: grid;
            gap: .9rem;
        }

        .cart-preview-item {
            min-width: 0;
            padding: clamp(.85rem, 2vw, 1.25rem);
            border: 1px solid var(--cart-line);
            border-radius: 1.25rem;
            background: #fff;
            box-shadow: 0 8px 26px rgba(32, 35, 31, .035);
        }

        .cart-preview-product {
            display: flex;
            min-width: 0;
            align-items: center;
            gap: 1rem;
        }

        .cart-preview-image {
            width: clamp(76px, 12vw, 112px);
            height: clamp(76px, 12vw, 112px);
            flex: 0 0 auto;
            border-radius: .95rem;
            background: #f1f0eb;
            object-fit: cover;
        }

        .cart-preview-product-info {
            min-width: 0;
        }

        .cart-preview-product-info h2 {
            margin: 0 0 .35rem;
            font-size: clamp(1rem, 2vw, 1.15rem);
            font-weight: 750;
            overflow-wrap: anywhere;
        }

        .cart-preview-category,
        .cart-preview-unit-price {
            margin: 0;
            color: var(--cart-muted);
            font-size: .88rem;
        }

        .cart-preview-category {
            margin-bottom: .35rem;
        }

        .cart-preview-item-actions {
            flex: 0 0 auto;
        }

        .cart-preview-quantity {
            display: inline-flex;
            align-items: center;
            gap: .35rem;
            padding: .3rem;
            border: 1px solid var(--cart-line);
            border-radius: 999px;
            background: #fbfbf8;
        }

        .cart-preview-quantity button {
            display: grid;
            width: 2rem;
            height: 2rem;
            place-items: center;
            border: 0;
            border-radius: 50%;
            background: #fff0e9;
            color: var(--cart-accent);
            transition: background-color .18s ease, color .18s ease;
        }

        .cart-preview-quantity button:hover:not(:disabled) {
            background: var(--cart-accent);
            color: #fff;
        }

        .cart-preview-quantity button:disabled {
            cursor: not-allowed;
            opacity: .4;
        }

        .cart-preview-quantity-value {
            min-width: 1.5rem;
            font-weight: 750;
            text-align: center;
        }

        .cart-preview-price {
            min-width: 7rem;
            font-size: .98rem;
            font-weight: 800;
            text-align: right;
            white-space: nowrap;
        }

        .cart-preview-remove {
            display: grid;
            width: 2.5rem;
            height: 2.5rem;
            place-items: center;
            border: 1px solid transparent;
            border-radius: .8rem;
            background: transparent;
            color: #a44736;
        }

        .cart-preview-remove:hover {
            border-color: #f5d6ce;
            background: #fff5f2;
        }

        .cart-preview-error {
            min-height: 1.2rem;
            margin: .35rem 0 0;
            color: #b42318;
            font-size: .8rem;
        }

        .cart-preview-summary {
            position: sticky;
            top: 1.5rem;
            padding: clamp(1.25rem, 3vw, 1.75rem);
            border: 1px solid #342a26;
            border-radius: 1.4rem;
            background: #25211f;
            box-shadow: 0 20px 50px rgba(32, 35, 31, .14);
            color: #fff;
        }

        .cart-preview-summary h2 {
            margin: 0 0 .4rem;
            font-size: 1.35rem;
            font-weight: 800;
        }

        .cart-preview-summary-note {
            margin: 0 0 1.5rem;
            color: #c4bbb6;
            font-size: .9rem;
        }

        .cart-preview-total-line {
            color: #d7ceca;
            font-size: .95rem;
        }

        .cart-preview-total-line strong {
            color: #fff;
        }

        .cart-preview-grand-total {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, .16);
            color: #fff;
            font-size: 1.05rem;
            font-weight: 750;
        }

        .cart-preview-grand-total strong {
            color: #ff9a70;
            font-size: 1.25rem;
        }

        .cart-preview-address-label {
            display: block;
            margin: 1.5rem 0 .55rem;
            color: #f3ece8;
            font-size: .88rem;
            font-weight: 700;
        }

        .cart-preview-address {
            min-height: 100px;
            resize: vertical;
            border: 1px solid #514640 !important;
            border-radius: .85rem !important;
            background: #332d29 !important;
            color: #fff !important;
        }

        .cart-preview-address::placeholder {
            color: #afa39d;
        }

        .cart-preview-checkout {
            display: flex;
            width: 100%;
            min-height: 3.25rem;
            align-items: center;
            justify-content: center;
            gap: .6rem;
            margin-top: 1rem;
            border: 0;
            border-radius: .9rem;
            background: var(--cart-accent);
            color: #fff;
            font-weight: 800;
            transition: background-color .18s ease, transform .18s ease;
        }

        .cart-preview-checkout:hover:not(:disabled) {
            transform: translateY(-1px);
            background: #d94d1d;
        }

        .cart-preview-checkout:disabled {
            cursor: not-allowed;
            opacity: .45;
        }

        .cart-preview-empty {
            padding: clamp(2rem, 6vw, 4rem) 1.25rem;
            border: 1px dashed #d9d8d0;
            border-radius: 1.4rem;
            background: rgba(255, 255, 255, .65);
            text-align: center;
        }

        .cart-preview-empty-icon {
            display: grid;
            width: 4rem;
            height: 4rem;
            place-items: center;
            margin: 0 auto 1rem;
            border-radius: 1.35rem;
            background: #fff0e9;
            color: var(--cart-accent);
            font-size: 1.5rem;
        }

        .cart-preview-empty h2 {
            margin-bottom: .5rem;
            font-size: 1.4rem;
            font-weight: 800;
        }

        .cart-preview-empty p {
            margin-bottom: 1.25rem;
            color: var(--cart-muted);
        }

        .cart-preview-menu-link {
            display: inline-flex;
            min-height: 2.8rem;
            align-items: center;
            justify-content: center;
            padding: .7rem 1.1rem;
            border-radius: 999px;
            background: var(--cart-accent);
            color: #fff !important;
            font-weight: 750;
            text-decoration: none;
        }

        @media (max-width: 800px) {
            .cart-preview-layout {
                grid-template-columns: 1fr;
            }

            .cart-preview-summary {
                position: static;
            }
        }

        @media (max-width: 540px) {
            .cart-preview-shell {
                width: min(100% - 1.25rem, 1120px);
            }

            .cart-preview-topbar {
                margin-bottom: 2.5rem;
            }

            .cart-preview-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: .85rem;
            }

            .cart-preview-item {
                align-items: flex-start;
                flex-direction: column;
                gap: .8rem;
            }

            .cart-preview-product {
                width: 100%;
            }

            .cart-preview-item-actions {
                width: 100%;
                justify-content: space-between;
                padding-top: .75rem;
                border-top: 1px solid var(--cart-line);
            }

            .cart-preview-price {
                min-width: 0;
                margin-left: auto;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .cart-preview *,
            .cart-preview *::before,
            .cart-preview *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>

    <main class="cart-preview">
        <div class="cart-preview-shell">
            <header class="cart-preview-topbar">
                <a class="cart-preview-brand" href="{{ route('home.page') }}">
                    <span class="cart-preview-brand-mark"><i class="fa-solid fa-utensils" aria-hidden="true"></i></span>
                    Sekani
                </a>
                <a class="cart-preview-history" href="{{ route('cart.history') }}">
                    Order history <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                </a>
            </header>

            <div class="cart-preview-heading">
                <div>
                    <p class="cart-preview-eyebrow">Your selection</p>
                    <h1 class="cart-preview-title">
                        Shopping cart <span class="cart-preview-count" id="cart-item-count">{{ $cartQuantity }}</span>
                    </h1>
                </div>
                <a class="cart-preview-back" href="{{ route('eatry.page') }}">
                    <i class="fa-solid fa-arrow-left me-2" aria-hidden="true"></i>Continue browsing
                </a>
            </div>

            @if ($cartItems->isEmpty())
                <section class="cart-preview-empty">
                    <div class="cart-preview-empty-icon">
                        <i class="fa-solid fa-basket-shopping" aria-hidden="true"></i>
                    </div>
                    <h2>Your cart is waiting for something delicious</h2>
                    <p>Explore the menu and add a dish to get started.</p>
                    <a class="cart-preview-menu-link" href="{{ route('eatry.page') }}">Explore the menu</a>
                </section>
            @else
                <div class="cart-preview-layout">
                    <section class="cart-preview-list" aria-label="Items in your shopping cart">
                        @foreach ($cartItems as $item)
                            <article class="cart-preview-item" id="cart-item-{{ $item->id }}">
                                <div class="cart-preview-product">
                                    <img
                                        class="cart-preview-image"
                                        src="{{ $item->eatery->image ? asset('uploads/eatery/' . $item->eatery->image) : asset('images/default-eatery.jpg') }}"
                                        alt="{{ $item->eatery->name }}"
                                        loading="lazy"
                                        decoding="async">
                                    <div class="cart-preview-product-info">
                                        <h2>{{ $item->eatery->name }}</h2>
                                        @if ($item->eatery->category)
                                            <p class="cart-preview-category">{{ $item->eatery->category->name }}</p>
                                        @endif
                                        <p class="cart-preview-unit-price">
                                            ₦{{ number_format($item->eatery->price, 2) }} each
                                        </p>
                                    </div>
                                </div>

                                <div class="cart-preview-item-actions">
                                    <div>
                                        <div class="cart-preview-quantity" aria-label="Quantity controls for {{ $item->eatery->name }}">
                                            <button type="button"
                                                data-quantity-action="decrement"
                                                data-url="{{ route('cart.quantity', $item->id) }}"
                                                aria-label="Decrease quantity"
                                                @disabled($item->quantity <= 1)>
                                                <i class="fa-solid fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <span class="cart-preview-quantity-value" id="qty-{{ $item->id }}" aria-live="polite">{{ $item->quantity }}</span>
                                            <button type="button"
                                                data-quantity-action="increment"
                                                data-url="{{ route('cart.quantity', $item->id) }}"
                                                aria-label="Increase quantity">
                                                <i class="fa-solid fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <p class="cart-preview-error" id="quantity-error-{{ $item->id }}" role="status"></p>
                                    </div>

                                    <strong class="cart-preview-price">
                                        ₦<span id="amount-{{ $item->id }}">{{ number_format($item->amount, 2) }}</span>
                                    </strong>

                                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="cart-preview-remove" type="submit"
                                            aria-label="Remove {{ $item->eatery->name }} from cart">
                                            <i class="fa-solid fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </article>
                        @endforeach
                    </section>

                    <aside class="cart-preview-summary" aria-label="Order summary">
                        <h2>Order summary</h2>
                        <p class="cart-preview-summary-note">Review your total before placing your order.</p>

                        <div class="cart-preview-total-line">
                            <span>Items (<span id="cart-summary-count">{{ $cartQuantity }}</span>)</span>
                            <strong>₦<span id="cart-subtotal">{{ number_format($cartTotal, 2) }}</span></strong>
                        </div>
                        <div class="cart-preview-total-line cart-preview-grand-total">
                            <span>Total</span>
                            <strong>₦<span id="cart-total">{{ number_format($cartTotal, 2) }}</span></strong>
                        </div>

                        <form class="mt-2" method="POST" action="{{ route('cart.checkout') }}" target="_blank" rel="noopener">
                            @csrf
                            <label class="cart-preview-address-label" for="cart-preview-address">Delivery address</label>
                            @error('address')
                                <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                            <textarea id="cart-preview-address" name="address" class="form-control cart-preview-address"
                                placeholder="Enter your full delivery address" required>{{ old('address') }}</textarea>
                            <button class="cart-preview-checkout" type="submit">
                                Place order <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </form>
                    </aside>
                </div>
            @endif
        </div>
    </main>

    @if ($cartItems->isNotEmpty())
        <script>
            document.querySelectorAll('.cart-preview [data-quantity-action]').forEach((button) => {
                button.addEventListener('click', async () => {
                    const row = button.closest('.cart-preview-item');
                    const buttons = row.querySelectorAll('[data-quantity-action]');
                    const itemId = row.id.replace('cart-item-', '');
                    const quantity = document.getElementById(`qty-${itemId}`);
                    const errorMessage = document.getElementById(`quantity-error-${itemId}`);

                    buttons.forEach((itemButton) => itemButton.disabled = true);
                    errorMessage.textContent = '';

                    try {
                        const response = await fetch(button.dataset.url, {
                            method: 'PATCH',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            },
                            body: JSON.stringify({ action: button.dataset.quantityAction }),
                        });
                        const result = await response.json();

                        if (!response.ok) {
                            throw new Error(result.message || 'Could not update this quantity. Please try again.');
                        }

                        quantity.textContent = result.quantity;
                        document.getElementById(`amount-${itemId}`).textContent = formatCartAmount(result.amount);
                        document.getElementById('cart-subtotal').textContent = formatCartAmount(result.cart_total);
                        document.getElementById('cart-total').textContent = formatCartAmount(result.cart_total);
                        document.getElementById('cart-item-count').textContent = result.item_count;
                        document.getElementById('cart-summary-count').textContent = result.item_count;
                        row.querySelector('[data-quantity-action="decrement"]').disabled = result.quantity <= 1;
                        row.querySelector('[data-quantity-action="increment"]').disabled = false;
                    } catch (error) {
                        errorMessage.textContent = error.message || 'Could not update this quantity. Please try again.';
                        buttons.forEach((itemButton) => {
                            itemButton.disabled = itemButton.dataset.quantityAction === 'decrement'
                                && Number(quantity.textContent) <= 1;
                        });
                    }
                });
            });

            function formatCartAmount(amount) {
                return new Intl.NumberFormat('en-NG', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                }).format(amount);
            }
        </script>
    @endif
@endsection
