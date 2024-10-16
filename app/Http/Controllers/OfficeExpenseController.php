<?php

namespace App\Http\Controllers;

use App\Models\OfficeExpense;
use Illuminate\Http\Request;

class OfficeExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.office-expense.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OfficeExpense $officeExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OfficeExpense $officeExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OfficeExpense $officeExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OfficeExpense $officeExpense)
    {
        //
    }
}
