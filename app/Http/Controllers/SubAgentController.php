<?php

namespace App\Http\Controllers;

use App\Models\SubAgent;
use App\Models\Agent;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SubAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $agents = DB::table('sub_agents')
    ->join('agents', 'sub_agents.agent_id', '=', 'agents.id') // Join Subagents and Agents
    ->join('users as agent_user', 'agents.user_id', '=', 'agent_user.id') // Join Agents with Users for agent data
    ->join('users as subagent_user', 'sub_agents.user_id', '=', 'subagent_user.id')
    ->select('sub_agents.*', 'agents.*', 'agent_user.name as agent_name','agent_user.email as agent_email', 'subagent_user.name as name', 'subagent_user.email as email',  'agent_user.status as agent_status', 'subagent_user.status as status')
        ->get();
        // return $agents;
        return view('admin.sub_agent.index')->with('agents', $agents);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents= DB::table('agents')
        ->join('users', 'users.id', '=', 'agents.user_id')
        ->select('agents.*', 'users.name')
        ->get();
        // return $agents;

        return view('admin.sub_agent.create')->with('agents', $agents);
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
            'agent_id'=>'required',
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make('123456');
        $user->role='SubAgent';
        $user->status='Active';
        $user->save();

        $agent= new SubAgent();
        $agent->company_name=$request->company_name;
        $agent->phone=$request->phone;
        $agent->address_one=$request->address_one;
        $agent->address_two=$request->address_two;
        $agent->user_id=$user->id;
        $agent->agent_id=$request->agent_id;
        $agent->create_by=auth()->user()->id;
        $agent->save();
        if ($agent) {
            return redirect()->route('sub.agents')->with('success', 'Sub Agent created successfully');
        }
        else {
            return redirect()->route('sub.agents.create')->with('error', 'Something went wrong');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(SubAgent $subAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubAgent $subAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubAgent $subAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubAgent $subAgent)
    {
        //
    }
}
