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
                        <form method="POST" action="{{ route('status.store') }}">
                        @csrf
                    <div class="row">

                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="status_name" class="form-label">Status Name</label>
                          <input type="text" name="status_name" class="form-control @error('status_name') is-invalid @enderror" id="status_name" placeholder="Enter Name">
                          @error('status_name')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              Group Name is required and must be unique.
                            </div>
                      @enderror
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname4" class="form-label"> Status</label>
                          <select name="status" class="form-select @error('status') is-invalid @enderror form-control" aria-label="Default select example">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                          @error('status')
                          <div class="d-flex align-items-center  me-3 me-md-0">
                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                              required.
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
