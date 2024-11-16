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
                            <th>Payment Date</th>
                            <th>Payment Type</th>
                            <th>Payment Amount</th>
                            <!-- <th>Group Name</th> -->
                            <th>User Name</th>
                            <th>Total Amount</th>
                            <th>Due Amount</th>
                            <!-- <th>Action</th> -->
                          </tr>
                          <!-- end row -->
                        </thead>
                        <tbody>
                          <!-- start row -->




                        @foreach ($payments as $payment )


                          <tr>
                          <td>{{Carbon\Carbon::parse($payment->created_at)->format('d-m-Y') }}</td>
                            <td>{{$payment->payment_type}}</td>
                            <td>{{$payment->payment_amount}}</td>
                            <!-- <td>Group Name</td> -->
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
                            <!-- <td><div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="">
                                <i class="fs-4 ti ti-plus"></i>Details
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>

                          </ul>
                        </div></td> -->

                          </tr>
                          @endforeach

                          <!-- end row -->
                          <!-- start row -->

                          <!-- end row -->
                        </tbody>
                        <tfoot>
                          <!-- start row -->
                          <tr>
                          <th>Payment Date</th>
                            <th>Payment Type</th>
                            <th>Payment Amount</th>
                            <!-- <th>Group Name</th> -->
                            <th>User Name</th>
                            <th>Total Amount</th>
                            <th>Due Amount</th>
                            <!-- <th>Action</th> -->
                          </tr>
                          <!-- end row -->
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- end File export -->
              </div>

        </div>
    </div>
</x-app-layout>
