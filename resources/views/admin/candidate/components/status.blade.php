<div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="pills-expense-tab">
    <div class=" offset-lg-2 col-lg-8 ">
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom d-sm-flex justify-content-between">
              <h4 class="card-title mb-0">Status</h4>
              <button type="button" class="btn btn-success float-endbtn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#status_add_modal">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M12 11l0 6" /><path d="M9 14l6 0" /></svg>
            </button>
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
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>

                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Date</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                  @if($candidate_status->count() > 0)
                    @foreach ($candidate_status as $item)
                    <tr>
                      <td>

                        <h6 class="fw-semibold mb-0">{{ $item->status_name }}</h6>

                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1">
                            @if ($item->status == 'accepted')
                            <i class="ti ti-check fs-4"></i>{{ $item->status }}
                            @else
                            <i class="ti ti-x fs-4"></i>{{ $item->status }}
                            @endif

                        </span>
                      </td>

                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <h6 class="mb-0">{{ $item->updated_at->format('d-m-Y -(h:m A)') }}</h6>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                              <a  class="dropdown-item d-flex align-items-center gap-3" href="{{ route('candidate.status.update', $item->id) }}">
                                <i class="fs-4 ti ti-edit"></i>Update Status
                              </a>
                            </li>

                          </ul>
                        </div>
                      </td>
                    </tr>


                    @endforeach
                        @else
                        <tr>
                          <td>
                            <h6 class="fw-semibold mb-0">New Candidate</h6>
                          </td>
                          <td>
                            <h6 class="fw-semibold mb-0">No data found</h6>
                          </td>
                          <td>
                            <h6 class="fw-semibold mb-0">No data found</h6>
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
@include('admin.candidate.components.status_modal')

