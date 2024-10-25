<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyInfo::all();
        // return $companies;
        return view('admin.company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'visa_type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'contact_person' => 'required',
            'contact_telephone' => 'required',
            'contact_email' => 'required|email',
            'job_category' => 'required',
            'contract_duration' => 'required',
            'salary' => 'required',
            'accommodation' => 'required',
            'meal' => 'required',
            'uniform' => 'required',
            'transportation' => 'required',
            'yearly_vacation' => 'required',
            'air_ticket' => 'required',
            'status' => 'required',
        ]);

        $companyInfo = new CompanyInfo();
        $companyInfo->name = $request->name;
        $companyInfo->visa_type = $request->visa_type;
        $companyInfo->address = $request->address;
        $companyInfo->city = $request->city;
        $companyInfo->country = $request->country;
        $companyInfo->telephone = $request->telephone;
        $companyInfo->email = $request->email;
        $companyInfo->contact_person = $request->contact_person;
        $companyInfo->contact_telephone = $request->contact_telephone;
        $companyInfo->contact_email = $request->contact_email;
        $companyInfo->job_category = $request->job_category;
        $companyInfo->contract_duration = $request->contract_duration;
        $companyInfo->salary = $request->salary;
        $companyInfo->accommodation = $request->accommodation;
        $companyInfo->meal = $request->meal;
        $companyInfo->uniform = $request->uniform;
        $companyInfo->transportation = $request->transportation;
        $companyInfo->yearly_vacation = $request->yearly_vacation;
        $companyInfo->air_ticket = $request->air_ticket;
        $companyInfo->create_by = auth()->user()->id;
        $companyInfo->status = $request->status;
        $companyInfo->save();
        return redirect()->route('companies')->with('success', 'Company created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyInfo $companyInfo , $id)
    {
        $company = CompanyInfo::find($id);
        return view('admin.company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyInfo $companyInfo , $id)
    {
        $company = CompanyInfo::find($id);
        return view('admin.company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyInfo $companyInfo, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'visa_type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'contact_person' => 'required',
            'contact_telephone' => 'required',
            'contact_email' => 'required|email',
            'job_category' => 'required',
            'contract_duration' => 'required',
            'salary' => 'required',
            'accommodation' => 'required',
            'meal' => 'required',
            'uniform' => 'required',
            'transportation' => 'required',
            'yearly_vacation' => 'required',
            'air_ticket' => 'required',
            'status' => 'required',
        ]);
        $company = CompanyInfo::find($id);
        $company->update($request->all());
        return redirect()->route('companies')->with('success', 'Company updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}
