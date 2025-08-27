<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        // Hanya super_admin yang bisa mengakses semua fungsi
        $this->middleware('role:super_admin');
    }

    // List semua admin dan super admin (kecuali diri sendiri jika mau)
    public function index()
    {
        $admins = User::where('role', '!=', 'super_admin')->get(); // opsional: kecuali super_admin
        $superAdmins = User::where('role', 'super_admin')->get();
        return view('admin.index', compact('admins', 'superAdmins'));
    }

    // Form buat admin/super admin baru
    public function create()
    {
        return view('admin.create');
    }

    // Simpan admin/super admin baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:super_admin,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admins.index')->with('success', 'Account created successfully.');
    }

    // Form edit admin/super admin
    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    // Update admin/super admin
    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'nullable|min:6|confirmed',
            'role' => 'required|in:super_admin,admin',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->role = $request->role;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Account updated successfully.');
    }

    // Hapus admin/super admin
    public function destroy(User $admin)
    {
        // opsional: jangan hapus diri sendiri
        if ($admin->id === auth()->id()) {
            return redirect()->route('admins.index')->with('error', 'You cannot delete your own account.');
        }

        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Account deleted successfully.');
    }
}
