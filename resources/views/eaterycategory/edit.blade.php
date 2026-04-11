@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="{{ route('home.page') }}">Home</a>
                <a class="breadcrumb-item" href="{{ route('eatery.index') }}">Eatery</a>
                <a class="breadcrumb-item" href="{{ route('eaterycategory.index') }}">Eatery Category</a>
                <span class="breadcrumb-item active" aria-current="page">Edit</span>
            </nav>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                Edit: {{ $category->name }}
                            </h3>

                            <form action="{{ route('eaterycategory.update', $category->id) }}" method="post" class="mt-5">
                                @csrf
                                @method('PATCH')
                                
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id=""
                                        aria-describedby="helpId" value="{{ $category->name }}" />

                                    @error('name')
                                        <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                    @enderror
                                </div>


                                <div class="my-4">
                                    <button class="btn  btn-primary"> Update </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection