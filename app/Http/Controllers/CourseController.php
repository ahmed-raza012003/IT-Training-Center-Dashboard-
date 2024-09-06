<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Batch;
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
        return view('content.course.create', compact('batches'));
    }

    public function store(StoreCourseRequest $request)
    {
        $this->courseService->create($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $batches = Batch::all();
        return view('content.course.edit', compact('course', 'batches'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $this->courseService->update($course, $request->validated());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $this->courseService->delete($course);
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
