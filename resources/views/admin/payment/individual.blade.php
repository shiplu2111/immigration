<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Individual Payment') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">

        <div class="datatables">
                <!-- start File export -->
                <div class="card">
                    <div class="card-header">
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Individual Payments</h4>
                          </div>
                    </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                        <thead>
                          <!-- start row -->
                          <tr>
                            <th>Candidate Name</th>
                            <th>Candidate Mobile</th>
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



                          @foreach ($candidates as $candidate)
                            @php
                                $paymentDetails = DB::table('payments')->where('individual_id', $candidate->id)->get();
                                $paidAmount = $paymentDetails->sum('payment_amount');
                                $dueAmount = $candidate->total_cost - $paidAmount;

                                $lastPayment = DB::table('payments')
                                                ->where('individual_id', $candidate->id)
                                                ->orderBy('created_at', 'DESC')
                                                ->first();
                            @endphp

                            <tr>
                                <td>{{ $candidate->name }}</td>
                                <td>{{ $candidate->phone }}</td>
                                <td>{{ $candidate->total_cost }} Taka</td>
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
                                    <div class="dropdown dropstart">
                                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical fs-6"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="{{ route('candidate.show', $candidate->id) }}" class="dropdown-item d-flex align-items-center gap-3">
                                                    <i class="fs-4 ti ti-plus"></i> Candidate Details
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('payment.individual.create', $candidate->id) }}" class="dropdown-item d-flex align-items-center gap-3">
                                                    <i class="fs-4 ti ti-plus"></i> Add Payment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                          <!-- end row -->
                          <!-- start row -->

                          <!-- end row -->
                        </tbody>
                        <tfoot>
                          <!-- start row -->
                          <tr>
                          <th>Candidate Name</th>
                            <th>Candidate Mobile</th>
                            <th>Total Cost</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Last Payment Date</th>
                            <th>Action</th>
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
