<x-app-layout>
<style>
        /* Example CSS for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
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
                    <form action="{{route('report.filter.group')}}" method="GET" >
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
<!-- Individual Report start here -->
<!-- Individual Report end here -->

        <div class="row">
            <div class="card" id="custom-invoice">

                <div class="card-body" >
                    <div class="row pt-3"  id="printableContent">
                          <div class="col-md-12">

                            <div class="text-center print_page">
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
                                  <span class="fw-bold text-underline">Group Report</span>
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
                                    <th class="text-center">Group Name</th>
                                    <th class="text-center">Group Code</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-end">Total Amount</th>
                                    <th class="text-end">Paid Amount</th>
                                    <th class="text-end">Due Amount</th>
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
                                   @endphp
                                   @if ($group_payments->count()==0)
                                   <tr>
                                     <td colspan="8" class="text-center">No Data Found</td>
                                   </tr>

                                   @endif
                                   @foreach ($group_payments as $payment)

                                   @php
                                       $total_paid+=$payment->total_payment;
                                       $total_due+=$payment->total_amount-$payment->total_payment;
                                       $total_amount+=$payment->total_amount;
                                   @endphp
                                  <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td class="text-center">{{date('d-M-Y', strtotime($payment->last_update))}}</td>
                                    <td  class="text-center">{{ $payment->group_name }}</td>
                                    <td class="text-center">{{ $payment->group_code }}</td>
                                    <td class="text-center">{{ $payment->group_status }}</td>
                                    <td class="text-end">{{number_format($payment->total_amount, 0, '.', ',')}} Taka</td>
                                    <td class="text-end">{{number_format($payment->total_payment, 0, '.', ',')}} Taka</td>
                                    <td class="text-end">{{number_format($payment->total_amount-$payment->total_payment, 0, '.', ',')}} Taka</td>
                                  </tr>
                                  @endforeach
                                  <tr class="bg-black text-white">
                                    <td colspan="5" class="text-end">Total</td>
                                    <td class="text-end">{{number_format($total_amount, 0, '.', ',')}} Taka</td>
                                    <td class="text-end">{{number_format($total_paid, 0, '.', ',')}} Taka</td>
                                    <td class="text-end">{{number_format($total_due, 0, '.', ',')}} Taka</td>
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
                                        {!! $group_payments->links('pagination::bootstrap-5') !!}
                                    </div>

                            </div>
                            <div class="clearfix"></div>
                            <hr>

                          </div>

                        </div>
                        <div class="text-end">

                              <button class="btn btn-primary btn-default no-print ms-6" onclick="printDivContent()" type="button">
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
            const printableContent = document.getElementById("printableContent").innerHTML;

            // Replace the body's HTML with only the printable content
            document.body.innerHTML = printableContent;

            // Trigger the print dialog
            window.print();

            // Restore the original content
            document.body.innerHTML = originalContent;
        }
    </script>
</x-app-layout>
