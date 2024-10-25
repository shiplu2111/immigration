<div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab" tabindex="0">
    <div class="container-fluid">

        <div class="row">
            <div class="datatables">

                <div class="card">

                  <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                        <h4 class="mb-0 mb-sm-0 fw-semibold d-flex align-items-center">Clearance of {{$candidate->name}}
                        </h4>

                        <button type="button" class="btn btn-success float-endbtn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#clearance_add_modal">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" /><path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
                        </button>


                    </div>
                    <hr>


                    <div class="tab-pane fade active show" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery" tabindex="0">

                        <div class="row">
                            @if ($clearance)
                            @if($clearance->bmet_clearance && is_array($clearance->bmet_clearance))
                            @php
                                $i=1;
                            @endphp
                            @foreach($clearance->bmet_clearance as $bmet_clearance)
                          <div class="col-md-6 col-lg-4">
                            <div class="card hover-img overflow-hidden">
                              <div class="card-body p-0">
                                <img src="{{ asset($bmet_clearance) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                                {{-- <img src="/public/assets/s.jpg alt="modernize-img" height="220" class="w-100 object-fit-cover"> --}}
                                <div class="p-4 d-flex align-items-center justify-content-between">
                                  <h6 class="mb-0">BMET Clearance </h6>
                                  <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                      <li>
                                        <form action="{{ route('clearance.delete', $clearance->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $bmet_clearance }}">
                                          <input type="hidden" name="clearance_id" value="{{ $clearance->id }}">
                                          <input type="hidden" name="clearance_type" value="bmet_clearance">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
                                        {{-- <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button> --}}

                                        </li>

                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                          @else
                          <div class="col-md-6 col-lg-4" >

                              <div  style="margin-top: 40%;" class=" alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                 No BMET Clearance available.
                              </div>

                          </div>

                         @endif

                          @endif
                          @if ($clearance)
                          @if($clearance->air_ticket && is_array($clearance->air_ticket))
                          @php
                              $i=1;
                          @endphp
                          @foreach($clearance->air_ticket as $air_ticket)
                        <div class="col-md-6 col-lg-4">
                          <div class="card hover-img overflow-hidden">
                            <div class="card-body p-0">
                              <img src="{{ asset($air_ticket) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                              {{-- <img src="/public/assets/s.jpg alt="modernize-img" height="220" class="w-100 object-fit-cover"> --}}
                              <div class="p-4 d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Air ticket </h6>
                                <div class="dropdown">
                                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                  </a>
                                  <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                      <form action="{{ route('clearance.delete', $clearance->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="imgUrl" value="{{ $air_ticket }}">
                                        <input type="hidden" name="clearance_id" value="{{ $clearance->id }}">
                                        <input type="hidden" name="clearance_type" value="air_ticket">
                                        <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                      </form>
                                      {{-- <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button> --}}

                                      </li>

                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-6 col-lg-4" >

                            <div  style="margin-top: 40%;" class=" alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                               No Air ticket available.
                            </div>

                        </div>

                       @endif

                        @endif

                        </div>

                      </div>
                    </div>
                    </div>


                </div>
                <!-- end File export -->
              </div>
        </div>
        </div>
