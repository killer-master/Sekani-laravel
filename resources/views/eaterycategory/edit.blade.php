@extends('layouts.app')

@section('content')
<section class="ecat-edit-wrapper">

    <div class="container ecat-edit-container">

        <!-- Breadcrumb -->
        <nav class="ecat-edit-breadcrumb">
            <a href="{{ route('home.page') }}">Home</a>
            <span>/</span>
            <a href="{{ route('eatery.index') }}">Eatery</a>
            <span>/</span>
            <a href="{{ route('eaterycategory.index') }}">Category</a>
            <span>/</span>
            <span class="active">Edit</span>
        </nav>

        <!-- Card -->
        <div class="ecat-edit-card">

            <div class="ecat-edit-header">
                <h2>Edit Category</h2>
                <p class="ecat-edit-subtitle">
                    Updating: <span>{{ $category->name }}</span>
                </p>
            </div>

            <!-- FORM -->
            <form action="{{ route('eaterycategory.update', $category->id) }}" method="POST" class="ecat-edit-form">
                @csrf
                @method('PATCH')

                <div class="ecat-edit-group">
                    <label class="ecat-edit-label">Category Name</label>

                    <input 
                        type="text" 
                        name="name"
                        value="{{ $category->name }}"
                        class="ecat-edit-input"
                    >

                    @error('name')
                        <small class="ecat-edit-error">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ACTIONS -->
                <div class="ecat-edit-actions">
                    <a href="{{ route('eaterycategory.index') }}" class="ecat-edit-btn-secondary">
                        Cancel
                    </a>

                    <button type="submit" class="ecat-edit-btn-primary">
                        Update Category
                    </button>
                </div>

            </form>

        </div>
    </div>

</section>
@endsection