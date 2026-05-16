@extends('layouts.app')
@section('content')
    <style>
        body {
            background: url('{{ asset('assets/images/15796.jpg') }}') center center / cover fixed no-repeat;
        }
    </style>
    <div class="container mt-5 mb-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb premium-breadcrumb px-3 py-2 rounded-pill d-inline-flex">
                {{-- <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li> --}}
                <li class="breadcrumb-item"><a href="{{ route('eatry.page') }}">Back</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $eateryview->name }}</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">eatery</li> --}}
            </ol>
        </nav>
        <div class="card" style="background-color: #212529;">
            <div class="row g-0" style="background-color: #212529;">
                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center" style="border-right: solid wheat 1px ;">
                    <div class="">
                        <div class="main_image text-center py-5 wheat">
                            <img src="{{ $eateryview->image ? asset('uploads/eatery/' . $eateryview->image) : asset('images/default-eatery.jpg') }}"
                                class="card-img-top wheat" alt="{{ $eateryview->name }}"
                                style="object-fit: cover; max-width: 20rem; max-height: 20rem; border-radius: 1rem">
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex align-items-center">
                    <div class="p-5 right-side ">
                        <div class="py-2 wheat">
                            <h3>{{ $eateryview->name }}</h3>
                        </div>
                        <div class="mt-2 py-2 content wheat">
                            <p>
                                {{ $eateryview->description }}
                            </p>
                        </div>
                        <h3 class="wheat"> ₦ {{ number_format($eateryview->price, 2) }}</h3>
                        @error('eateryview')
                            <span class="small fw-bold text-danger">{{ $message }}</span>
                        @enderror
                        <div class="my-4">
                            <form action="{{ route('cart.store') }}" method="post">
                            @csrf
                            {{-- <input type="hidden" value="{{ $eateryview->id }}" name="product"> --}}
                            <button class="btn btn-success wheat">
                                <i class="fa-solid fa-shopping-cart"></i> Add to Cart
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
