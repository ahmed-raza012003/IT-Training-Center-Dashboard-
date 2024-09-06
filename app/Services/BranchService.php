<?php

namespace App\Services;

use App\Models\Branch;

class BranchService
{
    public function create(array $data)
    {
        return Branch::create($data);
    }

    public function getAll()
    {
        return Branch::all();
    }

    public function update(Branch $branch, array $data)
    {
        return $branch->update($data);
    }

    public function delete(Branch $branch)
    {
        return $branch->delete();
    }
}
