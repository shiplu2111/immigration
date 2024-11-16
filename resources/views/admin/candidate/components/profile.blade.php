<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <div class=" offset-lg-2 col-lg-8 ">
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h4 class="card-title mb-0">{{$candidate->name}} -({{$candidate->status}})</h4>
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
                        <p class="mb-0 fw-normal fs-4"><b>{{$candidate->name}}</b></p>
                      </td>

                    </tr>
                    <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Email:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->email}}</b></p>
                        </td>

                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Mobile No:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->phone}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Total Cost:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->total_cost}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Date Of Birth:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->dob}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Applied Country:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->country}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Gender:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->gender}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Marital Status	:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->marital_status}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Birth Place:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->birth_place}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Passport Number:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_number}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Issue Date:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_issue_date}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Expiry Date:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->passport_expiry_date}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Village:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->village}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Thana:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->thana}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>District:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->district}}</b></p>
                        </td>
                      </tr>


                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Emergency contact name	:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_name}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Emergency contact relation:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_relation}}</b></p>
                        </td>
                      </tr>

                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Emergency contact mobile:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->emergency_contact_phone}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Father Name:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->father_name}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Mother Name:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>{{$candidate->mother_name}}</b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4">
                              <b>Spouse Name:</b></p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal fs-4">
                                <b>
                                    @if ($candidate->spouse_name == null)
                                        Unmarried
                                    @else
                                    {{$candidate->spouse_name}}
                                    @endif

                                </b>
                            </p>
                        </td>
                      </tr>


                  </tbody>
                </table>
              </div>

            </div>
          </div>

      </div>
  </div>
