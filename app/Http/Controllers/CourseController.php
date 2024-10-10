<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Services\CourseService;
use App\Models\Course;
use App\Models\Batch;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        $courses = Course::with(['batch'])->paginate(10);
        return view('content.course.index', compact('courses'));
    }

    public function create()
    {
        $batches = Batch::all();
        return view('content.course.create', compact('batches'));
    }

    public function store(StoreCourseRequest $request)
    {
        $data = $request->validated();

        // Handle image upload if it exists
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('course_images', 'public');
        }

        $this->courseService->create($data);
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $batches = Batch::all();
        return view('content.course.edit', compact('course', 'batches', ));
    }

    public function update(UpdateCourseRequest $request, Course $course)
{
    $data = $request->validated();

    // Handle image upload if it exists
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }
        // Store the new image
        $data['image'] = $request->file('image')->store('course_images', 'public');
    }

    // Update course using the service
    $this->courseService->update($course, $data);

    return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}


    public function destroy(Course $course)
    {
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $this->courseService->delete($course);
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
