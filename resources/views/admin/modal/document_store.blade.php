<div class="modal fade" id="vertical-center-modal" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">
            Add document
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
        <div class="modal-body">
            <div class="mb-3">
                {{-- <label class="form-label">Input Select</label> --}}
                <select class="form-select" name="document_type" id="inlineFormCustomSelect">
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
