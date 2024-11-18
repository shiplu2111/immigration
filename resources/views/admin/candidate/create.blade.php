<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidate Create') }}
        </h2>
    </x-slot>
    <style>

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type="number"] {
    -moz-appearance: textfield;
}
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fs-4 fw-semibold mb-4">Candidate Personal Info</h5>
                        <form method="POST" action="{{ route('candidate.store') }}">
                        @csrf
                    <div class="row">

                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                          @error('name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Name is required
                            </div>
                      @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Date of Birth</label>
                          <input type="date" name="dob" class="form-control" id="exampleInputfirstname4" placeholder="DOB">
                          @error('dob')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Date of Birth is required
                            </div>
                      @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="  form-label">Country to Apply</label>
                          <div id="the-basics" >
                            <span class="twitter-typeahead" style="position: relative; display: inline-block;">

                                <input name="country" class="typeahead form-control tt-input" type="text" placeholder="Countries" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Plus Jakarta Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;">b</pre>
                                <div class="tt-menu tt-empty" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                                    <div class="tt-dataset tt-dataset-states"></div>
                                </div>
                            </span>
                          </div>
                          @error('country')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="job_title" class="form-label">Job Title</label>
                          <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter job title">

                          @error('job_title')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Birth Place</label>
                          <input type="text" name="birth_place" class="form-control" id="exampleInputfirstname4" placeholder="Enter Birth Place">

                          @error('birth_place')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="total_cost" class="form-label">Total Cost</label>
                          <input type="number" name="total_cost" class="form-control" id="total_cost" placeholder="Enter total cost" required>

                          @error('total_cost')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Marital Status</label>
                          <select class="form-select " name="marital_status" aria-label="Default select example" aria-label="Default select example">
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                            <option value="Divorced">Divorced</option>
                          </select>
                          @error('marital_status')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Gender</label>
                          <select name="gender" class="  form-select @error('gender') is-invalid @enderror form-control" aria-label="Default select example">

                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Group</label>
                          <select name="group_id" class=" select2 form-select @error('group_id') is-invalid @enderror form-control" aria-label="Default select example">
                        @foreach ($groups as $group)
                        <option value="{{$group->id}}">{{$group->group_name}} -- ( {{$group->group_code}} ) </option>

                        @endforeach

                          </select>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Passport Number</label>
                          <input type="text" name="passport_number" class="form-control" id="exampleInputfirstname4" placeholder="Enter Passport Number">
                          @error('passport_number')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                       </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Passport Issued Date</label>
                          <input type="date" name ="passport_issue_date" class="form-control" id="exampleInputfirstname4" placeholder="Passport Issued Date">
                          @error('passport_issue_date')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Passport Expiry Date</label>
                          <input type="date" name="passport_expiry_date" class="form-control" id="exampleInputfirstname4" placeholder="Passport Expiry Date">
                          @error('passport_expiry_date')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="division" class="form-label">Division</label>
                            <select class="form-select  select2 " name="division" id="divisions" onchange="divisionsList();">
                                <option disabled selected>Select Division</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>

                     </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">District</label>
                          <select name="district" class=" select2 form-select @error('district') is-invalid @enderror form-control" id="distr" onchange="thanaList();" required></select>


                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Police Station</label>
                          <select name="thana" class=" select2 form-select @error('thana') is-invalid @enderror form-control" id="polic_sta" required></select>


                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Village</label>
                          <input type="text" name="village" class="form-control" id="exampleInputfirstname4" placeholder="Enter Village">
                          @error('village')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Mobile No</label>
                          <input type="tel" name="phone" class="form-control" id="exampleInputfirstname4" placeholder="01712 356789"">
                          @error('phone')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Insert Valid Mobile Number
                            </div>
                      @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Email Address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputfirstname4" placeholder="name@example.com">
                          @error('email')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Insert Valid Email
                            </div>
                      @enderror
                      </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Emergency Contact Name</label>
                          <input type="text" name="emergency_contact_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Emergency Contact Name">
                          @error('emergency_contact_name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Relation with Emergency Contact</label>
                          <input type="text" name="emergency_contact_relation" class="form-control" id="exampleInputfirstname4" placeholder="Enter Relation with Emergency Contact">
                          @error('emergency_contact_relation')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Emergency Contact No</label>
                          <input type="tel" name="emergency_contact_phone" class="form-control" id="exampleInputfirstname4" placeholder="01712 356789">
                          @error('emergency_contact_phone')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required & must be a mobile number
                            </div>
                      @enderror
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Father Name</label>
                          <input type="text" name="father_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Father Name">
                          @error('father_name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Mother Name</label>
                          <input type="text" name="mother_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Mother Name">
                          @error('mother_name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Required
                            </div>
                      @enderror
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Spouse Name</label>
                          <input type="text" name="spouse_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Spouse Name">

                      </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Agent or Sub Agent</label>
                          <select name="agent_user_id" class=" select2 form-select @error('agent_user_id') is-invalid @enderror form-control" aria-label="Default select example" >
                            @foreach ($agents as $agent)
                                <option value="{{$agent->id}}">{{$agent->name}} -{{$agent->role}}</option>
                            @endforeach
                            {{-- <option value="0">Agent</option> --}}
                          </select>
                        </div>

                    </div>


                      <div class="col-12 ">
                        <div class="d-flex align-items-right gap-3 ">
                          <button type="submit" class="btn btn-primary float-right">Submit</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>

                    </div>
                </form>
                  </div>
            </div>
        </div>
      </div>
   </x-app-layout>
