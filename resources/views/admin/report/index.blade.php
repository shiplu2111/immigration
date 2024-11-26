<x-app-layout>
<style>
        /* Example CSS for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }

        .print_page {
            text-align: center;
            margin-bottom: 20px;
        }

    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Generate Report
                </div>
                <div class="card-body">
                    <form action="{{route('report.filter.individual')}}" method="GET" >
                        @csrf
                        <div class="row align-items-end justify-content-center">
                        <div class="col-md-5 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" required  name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                id="start_date"
                value="{{ old('start_date') }}" >
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                id="end_date"
                value="{{ old('end_date') }}"
                required>
                            @error('end_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-2 mb-3">
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">

                <div class="card-body"  id="printableArea">
                <div class="row pt-3" id="printableContent2">
                          <div class="col-md-12">

                            <div class="text-center">
                              <address>
                                <h4 class="fw-bold invoice-customer">
                                  <span class="fw-bold">Saifan Imigration</span>,
                                </h4>

                                <p>
                                  <span>Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  {{ date('d-M-Y') }}
                                </p>

                                <h5>
                                  <span class="fw-bold text-underline">Candidate Report</span>
                                </h5>

                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">

                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Candidate Name</th>
                                    <th class="text-center">Job Title</th>
                                    <th class="text-center">Payment Method</th>
                                    <th class="text-center">Receipt</th>
                                    <th class="text-center">Transection ID/BY</th>
                                    <th class="text-center">Passport</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-end">Total Amount</th>
                                    <th class="text-end">Paid Amount</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                   @php

                                       $i=1;
                                       $total_paid=0;
                                       $total_due=0;
                                       $total_amount=0;
                                       $subtotal=0;
                                   @endphp
                                   @if ($individual_payments->count()==0)
                                   <tr>
                                     <td colspan="8" class="text-center">No Data Found</td>
                                   </tr>

                                   @endif
                                   @foreach ($individual_payments as $payment)

                                   @php
                                        $candidate= App\Models\Candidate::find($payment->individual_id);
                                        $total_paid+=$payment->payment_amount;
                                        $total_due+=$candidate->total_cost-$total_paid;
                                        $total_amount=$candidate->total_cost;
                                        $subtotal+=$total_paid;
                                   @endphp
                                  <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td class="text-center">{{date('d-M-Y', strtotime($payment->created_at))}}</td>
                                    <td  class="text-center">{{ $candidate->name }}</td>
                                    <td class="text-center">{{ $candidate->job_title }}</td>
                                    <td class="text-center">{{ $payment->pay_type  }}</td>
                                    <td class="text-center">
                                    <img src="{{ asset($payment->document) }}" alt="Document Image"
                                        width="30px" height="30px"
                                        style="border-radius: 10px; cursor: pointer;"
                                        data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->iteration }}">

                                    </td>
                                    <td class="text-center">{{ $payment->bank_name }}</td>
                                    <td class="text-center">{{ $candidate->passport_number }}</td>
                                    <td class="text-center">{{ $candidate->status }}</td>
                                    <td class="text-end">{{number_format($candidate->total_cost, 0, '.', ',')}} Taka</td>
                                    <td class="text-end">{{number_format($total_paid, 0, '.', ',')}} Taka</td>

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
                                  <tr class="bg-black text-white">
                                    <td colspan="10" class="text-end">Total</td>

                                    <td class="text-end">{{number_format($subtotal, 0, '.', ',')}} Taka</td>

                                  </tr>

                                  <!-- end row -->

                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                            <div class="d-flex justify-content-center">
                                        {!! $individual_payments->links('pagination::bootstrap-5') !!}
                                    </div>

                            </div>
                            <div class="clearfix"></div>
                            <hr>

                          </div>
                        </div>
                        <div class="text-end">

                              <button class="btn btn-primary btn-default  ms-6" type="button"  onclick="printDivContent()">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        function printDivContent() {
            // Save the current page's HTML content
            const originalContent = document.body.innerHTML;

            // Get the HTML of the div you want to print
            const printableContent = document.getElementById("printableContent2").innerHTML;

            // Replace the body's HTML with only the printable content
            document.body.innerHTML = printableContent;

            // Trigger the print dialog
            window.print();

            // Restore the original content
            document.body.innerHTML = originalContent;
        }
    </script>
</x-app-layout>
