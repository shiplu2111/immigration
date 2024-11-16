<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class=" datatables col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-items-center justify-content-between">
                            <h3 class="card-title">Create New Company</h3>
                            <a href="{{ route('companies') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('expenses.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Expense Type</label>
                                <select name="expense_type" id="expense_type" class="form-select  select2">
                                    <option value="rent">Offce Rent</option>
                                    <option value="service_charge">Service charge</option>
                                    <option value="electricity_bill">Electricity bill</option>
                                    <option value="gas_bill">Gas bill</option>
                                    <option value="gasoline_bill">Gasoline bill</option>
                                    <option value="stationary_bill">Stationary bill</option>
                                    <option value="food_bill">Food bill</option>
                                    <option value="non_food_bill">Non Food bill</option>
                                    <option value="cleaning_bill">Cleaning bill</option>
                                    <option value="transport_bill">Transport bill</option>
                                    <option value="salary">Salary</option>
                                    <option value="bonus">Bonus</option>
                                    <option value="special_allowance">Special allowance</option>
                                    <option value="others">Other Expense</option>
                                </select>
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="name" class="form-label">Amount</label>
                                <input type="number" name="amount" required class="form-control" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" min="2020-01-01" max="{{ date('Y-m-d') }}" >
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label">Expense Description</label>
                                <!-- <textarea name="expense_description" requred class="form-control" rows="3"  id="expense_description"> -->
                                <div class="form-group">
                                    <textarea class="form-control" name="expense_description"  rows="3" placeholder="Text Here..."></textarea>
                                </div>


                            </div>
                        </div>


                            <button type="submit" class="btn btn-primary waves-effect float-right ">Create Expense</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </x-app-layout>
