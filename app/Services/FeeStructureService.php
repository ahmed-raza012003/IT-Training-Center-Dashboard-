<?php

namespace App\Services;

use App\Models\FeeStructure;

class FeeStructureService
{
    public function create(array $data)
    {
        return FeeStructure::create($data);
    }

    public function update(FeeStructure $feeStructure, array $data)
    {
        return $feeStructure->update($data);
    }

    public function delete(FeeStructure $feeStructure)
    {
        return $feeStructure->delete();
    }

    public function getAll()
    {
        return FeeStructure::with('timing')->get();
    }
}
