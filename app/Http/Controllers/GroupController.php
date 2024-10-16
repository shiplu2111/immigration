<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();

         return view('admin.group.index')->with('groups', $groups);
    }

    public function create()
    {
        return view('admin.group.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_name' => 'required|unique:groups',
        ]);
        $group = new Group();
        $group->group_name = $request->group_name;
        $group->group_code = 'G-'.$request->group_name;
        $group->status = $request->status;
        $group->created_by = auth()->user()->id;
        $group->save();
        if ($group) {
            return redirect()->route('groups')->with('success', 'Group created successfully');
        }
        else {
            return redirect()->route('groups.create')->with('error', 'Something went wrong');
        }
    }
}
