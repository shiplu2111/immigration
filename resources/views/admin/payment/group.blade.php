<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group Payment') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">

        <div class="datatables">
                <!-- start File export -->
                <div class="card">
                    <div class="card-header">
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Group Payments</h4>
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
                            <th>Group Name</th>
                            <th>Group Code</th>
                            <th>Total Cost</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Last Payment Date</th>
                            <th>Action</th>
                          </tr>
                          <!-- end row -->
                        </thead>
                        <tbody>
                          <!-- start row -->



                        @foreach ($groups as $group)
                        @php
                                $paymentDetails = DB::table('payments')->where('group_id', $group->id)->get();
                                $paidAmount = $paymentDetails->sum('payment_amount');
                                $dueAmount = $group->total_cost - $paidAmount;

                                $lastPayment = DB::table('payments')
                                                ->where('group_id', $group->id)
                                                ->orderBy('created_at', 'DESC')
                                                ->first();
                            @endphp
                            <tr>
                                <td>{{ $group->group_name }}</td>
                                <td>{{ $group->group_code }}</td>
                                <td>{{ $group->total_cost }} Taka</td>
                                <td>{{ $paidAmount }} Taka</td>
                                <td>{{ $dueAmount }} Taka</td>

                                <td>
                                @if ($lastPayment)
                                    {{ \Carbon\Carbon::parse($lastPayment->created_at)->format('d-M-Y') }}
                                    @else
                                        <span class="badge bg-danger text-white">No Payment</span>
                                    @endif

                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                                <a href="{{ route('payment.group.create', $group->id) }}" class="btn btn-sm btn-primary">
                                                     <i class="ti ti-plus"></i>
                                                </a>
                                                <a href="{{ route('payment.group.details', $group->id) }}" class="btn btn-sm btn-success">
                                                    <i class="ti ti-info-circle"></i>
                                                </a>
                                                </div>

                                </td>
                            </tr>
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
