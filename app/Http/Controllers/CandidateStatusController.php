<?php

namespace App\Http\Controllers;

use App\Models\CandidateStatus;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // return $request->all();
        $validated = $request->validate([

            'status_name' => 'required',
            'status' => 'required',
        ]);
        $data= CandidateStatus::create([
            'candidate_id' => $request->candidate_id,
            'status_name' => $request->status_name,
            'status' => $request->status,
            'create_by' => auth()->user()->id,
        ]);




        if ($data) {
            $update = Candidate::find($request->candidate_id);
            $update->status = $request->status_name;
            $update->save();
            return redirect()->back()->with('success', 'Status created successfully');
        }
        else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CandidateStatus $candidateStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CandidateStatus $candidateStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $data = CandidateStatus::find($id);
        if($data->status == 'rejected'){
            $data->status = 'accepted';
            $data->save();
        }
        else{
            $data->status = 'rejected';
            $data->save();
        }
        return redirect()->back()->with('success', 'Status updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CandidateStatus $candidateStatus)
    {
        //
    }
}
