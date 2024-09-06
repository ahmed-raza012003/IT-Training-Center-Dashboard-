<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Branch;
use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use App\Services\BatchService;

class BatchController extends Controller
{
    protected $batchService;

    public function __construct(BatchService $batchService)
    {
        $this->batchService = $batchService;
    }

    public function index()
    {
        $batches = $this->batchService->getAll();
        return view('content.batch.index', compact('batches'));
    }

    public function create()
    {
        $branches = Branch::all();
        return view('content.batch.create', compact('branches'));
    }

    public function store(StoreBatchRequest $request)
    {
        $this->batchService->create($request->validated());
        return redirect()->route('batches.index')->with('success', 'Batch created successfully.');
    }

    public function edit(Batch $batch)
    {
        $branches = Branch::all();
        return view('content.batch.edit', compact('batch', 'branches'));
    }

    public function update(UpdateBatchRequest $request, Batch $batch)
    {
        $this->batchService->update($batch, $request->validated());
        return redirect()->route('batches.index')->with('success', 'Batch updated successfully.');
    }

    public function destroy(Batch $batch)
    {
        $this->batchService->delete($batch);
        return redirect()->route('batches.index')->with('success', 'Batch deleted successfully.');
    }
}
