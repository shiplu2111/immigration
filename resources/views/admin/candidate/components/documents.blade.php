<div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">


    <div class=" offset-lg-1 col-lg-10 ">
      <div class="card w-100 position-relative overflow-hidden">
          <div class="px-4 py-3 border-bottom ">

              <div class="row">
          <div class="col-sm-10 col-lg-11">
            <h4 class="card-title mb-0 mt-2">{{$agent->name}} -({{$agent->role}})</h4>
          </div>
            <div class="col-sm-2 col-lg-1 justify-content-end">
              <a href="{{route('document.details', $candidate->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Details" type="button" class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#vertical-center-modal">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-big-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 9h8v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1z" /></svg>
              </a>


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
                          <span>
                           @if ($documents)
                           @if($documents->passport && is_array($documents->passport))

                           <div class="educational-certificates">
                               @foreach($documents->passport as $passport)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($passport) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No passport available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->passport && is_array($documents->passport))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>
                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Passport Copy:</b></p>
                      </td>

                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->passport_copy && is_array($documents->passport_copy))

                           <div class="educational-certificates">
                               @foreach($documents->passport_copy as $passport_copy)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($passport_copy) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>Passport Copy available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->passport_copy && is_array($documents->passport_copy))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>


                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Photo:</b></p>
                      </td>

                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->photo && is_array($documents->photo))

                           <div class="educational-certificates">
                               @foreach($documents->photo as $photo)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($photo) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No Photo available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->photo && is_array($documents->photo))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>


                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Police Clearance:</b></p>
                      </td>


                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->police_clearance && is_array($documents->police_clearance))

                           <div class="educational-certificates">
                               @foreach($documents->police_clearance as $police_clearance)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($police_clearance) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No Police clearance available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                           @if($documents->police_clearance && is_array($documents->police_clearance))

                           <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                          </span>
                          @else

                          <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                          </span>
                          @endif
                          @else
                          <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                          </span>
                          @endif
                      </td>

                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Educational Certificate:</b></p>
                      </td>

                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->educational_certificate && is_array($documents->educational_certificate))

                           <div class="educational-certificates">
                               @foreach($documents->educational_certificate as $certificate)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($certificate) }}" alt="Educational Certificate" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No educational certificates available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->educational_certificate && is_array($documents->educational_certificate))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>


                  </tr>

                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Technical Certificate:</b></p>
                      </td>

                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                         <span>
                          @if ($documents)
                          @if($documents->technical_certificate && is_array($documents->technical_certificate))

                          <div class="educational-certificates">
                              @foreach($documents->technical_certificate as $certificate)
                                  <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($certificate) }}" alt="Educational Certificate" style="width:150px; margin-right:10px;">
                              @endforeach
                          </div>
                          @else
                          <p>No Technical certificates available.</p>
                           @endif
                          @endif

                      </span>
                      </td>
                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->technical_certificate && is_array($documents->technical_certificate))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>



                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Driving Licence:</b></p>
                      </td>


                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->driving_licence && is_array($documents->driving_licence))

                           <div class="educational-certificates">
                               @foreach($documents->driving_licence as $driving_licence)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($driving_licence) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No driving licence available.</p>
                            @endif
                           @endif

                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->driving_licence && is_array($documents->driving_licence))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>

                  </tr>
                  <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>National ID:</b></p>
                      </td>

                      <td style="border-right: .5px solid #dee2e6" class="text-center">
                          <span>
                           @if ($documents)
                           @if($documents->national_id && is_array($documents->national_id))

                           <div class="educational-certificates">
                               @foreach($documents->national_id as $national_id)
                                   <img style="width:150px; margin-right:10px; border:1px solid #04101d" class="rounded-circle round-40" src="{{ asset($national_id) }}" alt="passport" style="width:150px; margin-right:10px;">
                               @endforeach
                           </div>
                           @else
                           <p>No National ID available.</p>
                            @endif
                           @endif
                           {{-- <div >{{$documents->educational_certificate}}</div> --}}
                       </span>
                       </td>
                       <td style="border-right: .5px solid #dee2e6" class="text-center">
                          @if ($documents)
                          @if($documents->national_id && is_array($documents->national_id))

                          <span class="btn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
                         </span>
                         @else

                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                         @else
                         <span class="btn mb-1 btn-danger rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center">
                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-question-mark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 8a3.5 3 0 0 1 3.5 -3h1a3.5 3 0 0 1 3.5 3a3 3 0 0 1 -2 3a3 4 0 0 0 -2 4" /><path d="M12 19l0 .01" /></svg>
                         </span>
                         @endif
                      </td>
                  </tr>


                </tbody>
              </table>
            </div>

          </div>
        </div>

    </div>
</div>
