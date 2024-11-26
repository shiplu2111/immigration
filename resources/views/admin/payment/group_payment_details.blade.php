<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Payment Details') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">

        <div class="datatables">
                <!-- start File export -->
                <div class="card">
                    <div class="card-header">
                        <div class="mb-2">
                            <h4 class="card-title mb-0">({{ $group->group_name }} -group ) Payments Details</h4>
                            <div class="d-flex gap-2 float-end">
                            <a href="{{ url()->previous() }}" class="btn btn-primary ">
                                <i class="ti ti-arrow-left"></i> Back</a>
                            <!-- <a href="{{route('groups')}}" class="btn btn-primary float-end">Back</a> -->
                            </div>
                          </div>
                    </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                        <thead>
                          <!-- start row -->
                          <tr>
                            <th>S/N </th>
                            <th>Payment Method</th>
                            <th>Date</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Recept</th>
                            <th>Created By</th>
                          </tr>
                          <!-- end row -->
                        </thead>
                        <tbody>
                          <!-- start row -->



                          @foreach ($payments as $payment)
                          @php
                              $user=App\Models\User::where('id',$payment->create_by)->first();
                          @endphp
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $payment->pay_type }}</td>

                                <td>
                                    {{ \Carbon\Carbon::parse($payment->created_at)->format('d-M-Y') }}
                                </td>
                                <td>{{ $payment->payment_amount }}</td>
                                <td>{{ $payment->due_amount }}</td>
                                <td>
                                    <img src="{{ asset($payment->document) }}" alt="Document Image"
                                        width="30px" height="30px"
                                        style="border-radius: 10px; cursor: pointer;"
                                        data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->iteration }}">
                                </td>
                                <td>{{ $user->name }}</td>


                            </tr>

                            <div class="modal fade" id="imageModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $loop->iteration }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel{{ $loop->iteration }}">Payment Recept</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset($payment->document) }}" alt="Full Image" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                          <!-- end row -->
                          <!-- start row -->

                          <!-- end row -->
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
                <!-- end File export -->
              </div>

        </div>
    </div>


</x-app-layout>
