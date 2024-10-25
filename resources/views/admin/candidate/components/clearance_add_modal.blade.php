<div class="modal fade" id="clearance_add_modal" tabindex="-1" aria-labelledby="clearance_add_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">
            Add Clearance
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('clearance.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
        <input type="hidden" name="create_by" value="{{ auth()->user()->id }}">
        <div class="modal-body">
            <div class="mb-3">
                {{-- <label class="form-label">Input Clearance</label> --}}
                <select class="form-select" name="clearance_type" id="inlineFormCustomSelect">
                  <option selected="">Choose clearance</option>
                  <option value="bmet_clearance">BMET clearance</option>
                  <option value="air_ticket">Air ticket</option>

                </select>
              </div>
        <div class="mb-3">
          <input type="file" name="images[]" class="form-control" id="formFile" multiple>
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
