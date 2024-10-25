<div class="tab-pane fade" id="pills-agents" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
    <div class=" offset-lg-2 col-lg-8 ">
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h4 class="card-title mb-0">{{$agent->name}} -({{$agent->role}})</h4>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">

                  <tbody>
                    <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4">
                            <b>Name:</b></p>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4"><b>{{$agent->name}}</b></p>
                      </td>

                    </tr>
                    <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Email:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$agent->email}}</b></p>
                        </td>

                      </tr>
                      @if ($agent_data)
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Mobile No:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->phone}}</b></p>
                        </td>
                      </tr>


                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Company name:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->company_name}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Address:</b></p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->address_one}}</b></p>
                            <br>
                            <p class="mb-0 fw-normal fs-4"><b>{{$agent_data->address_two}}</b></p>

                        </td>
                      </tr>
                      @endif
                  </tbody>
                </table>
              </div>

            </div>
          </div>

    </div>
  </div>
