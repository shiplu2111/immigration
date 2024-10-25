<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">

        <div class="row">
            <div class="datatables">
                <!-- start File export -->
                <div class="card">

                  <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                        <h4 class="mb-0 mb-sm-0 fw-semibold d-flex align-items-center">Documents of Candidates
                        </h4>

                        <button type="button" class="btn btn-success float-endbtn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#vertical-center-modal">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" /><path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
                        </button>


                    </div>
                    <hr>

                      </div>
                    <div class="tab-pane fade active show" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">

                        <div class="row">
                            @if ($documents)
                            @if($documents->passport && is_array($documents->passport))
                            @php
                                $i=1;
                            @endphp
                            @foreach($documents->passport as $passport)
                          <div class="col-md-6 col-lg-4">
                            <div class="card hover-img overflow-hidden">
                              <div class="card-body p-0">
                                <img src="{{ asset($passport) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                                <div class="p-4 d-flex align-items-center justify-content-between">
                                  <h6 class="mb-0">Passport {{$i++}}</h6>
                                  <div class="dropdown">
                                    <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu overflow-hidden">
                                      <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $passport }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="passport">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                                No passport available
                            </div>

                        </div>
                           @endif
                          @endif
                          @if ($documents)
                          @if($documents->passport_copy && is_array($documents->passport_copy))
                            @php
                                $i=1;
                            @endphp
                          @foreach($documents->passport_copy as $passport_copy)
                        <div class="col-md-6 col-lg-4">
                          <div class="card hover-img overflow-hidden">
                            <div class="card-body p-0">
                              <img src="{{ asset($passport_copy) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                              <div class="p-4 d-flex align-items-center justify-content-between">
                                <h6 class="mb-0">Passport Copy {{$i++}}</h6>
                                <div class="dropdown">
                                  <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                  </a>
                                  <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $passport_copy }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="passport_copy">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                                No passport copy available.
                            </div>

                        </div>

                         @endif
                        @endif
                        @if ($documents)
                        @if($documents->photo && is_array($documents->photo))
                        @php
                            $i=1;
                        @endphp
                        @foreach($documents->photo as $photo)


                      <div class="col-md-6 col-lg-4">
                        <div class="card hover-img overflow-hidden">
                          <div class="card-body p-0">
                            <img src="{{ asset($photo) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                              <h6 class="mb-0">Photo {{$i++}}</h6>
                              <div class="dropdown">
                                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $photo }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="photo">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                            No Photo available.
                        </div>

                    </div>

                       @endif
                      @endif

                      @if ($documents)
                        @if($documents->police_clearance && is_array($documents->police_clearance))
                        @php
                            $i=1;
                        @endphp
                        @foreach($documents->police_clearance as $police_clearance)


                      <div class="col-md-6 col-lg-4">
                        <div class="card hover-img overflow-hidden">
                          <div class="card-body p-0">
                            <img src="{{ asset($police_clearance) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                              <h6 class="mb-0">Police clearance {{$i++}}</h6>
                              <div class="dropdown">
                                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $police_clearance }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="police_clearance">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                            No police clearance  available.
                        </div>

                    </div>

                       @endif
                      @endif

                      @if ($documents)
                        @if($documents->educational_certificate && is_array($documents->educational_certificate))
                        @php
                            $i=1;
                        @endphp
                        @foreach($documents->educational_certificate as $educational_certificate)


                      <div class="col-md-6 col-lg-4">
                        <div class="card hover-img overflow-hidden">
                          <div class="card-body p-0">
                            <img src="{{ asset($educational_certificate) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                              <h6 class="mb-0">Educational certificate {{$i++}}</h6>
                              <div class="dropdown">
                                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $educational_certificate }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="educational_certificate">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                                No Educational certificate available.
                            </div>

                        </div>

                       @endif
                      @endif

                      @if ($documents)
                        @if($documents->technical_certificate && is_array($documents->technical_certificate))
                        @php
                            $i=1;
                        @endphp
                        @foreach($documents->technical_certificate as $technical_certificate)


                      <div class="col-md-6 col-lg-4">
                        <div class="card hover-img overflow-hidden">
                          <div class="card-body p-0">
                            <img src="{{ asset($technical_certificate) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                            <div class="p-4 d-flex align-items-center justify-content-between">
                              <h6 class="mb-0">Technical certificate {{$i++}}</h6>
                              <div class="dropdown">
                                <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu overflow-hidden">
                                    <li>
                                        <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="imgUrl" value="{{ $technical_certificate }}">
                                          <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                          <input type="hidden" name="document_type" value="technical_certificate">
                                          <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                        </form>
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
                               No technical certificate available.
                            </div>

                        </div>

                       @endif
                      @endif

                      @if ($documents)
                      @if($documents->driving_licence && is_array($documents->driving_licence))
                      @php
                          $i=1;
                      @endphp
                      @foreach($documents->driving_licence as $driving_licence)


                    <div class="col-md-6 col-lg-4">
                      <div class="card hover-img overflow-hidden">
                        <div class="card-body p-0">
                          <img src="{{ asset($driving_licence) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                          <div class="p-4 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">Driving licence {{$i++}}</h6>
                            <div class="dropdown">
                              <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                              </a>
                              <ul class="dropdown-menu overflow-hidden">
                                <li>
                                    <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="imgUrl" value="{{ $driving_licence }}">
                                      <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                      <input type="hidden" name="document_type" value="driving_licence">
                                      <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                    </form>
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
                             No driving licence available.
                          </div>

                      </div>

                     @endif
                    @endif


                    @if ($documents)
                      @if($documents->national_id && is_array($documents->national_id))
                      @php
                          $i=1;
                      @endphp
                      @foreach($documents->national_id as $national_id)


                    <div class="col-md-6 col-lg-4">
                      <div class="card hover-img overflow-hidden">
                        <div class="card-body p-0">
                          <img src="{{ asset($national_id) }}" alt="modernize-img" height="220" class="w-100 object-fit-cover">
                          <div class="p-4 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">National ID {{$i++}}</h6>
                            <div class="dropdown">
                              <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                              </a>
                              <ul class="dropdown-menu overflow-hidden">
                                <li>
                                    <form action="{{ route('document.delete', $documents->id) }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="imgUrl" value="{{ $national_id }}">
                                      <input type="hidden" name="document_id" value="{{ $documents->id }}">
                                      <input type="hidden" name="document_type" value="national_id">
                                      <button type="submit" class="dropdown-item" href="javascript:void(0)">Delete</button>
                                    </form>
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
                             No National ID available.
                          </div>

                      </div>

                     @endif
                    @endif
                        </div>
                      </div>

                    </div>


                </div>
                <!-- end File export -->
              </div>
        </div>
        @include('admin.modal.document_store')
      </div>
   </x-app-layout>
