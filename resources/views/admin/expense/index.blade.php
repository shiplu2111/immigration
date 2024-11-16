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

                  <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mt-3 ">
                        <h4 class="mb-0 mb-sm-0 fw-semibold d-flex align-items-center">Office Expenses
                        </h4>

                        <a href="{{route('expenses.create')}}" class="btn btn-success float-endbtn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center" >
                            <i class="ti ti-plus"></i>
                        </a>


                    </div>
                    <hr>



                        <div class="raw mb-3">
                            <form action="{{ route('expenses.filter') }}" method="GET">

                                <div  class="d-flex  align-items-center gap-3">
                                <div class="input-daterange input-group" id="date-range">
                      <input type="date" class="form-control" name="start_date" min="2020-01-01" max="{{ date('Y-m-d') }}">

                      <span class="input-group-text bg-primary b-0 text-white">TO</span>

                      <input type="date" class="form-control" name="end_date" min="2020-01-02" max="{{ date('Y-m-d') }}">
                    </div>


                                <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                </div>
                            </form>

                        </div>
                        <div class="table-responsive">
                            @if ($expenses->count() == 0)
                            <div class="alert alert-danger">No expenses found</div>

                            @else

                            <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">S/N</th>
                                        <th class="border-bottom-0">Expense Type</th>
                                        <th class="border-bottom-0">Amount</th>
                                        <th class="border-bottom-0">Description</th>
                                        <th class="border-bottom-0">Date</th>
                                        <th class="border-bottom-0">Created</th>
                                        <!-- <th class="border-bottom-0">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($expenses as $expense)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $expense->expense_name }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->expense_description }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->created_at->format('d-m-Y') }}</td>
                                        <!-- <td>
                                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- end File export -->
              </div>
        </div>

      </div>
   </x-app-layout>
