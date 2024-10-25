<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCandidate;
use App\Models\Candidate;
use App\Models\Transection;
use Illuminate\Http\Request;

class ExpenseCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.candidate_expence.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'candidate_id' => 'required',
        'amount' => 'required|numeric',
        'expense_type' => 'required',
    ]);

    $expenseType = $request->expense_type;
    $candidateId = $request->candidate_id;
    $amount = $request->amount;
    $userId = auth()->user()->id;

    // Retrieve the candidate and current expense record
    $candidate = Candidate::findOrFail($candidateId);
    $expense = ExpenseCandidate::firstOrNew(['candidate_id' => $candidateId]);

    // Determine if we're updating an existing amount or creating a new one
    $isUpdate = $expense->$expenseType !== null;
    $previousAmount = $expense->$expenseType;

    // Update or set the expense type amount
    $expense->$expenseType = $amount;
    $expense->create_by = $userId;
    $expense->save();

    // Create the transaction description
    $transactionDescription = $isUpdate
        ? "{$amount} ৳ expense for {$candidate->name} {$expenseType} updated by " . auth()->user()->name . " which was before-{$previousAmount} now-{$amount}"
        : "{$amount} ৳ expense for {$candidate->name} {$expenseType} created by " . auth()->user()->name;

    // Create a new transaction
    Transection::create([
        'transection_name' => 'Expense-for-' . $candidate->name . '-' . $expenseType,
        'transection_description' => $transactionDescription,
        'transection_type' => $expenseType,
        'transection_source' => 'Expense',
        'transection_amount' => $amount,
        'tansection_tax' => 0,
        'create_by' => $userId,
    ]);

    // Return response based on update or creation
    if ($isUpdate) {
        return back()->with('success', 'Expense updated successfully');
    } else {
        return back()->with('success', 'Expense created successfully');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(ExpenseCandidate $expenseCandidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCandidate $expenseCandidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpenseCandidate $expenseCandidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCandidate $expenseCandidate)
    {
        //
    }
}
