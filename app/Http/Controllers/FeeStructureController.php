<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeStructure;
use App\Models\Timing;
use App\Http\Requests\StoreFeeStructureRequest;
use App\Http\Requests\UpdateFeeStructureRequest;
use App\Services\FeeStructureService;

class FeeStructureController extends Controller
{
    protected $feeStructureService;

    public function __construct(FeeStructureService $feeStructureService)
    {
        $this->feeStructureService = $feeStructureService;
    }

    public function index()
    {
        $fees = $this->feeStructureService->getAll();
        return view('content.feestructure.index', compact('fees'));
    }

    public function create()
    {
        $timings = Timing::all();
        return view('content.feestructure.create', compact('timings'));
    }

    public function store(StoreFeeStructureRequest $request)
    {
        $validatedData = $request->validated();

        // Service handles fee calculation and creation
        $this->feeStructureService->create($validatedData);

        return redirect()->route('fees.index')->with('success', 'Fee Structure created successfully.');
    }

    public function edit(FeeStructure $feeStructure)
    {
        $timings = Timing::all();
        return view('content.feestructure.edit', compact('feeStructure', 'timings'));
    }

    public function update(UpdateFeeStructureRequest $request, FeeStructure $feeStructure)
    {
        $validatedData = $request->validated();

        // Service handles fee update logic
        $this->feeStructureService->update($feeStructure, $validatedData);

        return redirect()->route('fees.index')->with('success', 'Fee Structure updated successfully.');
    }

    public function destroy(FeeStructure $feeStructure)
    {
        // Service handles deletion
        $this->feeStructureService->delete($feeStructure);

        return redirect()->route('fees.index')->with('success', 'Fee Structure deleted successfully.');
    }
}
