<?php

namespace App\Services;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseService
{
    public function create(array $data)
    {
        // Handle image upload if it exists
        if (isset($data['image'])) {
            $data['image'] = $this->uploadImage($data['image']);
        }

        return Course::create($data);
    }

    public function getAll()
    {
        return Course::with('batch')->get();
    }

    public function update(Course $course, array $data)
    {
        // Handle image update if a new image is uploaded
        if (isset($data['image'])) {
            $this->deleteImage($course->image);
            $data['image'] = $this->uploadImage($data['image']);
        }

        return $course->update($data);
    }

    public function delete(Course $course)
    {
        $this->deleteImage($course->image);
        return $course->delete();
    }

    private function uploadImage($image)
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
