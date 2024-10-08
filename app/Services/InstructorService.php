<?php

namespace App\Services;

use App\Models\Instructor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class InstructorService
{
    public function create(array $data)
    {
        // Handle file upload if present and is an instance of UploadedFile
        if (isset($data['profile_picture']) && $data['profile_picture'] instanceof UploadedFile) {
            $path = $data['profile_picture']->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }

        return Instructor::create($data);
    }

    public function update(Instructor $instructor, array $data)
    {
        // Handle file upload if present and is an instance of UploadedFile
        if (isset($data['profile_picture']) && $data['profile_picture'] instanceof UploadedFile) {
            // Delete old profile picture if it exists
            if ($instructor->profile_picture) {
                Storage::disk('public')->delete($instructor->profile_picture);
            }

            // Store new profile picture and update path
            $path = $data['profile_picture']->store('profile_pictures', 'public');
            $data['profile_picture'] = $path;
        }

        return $instructor->update($data);
    }

    public function delete(Instructor $instructor)
    {
        // Delete profile picture if it exists
        if ($instructor->profile_picture) {
            Storage::disk('public')->delete($instructor->profile_picture);
        }

        return $instructor->delete();
    }
}
