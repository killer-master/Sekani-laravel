@extends('layouts.app')
@section('content')
    @php
        $cartItems = Auth::user()->cartItems;
        $cartTotal = $cartItems->sum('amount');
        $cartQuantity = $cartItems->sum('quantity');
    @endphp

    <style>
        .cart-quantity-control {
            display: inline-flex;
            align-items: center;
            gap: .35rem;
            padding: .3rem;
            border: 1px solid #e8e5e2;
            border-radius: 999px;
            background: #fff;
            box-shadow: 0 3px 12px rgba(34, 30, 27, .06);
        }

        .cart-quantity-button {
            display: inline-grid;
            width: 2rem;
            height: 2rem;
            place-items: center;
            border: 0;
            border-radius: 50%;
            background: #fff3ec;
            color: var(--sekani-color);
            transition: background-color .18s ease, color .18s ease, transform .18s ease;
        }

        .cart-quantity-button:hover:not(:disabled) {
            transform: translateY(-1px);
            background: var(--sekani-color);
            color: #fff;
        }

        .cart-quantity-button:disabled {
            cursor: not-allowed;
            opacity: .4;
        }

        .cart-quantity-value {
            min-width: 1.7rem;
            color: #292521;
            font-weight: 700;
            text-align: center;
        }

        .cart-item-main,
        .cart-product,
        .cart-item-actions {
            display: flex;
            align-items: center;
        }

        .cart-item-main {
            justify-content: space-between;
            gap: 1rem;
        }

        .cart-product {
            flex: 1 1 auto;
            gap: 1rem;
            min-width: 0;
        }

        .cart-product-image {
            width: 100px;
            height: 100px;
            flex: 0 0 100px;
            object-fit: cover;
        }

        .cart-product-info {
            min-width: 0;
        }

        .cart-product-title {
            overflow-wrap: anywhere;
        }

        .cart-item-actions {
            flex: 0 0 auto;
            gap: .75rem;
        }

        .cart-item-price {
            white-space: nowrap;
        }

        @media (max-width: 575.98px) {
            .cart-page-container {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .cart-page-card-body {
                padding: 1rem !important;
            }

            .cart-page-heading {
                gap: .75rem;
                font-size: .95rem;
            }

            .cart-item-card-body {
                padding: .875rem !important;
            }

            .cart-item-main {
                flex-wrap: wrap;
                gap: .75rem;
            }

            .cart-product {
                width: 100%;
                gap: .75rem;
                align-items: flex-start;
            }

            .cart-product-image {
                width: 72px;
                height: 72px;
                flex-basis: 72px;
            }

            .cart-product-info h5 {
                font-size: 1rem;
            }

            .cart-product-info > p {
                font-size: .875rem;
            }

            .cart-item-actions {
                width: 100%;
                justify-content: space-between;
                padding-top: .75rem;
                border-top: 1px solid #eee9e5;
            }
        }
    </style>

    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100 cart-page-container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4 cart-page-card-body">

                            <div class="row">

                                <div class="col-lg-7">
                                    <h5 class="mb-3 d-flex justify-content-between cart-page-heading">
                                        <a href="{{ route('eatry.page') }}" class="text-body">
                                            <i class="fas fa-long-arrow-alt-left me-2"></i>
                                            Back to menu <i class="fa-solid fa-shop text-decoration-underline"></i>
                                        </a>
                                        <a href="{{ route('cart.history') }}" class="" style="color: black">
                                            Oder History
                                        </a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have <span id="cart-item-count">{{ $cartQuantity }}</span> items in your cart</p>
                                        </div>

                                    </div>
                                    @forelse ($cartItems as $item)
                                        <div class="cart-item" id="cart-item-{{ $item->id }}">
                                            <div class="card mb-3">
                                                <div class="card-body cart-item-card-body">
                                                    <div class="cart-item-main">
                                                        <div class="cart-product">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('uploads/eatery/' . $item->eatery->image) }}"
                                                                    class="img-fluid rounded-3 cart-product-image" alt="{{ $item->eatery->name }}">
                                                            </div>
                                                            <div class="cart-product-info">
                                                                <h5 class="cart-product-title mb-1">{{ $item->eatery->name }}</h5>
                                                                <p class="mb-1">
                                                                    Price: ₦ {{ number_format($item->eatery->price, 2) }}
                                                                </p>
                                                                <div class="d-flex align-items-center gap-2 mt-2">
                                                                    <span class="small text-muted">Quantity</span>
                                                                    <div class="cart-quantity-control" aria-label="Quantity controls for {{ $item->eatery->name }}">
                                                                        <button type="button"
                                                                            class="cart-quantity-button"
                                                                            data-quantity-action="decrement"
                                                                            data-url="{{ route('cart.quantity', $item->id) }}"
                                                                            aria-label="Decrease quantity"
                                                                            @disabled($item->quantity <= 1)>
                                                                            <i class="fa-solid fa-minus" aria-hidden="true"></i>
                                                                        </button>
                                                                        <span class="cart-quantity-value" id="qty-{{ $item->id }}" aria-live="polite">{{ $item->quantity }}</span>
                                                                        <button type="button"
                                                                            class="cart-quantity-button"
                                                                            data-quantity-action="increment"
                                                                            data-url="{{ route('cart.quantity', $item->id) }}"
                                                                            aria-label="Increase quantity">
                                                                            <i class="fa-solid fa-plus" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <small class="text-danger d-block mt-1" id="quantity-error-{{ $item->id }}" role="status"></small>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item-actions">
                                                            <h5 class="cart-item-price mb-0">₦
                                                                <span id="amount-{{ $item->id }}">
                                                                    {{ number_format($item->amount, 2) }}
                                                                </span>
                                                            </h5>
                                                            <form action="{{ route('cart.destroy', $item->id) }}"
                                                                onsubmit="return confirm('Do you want to remove this item from your cart?')"
                                                                method="POST">
                                                                @csrf @method('DELETE')

                                                                <button class="btn btn-sm text-danger" aria-label="Remove {{ $item->eatery->name }} from cart">
                                                                    <i class="fa-solid fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="card">
                                            <div class="card-body p-5 text-center">
                                                <i class="fa-solid fa-times-circle"></i>
                                                <p>
                                                    Cart is Currently Empty
                                                </p>
                                            </div>
                                        </div>
                                    @endforelse

                                </div>



                                {{-- Checkout Start --}}
                                <div class="col-lg-5">

                                    <div class="card text-white rounded-3" style="background-color: var(--sekani-color)">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">Checkout</h5>
                                            </div>


                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">₦
                                                    <span id="cart-subtotal">{{ number_format($cartTotal, 2) }}</span></p>
                                            </div>

                                            @php
                                                $totalAmount = $cartTotal;

                                                // $shipping = $totalAmount * 0.2;
                                                $total = $totalAmount;

                                            @endphp
                                            {{-- <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">₦ {{ number_format($shipping, 2) }}</p>
                                            </div> --}}

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total</p>
                                                <p class="mb-2">₦ <span id="cart-total">{{ number_format($total, 2) }}</span></p>
                                            </div>

                                            <hr class="my-4">
                                            <form class="mt-4" method="POST" action="{{ route('cart.checkout') }}" target="_blank" rel="noopener">
                                                @csrf
                                                <label class="form-label" for="typeName">Address</label>
                                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                                    @error('address')
                                                        <span class="text-danger fw-bold">{{ $message }}</span>
                                                    @enderror
                                                    <textarea id="typeName" name="address" class="form-control form-control-lg" siez="17" placeholder="Address..."></textarea>
                                                </div>


                                                <button type="submit" class="btn btn-dark btn-block btn-lg">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Checkout <i
                                                                class="fa-solid fa-check-circle small ms-2"></i></span>
                                                    </div>
                                                </button>
                                            </form>


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('[data-quantity-action]').forEach((button) => {
            button.addEventListener('click', async () => {
                const row = button.closest('.cart-item');
                const buttons = row.querySelectorAll('[data-quantity-action]');
                const itemId = row.id.replace('cart-item-', '');
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
                        throw new Error(result.message || 'Could not update the quantity. Please try again.');
                    }

                    document.getElementById(`qty-${itemId}`).textContent = result.quantity;
                    document.getElementById(`amount-${itemId}`).textContent = formatCartAmount(result.amount);
                    document.getElementById('cart-subtotal').textContent = formatCartAmount(result.cart_total);
                    document.getElementById('cart-total').textContent = formatCartAmount(result.cart_total);
                    document.getElementById('cart-item-count').textContent = result.item_count;

                    buttons.forEach((itemButton) => {
                        itemButton.disabled = false;
                    });
                    row.querySelector('[data-quantity-action="decrement"]').disabled = result.quantity <= 1;
                } catch (error) {
                    errorMessage.textContent = error.message || 'Could not update the quantity. Please try again.';
                    buttons.forEach((itemButton) => {
                        itemButton.disabled = itemButton.dataset.quantityAction === 'decrement'
                            && Number(document.getElementById(`qty-${itemId}`).textContent) <= 1;
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
@endsection
