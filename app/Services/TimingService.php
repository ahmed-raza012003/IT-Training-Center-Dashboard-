<?php

namespace App\Services;

use App\Models\Timing;

class TimingService
{
    public function create(array $data)
    {
        return Timing::create($data);
    }

    public function update(Timing $timing, array $data)
    {
        return $timing->update($data);
    }

    public function delete(Timing $timing)
    {
        return $timing->delete();
    }

    public function getAll()
    {
        return Timing::with('course')->get();
    }
}
