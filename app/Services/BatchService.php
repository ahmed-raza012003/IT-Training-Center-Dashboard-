<?php

namespace App\Services;

use App\Models\Batch;

class BatchService
{
    public function create(array $data)
    {
        return Batch::create($data);
    }

    public function getAll()
    {
        return Batch::with('branch')->get();
    }

    public function update(Batch $batch, array $data)
    {
        return $batch->update($data);
    }

    public function delete(Batch $batch)
    {
        return $batch->delete();
    }
}
