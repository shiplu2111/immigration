<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()){

            return redirect()->route('dashboard');

    }
    else{
        return view('auth.login');
    }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
