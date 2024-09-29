<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\StaffMember;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Basic counts
        $instructorCount = Instructor::count();
        $studentCount = Student::count();
        $courseCount = Course::count();
        $staffCount = StaffMember::count();
    
        // Retrieve the top 5 courses with the most enrolled students
        $topCourses = Course::withCount('students')
                            ->orderBy('students_count', 'desc')
                            ->take(5)
                            ->get();
    
        // Dynamic student registrations over time (e.g., past 6 months)
        $registrations = Student::where('created_at', '>=', now()->subMonths(6))
                                ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
                                ->groupBy('month')
                                ->orderBy('month', 'asc')
                                ->get()
                                ->pluck('count', 'month')
                                ->toArray();
    
        // Prepare months and registration counts
        $months = [];
        $registrationsPerMonth = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i)->format('Y-m'); // Getting the month in 'YYYY-MM' format
            $months[] = now()->subMonths($i)->format('F Y'); // Month name (e.g., "September 2024")
            $registrationsPerMonth[] = $registrations[$date] ?? 0; // Use 0 if no registrations for that month
        }
    
        // Dynamic student registrations over time
        $registrationDates = Student::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                                    ->groupBy('date')
                                    ->orderBy('date', 'asc')
                                    ->get()
                                    ->pluck('count', 'date')
                                    ->toArray();
    
        // Create data for the graph
        $dates = array_keys($registrationDates);
        $studentsPerDate = array_values($registrationDates);
    
        return view('content.index', compact('studentCount', 'courseCount', 'staffCount', 'instructorCount', 'topCourses', 'dates', 'studentsPerDate', 'months', 'registrationsPerMonth'));
    }
    
    public function create()
    {
        return view('content.create');
    }

    public function list()
    {
        return view('content.list');
    }

    public function edit()
    {
        return view('content.edit');
    }

    public function catagory_create()
    {
        return view('content.catagory.create');
    }

    public function catagory_list()
    {
        return view('content.catagory.list');
    }

    public function catagory_edit()
    {
        return view('content.catagory.edit');
    }

    public function warehouse()
    {
        return view('content.inventory.warehouse');
    }

    public function receivedorders()
    {
        return view('content.inventory.receivedorders');
    }

    public function order_list()
    {
        return view('content.order.list');
    }

    public function order_cart()
    {
        return view('content.order.cart');
    }

    public function order_checkout()
    {
        return view('content.order.checkout');
    }

    public function purchases_list()
    {
        return view('content.purchases.list');
    }

    public function purchases_order()
    {
        return view('content.purchases.order');
    }

    public function purchases_return()
    {
        return view('content.purchases.return');
    }

    public function attributes_create()
    {
        return view('content.attributes.create');
    }

    public function attributes_list()
    {
        return view('content.attributes.list');
    }

    public function attributes_edit()
    {
        return view('content.attributes.edit');
    }

    public function invoices_create()
    {
        return view('content.invoices.create');
    }

    public function invoices_list()
    {
        return view('content.invoices.list');
    }

    public function invoices_details()
    {
        return view('content.invoices.details');
    }

    public function profile_profile()
    {
        return view('content.profile.profile');
    }

    public function roles_create()
    {
        return view('content.roles.create');
    }

    public function roles_list()
    {
        return view('content.roles.list');
    }

    public function roles_edit()
    {
        return view('content.roles.edit');
    }
    
    
}
