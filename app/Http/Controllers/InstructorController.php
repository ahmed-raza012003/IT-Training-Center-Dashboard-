<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Course;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;
use App\Services\InstructorService;

class InstructorController extends Controller
{
    protected $instructorService;

    public function __construct(InstructorService $instructorService)
    {
        $this->instructorService = $instructorService;
    }

    public function index()
    {
        $instructors = Instructor::paginate(10);
        return view('content.instructors.index', compact('instructors'));
    }

    public function show($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('content.instructors.details', compact('instructor'));
    }

    public function create()
    {
        $courses = Course::all(); // Fetch all courses for the dropdown
        return view('content.instructors.create', compact('courses'));
    }

    public function store(StoreInstructorRequest $request)
    {
        $data = $request->validated();

        // Handle file upload separately if it exists
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures');
        }

        $this->instructorService->create($data);

        return redirect()->route('instructors.index')->with('success', 'Instructor created successfully.');
    }

    public function edit(Instructor $instructor)
    {
        $courses = Course::all(); // Fetch all courses for the dropdown
        return view('content.instructors.edit', compact('instructor', 'courses'));
    }

    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        $data = $request->validated();

        // Handle file upload separately if it exists
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures');
        }

        $this->instructorService->update($instructor, $data);

        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully.');
    }

    public function destroy(Instructor $instructor)
    {
        $this->instructorService->delete($instructor);
        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully.');
    }
}

