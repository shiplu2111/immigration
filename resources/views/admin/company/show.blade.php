<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
            <div class="card shadow-none border">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <h4 class="mb-3">Company Profile</h4>
                            </div>
                            <div class="d-flex gap-2">
                            <a href="{{ route('companies') }}" class="btn btn-primary float-end"><span><i class="ti ti-printer"></i></span> </a>
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary float-end"><span><i class="ti ti-edit"></i></span> Edit</a>
                            </div>
                        </div>
                      <!-- <p class="card-subtitle">Hello, I am Mathew Anderson. I love making websites and graphics. Lorem
                        ipsum dolor sit amet,
                        consectetur adipiscing elit.</p> -->
                      <div class="vstack gap-3 mt-4">
                        <div class="hstack gap-6">
                          <i class="ti ti-briefcase text-dark fs-6"></i>
                          <h6 class=" mb-0">Company Name: {{ $company->name }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-brand-visa text-dark fs-6"></i>
                          <h6 class=" mb-0">Visa Type: {{ $company->visa_type }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">Address: {{ $company->address }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-home-infinity text-dark fs-6"></i>
                          <h6 class=" mb-0">City : {{ $company->city }}</h6>
                        </div>

                        <div class="hstack gap-6">
                          <i class="ti ti-flag-2 text-dark fs-6"></i>
                          <h6 class=" mb-0">Country : {{ $company->country }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-phone-incoming text-dark fs-6"></i>
                          <h6 class=" mb-0">Telephone : {{ $company->telephone }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-mail text-dark fs-6"></i>
                          <h6 class=" mb-0">Email : {{ $company->email }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-user text-dark fs-6"></i>
                          <h6 class=" mb-0">Contact person : {{ $company->contact_person }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-phone-incoming text-dark fs-6"></i>
                          <h6 class=" mb-0">Contact telephone : {{ $company->contact_telephone }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-mail text-dark fs-6"></i>
                          <h6 class=" mb-0">Contact email : {{ $company->contact_email }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-briefcase text-dark fs-6"></i>
                          <h6 class=" mb-0">Job category : {{ $company->job_category }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-clock-hour-10 text-dark fs-6"></i>
                          <h6 class=" mb-0">Contract duration : {{ $company->contract_duration }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-cash text-dark fs-6"></i>
                          <h6 class=" mb-0">Salary : {{ $company->salary }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-bed text-dark fs-6"></i>
                          <h6 class=" mb-0">Accommodation : {{ $company->accommodation }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-tools-kitchen-2 text-dark fs-6"></i>
                          <h6 class=" mb-0">Meal : {{ $company->meal }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-man text-dark fs-6"></i>
                          <h6 class=" mb-0">Uniform : {{ $company->uniform }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-bus text-dark fs-6"></i>
                          <h6 class=" mb-0">Transportation : {{ $company->transportation }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-beach text-dark fs-6"></i>
                          <h6 class=" mb-0">Yearly vacation : {{ $company->yearly_vacation }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-ticket text-dark fs-6"></i>
                          <h6 class=" mb-0">Air ticket : {{ $company->air_ticket }}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-brand-redux text-dark fs-6"></i>
                          <h6 class=" mb-0">Status:
                            @if ($company->status == 'active')

                            <span class="badge bg-success text-white">  Active</span>
                            @else
                            <span class="badge bg-danger text-white">Inactive</span>

                            @endif

                          </h6>
                        </div>

                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</x-app-layout>
