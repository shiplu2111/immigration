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
                    <div class="card-header">
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Payments</h4>
                          <!-- <a href="{{route('payment.create')}}" class="btn btn-primary float-end" type="button" onclick="addData()">Create New Payment</a> -->

                          </div>
                    </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                        <thead>
                          <!-- start row -->
                          <tr>
                            <th> Date</th>
                            <th> Type</th>
                            <th> Amount</th>
                             <th>Recept</th>
                             <th>Method</th>
                            <th>User Name</th>
                            <th>Total Amount</th>
                            <th>Due Amount</th>
                            <th>Created By</th>
                            <!-- <th>Action</th> -->
                          </tr>
                          <!-- end row -->
                        </thead>
                        <tbody>
                          <!-- start row -->




                        @foreach ($payments as $payment )

                                @php
                                    $user = App\Models\User::where('id', $payment->create_by)->first();
                                @endphp
                          <tr>
                          <td>{{Carbon\Carbon::parse($payment->created_at)->format('d-m-Y') }}</td>
                            <td>{{$payment->payment_type}}</td>
                            <td>{{$payment->payment_amount}}</td>
                            <td>
                                    <img src="{{ asset($payment->document) }}" alt="Document Image"
                                        width="30px" height="30px"
                                        style="border-radius: 10px; cursor: pointer;"
                                        data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->iteration }}">
                                </td>
                            <td>{{$payment->pay_type}}</td>
                            @php
                                    if($payment->payment_type == 'group'){
                                        $group = App\Models\Group::where('id', $payment->group_id)->first();
                                        $paid_amount = App\Models\Payment::where('group_id', $payment->group_id)->sum('payment_amount');
                                        $due_amount = $group->total_cost-$paid_amount;
                                    }else{
                                        $candidate = App\Models\Candidate::where('id', $payment->individual_id)->first();
                                        $paid_amount = App\Models\Payment::where('individual_id', $payment->individual_id)->sum('payment_amount');
                                        $due_amount = $candidate->total_cost-$paid_amount;
                                    }
                                @endphp
                            <td>
                              @if ($payment->payment_type == 'group')
                              {{$group->group_name}} -(G)
                              @else
                              {{$candidate->name}} -(I)
                              @endif
                            </td>
                            <td>
                            @if ($payment->payment_type == 'group')
                              {{$group->total_cost}}
                              @else
                              {{$candidate->total_cost}} Taka
                              @endif
                            </td>
                            <td>
                                @if ($due_amount > 0)
                                {{$due_amount}} Taka
                                @else
                                <span class="badge bg-success">Paid</span>


                                @endif
                            </td>
                            <td>{{$user->name}}</td>


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
