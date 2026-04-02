@extends('layouts.app')
@section('content')
    <section>
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('eatery.index') }}">Eatery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Eatery</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap">

                            <h3 class="card-title">
                               Edit Food
                            </h3>

                            <img src="{{ asset('uploads/eatery/' . $eatery->image) }}" width="200" height="200" alt="" class="rounded">
                        </div>

                        <form action="{{ route('eatery.update', $eatery->sku) }}" method="post" enctype="multipart/form-data" class="mt-5 row">
                            @csrf @method('PATCH')
                            
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id=""
                                    aria-describedby="helpId" value="{{ $eatery->name }}" />

                                @error('name')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="number" step="any" class="form-control" name="price" id=""
                                    aria-describedby="helpId" value="{{ $eatery->price }}" />

                                @error('price')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="" class="form-select">
                                    <option value=""></option>
                                    
                                    {{-- @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach --}}
                                </select>
                                @error('category')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id=""
                                    aria-describedby="helpId" value="" />

                                @error('image')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" id=""  rows="10" class="form-control">{{ $eatery->description}}</textarea>

                                @error('description')
                                    <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="my-4">
                                <button class="btn  btn-primary"> Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection