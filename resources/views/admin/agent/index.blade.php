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
                            <h4 class="card-title mb-0">Agents</h4>
                          <a href="{{route('agents.create')}}" class="btn btn-primary float-end" type="button" onclick="addData()">Create New Agent</a>

                          </div>
                    </div>
                  <div class="card-body">

                    <div class="table-responsive">
                      <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                        <thead>
                          <!-- start row -->
                          <tr>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Groups</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                          <!-- end row -->
                        </thead>
                        <tbody>
                          <!-- start row -->


                        @foreach ($agents as $agent)
                            @php
                                $user_data= DB::table('users')->where('id',$agent->user_id)->first();
                            @endphp

                          <tr>
                            <td>{{ $agent['user']['name'] }}</td>
                            <td>{{$agent->company_name}}</td>
                            <td>{{$agent->phone}}</td>
                            <td>{{ $agent['user']['email'] }}</td>
                            <td>
                                @php
                                    $groupIds = json_decode($agent->group_id, true);
                                    if($groupIds == null) $groupIds = [];
                                    $groupNames = \App\Models\Group::whereIn('id', $groupIds)->pluck('group_name');
                                @endphp

                                @if($groupNames && count($groupNames))

                                        @foreach($groupNames as $group_name)
                                            <span class="badge bg-primary">{{ $group_name }}</span>
                                        @endforeach

                                @else
                                    No Groups
                                @endif
                            </td>
                            <td>{{$user_data->status}}</td>
                            <td  class="text-center">
                                <span >
                                    <svg  xmlns="http://www.w3.org/2000/svg"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit" class="text-danger" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </span>
                                <a href="#">
                                <svg  xmlns="http://www.w3.org/2000/svg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Details" class="text-info" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 9h.01" /><path d="M11 12h1v4h1" /></svg> </a>
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
