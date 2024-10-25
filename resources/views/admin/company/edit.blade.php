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
                            <h3 class="card-title">Edit Company</h3>
                            <a href="{{ route('companies') }}" class="btn btn-primary">Companies</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('company.update', $company->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"  value="{{$company->name }}" id="name" name="name" placeholder="Company Name">
                                    </div>
                                    @error('visa_type')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Company Name.
                                            </div>
                                        @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="visa_type" class="form-label">Visa type</label>
                                        <input type="text"  value="{{$company->visa_type }}" class="form-control @error('address') is-invalid @enderror" id="visa_type" name="visa_type" placeholder="Visa type">
                                        @error('visa_type')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Visa type.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address"  id="address" cols="10" class="form-control @error('address') is-invalid @enderror" rows="3"> {{$company->address }} </textarea>
                                        @error('address')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Address.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text"  value="{{$company->city }}" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="City">
                                        @error('city')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid City.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text"  value="{{$company->country }}"  class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Country">
                                        @error('country')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid country.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="telephone" class="form-label">Telephone</label>
                                        <input type="text"  value="{{$company->telephone }}"  class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" placeholder="Telephone">
                                        @error('telephone')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid telephone.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email"  value="{{$company->email }}"   class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                                        @error('email')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid email.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact_person" class="form-label">Contact person</label>
                                        <input type="text"  value="{{$company->contact_person }}"   class="form-control @error('contact_person') is-invalid @enderror" id="contact_person" name="contact_person" placeholder="Contact person name">
                                        @error('contact_person')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Contact Person.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact_telephone" class="form-label">Contact telephone</label>
                                        <input type="text"  value="{{$company->contact_telephone }}"  class="form-control @error('contact_telephone') is-invalid @enderror" id="contact_telephone" name="contact_telephone" placeholder="Contact  telephone">
                                        @error('contact_telephone')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Contact telephone.
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="contact_email" class="form-label">Contact email</label>
                                        <input type="email"   value="{{$company->contact_email }}"  class="form-control @error('contact_email') is-invalid @enderror" id="contact_email" name="contact_email" placeholder="Contact email">
                                        @error('contact_email')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Contact email.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="job_category" class="form-label">Job category</label>
                                        <input type="text"  value="{{$company->job_category }}"   class="form-control @error('job_category') is-invalid @enderror" id="job_category" name="job_category" placeholder="Job category">
                                        @error('job_category')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid job category.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="contract_duration" class="form-label">Contract duration</label>
                                        <input type="text" value="{{$company->contract_duration }}"  class="form-control @error('contract_duration') is-invalid @enderror" id="contract_duration" name="contract_duration" placeholder="Contract duration">
                                        @error('contract_duration')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Contract duration.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="salary" class="form-label">Salary</label>
                                        <input type="text" value="{{$company->salary }}"  class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" placeholder="Salary">
                                        @error('salary')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Salary.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="accommodation" class="form-label">Accommodation</label>
                                        <input type="text" value="{{$company->accommodation }}"   class="form-control @error('accommodation') is-invalid @enderror" id="accommodation" name="accommodation" placeholder="Accommodation">
                                        @error('accommodation')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Accommodation.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="meal" class="form-label">Meal</label>
                                        <input type="text" value="{{$company->meal }}" class="form-control @error('meal') is-invalid @enderror" id="meal" name="meal" placeholder="meal">
                                        @error('Meal')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Meal.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="uniform" class="form-label">Uniform</label>
                                        <input type="text" value="{{$company->uniform }}"  class="form-control @error('uniform') is-invalid @enderror" id="uniform" name="uniform" placeholder="Uniform">
                                        @error('uniform')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Uniform.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="transportation" class="form-label">Transportation</label>
                                        <input type="text" value="{{$company->transportation }}"  class="form-control @error('transportation') is-invalid @enderror" id="transportation" name="transportation" placeholder="Transportation">
                                        @error('transportation')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Transportation.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="yearly_vacation" class="form-label">Yearly Vacation</label>
                                        <input type="text" value="{{$company->yearly_vacation }}"  class="form-control @error('yearly_vacation') is-invalid @enderror" id="yearly_vacation" name="yearly_vacation" placeholder="Yearly Vacation">
                                        @error('yearly_vacation')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Yearly Vacation.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="air_ticket" class="form-label">Air Ticket</label>
                                        <input type="text" value="{{$company->air_ticket }}" class="form-control @error('air_ticket') is-invalid @enderror" id="air_ticket" name="air_ticket" placeholder="Air Ticket">
                                        @error('air_ticket')
                                            <div class="d-flex align-items-center  me-3 me-md-0">
                                              <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                                             Please Enter Valid Air Ticket.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-select" id="status">
                                            <option value="active"  {{ $company->status === 'active' ? 'selected' : '' }} >
                                                Active
                                            </option>
                                            <option value="inactive" {{ $company->status === 'inactive' ? 'selected' : '' }} >
                                                Inactive
                                            </option>
                                        </select>

                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary waves-effect float-right ">Update Company</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
