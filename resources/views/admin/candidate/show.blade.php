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
                <button class="nav-link  hstack gap-2 rounded-0 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
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
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends-2" type="button" role="tab" aria-controls="pills-friends-2" aria-selected="false">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block">Expense</span>
                </button>
              </li>

            </ul>
          </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
          @include('admin.candidate.components.profile')
          {{-- Agent tab start here --}}
          @include('admin.candidate.components.agent')
          {{-- Agent tab End here --}}


          {{-- document tab start here  --}}


         @include('admin.candidate.components.documents')
          {{-- document tab end here  --}}
          {{-- clearance tab start here  --}}
         @include('admin.candidate.components.clearance')
          {{-- clearance tab end here  --}}
          {{-- expense tab start here  --}}
@include('admin.candidate.components.expense')
          {{-- expense tab start here  --}}


        </div>
      </div>
      @include('admin.candidate.components.document_add_modal')

     @include('admin.candidate.components.clearance_add_modal')
   </x-app-layout>
