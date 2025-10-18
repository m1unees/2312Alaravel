<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class DoctorController extends Controller
{
    public function index(): Factory|View // Show doctors
    {
        $doctors = Doctor::all();
        return view('admin.showdoc', compact('doctors'));
    }

    public function create()
    {
        return view('admin.add_doctor');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('doctors', 'public');
        }

        Doctor::create($data);

        return redirect()->back()->with('success', 'Doctor added successfully!');
    }
}
