<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Hanya super_admin & admin yang bisa mengakses
        $this->middleware('role:super_admin,admin');
    }

    public function index()
    {
        // Statistik
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalComplaints = Complaint::count();
        $latestComplaints = Complaint::with('category')->latest()->take(5)->get();

        // Semua diarahkan ke satu view
        return view('dashboard.index', compact(
            'totalUsers',
            'totalCategories',
            'totalComplaints',
            'latestComplaints'
        ));
    }
}
