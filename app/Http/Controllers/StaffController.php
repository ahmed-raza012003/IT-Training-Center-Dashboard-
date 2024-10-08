<?php

namespace App\Http\Controllers;

use App\Models\StaffMember;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Services\StaffService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    protected $staffService;

    public function __construct(StaffService $staffService)
    {
        $this->staffService = $staffService;
    }

    // Display a listing of the staff members
    public function index()
    {
        // Paginate the staff members list
        $staffMembers = StaffMember::paginate(10);
        return view('content.humanresources.staff.index', compact('staffMembers'));
    }

    // Show the form for creating a new staff member
    public function create()
    {
        return view('content.humanresources.staff.create');
    }

    // Store a newly created staff member
    public function store(StoreStaffRequest $request)
    {
        $data = $request->validated();

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $this->staffService->create($data);
        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }

    // Show the form for editing the specified staff member
   // Show the form for editing the specified staff member
public function edit($id)
{
    $staffMember = StaffMember::findOrFail($id);
    return view('content.humanresources.staff.edit', compact('staffMember'));
}

// Update the specified staff member in the database
public function update(UpdateStaffRequest $request, $id)
{
    $staffMember = StaffMember::findOrFail($id);
    $data = $request->validated();

    // Handle profile picture upload
    if ($request->hasFile('profile_picture')) {
        if ($staffMember->profile_picture) {
            Storage::disk('public')->delete($staffMember->profile_picture);
        }
        $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    $this->staffService->update($staffMember, $data);
    return redirect()->route('staff.index')->with('success', 'Staff member updated successfully.');
}

// Remove the specified staff member from the database
public function destroy($id)
{
    $staffMember = StaffMember::findOrFail($id);
    $this->staffService->delete($staffMember);
    return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully.');
}


    // Show details of a specific staff member
    public function show($id)
    {
        $staff = StaffMember::find($id);

        if (!$staff) {
            return redirect()->route('staff.index')->with('error', 'Staff member not found.');
        }

        return view('content.humanresources.staff.details', compact('staff'));
    }
}
