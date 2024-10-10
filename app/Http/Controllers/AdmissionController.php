<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\Batch;
use App\Models\Branch;
use App\Models\Course;
use App\Models\Timing;

class AdmissionController extends Controller
{
    // Show the form for creating a new admission
    public function create()
    {
        $branches = Branch::all(); // Fetch all branches
        $batches = Batch::all(); // Fetch all batches
        $courses = Course::all(); // Fetch all courses
        $timings = Timing::all(); // Fetch all timings

        return view('frontend.form', compact('branches', 'batches', 'courses', 'timings'));
    }

    // Store the submitted admission form data in the database
    public function store(Request $request)
    {
        $request->validate([
            'batch' => 'required',
            'training_name' => 'required',
            'training_shift' => 'required',
            'prefix' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'mobile' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'cnic' => 'required',
            'guardian_mobile' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        Admission::create($request->all());

        return redirect()->back()->with('success', 'Admission form submitted successfully');
    }
}
