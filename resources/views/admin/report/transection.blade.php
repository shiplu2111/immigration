<x-app-layout>
<style>
        /* Example CSS for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
            padding-top: 10px;
            padding-bottom: 10px;
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
                                  <span class="fw-bold text-underline">Transection Report</span>
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
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Details</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Income</th>
                                    <th class="text-center">Expense</th>
                                    <th class="text-end">Total Amount</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                   @php
                                       $i=1;
                                       $total_income=0;
                                       $total_expense=0;
                                   @endphp
                                   @if ($transections->count()==0)
                                   <tr>
                                     <td colspan="8" class="text-center">No Data Found</td>
                                   </tr>

                                   @endif
                                   @foreach ($transections as $transection)

                                   @if ($transection->transection_source == 'Income')
                                   @php
                                       $total_income+=$transection->transection_amount;
                                   @endphp
                                   @else
                                   @php
                                       $total_expense+=$transection->transection_amount;
                                   @endphp
                                   @endif
                                  <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td class="text-center">{{date('d-M-Y', strtotime($transection->created_at))}}</td>
                                    <td  class="text-center">{{ $transection->transection_name }}</td>
                                    <td class="text-center">{{ $transection->transection_description }}</td>
                                    <td class="text-center">{{ $transection->transection_type }}</td>
                                    @if ($transection->transection_source == 'Income')
                                    <td class="text-center">{{number_format($transection->transection_amount, 0, '.', ',')}} Taka</td>
                                    <td class="text-center">-</td>
                                    @else
                                    <td class="text-center">-</td>
                                    <td class="text-center">{{number_format($transection->transection_amount, 0, '.', ',')}} Taka</td>
                                    @endif

                                    <td class="text-end">{{number_format($transection->transection_amount, 0, '.', ',')}} Taka</td>

                                  </tr>
                                  @endforeach
                                  <tr class="bg-black text-white">
                                    <td colspan="5" class="text-end">Total</td>
                                    <td>{{number_format($total_income, 0, '.', ',')}} </td><td>-{{number_format($total_expense, 0, '.', ',')}} </td>
                                    <td>={{number_format($total_income-$total_expense, 0, '.', ',')}} </td>
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
                                        {!! $transections->links('pagination::bootstrap-5') !!}
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
