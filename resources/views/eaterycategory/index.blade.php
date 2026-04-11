@extends('layouts.app')

@section('content')
<section class="ecat-wrapper">
    <div class="container ecat-container">

        <!-- Breadcrumb -->
        <nav class="ecat-breadcrumb">
            <a href="{{ route('home.page') }}">Home</a>
            <span>/</span>
            <a href="{{ route('eatery.index') }}">Eatery</a>
            <span>/</span>
            <span class="active">Category</span>
        </nav>

        <!-- Card -->
        <div class="ecat-card">

            <!-- Header -->
            <div class="ecat-header">
                <h2 class="ecat-title">Eatery Categories</h2>

                <button class="ecat-btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                    + Add Category
                </button>
            </div>

            <!-- Table -->
            <div class="ecat-table-wrapper">
                <table class="ecat-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="ecat-name">{{ $category->name }}</td>

                                <td>{{ $category->created_at->format('M d, Y') }}</td>

                                <td>{{ $category->updated_at->diffForHumans() }}</td>

                                <td>
                                    <div class="ecat-actions">
                                        <a href="{{ route('eaterycategory.edit', $category->id) }}"
                                           class="ecat-btn-edit">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form action="{{ route('eaterycategory.destroy', $category->id) }}"
                                              method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')

                                            <button class="ecat-btn-delete delete-form-category">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="ecat-empty">
                                    No categories yet
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade ecat-modal" id="modalId" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="{{ route('eaterycategory.store') }}" class="modal-content ecat-modal-content">
                @csrf

                <div class="ecat-modal-header d-flex justify-content-between">
                    <h5>Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="ecat-modal-body">
                    <label class="ecat-label">Category Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="ecat-input">

                    @error('name')
                        <small class="ecat-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="ecat-modal-footer my-3  d-flex justify-content-between">
                    <button type="button" data-bs-dismiss="modal" class="ecat-btn-secondary">Cancel</button>
                    <button type="submit" class="ecat-btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>

</section>
@endsection