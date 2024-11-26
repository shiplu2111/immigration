<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Group;
use App\Models\Candidate;
use App\Models\Transection;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->get();
        return view('admin.payment.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.payment.create');
    }

    public function group()
    {
        $groups=Group::orderBy('id', 'desc')->where('group_name', '!=', 'Individual')->get();
        return view('admin.payment.group')->with('groups', $groups);

    }

    public function group_create($id)
    {
        $group=Group::find($id);
        $total_cost=$group->total_cost;
        $due_amount=$total_cost;
        $paid_amount=Payment::where('group_id',$id)->sum('payment_amount');
        if($paid_amount){
            $due_amount=$total_cost-$paid_amount;
        }
        return view('admin.payment.group_create')->with('group', $group)->with('paid_amount', $paid_amount)->with('due_amount', $due_amount);
    }

    public function individual()
    {
        $group=Group::orderBy('id', 'desc')->where('group_name','Individual')->first();
        $candidates=Candidate::orderBy('id', 'desc')->where('group_id',$group->id)->get();

        return view('admin.payment.individual')->with('candidates', $candidates);
    }

    public function individual_create($id)
    {
        $candidate=Candidate::find($id);
        $total_cost=$candidate->total_cost;
        $due_amount=$total_cost;
        $paid_amount=Payment::where('individual_id',$id)->sum('payment_amount');
        if($paid_amount){
            $due_amount=$total_cost-$paid_amount;
        }
        return view('admin.payment.individual_create')->with('candidate', $candidate)->with('paid_amount', $paid_amount)->with('due_amount', $due_amount);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'payment_type' => 'required',
            'payment_amount' => 'required',
            'pay_type' => 'required',
            'bank_name' => 'required',
            'document' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // return $request->all();


try{
    if ($request->payment_type == 'group') {
        $group = Group::find($request->group_id);
        $total_cost = $group->total_cost;
        $due_amount = $total_cost;
        $paid_amount = Payment::where('group_id', $request->group_id)->sum('payment_amount');
    } else {
        $candidate = Candidate::find($request->candidate_id);
        $total_cost = $candidate->total_cost;
        $due_amount = $total_cost;
        $paid_amount = Payment::where('individual_id', $request->candidate_id)->sum('payment_amount');
    }


    if ($paid_amount) {
        $due_amount = $total_cost - $paid_amount;
    }
    else{
        $due_amount = $total_cost;
    }

    if ($due_amount < $request->payment_amount) {
        return redirect()->back()->with('error', 'Payment amount cannot exceed the due amount.');
    }

        $image = $request->file('document');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->store('uploads/paymentslip/', 'public');
        $imageUrl = '/storage/' . $path;

    // return $imageUrl;


    $payment = new Payment();
    $payment->payment_type = $request->payment_type;
    $payment->pay_type = $request->pay_type;
    $payment->bank_name = $request->bank_name;
    $payment->document= $imageUrl;
    $payment->payment_amount = $request->payment_amount;
    if($request->payment_type=='individual'){
        $payment->individual_id = $request->candidate_id;
    }
    else{
        $payment->group_id = $request->group_id;
    }
    $payment->due_amount = $due_amount-$request->payment_amount;
    $payment->create_by = auth()->user()->id;
    $payment->save();





    $transection = new Transection();
    $transection->transection_name = 'Payment Received for ' . $request->payment_type;
    $transection->transection_description = 'Payment for '.$request->payment_type . ' of ' . $request->payment_amount;
    $transection->transection_type = 'Payment Received for ' . $request->payment_type . ' of ' . $request->payment_amount . ' from ' . $request->bank_name . ' by ' . auth()->user()->name .'Payment Option' . $request->pay_type;
    $transection->transection_source  = 'Income';
    $transection->transection_amount = $request->payment_amount;
    $transection->tansection_tax = 0;
    $transection->create_by = auth()->user()->id;
    $transection->save();
    if ($request->payment_type == 'group') {
        return redirect()->route('payment.group')->with('success', 'Payment created successfully');
    } else {
        return redirect()->route('payment.individual')->with('success', 'Payment created successfully');
    }
}
catch(\Exception $e){
    return redirect()->back()->with('error', 'Payment amount cannot exceed the due amount.');
}


    }

    /**
     * Display the specified resource.
     */
    public function group_payment_details($id)
    {
        $group=Group::find($id);
        $payments=Payment::where('group_id',$id)->get();
        // return $payments;
        return view('admin.payment.group_payment_details')->with('payments', $payments)->with('group', $group);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function candidate_payment_details($id)
    {
        $candidate=Candidate::find($id);
        $payments=Payment::where('individual_id',$id)->get();
        //  return $candidate;
        return view('admin.payment.candidate_payment_details')->with('payments', $payments)->with('candidate', $candidate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
