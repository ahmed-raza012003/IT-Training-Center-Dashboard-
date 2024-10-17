<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TimingController;
use App\Http\Controllers\FeeStructureController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\FeeSubmissionController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/admission', [AdmissionController::class, 'create'])->name('admission.create');
Route::post('/admission', [AdmissionController::class, 'store'])->name('admission.store');

// Route::get('/', function () {
//     return redirect()->route('login'); // Redirect to the dashboard
// })->middleware('auth.custom');
Route::middleware(['auth.custom'])->group(function () {
// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth.custom'); // Protect this route


// Role Routes
Route::get('/branches', [BranchController::class, 'index'])->name('branches.index');
Route::get('/branches/create', [BranchController::class, 'create'])->name('branches.create');
Route::post('/branches', [BranchController::class, 'store'])->name('branches.store');
Route::get('/branches/{branch}/edit', [BranchController::class, 'edit'])->name('branches.edit');
Route::put('/branches/{branch}', [BranchController::class, 'update'])->name('branches.update');
Route::delete('/branches/{branch}', [BranchController::class, 'destroy'])->name('branches.destroy');

// Batch Routes
Route::get('/batches', [BatchController::class, 'index'])->name('batches.index');
Route::get('/batches/create', [BatchController::class, 'create'])->name('batches.create');
Route::post('/batches', [BatchController::class, 'store'])->name('batches.store');
Route::get('/batches/{batch}/edit', [BatchController::class, 'edit'])->name('batches.edit');
Route::put('/batches/{batch}', [BatchController::class, 'update'])->name('batches.update');
Route::delete('/batches/{batch}', [BatchController::class, 'destroy'])->name('batches.destroy');

// Course Routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// Timing Routes
Route::get('/timings', [TimingController::class, 'index'])->name('timings.index');
Route::get('/timings/create', [TimingController::class, 'create'])->name('timings.create');
Route::post('/timings', [TimingController::class, 'store'])->name('timings.store');
Route::get('/timings/{timing}/edit', [TimingController::class, 'edit'])->name('timings.edit');
Route::put('/timings/{timing}', [TimingController::class, 'update'])->name('timings.update');
Route::delete('/timings/{timing}', [TimingController::class, 'destroy'])->name('timings.destroy');

// Fee Structure Routes
Route::get('/fees', [FeeStructureController::class, 'index'])->name('fees.index');
Route::get('/fees/create', [FeeStructureController::class, 'create'])->name('fees.create');
Route::post('/fees', [FeeStructureController::class, 'store'])->name('fees.store');
Route::get('/fees/{feeStructure}/edit', [FeeStructureController::class, 'edit'])->name('fees.edit');
Route::put('/fees/{feeStructure}', [FeeStructureController::class, 'update'])->name('fees.update');
Route::delete('/fees/{feeStructure}', [FeeStructureController::class, 'destroy'])->name('fees.destroy');

// Student Routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');


Route::post('/installments/generate/{student}', [InstallmentController::class, 'generateInstallments'])->name('installments.generate');
// Correct route for handling installment payments
Route::post('/installments/{student}/pay', [InstallmentController::class, 'processPayment'])->name('installments.pay');

Route::post('/students/{student}/submit-fee', [FeeSubmissionController::class, 'submitFee'])->name('fee.submit');

Route::get('/students/{student}/fee-submissions', [FeeSubmissionController::class, 'show'])->name('fee-submissions.show');
Route::get('/students/{student}', [InstallmentController::class, 'show'])->name('students.show');

Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors.index');
Route::get('/instructors/create', [InstructorController::class, 'create'])->name('instructors.create');
Route::post('/instructors', [InstructorController::class, 'store'])->name('instructors.store');
Route::get('/instructors/{instructor}/edit', [InstructorController::class, 'edit'])->name('instructors.edit');
Route::put('/instructors/{instructor}', [InstructorController::class, 'update'])->name('instructors.update');
Route::delete('/instructors/{instructor}', [InstructorController::class, 'destroy'])->name('instructors.destroy');
Route::get('/instructors/{instructor}', [InstructorController::class, 'show'])->name('instructors.show');


// Staff Routesuse App\Http\Controllers\StaffController;

Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/{id}', [StaffController::class, 'show'])->name('staff.show'); // Use id
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit'); // Use id
Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update'); // Use id
Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy'); // Use id



// Route to view all attendances// Attendance Routes
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index'); // View all attendance
Route::post('/attendance/checkin/{id}', [AttendanceController::class, 'checkIn'])->name('attendance.checkin'); // Check-in route
Route::post('/attendance/checkout/{id}', [AttendanceController::class, 'checkOut'])->name('attendance.checkout'); // Check-out route
Route::post('/attendance/break/{id}', [AttendanceController::class, 'startBreak'])->name('attendance.break'); // Start break
Route::post('/attendance/endbreak/{id}', [AttendanceController::class, 'endBreak'])->name('attendance.endbreak'); // End break
Route::get('/attendance/record', [AttendanceController::class, 'showRecentAttendance'])->name('attendance.record');
// Route for displaying the form to record attendance for all staff
Route::get('/attendance/create-bulk', [AttendanceController::class, 'create'])->name('attendance.createBulk');

// Route for storing attendance records
Route::post('/attendance/create-bulk', [AttendanceController::class, 'store'])->name('attendance.storeBulk');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');


use App\Http\Controllers\FrontendController;

// Route for the courses page
Route::get('/course', [FrontendController::class, 'courses'])->name('courses');

// Route for the index page
Route::get('/', [FrontendController::class, 'index'])->name('index');

// Route for the privacy policy page
Route::get('/privacypolicy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/coursedetails', [FrontendController::class, 'coursedetails'])->name('coursedetails');
// Route for showing course details
Route::get('/courses/{id}', [FrontEndController::class, 'coursedetails'])->name('courses.show');

// Route for the terms and conditions page
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions'])->name('terms-conditions');

// Route for the blog details page
Route::get('/blogdetails', [FrontendController::class, 'blogDetails'])->name('blogdetails');

// Route for the WordPress details page
Route::get('/wordpressdetails', [FrontendController::class, 'wordpressDetails'])->name('wordpressdetails');

