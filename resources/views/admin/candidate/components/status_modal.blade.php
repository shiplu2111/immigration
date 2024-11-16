<div class="modal fade" id="status_add_modal" tabindex="-1" aria-labelledby="status_add_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">
            Update Candidate Status
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('candidate.status.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
        <input type="hidden" name="create_by" value="{{ auth()->user()->id }}">
        <div class="modal-body">
        <div class="mb-3">
                <label class="form-label">Current Status</label>
                <input type="text" name="current_status" value="{{ $candidate->status }}" readonly class="form-control">
              </div>
            <div class="mb-3">
                {{-- <label class="form-label">Input Clearance</label> --}}
                <select class="form-select" name="status_name" id="status_name">
                <!-- <option selected="">Choose clearance</option> -->
                    @foreach ($status_list as $status_name)

                    <option value="{{ $status_name->status_name }}">{{ $status_name->status_name }}</option>
                    @endforeach


                </select>
              </div>
              <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check py-1">
                              <input type="radio" id="customRadio11" name="status" class="form-check-input" value="accepted">
                              <label class="form-check-label" for="customRadio11">Accepted</label>
                            </div>
                            <div class="form-check py-1">
                              <input type="radio" id="customRadio22" name="status" class="form-check-input" value="rejected">
                              <label class="form-check-label" for="customRadio22">Rejected</label>
                            </div>

                          </div>
           </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect  text-start">Update Status</button>
            <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
            Close
          </button>
        </div>
    </form>
      </div>
    </div>
  </div>
