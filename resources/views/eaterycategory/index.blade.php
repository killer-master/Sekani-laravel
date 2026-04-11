@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="{{ route('home.page') }}">Home</a>
                <a class="breadcrumb-item" href="{{ route('eatery.index') }}">Eatery</a>
                <span class="breadcrumb-item active" aria-current="page">Eatery Category</span>
            </nav>

            <div class="card mx-auto bg-white" style="max-width: 900px">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h3>Categories</h3>

                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                        Add Category
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <form method="POST" action="{{ route('eaterycategory.store') }}" class="modal-content">
                                @csrf

                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        New Category
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" id="" aria-describedby="helpId"
                                            placeholder="" />

                                        @error('name')
                                            <small id="helpId" class="text-danger fw-bold"> {{ $message }} </small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(
                            document.getElementById("modalId"),
                            options,
                        );
                    </script>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Last Updated</th>
                                    <th scope="col" class="ps-5">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr class="">
                                        <td> {{ $category->name }} </td>
                                        <td>
                                            {{ $category->created_at->format('M. jS Y') }}
                                        </td>
                                        <td>
                                            {{ $category->updated_at->diffForHumans() }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('eaterycategory.edit', $category->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-edit"></i>
                                                </a>
                                                <form action="{{ route('eaterycategory.destroy', $category->id) }}"
                                                    method="POST" class="delete-form">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm delete-form">
                                                        <i class="fa-solid fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"> No Catgories Added Yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
