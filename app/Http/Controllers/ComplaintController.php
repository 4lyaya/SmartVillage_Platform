<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super_admin,admin')->except(['create', 'store']);
    }

    public function index()
    {
        $complaints = Complaint::with('category')->latest()->paginate(10);
        return view('complaints.index', compact('complaints'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('complaints.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'national_id' => 'required|string|size:16',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('complaints', 'public');
        }

        Complaint::create($data);

        return redirect()->back()->with('success', 'Complaint submitted successfully.');
    }

    public function show(Complaint $complaint)
    {
        $complaint->load('category');

        return view('complaints.show', compact('complaint'));
    }

    public function edit(Complaint $complaint)
    {
        $categories = Category::all();
        return view('complaints.edit', compact('complaint', 'categories'));
    }

    public function update(Request $request, Complaint $complaint)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'national_id' => 'required|string|size:16',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('complaints', 'public');
        }

        $complaint->update($data);

        return redirect()->route('complaints.index')->with('success', 'Complaint updated successfully.');
    }

    public function destroy(Complaint $complaint)
    {
        if ($complaint->photo && Storage::disk('public')->exists($complaint->photo)) {
            Storage::disk('public')->delete($complaint->photo);
        }

        $complaint->delete();

        return redirect()->route('complaints.index')->with('success', 'Complaint deleted successfully.');
    }
}
