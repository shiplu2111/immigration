<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Candidate') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fs-4 fw-semibold mb-4">Update Candidate Personal Info</h5>
                    <form method="POST" action="{{ route('candidate.update', $candidate->id) }}">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputfirstname4" value="{{ old('name', $candidate->name) }}">
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
                                <input type="date" name="dob" class="form-control" id="exampleInputfirstname4" value="{{ old('dob', $candidate->dob) }}">
                                @error('dob')
                                <div class="d-flex align-items-center  me-3 me-md-0">
                                    <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                    Date of Birth is required
                                </div>
                            @enderror
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="  form-label">Country to Apply</label>
                                <div id="the-basics" >
                                <span class="twitter-typeahead" style="position: relative; display: inline-block;">

                                    <input name="country"  value="{{ old('country', $candidate->country) }}" class="typeahead form-control tt-input" type="text" placeholder="Countries" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
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
                            <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label">Birth Place</label>
                                <input type="text" value="{{ old('birth_place', $candidate->birth_place) }}" name="birth_place" class="form-control" id="exampleInputfirstname4" placeholder="Enter Birth Place">

                                @error('birth_place')
                                <div class="d-flex align-items-center  me-3 me-md-0">
                                    <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                    Required
                                </div>
                            @enderror
                            </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="total_cost"class="form-label">Total Cost</label>
                                <input type="number" value="{{ old('total_cost', $candidate->total_cost)}}"  name="total_cost" class="form-control" id="total_cost" placeholder="Enter total total_cost" required>

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
                                <select class="form-select" name="marital_status" aria-label="Default select example">
                                    <option value="Married" {{ old('marital_status', $candidate->marital_status) == 'Married' ? 'selected' : '' }}>Married</option>
                                    <option value="Unmarried" {{ old('marital_status', $candidate->marital_status) == 'Unmarried' ? 'selected' : '' }}>Unmarried</option>
                                    <option value="Divorced" {{ old('marital_status', $candidate->marital_status) == 'Divorced' ? 'selected' : '' }}>Divorced</option>
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
                                <select name="gender" class="form-select @error('gender') is-invalid @enderror form-control" aria-label="Default select example">
                                    <option value="Male" {{ old('gender', $candidate->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender', $candidate->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ old('gender', $candidate->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            </div>
                            <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label"> Group</label>
                                <select name="group_id" class="form-select @error('group_id') is-invalid @enderror form-control" aria-label="Default select example">
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}" {{ old('group_id', $candidate->group_id) == $group->id ? 'selected' : '' }}>
                                            {{ $group->group_name }} -- ( {{ $group->group_code }} )
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            </div>
                            <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label">Passport Number</label>
                                <input type="text" value="{{ old('passport_number', $candidate->passport_number) }}" name="passport_number" class="form-control" id="exampleInputfirstname4" placeholder="Enter Passport Number">
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
                                <input type="date" value="{{ old('passport_issue_date', $candidate->passport_issue_date) }}" name ="passport_issue_date" class="form-control" id="exampleInputfirstname4" placeholder="Passport Issued Date">
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
                                <input type="date" value="{{ old('passport_expiry_date', $candidate->passport_expiry_date) }}" name="passport_expiry_date" class="form-control" id="exampleInputfirstname4" placeholder="Passport Expiry Date">
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
                                <label for="exampleInputfirstname4" class="form-label">Village</label>
                                <input type="text" value="{{ old('village', $candidate->village) }}"  name="village" class="form-control" id="exampleInputfirstname4" placeholder="Enter Village">
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
                                <label for="exampleInputfirstname4" class="form-label">Thana</label>
                                <input type="text"  value="{{ old('thana', $candidate->thana) }}" name="thana" class="form-control" id="exampleInputfirstname4" placeholder="Enter Thana">
                                @error('thana')
                                <div class="d-flex align-items-center  me-3 me-md-0">
                                    <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                    Required
                                </div>
                            @enderror
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label">District</label>
                                <input type="text"  value="{{ old('district', $candidate->district) }}" name="district" class="form-control" id="exampleInputfirstname4" placeholder="Enter District">
                                @error('district')
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
                                <input type="tel" value="{{ old('phone', $candidate->phone) }}" name="phone" class="form-control" id="exampleInputfirstname4" placeholder="01712 356789"">
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
                                <input type="email" value="{{ old('email', $candidate->email) }}" name="email" class="form-control" id="exampleInputfirstname4" placeholder="name@example.com">
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
                                <input type="text" value="{{ old('emergency_contact_name', $candidate->emergency_contact_name) }}" name="emergency_contact_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Emergency Contact Name">
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
                                <input type="text" value="{{ old('emergency_contact_relation', $candidate->emergency_contact_relation) }}"  name="emergency_contact_relation" class="form-control" id="exampleInputfirstname4" placeholder="Enter Relation with Emergency Contact">
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
                                <input type="tel"  value="{{ old('emergency_contact_phone', $candidate->emergency_contact_phone) }}" name="emergency_contact_phone" class="form-control" id="exampleInputfirstname4" placeholder="01712 356789">
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
                                <input type="text" value="{{ old('father_name', $candidate->father_name) }}" name="father_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Father Name">
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
                                <input type="text" value="{{ old('mother_name', $candidate->mother_name) }}" name="mother_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Mother Name">
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
                                <input type="text" value="{{ old('spouse_name', $candidate->spouse_name) }}" name="spouse_name" class="form-control" id="exampleInputfirstname4" placeholder="Enter Spouse Name">

                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputfirstname4" class="form-label"> Agent or Sub Agent</label>
                                <select name="agent_user_id" class="form-select @error('agent_user_id') is-invalid @enderror form-control" aria-label="Default select example">
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}" {{ old('agent_user_id', $candidate->agent_user_id) == $agent->id ? 'selected' : '' }}>
                                        {{ $agent->name }} - {{ $agent->role }}
                                    </option>
                                @endforeach
                            </select>
                            </div>

                            </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('candidates') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
