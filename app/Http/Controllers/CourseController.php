<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Instructor;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Services\CourseService;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        $courses = $this->courseService->getAll();
        return view('content.course.index', compact('courses'));
    }

    public function create()
    {
        $batches = Batch::all();
        $instructors = Instructor::all();
        return view('content.course.create', compact('batches', 'instructors'));
    }

    public function store(StoreCourseRequest $request)
    {
        $validatedData = $request->validated();

        // Check if an image file is present
        if ($request->hasFile('image')) {
            // Store the image in the public directory
            $validatedData['image'] = $request->file('image')->store('course_images', 'public');
        }

        // Call the service to create the course
        $this->courseService->create($validatedData);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $batches = Batch::all();
        $instructors = Instructor::all();
        return view('content.course.edit', compact('course', 'batches', 'instructors'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validatedData = $request->validated();

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }

            // Store the new image
            $validatedData['image'] = $request->file('image')->store('course_images', 'public');
        }

        // Call the service to update the course
        $this->courseService->update($course, $validatedData);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        // Delete the image if it exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $this->courseService->delete($course);
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
