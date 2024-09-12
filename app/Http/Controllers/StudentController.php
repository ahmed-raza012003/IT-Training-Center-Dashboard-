<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Branch;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Timing;
use App\Models\FeeStructure;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Services\FeeSubmissionService;
use App\Services\StudentService;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    protected $feeSubmissionService;
    protected $studentService;

    public function __construct(StudentService $studentService, FeeSubmissionService $feeSubmissionService)
    {
        $this->studentService = $studentService;
        $this->feeSubmissionService = $feeSubmissionService;
    }

    public function index()
    {
        $students = Student::with(['branch', 'batch', 'course', 'timing', 'feeStructure'])->paginate(10);
        return view('content.student.index', compact('students'));
    }
    public function show($id)
    {
        $student = Student::with(['installments', 'feeSubmissions'])->findOrFail($id);
    
        // Get unpaid installments
        $installments = $student->installments()->where('is_paid', false)->get(); // Ensure this query is correct
    
        // Get all fee submissions
        $feeSubmissions = $student->feeSubmissions;
    
        return view('content.student.details', compact('student', 'installments', 'feeSubmissions'));
    }
    



    public function create()
    {
        $branches = Branch::all();
        $batches = Batch::all();
        $courses = Course::all();
        $timings = Timing::all();
        $fees = FeeStructure::all();
        return view('content.student.create', compact('branches', 'batches', 'courses', 'timings', 'fees'));
    }

    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Generate the registration number
        $batchNumber = $data['batch_id'];
        $studentCount = Student::where('batch_id', $batchNumber)->count() + 1;
        $data['registration_number'] = 'ITC-' . $batchNumber . '-' . str_pad($studentCount, 3, '0', STR_PAD_LEFT);

        $this->studentService->create($data);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        $branches = Branch::all();
        $batches = Batch::all();
        $courses = Course::all();
        $timings = Timing::all();
        $fees = FeeStructure::all();
        return view('content.student.edit', compact('student', 'branches', 'batches', 'courses', 'timings', 'fees'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            // Delete the old picture
            if ($student->profile_picture) {
                Storage::disk('public')->delete($student->profile_picture);
            }
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $this->studentService->update($student, $data);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        if ($student->profile_picture) {
            Storage::disk('public')->delete($student->profile_picture);
        }

        $this->studentService->delete($student);
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
