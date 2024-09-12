<?php

namespace App\Services;

use App\Models\FeeStructure;

class FeeStructureService
{
    /**
     * Retrieve all Fee Structures
     */
    public function getAll()
    {
        return FeeStructure::with('timing')->get();
    }

    /**
     * Create a new Fee Structure
     *
     * @param array $data
     */
    public function create(array $data)
    {
        // Calculate the final fee
        $data['final_fee'] = $data['main_fee'] - $data['discount_fee'];

        FeeStructure::create($data);
    }

    /**
     * Update an existing Fee Structure
     *
     * @param FeeStructure $feeStructure
     * @param array $data
     */
    public function update(FeeStructure $feeStructure, array $data)
    {
        // Recalculate final fee based on the new values
        $data['final_fee'] = $data['main_fee'] - $data['discount_fee'];

        $feeStructure->update($data);
    }

    /**
     * Delete a Fee Structure
     *
     * @param FeeStructure $feeStructure
     */
    public function delete(FeeStructure $feeStructure)
    {
        $feeStructure->delete();
    }
}
