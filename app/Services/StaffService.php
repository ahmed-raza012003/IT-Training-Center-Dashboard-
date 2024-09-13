<?php

namespace App\Services;

use App\Models\StaffMember;
use Illuminate\Support\Facades\Storage;

class StaffService
{
    public function create(array $data)
    {
        // Create a new staff member
        return StaffMember::create($data);
    }

    public function update(StaffMember $staffMember, array $data)
    {
        return $staffMember->update($data);
    }

    public function delete(StaffMember $staffMember)
    {
        if ($staffMember->profile_picture) {
            Storage::disk('public')->delete($staffMember->profile_picture);
        }

        return $staffMember->delete();
    }
}
