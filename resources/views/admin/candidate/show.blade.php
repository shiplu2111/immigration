<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">

        <div class="card overflow-hidden">
          <div class="card-body p-0">
            <img style="height: 100px; width: 100%; object-fit: cover" src="{{asset('/assets/images/backgrounds/profilebg.jpg')}}" alt="modernize-img" class="img-fluid">
            <div class="row align-items-center">
              <div class="col-lg-4 order-lg-1 order-2">
                <div class="d-flex align-items-center justify-content-around m-4">
                  <div class="text-center">
                    <svg style="color: rgb(163, 163, 238)"  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plane-tilt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.5 6.5l3 -2.9a2.05 2.05 0 0 1 2.9 2.9l-2.9 3l2.5 7.5l-2.5 2.55l-3.5 -6.55l-3 3v3l-2 2l-1.5 -4.5l-4.5 -1.5l2 -2h3l3 -3l-6.5 -3.5l2.5 -2.5l7.5 2.5z" /></svg>
                    {{-- <i class="ti ti-brand-facebook"></i> --}}
                    <h4 class="mb-0 lh-1">{{$candidate->country	}}</h4>
                    {{-- <h5 class="mb-0 ">Country</h5> --}}
                  </div>
                  <div class="text-center">
                    <svg  style="color: rgb(163, 163, 238)"   xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-walk"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M7 21l3 -4" /><path d="M16 21l-2 -4l-3 -3l1 -6" /><path d="M6 12l2 -3l4 -1l3 3l3 1" /></svg>
                    <h4 class="mb-0 lh-1">{{$candidate->status}} Candidate</h4>
                    {{-- <p class="mb-0 ">Followers</p> --}}
                  </div>

                </div>
              </div>
              <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                <div class="mt-n5">
                  <div class="d-flex align-items-center justify-content-center mb-2">
                    <div class="d-flex align-items-center justify-content-center round-110">
                      <div class="border border-3 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                        <img src="{{asset('/assets/images/profile/user-1.jpg')}}" alt="modernize-img" class="w-100 h-100">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="mb-0">{{$candidate->name}}</h5>
                    <p class="mb-0">{{$candidate->email}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 order-last">
                <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-xxl-4 gap-3">
                  <li>
                    <div class="text-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                        <h4 class="mb-0 lh-1">{{$candidate->phone}} </h4>
                        {{-- <p class="mb-0 ">Followers</p> --}}
                      </div>
                  </li>

                </ul>
              </div>
            </div>
            <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active hstack gap-2 rounded-0 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block"> Profile</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link  hstack gap-2 rounded-0 py-6" id="pills-agents-tab" data-bs-toggle="pill" data-bs-target="#pills-agents" type="button" role="tab" aria-controls="pills-agents" aria-selected="true">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block">Agent </span>
                </button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                  <i class="ti ti-heart fs-5"></i>
                  <span class="d-none d-md-block">Documents</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block">Clearance</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">
                  <i class="ti ti-photo-plus fs-5"></i>
                  <span class="d-none d-md-block">Expenses</span>
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class=" offset-lg-2 col-lg-8 ">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom">
                      <h4 class="card-title mb-0">{{$candidate->name}} -({{$candidate->status}})</h4>
                    </div>
                    <div class="card-body p-4">
                      <div class="table-responsive mb-4 border rounded-1">
                        <table class="table text-nowrap mb-0 align-middle">

                          <tbody>
                            <tr>
                              <td style="border-right: .5px solid #dee2e6">
                                <p class="mb-0 fw-normal fs-4">
                                    <b>Name:</b></p>
                              </td>
                              <td>
                                <p class="mb-0 fw-normal fs-4"><b>{{$candidate->name}}</b></p>
                              </td>

                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Email:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->email}}</b></p>
                                </td>

                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Mobile No:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->phone}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Date Of Birth:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->dob}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Applied Country:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->country}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Gender:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->gender}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Marital Status	:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->marital_status}}</b></p>
                                </td>
                              </tr>

                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Birth Place:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->birth_place}}</b></p>
                                </td>
                              </tr>

                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Passport Number:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_number}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Issue Date:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_issue_date}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Expiry Date:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_expiry_date}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Village:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->village}}</b></p>
                                </td>
                              </tr>

                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Thana:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->thana}}</b></p>
                                </td>
                              </tr>

                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>District:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->district}}</b></p>
                                </td>
                              </tr>


                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Emergency contact name	:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_name}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Emergency contact relation:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_relation}}</b></p>
                                </td>
                              </tr>

                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Emergency contact mobile:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_phone}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Father Name:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->father_name}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Mother Name:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$candidate->mother_name}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Spouse Name:</b></p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">
                                        <b>
                                            @if ($candidate->spouse_name == null)
                                                Unmarried
                                            @else
                                            {{$candidate->spouse_name}}
                                            @endif

                                        </b>
                                    </p>
                                </td>
                              </tr>


                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>

              </div>
          </div>
          {{-- Agent tab start here --}}
          <div class="tab-pane fade" id="pills-agents" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
            <div class=" offset-lg-2 col-lg-8 ">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom">
                      <h4 class="card-title mb-0">{{$agent->name}} -({{$agent->role}})</h4>
                    </div>
                    <div class="card-body p-4">
                      <div class="table-responsive mb-4 border rounded-1">
                        <table class="table text-nowrap mb-0 align-middle">

                          <tbody>
                            <tr>
                              <td style="border-right: .5px solid #dee2e6">
                                <p class="mb-0 fw-normal fs-4">
                                    <b>Name:</b></p>
                              </td>
                              <td>
                                <p class="mb-0 fw-normal fs-4"><b>{{$agent->name}}</b></p>
                              </td>

                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Email:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$agent->email}}</b></p>
                                </td>

                              </tr>
                              @if ($agent_data)
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Mobile No:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->phone}}</b></p>
                                </td>
                              </tr>


                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Company name:</b></p>
                                </td>
                                <td>
                                  <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->company_name}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Address:</b></p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->address_one}}</b></p>
                                    <br>
                                    <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->address_two}}</b></p>

                                </td>
                              </tr>
                              @endif
                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>

              </div>
          </div>
          {{-- Agent tab End here --}}


          {{-- document tab start here  --}}


          <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
            {{-- <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <div class="card hover-img">
                    <div class="card-body p-4 text-center border-bottom">
                      <img src="{{ asset('/assets/images/profile/user-1.jpg') }}" alt="modernize-img" height="300px" >
                      <h5 class="fw-semibold mb-0">Passport</h5>
                    </div>

                  </div>
                </div>


              </div> --}}

              <div class=" offset-lg-2 col-lg-8 ">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom ">

                        <div class="row">
                    <div class="col-sm-8 col-lg-10">
                      <h4 class="card-title mb-0 mt-2">{{$agent->name}} -({{$agent->role}})</h4>
                    </div>
                      <div class="col-sm-4 col-lg-2 justify-content-end">
                        <button type="button" class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#vertical-center-modal">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" /><path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#nidInsertModal" class="btn mb-1 btn-warning rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-refresh-alert"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /><path d="M12 9l0 3" /><path d="M12 15l.01 0" /></svg>
                        </button>
                      </div>
                    </div>
                    </div>

                    <div class="card-body p-4">
                      <div class="table-responsive mb-4 border rounded-1">
                        <table class="table text-nowrap mb-0 align-middle">

                          <tbody>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Passport:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>


                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Passport Copy:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Photo:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Police Clearance:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Educational Certificate:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Technical Certificate:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>Driving Licence:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>



                            </tr>
                            <tr>
                                <td style="border-right: .5px solid #dee2e6">
                                  <p class="mb-0 fw-normal fs-4">
                                      <b>National ID:</b></p>
                                </td>
                                <td style="border-right: .5px solid #dee2e6" class="text-center">
                                    <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                                    </span>
                                    <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                                    </span>
                                </td>

                            </tr>


                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>

              </div>
          </div>
          {{-- document tab end here  --}}
          <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab" tabindex="0">
{{-- content here --}}

          </div>
          <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">
{{-- content here --}}

          </div>
        </div>
      </div>
      <div class="modal fade" id="vertical-center-modal" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
              <h4 class="modal-title" id="myLargeModalLabel">
                Add document
              </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Input Select</label>
                    <select class="form-select" id="inlineFormCustomSelect">
                      <option selected="">Choose document</option>
                      <option value="passport">Passport</option>
                      <option value="passport_copy">Passport copy</option>
                      <option value="photo">Photo</option>
                      <option value="police_clearance">Police clearance</option>
                      <option value="educational_certificate">Educational certificate</option>
                      <option value="technical_certificate">Technical certificate</option>
                      <option value="driving_licence">Driving licence</option>
                      <option value="national_id">National id</option>
                    </select>
                  </div>
            <div class="mb-3">
              <input type="file" class="form-control" id="formFile" multiple>
            </div>
               </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect  text-start">Upload</button>

              <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
                Close
              </button>
            </div>
        </form>
          </div>
        </div>
      </div>
   </x-app-layout>
