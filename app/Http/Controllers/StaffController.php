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

    public function show($id)
{
    $staff = StaffMember::find($id);

    if (!$staff) {
        return redirect()->route('staff.index')->with('error', 'Staff member not found.');
    }

    return view('content.humanresources.staff.details', compact('staff'));
}

    public function index()
    {
        $staffMembers = StaffMember::paginate(10);
        return view('content.humanresources.staff.index', compact('staffMembers'));
    }

    public function create()
    {
        return view('content.humanresources.staff.create');
    }

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

    public function edit(StaffMember $staffMember)
    {
        return view('content.humanresources.staff.edit', compact('staffMember'));
    }

    public function update(UpdateStaffRequest $request, StaffMember $staffMember)
    {
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

    public function destroy(StaffMember $staffMember)
    {
        $this->staffService->delete($staffMember);
        return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully.');
    }
}
