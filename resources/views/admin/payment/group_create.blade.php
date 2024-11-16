<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Create') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                <form onsubmit="validatePayment()" action="{{ route('payment.store') }}" method="POST" >
                    @csrf
                  <div class="card-body">
                    <div class="d-flex  align-items-center">
                      <h4 class="card-title mb-0">Grroup Payment Add</h4>

                    </div>

                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="fname1" class="form-label">Group Name</label>
                          <input type="text" class="form-control" id="fname1" value="{{ $group->group_name }}" readonly>
                          <input type="hidden" class="form-control" id="fname1" name="payment_type" value="group">
                          <input type="hidden" class="form-control" id="fname1" name="group_id" value="{{ $group->id }}">
                        </div>
                      </div>
                      <div class="col-12 ">
                        <div class="mb-3">
                          <div class="mb-3">
                            <label for="email2" class="form-label">Group Code</label>
                            <input type="text" class="form-control" id="email2" value="{{ $group->group_code }}" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Total Cost</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="cono1" name="total_cost" value="{{ $group->total_cost }}" readonly>
                          </div>

                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Due amount</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="due_amount" name="due_amount" value="{{ $due_amount }}" readonly>
                          </div>

                        </div>
                    </div>
                      <div class="col-12 col-md-6 col-lg-4">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Payment amount</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="payment_amount" name="payment_amount" placeholder="Enter payment amount">
                          </div>

                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="donate1" class="form-label">Payment Type</label>
                          <input type="text" class="form-control" id="donate1" placeholder="Donation Type Here" value="Group" readonly>
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="p-3 border-top">
                    <div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Save
                        </button>
                        <button type="submit" class="btn bg-danger-subtle text-danger ms-6 px-4">
                          Cancel
                        </button>
                      </div>
                    </div>
                  </div>
                </form>

                </div>
            </div>
        </div>
      </div>
      <script>
  function validatePayment() {
    const paymentAmount = parseFloat(document.getElementById('payment_amount').value);
    const dueAmount = parseFloat(document.getElementById('due_amount').value);
    if (paymentAmount > dueAmount) {
      alert("Payment amount cannot exceed the due amount.");
      return false;
    }
    return true;
  }
</script>
   </x-app-layout>
