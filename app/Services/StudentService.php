<?php
namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentService
{
    public function create(array $data)
    {
        // Generate the registration number
        $batchNumber = $data['batch_id'];
        $studentCount = Student::where('batch_id', $batchNumber)->count() + 1;
        $data['registration_number'] = 'ITC-' . $batchNumber . '-' . str_pad($studentCount, 3, '0', STR_PAD_LEFT);

        return Student::create($data);
    }

    public function update(Student $student, array $data)
    {
        return $student->update($data);
    }

    public function delete(Student $student)
    {
        if ($student->profile_picture) {
            Storage::disk('public')->delete($student->profile_picture);
        }

        return $student->delete();
    }
}
