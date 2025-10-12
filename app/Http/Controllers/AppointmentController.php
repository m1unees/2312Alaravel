<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
      public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'appointment_date' => 'required|date',
            'department' => 'required|string',
            'doctor' => 'required|string',
            'message' => 'nullable|string',
        ]);

        
        return redirect()->back()->with('success', 'Your appointment has been submitted successfully!');
    }
}
