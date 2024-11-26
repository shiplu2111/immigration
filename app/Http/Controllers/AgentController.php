<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();

        // Attach group names to each agent
        // foreach ($agents as $agent) {
        //     $groupIds = json_decode($agent->group_id); // Decode the JSON string
        //     $agent->group_names = Group::whereIn('id', $groupIds)->pluck('group_name');
        // }
        // return $agents;
        $agents = Agent::with('user')->get();
        return view('admin.agent.index')->with('agents', $agents);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all()->where('group_name', '!=', 'Individual');
        // return $groups;
        return view('admin.agent.create')->with('groups', $groups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'company_name'=>'required',
            'phone'=>'required',
            'address_one'=>'required',
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make('123456');
        $user->role='Agent';
        $user->status='Active';
        $user->save();

        $agent= new Agent();
        $agent->company_name=$request->company_name;
        $agent->group_id= json_encode($request->group_id);
        $agent->phone=$request->phone;
        $agent->address_one=$request->address_one;
        $agent->address_two=$request->address_two;
        $agent->user_id=$user->id;
        $agent->create_by=auth()->user()->id;
        $agent->save();
        // return $agent;
        if ($agent) {
            return redirect()->route('agents')->with('success', 'Agent created successfully');
        }
        else {
            return redirect()->route('agents.create')->with('error', 'Something went wrong');
        }
    }
public function searchAgents()
{
     // 'term' is the default parameter used by jQuery UI autocomplete

    // Fetch agent names that match the search term
        $agents = Agent::where('status', 'Active')->get();


    // Return the results as an array for jQuery UI autocomplete

    return response()->json($agents);
}

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
