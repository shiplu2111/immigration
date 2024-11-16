<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::orderBy('serial')->get();
        return view('admin.status.index')->with('statuses', $statuses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validate = $request->validate([
            'status_name' => 'required|unique:statuses',
        ]);
        $lastSerial = DB::table('statuses')->max('serial') ?? 0;


    // Increment the last serial number
    $newSerial = $lastSerial + 1;

    // Prepare the data array with the new serial number

        $data=Status::create([
            'status_name'=>$request->status_name,
            'serial'=>$newSerial,
            'status'=>$request->status,
            'create_by'=>auth()->user()->id,
        ]);
        if ($data) {
            return redirect()->route('status')->with('success', 'Status Updated successfully');
        }
        else {
            return redirect()->route('status.create')->with('error', 'Something went wrong');
        }

    }
    public function updateOrder(Request $request)
    {
        $orderedIds = $request->input('order'); // Array of item IDs in the new order

        foreach ($orderedIds as $index => $id) {
            $status = Status::find($id);
            $status->update(['serial' => $index + 1]); // Update the `serial` field
        }

        return response()->json(['success' => true, 'message' => 'Order updated successfully']);
    }
    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }
    public function status_update($id)
    {
        $status = Status::find($id);
        if($status->status == 'Inactive'){
            $status->status = 'Active';
        }
        else{
            $status->status = 'Inactive';
        }
        $status->save();
        return redirect()->route('status')->with('success', 'Status updated successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }
}
