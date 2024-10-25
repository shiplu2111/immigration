<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-items-center justify-content-between">
                    <h3 class="card-title">Companies</h3>
                    <a href="{{ route('company.create') }}" class="btn btn-primary">Add Company</a>
                    </div>
                </div>
            <div class="card-body p-4">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Visa Type</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Country</h6>
                      </th>
                      <!-- <th>
                        <h6 class="fs-4 fw-semibold mb-0">Telephone</h6>
                      </th> -->

                      <th>
                      Salary
                      </th>
                      <th>
                      Status
                      </th>
                      <th>

                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($companies as $company)


                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mb-0 fw-normal fs-4">
                            <h6 class="fs-4 fw-semibold mb-0">{{ $company->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">{{ $company->visa_type }}</p>
                      </td>
                      <td>
                      <p class="mb-0 fw-normal fs-4">{{ $company->country }}</p>

                      </td>
                      <!-- <td>
                      <p class="mb-0 fw-normal fs-4">{{ $company->telephone }}</p>

                      </td> -->

                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">{{ $company->salary }} </h6>
                      </td>
                      <td>
                        @if ($company->status == 'active')
                        <span class="badge bg-success text-white">Active</span>
                        @else
                        <span class="badge bg-danger text-white">Inactive</span>

                        @endif
                        <!-- <span class="badge bg-warning text-white">Pending</span> -->
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('company.show', $company->id) }}">
                                <i class="fs-4 ti ti-plus"></i>Details
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('company.edit', $company->id) }}">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>

                          </ul>
                        </div>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>

            </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
