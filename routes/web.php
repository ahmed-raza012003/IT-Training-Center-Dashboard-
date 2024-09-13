<?php
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Content Routes
Route::get('/create', [DashboardController::class, 'create'])->name('create');
Route::post('/create', [DashboardController::class, 'store'])->name('store');
Route::get('/list', [DashboardController::class, 'list'])->name('list');
Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [DashboardController::class, 'update'])->name('update');

// Category Routes
Route::get('/category/create', [DashboardController::class, 'catagory_create'])->name('category_create');
Route::post('/category/create', [DashboardController::class, 'category_store'])->name('category_store');
Route::get('/category/list', [DashboardController::class, 'catagory_list'])->name('category_list');
Route::get('/category/edit/{id}', [DashboardController::class, 'catagory_edit'])->name('category_edit');
Route::post('/category/edit/{id}', [DashboardController::class, 'category_update'])->name('category_update');

// Inventory Routes
Route::get('/warehouse', [DashboardController::class, 'warehouse'])->name('warehouse');
Route::get('/receivedorders', [DashboardController::class, 'receivedorders'])->name('receivedorders');

// Order Routes
Route::get('/order/list', [DashboardController::class, 'order_list'])->name('order_list');
Route::get('/order/cart', [DashboardController::class, 'order_cart'])->name('order_cart');
Route::get('/order/checkout', [DashboardController::class, 'order_checkout'])->name('order_checkout');

// Purchase Routes
Route::get('/purchases/list', [DashboardController::class, 'purchases_list'])->name('purchases_list');
Route::get('/purchases/order', [DashboardController::class, 'purchases_order'])->name('purchases_order');
Route::get('/purchases/return', [DashboardController::class, 'purchases_return'])->name('purchases_return');

// Attribute Routes
Route::get('/attributes/create', [DashboardController::class, 'attributes_create'])->name('attributes_create');
Route::post('/attributes/create', [DashboardController::class, 'attributes_store'])->name('attributes_store');
Route::get('/attributes/list', [DashboardController::class, 'attributes_list'])->name('attributes_list');
Route::get('/attributes/edit/{id}', [DashboardController::class, 'attributes_edit'])->name('attributes_edit');
Route::post('/attributes/edit/{id}', [DashboardController::class, 'attributes_update'])->name('attributes_update');

// Invoice Routes
Route::get('/invoices/create', [DashboardController::class, 'invoices_create'])->name('invoices_create');
Route::post('/invoices/create', [DashboardController::class, 'invoices_store'])->name('invoices_store');
Route::get('/invoices/list', [DashboardController::class, 'invoices_list'])->name('invoices_list');
Route::get('/invoices/details/{id}', [DashboardController::class, 'invoices_details'])->name('invoices_details');

// Profile Routes
Route::get('/profile/profile', [DashboardController::class, 'profile_profile'])->name('profile_profile');

// Role Routes
Route::get('/roles/create', [DashboardController::class, 'roles_create'])->name('roles_create');
Route::post('/roles/create', [DashboardController::class, 'roles_store'])->name('roles_store');
Route::get('/roles/list', [DashboardController::class, 'roles_list'])->name('roles_list');
Route::get('/roles/edit/{id}', [DashboardController::class, 'roles_edit'])->name('roles_edit');
Route::post('/roles/edit/{id}', [DashboardController::class, 'roles_update'])->name('roles_update');
// Branch Routes
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


// Staff Routes
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff/create', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/{id}', [StaffController::class, 'show'])->name('staff.show');
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::post('/staff/{id}/edit', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');



// Route to view all attendances
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');


Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

// Route to store a new attendance record
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');