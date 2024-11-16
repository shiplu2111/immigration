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
                    
<form action="#">
                  <div>
                    <div class="card-body">
                      <h4 class="card-title">Add New Payment</h4>
                      <div class="row pt-3">
                        <div class="col-md-6">
                          <div class="mb-3 has-success">
                            <label class="form-label">Payment Type</label>
                            <select class="form-select">
                              <option value="individual">Individual Payment</option>
                              <option value="group" selected>Group Payment</option>
                            </select>
                          </div>
                        </div>

                        <!--/span-->
                        <div class="col-md-6">
                          <div class="mb-3 has-success">
                            <label class="form-label">Payment Amount</label>
                            <input type="number" id="payment_amount" class="form-control @error('payment_amount') is-invalid @enderror" placeholder="100000">
                          </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                          <div class="mb-3 has-success">
                            <label class="form-label">Candidate Name</label>
                            <select class="form-select">
                              <option value="">Shiplu - shiplu2111@gmail.com</option>
                            </select>
                            <small class="form-control-feedback">
                              Select your gender
                            </small>
                          </div>
                        </div>
                        <!--/span-->
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="card-body border-top">
                        <button type="submit" class="btn btn-primary">
                          Save
                        </button>
                        <button type="button" class="btn bg-danger-subtle text-danger ms-6">
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
   </x-app-layout>
