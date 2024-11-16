<?php

namespace App\Http\Controllers;

use App\Models\OfficeExpense;
use App\Models\Transection;
use Illuminate\Http\Request;
use Carbon\Carbon;
class OfficeExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = OfficeExpense::all();
        return view('admin.expense.index')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.expense.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'expense_type' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'expense_description'=> 'required',
        ]);
        if($request->expense_type == 'rent'){
            $expense_name='Office rent';
        }elseif($request->expense_type == 'service_charge'){
            $expense_name='Service charge';
        }elseif($request->expense_type == 'electricity_bill'){
            $expense_name='Electricity bill';
        }elseif($request->expense_type == 'gas_bill'){
            $expense_name='Gas bill';
        }elseif($request->expense_type == 'gasoline_bill'){
            $expense_name='Gasoline bill';
        }elseif($request->expense_type == 'stationary_bill'){
            $expense_name='Stationary bill';
        }elseif($request->expense_type == 'food_bill'){
            $expense_name='Food bill';
        }elseif($request->expense_type == 'non_food_bill'){
            $expense_name='Non Food bill';
        }elseif($request->expense_type == 'cleaning_bill'){
            $expense_name='Cleaning bill';
        }elseif($request->expense_type == 'transport_bill'){
            $expense_name='Salary';
        }elseif($request->expense_type == 'salary'){
            $expense_name='Transport bill';
        }elseif($request->expense_type == 'bonus'){
            $expense_name='Bonus';
        }elseif($request->expense_type == 'special_allowance'){
            $expense_name='Special allowance';
        }
        else{
            $expense_name='Other Expense';
        }

        if ($request->hasFile('image')) {
            $year = Carbon::parse($request->date)->format('Y');
            $month = Carbon::parse($request->date)->format('F');
            $image = $request->file('image');
                $path = $image->store('office_expense/'.$year.'/'.$month, 'public');
        }
        $office_expense = new OfficeExpense();
        $office_expense->expense_type = $request->expense_type;
        $office_expense->expense_name = $expense_name;
        $office_expense->amount = $request->amount;
        $office_expense->expense_description = $request->expense_description;
        $office_expense->image =$path ?? '';
        $office_expense->date = $request->date;
        $office_expense->create_by = auth()->user()->id;
        $office_expense->save();

        $transection = new Transection();
        $transection->transection_name = 'Expense for ' . $request->expense_type;
        $transection->transection_description = 'Paid  '.$request->expense_type . ' of ' . $request->amount;
        $transection->transection_type = $request->expense_type;
        $transection->transection_source  = 'Expense';
        $transection->transection_amount = $request->amount;
        $transection->tansection_tax = 0;
        $transection->create_by = auth()->user()->id;
        $transection->save();

        return redirect()->route('expenses')->with('success', 'Expense added successfully');
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
    public function filter(Request $request)
    {
        if($request->input('start_date') == null || $request->input('end_date') == null){
            $expenses = OfficeExpense::all();
            return view('admin.expense.index')->with('expenses', $expenses);
        }
        else{
            $startDate = $request->input('start_date'); // e.g., '2023-01-01'
            $endDate = $request->input('end_date');     // e.g., '2023-12-31'

            $expenses = OfficeExpense::whereBetween('date', [$startDate, $endDate])->get();
            return view('admin.expense.index')->with('expenses', $expenses);
        }
        // return $request->all();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OfficeExpense $officeExpense)
    {
        //
    }
}
