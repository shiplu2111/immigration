<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sub-Agent Create') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fs-4 fw-semibold mb-4">Sub-Agent Add</h5>
                        <form method="POST" action="{{ route('sub.agent.store') }}">
                        @csrf
                    <div class="row">

                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Agent Name</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                        @error('name')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Name is required.
                            </div>
                        @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Agent Email</label>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                        @error('email')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                             Please Enter Valid Unique Email.
                            </div>
                        @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Company Name</label>
                          <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                        @error('company_name')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                             Requred!
                            </div>
                        @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Mobile No</label>
                          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                        @error('phone')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                             Please Enter Valid Mobile Number.
                            </div>
                        @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Address One</label>
                          {{-- <input type="text" name="address_one" class="form-control @error('address_one') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name"> --}}
                          <textarea name="address_one" id="" cols="10" class="form-control @error('address_one') is-invalid @enderror" rows="3"></textarea>
                        @error('address_one')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                             Please Enter Valid Mobile Number.
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Address Two</label>
                          {{-- <input type="text" name="address_one" class="form-control @error('address_two') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name"> --}}
                          <textarea name="address_two" id="" cols="10" class="form-control @error('address_two') is-invalid @enderror" rows="3"></textarea>
                        @error('address_two')
                            <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                             Please Enter Valid Mobile Number.
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Agent</label>
                          <select name="agent_id" class="form-select @error('agent_id') is-invalid @enderror form-control" aria-label="Default select example">
                           @foreach ($agents as $agent)
                            <option value="{{$agent->id}}">{{$agent->name}}</option>
                           @endforeach
                          </select>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Status</label>
                          <select name="status" class="form-select @error('status') is-invalid @enderror form-control" aria-label="Default select example">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                        </div>

                    </div>



                      <div class="col-12 ">
                        <div class="d-flex align-items-right gap-3 ">
                            @if ($agents->count() > 0)
                          <button type="submit" class="btn btn-primary float-right">Submit</button>

                            @else
                          <div  type="button"  class="btn btn-danger float-right" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Add a New Agent First">Submit</div>
                          @endif
                          <button onclick="history.back()" type="button" class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>

                    </div>
                </form>
                  </div>
            </div>
        </div>
      </div>
   </x-app-layout>