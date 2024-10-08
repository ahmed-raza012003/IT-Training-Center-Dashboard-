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
        return view('frontend.courses');
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
