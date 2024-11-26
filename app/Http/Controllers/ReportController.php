<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Group;
use App\Models\User;
use App\Models\Agent;
use App\Models\Payment;
use App\Models\Transection;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $individual_payments = DB::table('payments')->where('payment_type', 'individual')
            ->paginate(10);
            // return $individual_payments;


        return view('admin.report.index')->with('individual_payments', $individual_payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function transection()
    {
        $transections=Transection::paginate(10);
        // return $transections;
        return view('admin.report.transection')->with('transections', $transections);
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
    public function filter_individual( Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'start_date.before_or_equal' => 'The start date must be before or equal to the end date.',
            'end_date.after_or_equal' => 'The end date must be after or equal to the start date.',
        ]);
         $individual_payments = DB::table('payments')

            ->select('candidates.name',
            'candidates.passport_number',
            'candidates.status',
            'candidates.total_cost',
             DB::raw('SUM(payments.payment_amount) as total_payment'),
             DB::raw('MAX(payments.created_at) as last_update'))
            ->join('candidates', 'candidates.id', '=', 'payments.individual_id')
            ->where('payment_type', 'individual')
            ->whereBetween('payments.created_at', [$request->start_date, $request->end_date])
            ->groupBy('candidates.id', 'candidates.name','candidates.passport_number', 'candidates.status', 'candidates.total_cost')
            ->paginate(10);
        return view('admin.report.index')->with('individual_payments', $individual_payments);
    }

    public function filter_group( Request $request)
    {

        $validated = $request->validate([
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'start_date.before_or_equal' => 'The start date must be before or equal to the end date.',
            'end_date.after_or_equal' => 'The end date must be after or equal to the start date.',
        ]);
        $group_payments = DB::table('payments')
        ->where('payments.payment_type', 'group')
        ->whereBetween('payments.created_at', [$request->start_date, $request->end_date])
        ->paginate(10);


        return view('admin.report.group')
        ->with('group_payments', $group_payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function group_reports()
    {
        $group_payments = DB::table('payments')->where('payment_type', 'group')->paginate(10);
        // return $group_payments;


    //     $group_payments = DB::table('payments')
    // ->select(
    //     'groups.group_name',
    //     'groups.group_code',
    //     'groups.status as group_status',
    //     'groups.editable',
    //     'groups.created_by as group_created_by',
    //     DB::raw('SUM(payments.payment_amount) as total_payment'),
    //     DB::raw('SUM(payments.total_amount) as total_amount'),
    //     DB::raw('SUM(payments.due_amount) as due_amount'),
    //     DB::raw('MAX(payments.created_at) as last_update')
    // )
    // ->join('groups', 'groups.id', '=', 'payments.group_id')  // Join with groups
    // ->where('payments.payment_type', 'group')
    // ->groupBy(
    //     'groups.id',
    //     'groups.group_name',
    //     'groups.group_code',
    //     'groups.status',
    //     'groups.editable',
    //     'groups.created_by'
    // )

    // return $group_payments;
    return view('admin.report.group')
    ->with('group_payments', $group_payments);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
