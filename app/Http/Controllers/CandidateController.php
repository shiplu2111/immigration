<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\Group;
use App\Models\Agent;
use App\Models\Document;
use App\Models\SubAgent;
use App\Models\Clearance;
use App\Models\ExpenseCandidate;
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
        $groups = Group::all();
        return view('admin.candidate.create')->with('agents', $agents)->with('groups', $groups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $validate = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'agent_user_id' => 'required',
            'country' => 'required',
            'marital_status' => 'required',
            'birth_place' => 'required',
            'passport_number' => 'required',
            'passport_issue_date' => 'required',
            'passport_expiry_date' => 'required',
            'village' => 'required',
            'thana' => 'required',
            'district' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'emergency_contact_name' => 'required',
            'emergency_contact_relation' => 'required',
            'emergency_contact_phone' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->dob = $request->dob;
        $candidate->country = $request->country;
        $candidate->gender = $request->gender;
        $candidate->group_id = $request->group_id;
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
        $candidate->spouse_name = $request->spouse_name;
        $candidate->agent_user_id = $request->agent_user_id;
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
    public function show(Candidate $candidate ,$id)
    {
        $candidate = Candidate::find($id);
        $documents = Document::where('candidate_id', $id)->first();
        $clearance = Clearance::where('candidate_id', $id)->first();
        $expense = ExpenseCandidate::where('candidate_id', $id)->first();
        // return $expences;

        if ($clearance) {
            $clearance->bmet_clearance = json_decode($clearance->bmet_clearance, true);
            $clearance->air_ticket = json_decode($clearance->air_ticket, true);
        }
        // return $clearance;
        if ($documents) {
            $documents->passport = json_decode($documents->passport, true);
            $documents->passport_copy = json_decode($documents->passport_copy, true);
            $documents->photo = json_decode($documents->photo, true);
            $documents->police_clearance = json_decode($documents->police_clearance, true);
            $documents->educational_certificate = json_decode($documents->educational_certificate, true);
            $documents->technical_certificate = json_decode($documents->technical_certificate, true);
            $documents->driving_licence = json_decode($documents->driving_licence, true);
            $documents->national_id = json_decode($documents->national_id, true);
        }

        // return $documents;


        $agent = User::find($candidate->agent_user_id);

        $agent_data = Agent::where('user_id', $agent->id)->first();
        if ($agent_data) {
            $agent_data=$agent_data;
        }
        else {
            $agent_data = SubAgent::where('user_id', $agent->id)->first();

        }
        // return $agent_data;
        return view('admin.candidate.show')
        ->with('candidate', $candidate)
        ->with('agent', $agent)
        ->with('agent_data', $agent_data)
        ->with('documents', $documents)
        ->with('clearance', $clearance)
        ->with('expense', $expense);

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
