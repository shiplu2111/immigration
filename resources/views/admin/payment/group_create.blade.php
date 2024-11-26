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
                <form onsubmit="validatePayment()" action="{{ route('payment.store') }}" method="POST"
                enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="d-flex  align-items-center">
                      <h4 class="card-title mb-0">Grroup Payment Add</h4>

                    </div>

                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="fname1" class="form-label">Group Name</label>
                          <input type="text" class="form-control" id="fname1" value="{{ $group->group_name }}" readonly>
                          <input type="hidden" class="form-control" id="fname1" name="payment_type" value="group">
                          <input type="hidden" class="form-control" id="fname1" name="group_id" value="{{ $group->id }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <div class="mb-3">
                            <label for="email2" class="form-label">Group Code</label>
                            <input type="text" class="form-control" id="email2" value="{{ $group->group_code }}" readonly>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                            <div class="mb-3">
                                <label for="email2" class="form-label">Payment Method</label>
                                <select name="pay_type" id="paymentType" class="form-select" required>
                                    <option value="default" disabled selected>Select Payment Method</option>
                                    <option value="cash">Cash</option>
                                    <option value="bank">Bank</option>
                                    <option value="online">Online Payment</option>
                                </select>
                            </div>
                       </div>

                        <div class="col-md-12">
                            <div class="mb-3" id="fileInputGroup" >
                                <label for="document" class="form-label" id="dynamicLabel_1">Upload Document</label>
                                <input type="file" name="document" id="document" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="mb-3" id="bankInputGroup" style="display: none;">
                                <label for="bank_name" class="form-label" id="dynamicLabel">Bank Name</label>
                                <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Enter Bank Name / Mobile Banking Name / Cash Receipt"/>
                            </div>
                        </div>
                      <div class="col-12 col-md-12 ">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Total Cost</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="cono1" name="total_cost" value="{{ $group->total_cost }}" readonly>
                          </div>

                        </div>
                      </div>
                      <div class="col-12 col-md-12 ">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Due amount</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="due_amount" name="due_amount" value="{{ $due_amount }}" readonly>
                          </div>

                        </div>
                    </div>
                      <div class="col-12 col-md-12 ">
                        <div class="mb-3">
                        <label for="cono1" class="form-label">Payment amount</label>

                        <div class="input-group">
                            <span class="input-group-text">Taka</span>
                            <input type="number" class="form-control" id="payment_amount" name="payment_amount" placeholder="Enter payment amount" required>
                          </div>

                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label for="donate1" class="form-label">Payment For</label>
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
        <script>
            const paymentTypeSelect = document.getElementById('paymentType');
            const fileInputGroup = document.getElementById('fileInputGroup');
            const bankInputGroup = document.getElementById('bankInputGroup');
            const dynamicLabel = document.getElementById('dynamicLabel');
            const dynamicLabel_1 = document.getElementById('dynamicLabel_1');

            paymentTypeSelect.addEventListener('change', function () {
                const selectedValue = this.value;

                // Reset visibility and content
                fileInputGroup.style.display = 'none';
                bankInputGroup.style.display = 'none';

                if (selectedValue === 'cash') {
                    bankInputGroup.style.display = 'block';
                    fileInputGroup.style.display = 'block';
                    dynamicLabel_1.textContent = 'Cash Receipt';
                    dynamicLabel.textContent = 'Cash Receipt Number';


                } else if (selectedValue === 'bank') {
                    bankInputGroup.style.display = 'block';
                    fileInputGroup.style.display = 'block';
                    dynamicLabel_1.textContent = 'Bank slip';
                    dynamicLabel.textContent = 'Bank Name';
                } else if (selectedValue === 'online') {
                    fileInputGroup.style.display = 'block';
                    bankInputGroup.style.display = 'block';
                    dynamicLabel_1.textContent = 'Online payment receipt';
                    dynamicLabel.textContent = 'Mobile Banking Name and Transaction Number';
                }
            });
        </script>
   </x-app-layout>
