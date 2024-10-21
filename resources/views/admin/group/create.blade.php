<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Create') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="fs-4 fw-semibold mb-4">Group Info</h5>
                        <form method="POST" action="{{ route('group.store') }}">
                        @csrf
                    <div class="row">

                      <div class="col-lg-12">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Group Name</label>
                          <input type="text" name="group_name" class="form-control @error('group_name') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">
                          @error('group_name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Group Name is required and must be unique.
                            </div>
                      @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Group Code</label>
                          <input type="text" name="group_code" class="form-control @error('group_code') is-invalid @enderror" id="exampleInputfirstname4" placeholder="Enter Name">

                          @error('group_code')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Group Code is required and must be unique.
                            </div>
                      @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label">Group Status</label>
                          <select name="status" class="form-select @error('status') is-invalid @enderror form-control" aria-label="Default select example">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                          @error('status')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Group Name is required and must be unique.
                            </div>
                      @enderror
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
