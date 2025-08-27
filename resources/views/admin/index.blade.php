@extends('layouts.admin')

@section('title', 'Admin List')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4">Admin List</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('admins.create') }}" class="btn btn-success mb-3">Create Account</a>

        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th style="width: 5%;">#</th>
                    <th style="width: 25%;">Name</th>
                    <th style="width: 30%;">Email</th>
                    <th style="width: 15%;">Role</th>
                    <th style="width: 25%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $counter = 1; @endphp
                @foreach ($superAdmins as $admin)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>Super Admin</td>
                        <td>
                            <a href="{{ route('admins.edit', $admin) }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach

                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>Admin</td>
                        <td>
                            <a href="{{ route('admins.edit', $admin) }}" class="btn btn-sm btn-primary">Edit</a>
                            @if ($admin->id !== auth()->id())
                                <form action="{{ route('admins.destroy', $admin) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this account?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
