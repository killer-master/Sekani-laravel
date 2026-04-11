@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb premium-breadcrumb px-3 py-2 rounded-pill d-inline-flex">
                    <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('eatery.index') }}">Eatery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Eatery</li>
                </ol>
            </nav>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="card premium-form-card border-0 rounded-4 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <div class="mb-4 text-center text-md-start">
                                <h2 class="fw-bold form-title mb-2">New Food</h2>
                                <p class="text-muted mb-0">Add a delicious new item to your eatery menu</p>
                            </div>

                            <form action="{{ route('eatery.store') }}" method="post" enctype="multipart/form-data" class="mt-4 row g-4">
                                @csrf

                                <div class="col-md-6">
                                    <label for="name" class="form-label premium-label">Name</label>
                                    <input type="text" class="form-control premium-input" name="name" id="name"
                                        aria-describedby="helpId" value="{{ old('name') }}" placeholder="Enter food name" />

                                    @error('name')
                                        <small id="helpId" class="text-danger fw-semibold"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="price" class="form-label premium-label">Price</label>
                                    <input type="number" step="any" class="form-control premium-input" name="price" id="price"
                                        aria-describedby="helpId" value="{{ old('price') }}" placeholder="Enter price" />

                                    @error('price')
                                        <small id="helpId" class="text-danger fw-semibold"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="category" class="form-label premium-label">Category</label>
                                    <select name="category" id="category" class="form-select premium-input">
                                        <option value="" selected hidden>Select category</option>

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('category')
                                        <small id="helpId" class="text-danger fw-semibold"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="image" class="form-label premium-label">Image</label>
                                    <input type="file" class="form-control premium-input file-input" name="image" id="image"
                                        aria-describedby="helpId" />

                                    @error('image')
                                        <small id="helpId" class="text-danger fw-semibold"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="description" class="form-label premium-label">Description</label>
                                    <textarea name="description" id="description" rows="8" class="form-control premium-input"
                                        placeholder="Write a short and tasty description...">{{ old('description') }}</textarea>

                                    @error('description')
                                        <small id="helpId" class="text-danger fw-semibold"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="pt-3 d-flex flex-column flex-sm-row gap-3 justify-content-between align-items-center">
                                    <a href="{{ route('eatery.index') }}" class="btn premium-btn-light rounded-pill px-4 py-3 w-100 w-sm-auto">
                                        ← Back to Menu
                                    </a>

                                    <button class="btn premium-btn-dark rounded-pill px-5 py-3 w-100 w-sm-auto">
                                        Save Food
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Premium Styling --}}
        <style>
            body {
                background: linear-gradient(180deg, #f8f9fc 0%, #ffffff 100%);
            }

            .premium-breadcrumb {
                background: rgba(255, 255, 255, 0.88);
                backdrop-filter: blur(12px);
                box-shadow: 0 8px 25px rgba(17, 24, 39, 0.06);
                border: 1px solid rgba(0, 0, 0, 0.04);
            }

            .premium-breadcrumb .breadcrumb-item a {
                text-decoration: none;
                color: #6b7280;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .premium-breadcrumb .breadcrumb-item a:hover {
                color: #111827;
            }

            .premium-form-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(12px);
                box-shadow: 0 18px 45px rgba(17, 24, 39, 0.08);
                border: 1px solid rgba(0, 0, 0, 0.04);
            }

            .form-title {
                font-size: clamp(1.8rem, 4vw, 2.4rem);
                letter-spacing: -0.03em;
                color: #111827;
            }

            .premium-label {
                font-weight: 600;
                color: #111827;
                margin-bottom: 0.6rem;
            }

            .premium-input {
                border: 1px solid #e5e7eb;
                border-radius: 16px;
                padding: 0.9rem 1rem;
                background: #f9fafb;
                color: #111827;
                transition: all 0.3s ease;
                box-shadow: none;
            }

            .premium-input:focus {
                border-color: #111827;
                background: #fff;
                box-shadow: 0 0 0 0.2rem rgba(17, 24, 39, 0.08);
            }

            textarea.premium-input {
                resize: none;
                min-height: 180px;
            }

            .file-input {
                padding: 0.75rem 1rem;
            }

            .premium-btn-dark,
            .premium-btn-light {
                border: none;
                border-radius: 999px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .premium-btn-dark {
                background: linear-gradient(135deg, #111827, #1f2937);
                color: #fff;
                box-shadow: 0 10px 25px rgba(17, 24, 39, 0.18);
            }

            .premium-btn-dark:hover {
                transform: translateY(-2px);
                color: #fff;
                box-shadow: 0 14px 30px rgba(17, 24, 39, 0.24);
            }

            .premium-btn-light {
                background: #f3f4f6;
                color: #111827;
                border: 1px solid #e5e7eb;
            }

            .premium-btn-light:hover {
                background: #e5e7eb;
                color: #111827;
                transform: translateY(-2px);
            }

            @media (max-width: 768px) {
                .card-body {
                    padding: 2rem 1.3rem !important;
                }

                .form-title {
                    text-align: center;
                }
            }
        </style>
    </section>
@endsection