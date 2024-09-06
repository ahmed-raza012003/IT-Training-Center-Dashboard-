<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timing;
use App\Models\Course;
use App\Services\TimingService;
use App\Http\Requests\StoreTimingRequest;
use App\Http\Requests\UpdateTimingRequest;

class TimingController extends Controller
{
    protected $timingService;

    public function __construct(TimingService $timingService)
    {
        $this->timingService = $timingService;
    }

    public function index()
    {
        $timings = $this->timingService->getAll();
        return view('content.timing.index', compact('timings'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('content.timing.create', compact('courses'));
    }

    public function store(StoreTimingRequest $request)
    {
        $this->timingService->create($request->validated());
        return redirect()->route('timings.index')->with('success', 'Timing created successfully.');
    }

    public function edit(Timing $timing)
    {
        $courses = Course::all();
        return view('content.timing.edit', compact('timing', 'courses'));
    }

    public function update(UpdateTimingRequest $request, Timing $timing)
    {
        $this->timingService->update($timing, $request->validated());
        return redirect()->route('timings.index')->with('success', 'Timing updated successfully.');
    }

    public function destroy(Timing $timing)
    {
        $this->timingService->delete($timing);
        return redirect()->route('timings.index')->with('success', 'Timing deleted successfully.');
    }
}
