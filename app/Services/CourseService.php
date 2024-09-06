<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{
    public function create(array $data)
    {
        return Course::create($data);
    }

    public function getAll()
    {
        return Course::with('batch')->get();
    }

    public function update(Course $course, array $data)
    {
        return $course->update($data);
    }

    public function delete(Course $course)
    {
        return $course->delete();
    }
}
