@extends('layouts.admin')

@section('title', 'Manajemen Admin')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-success">Manajemen Admin</h2>
            <a href="{{ route('admins.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-2"></i>Buat Akun
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $counter = 1; @endphp
                            @foreach ($superAdmins as $admin)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-3"
                                                style="width: 35px; height: 35px; font-size: 0.8rem;">
                                                {{ strtoupper(substr($admin->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                {{ $admin->name }}
                                                @if ($admin->id === auth()->id())
                                                    <span class="badge bg-info ms-2">Anda</span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $admin->email }}</td>
                                    <td><span class="badge bg-danger">Super Admin</span></td>
                                    <td>
                                        <a href="{{ route('admins.edit', $admin) }}" class="btn btn-sm btn-primary"
                                            title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-3"
                                                style="width: 35px; height: 35px; font-size: 0.8rem;">
                                                {{ strtoupper(substr($admin->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                {{ $admin->name }}
                                                @if ($admin->id === auth()->id())
                                                    <span class="badge bg-info ms-2">Anda</span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $admin->email }}</td>
                                    <td><span class="badge bg-success">Admin</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admins.edit', $admin) }}" class="btn btn-sm btn-primary"
                                                title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            @if ($admin->id !== auth()->id())
                                                <form action="{{ route('admins.destroy', $admin) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus"
                                                        onclick="return confirm('Yakin ingin menghapus akun ini?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
