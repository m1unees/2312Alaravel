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

    public function edit ($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.editdoc', compact('doctor'));
    }




    // ✅ FIXED UPDATE METHOD
 public function update(Request $request, $id)
{
    $doctor = Doctor::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string|max:255',
        'specialization' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($doctor->image && file_exists(storage_path('app/public/' . $doctor->image))) {
            unlink(storage_path('app/public/' . $doctor->image));
        }

        // Store new image and update path in DB
        $data['image'] = $request->file('image')->store('doctors', 'public');
    } else {
        // Keep old image if no new one uploaded
        $data['image'] = $doctor->image;
    }

    $doctor->update($data);

    return redirect()->route('show.doctor')->with('success', 'Doctor updated successfully!');
}

   

    // public function update(Request $request, $id)
    // {
    //     $doctor = Doctor::findOrFail($id);
    //     $doctor->update($request->all());
    //     return redirect()->route('show.doctor')->with('success', 'Doctor updated successfully!');
    // }

    
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->back()->with('success', 'Doctor deleted successfully!');
    }

}
