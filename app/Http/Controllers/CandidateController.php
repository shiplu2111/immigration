<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::orderBy('id', 'desc')->get();
        return view('admin.candidate.index')->with('candidates', $candidates);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = User::whereIn('role', ['Agent', 'SubAgent', 'admin'])->get();
        return view('admin.candidate.create')->with('agents', $agents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'agent_id' => 'required',
            'country' => 'required',
            'marital_status' => 'required',
            'birth_place' => 'required',
            'passport_number' => 'required',
            'passport_issue_date' => 'required',
            'passport_expiry_date' => 'required',
            'village' => 'required',
            'thana' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'emergency_contact_name' => 'required',
            'emergency_contact_relation' => 'required',
            'emergency_contact_phone' => 'required|numeric',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->dob = $request->dob;
        $candidate->country = $request->country;
        $candidate->gender = $request->gender;
        $candidate->marital_status = $request->marital_status;
        $candidate->birth_place = $request->birth_place;
        $candidate->passport_number = $request->passport_number;
        $candidate->passport_issue_date = $request->passport_issue_date;
        $candidate->passport_expiry_date = $request->passport_expiry_date;
        $candidate->village = $request->village;
        $candidate->thana = $request->thana;
        $candidate->district = $request->district;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->emergency_contact_name = $request->emergency_contact_name;
        $candidate->emergency_contact_relation = $request->emergency_contact_relation;
        $candidate->emergency_contact_phone = $request->emergency_contact_phone;
        $candidate->father_name = $request->father_name;
        $candidate->mother_name = $request->mother_name;
        $candidate->agent_id = $request->agent_id;
        $candidate->create_by = Auth::user()->id;
        $candidate->save();
if($candidate){
    return redirect()->route('candidates')->with('success', 'Candidate created successfully');
}
else{
    return redirect()->route('candidate.create')->with('error', 'Something went wrong');
}

    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
