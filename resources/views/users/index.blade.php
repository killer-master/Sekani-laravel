@extends('layouts.app')

@section('content')
    <div class="lumina-admin-wrapper">

        <div class="lumina-admin-header">
            <h2>Users Management</h2>
            <p>Manage users, roles and permissions</p>
        </div>

        <div class="lumina-admin-table-container">

            <table class="lumina-admin-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date Joined</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>
                                <span
                                    class="lumina-admin-role
                            {{ $user->role == 'admin' ? 'lumina-admin-role-admin' : 'lumina-admin-role-user' }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>

                            <td>{{ $user->created_at->format('d M Y') }}</td>

                            <td>

                                {{-- <a href="{{ route('user.edit',$user->id) }}"
                                class="lumina-admin-btn lumina-admin-btn-edit">
                                Edit
                                </a> --}}
                                <!-- Button trigger modal -->
                                <button type="button" class="lumina-admin-btn lumina-admin-btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#editUserModal{{ $user->id }}">
                                    Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1"
                                    data-bs-backdrop="static" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #0f172a";>
                                                <h5 class="modal-title white" id="modalTitleId">
                                                    Edit user
                                                </h5>
                                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="background-color: #0f172a";>
                                                <div class="lumina-admin-wrapper">

                                                    <div class="lumina-admin-edit-card">

                                                        <div class="lumina-admin-header">
                                                            <h2>Edit User</h2>
                                                            <p>Update user information and role.</p>
                                                        </div>

                                                        @if (session('success'))
                                                            <div class="lumina-admin-alert-success">
                                                                {{ session('success') }}
                                                            </div>
                                                        @endif

                                                        @if ($errors->any())
                                                            <div class="lumina-admin-alert-error">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif

                                                        <form action="{{ route('user.update', $user->id) }}"
                                                            method="POST">

                                                            @csrf
                                                            @method('PUT')

                                                            <div class="lumina-admin-form-group">
                                                                <label>Name</label>
                                                                <input type="text" name="name"
                                                                    value="{{ old('name', $user->name) }}"
                                                                    class="lumina-admin-input">
                                                            </div>

                                                            <div class="lumina-admin-form-group">
                                                                <label>Email</label>
                                                                <input type="email" name="email"
                                                                    value="{{ old('email', $user->email) }}"
                                                                    class="lumina-admin-input">
                                                            </div>

                                                            <div class="lumina-admin-form-group">
                                                                <label>Role</label>

                                                                <select name="role" class="lumina-admin-select">

                                                                    <option value="user"
                                                                        {{ $user->role == 'user' ? 'selected' : '' }}>
                                                                        User
                                                                    </option>

                                                                    <option value="admin"
                                                                        {{ $user->role == 'admin' ? 'selected' : '' }}>
                                                                        Admin
                                                                    </option>

                                                                </select>
                                                            </div>

                                                            <div class="lumina-admin-buttons">

                                                                <button type="button"
                                                                    class="lumina-admin-btn lumina-admin-btn-back"
                                                                    data-bs-dismiss="modal">
                                                                    Cancel
                                                                </button>

                                                                <button type="submit"
                                                                    class="lumina-admin-btn lumina-admin-btn-save">

                                                                    Save Changes

                                                                </button>

                                                            </div>

                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                    style="display:inline" class="delete-form">

                                    @csrf
                                    @method('DELETE')

                                    <button class="lumina-admin-btn lumina-admin-btn-delete">

                                        Delete

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center">
                                No users found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>
<style>
    .pagination {
    --bs-pagination-color: #ff6600;
    --bs-pagination-hover-color: #fff;
    --bs-pagination-hover-bg: #ff6600;
    --bs-pagination-active-bg: #ff6600;
    --bs-pagination-active-border-color: #ff6600;
    --bs-pagination-active-color: #fff;
}
.text-muted {
    color: white !important;
}
</style>
        <div class="mt-4">
            {!! $users->links('pagination::bootstrap-5') !!}
        </div>

    </div>
@endsection
