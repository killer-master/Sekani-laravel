@extends('layouts.app')
@section('content')
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <div class="col-lg-7">
                                    <h5 class="mb-3">
                                        <a href="{{ route('eatry.page') }}" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Back to menu</a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have {{ Auth::user()->cartItems->count() }} items in your
                                                cart</p>
                                        </div>

                                    </div>
                                    @forelse (Auth::user()->cartItems as $item)
                                        <div class="cart-item" id="cart-item-{{ $item->id }}">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div>
                                                                <img src="{{ asset('uploads/eatery/' . $item->eatery->image) }}"
                                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                                    style="max-width: 100px;">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h5> {{ $item->eatery->name }} </h5>
                                                                <p class="mb-1">
                                                                    Price: ₦ {{ number_format($item->eatery->price, 2) }}
                                                                </p>
                                                                <p>
                                                                    Quantity:
                                                                    <span id="qty-{{ $item->id }}">
                                                                        {{ $item->quantity }}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 d-flex flex-row align-items-center">
                                                            <div style="width: 8rem;" class="col-9">
                                                                <h5 class="mb-0 text-nowrap text-start">₦
                                                                    <span id="amount-{{ $item->id }}">
                                                                        {{ number_format($item->amount, 2) }}
                                                                    </span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <form action="{{ route('cart.destroy', $item->id) }}"
                                                                    onsubmit="return confirm('Do you want to remove this item from your cart?')"
                                                                    method="POST">
                                                                    @csrf @method('DELETE')

                                                                    <button class="btn btn-sm text-end text-danger">
                                                                        <i class="fa-solid fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
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
                                                    {{ number_format(Auth::user()->cartItems->sum('amount'), 2) }}</p>
                                            </div>

                                            @php
                                                $totalAmount = Auth::user()->cartItems->sum('amount');

                                                // $shipping = $totalAmount * 0.2;
                                                $total = $totalAmount;

                                            @endphp
                                            {{-- <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">₦ {{ number_format($shipping, 2) }}</p>
                                            </div> --}}

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total</p>
                                                <p class="mb-2">₦ {{ number_format($total, 2) }}</p>
                                            </div>

                                            <hr class="my-4">
                                            <form class="mt-4" method="POST" action="{{ route('cart.checkout') }}">
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
@endsection
