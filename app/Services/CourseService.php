<?php

namespace App\Services;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class CourseService
{
    public function create(array $data)
    {
        // Handle image upload if it exists and is an instance of UploadedFile
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $data['image'] = $this->uploadImage($data['image']);
        }

        return Course::create($data);
    }

    public function update(Course $course, array $data)
{
    // Handle image upload if a new image is uploaded
    if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
        // Upload the new image and store its path
        $data['image'] = $this->uploadImage($data['image']);
    }

    // Update the course in the database
    return $course->update($data);
}


    public function delete(Course $course)
    {
        // Delete the image if it exists
        $this->deleteImage($course->image);
        return $course->delete();
    }

    private function uploadImage(UploadedFile $image)
    {
        return $image->store('course_images', 'public');
    }

    private function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
}
