@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-4">

        <h1 class="mb-4">Dashboard</h1>

        {{-- Statistik --}}
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text display-6">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Total Categories</h5>
                        <p class="card-text display-6">{{ $totalCategories }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Total Complaints</h5>
                        <p class="card-text display-6">{{ $totalComplaints }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pengaduan Terbaru --}}
        <h3 class="mt-5 mb-3">Latest Complaints</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($latestComplaints as $complaint)
                        <tr>
                            <td>{{ $complaint->id }}</td>
                            <td>{{ $complaint->name }}</td>
                            <td>{{ $complaint->category->name }}</td>
                            <td>{{ $complaint->location }}</td>
                            <td>{{ $complaint->date }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No complaints found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
