<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Courses page
    public function courses()
    {
        $courses = Course::with('batch')->paginate(10);
        return view('frontend.courses',compact('courses'));
    }

    // Index page (Home)
    public function index()
    { $courses = Course::all();
        $instructors = Instructor::all(); // Fetch all instructors
        return view('Frontend.index', compact('instructors','courses'));
    }
    

    // Privacy Policy page
    public function privacyPolicy()
    {
        return view('frontend.privacypolicy');
    }
    public function coursedetails($id)
    {
        $course = Course::with('instructor')->findOrFail($id); // Fetch the course with the instructor relationship
    
        // Assuming these values are defined somewhere or can be derived from the course
        $months = $course->duration; // Duration in months from the course model
        $sessionsPerWeek = 2; // Number of sessions per week
        $hoursPerSession = 2; // Duration of each session in hours
        $weeksPerMonth = 4.33; // Average weeks in a month
    
        // Calculate total hours
        $totalHours = $months * $weeksPerMonth * $sessionsPerWeek * $hoursPerSession;
    
        return view('frontend.coursedetails', compact('course', 'totalHours'));
    }
    
    

    // Terms and Conditions page
    public function termsConditions()
    {
        return view('frontend.termscondition');
    }

    // Blog Details page
    public function blogDetails()
    {
        return view('frontend.others.blogdetails');
    }

    // WordPress Details page
    public function wordpressDetails()
    {
        return view('frontend.others.wordpressdetails');
    }
}
