<div class="tab-pane fade" id="pills-friends-2" role="tabpanel" aria-labelledby="pills-expense-tab">
    <div class=" offset-lg-2 col-lg-8 ">
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom d-sm-flex justify-content-between">
              <h4 class="card-title mb-0">Expenses</h4>
              <button type="button" class="btn btn-success float-endbtn mb-1 btn-secondary rounded-circle round-40 btn-sm d-inline-flex align-items-center justify-content-center"  data-bs-toggle="modal" data-bs-target="#expense_add_modal">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M12 11l0 6" /><path d="M9 14l6 0" /></svg>
            </button>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">

                  <tbody>
                    @if ($expense)


                    <tr>
                      <td style="border-right: .5px solid #dee2e6">
                        <p class="mb-0 fw-normal fs-4"><b>Air ticket:</b></p>
                      </td>
                      <td>

                        <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->air_ticket == null)
                                Not Done Yet
                            @else

                                {{number_format($expense->air_ticket, 2)}}
                            @endif
                        </b></p>
                      </td>
                    </tr>
                    <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Translation:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->translation == null)
                                Not Done Yet
                            @else
                                {{number_format($expense->translation, 2)}}

                            @endif
                            </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>MOFA attest:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->mofa_attest == null)
                                Not Done Yet
                            @else
                            {{number_format($expense->mofa_attest, 2)}}

                            @endif
                        </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Notary attest:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->notary_attest == null)
                                Not Done Yet
                            @else
                            {{number_format($expense->notary_attest, 2)}}

                            @endif
                            </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Transportation:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->transportation == null)
                                Not Done Yet
                            @else
                            {{number_format($expense->transportation, 2)}}

                            @endif
                            </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Photocopy:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4">
                                <b>
                                    @if ($expense->photocopy == null)
                                        Not Done Yet
                                    @else
                            {{number_format($expense->photocopy, 2)}}

                                    @endif
                                </b>
                            </p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>BMET clearance:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->bmet_clearance == null)
                                Not Done Yet
                            @else
                            {{number_format($expense->bmet_clearance, 2)}}

                            @endif
                            </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Visa cost:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->visa_cost == null)
                            Not Done Yet
                        @else
                        {{number_format($expense->visa_cost, 2)}}

                        @endif
                        </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Embassy fee:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->embassy_fee == null)
                                Not Done Yet
                            @else
                        {{number_format($expense->embassy_fee, 2)}}

                            @endif
                           </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Embassy apointment fee:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->embassy_apointment_fee == null)
                                Not Done Yet
                            @else
                        {{number_format($expense->embassy_apointment_fee, 2)}}

                            @endif
                        </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Agent commission:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->agent_commission == null)
                                Not Done Yet
                            @else
                        {{number_format($expense->agent_commission, 2)}}

                            @endif
                            </b></p>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-right: .5px solid #dee2e6">
                          <p class="mb-0 fw-normal fs-4"><b>Other expenses:</b></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4"><b>
                            @if ($expense->other_expenses == null)
                                Not Done Yet
                            @else
                            {{number_format($expense->other_expenses, 2)}}
                            @endif
                            </b></p>
                        </td>
                      </tr>
                      @else
                      <tr>
                        <td colspan="3" class="text-center">
                          <p class="mb-0 fw-semibold fs-4">No expense has been added yet.</p>
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

<div class="modal fade" id="expense_add_modal" tabindex="-1" aria-labelledby="expense_add_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myLargeModalLabel">
            Add Expense
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('candidate.expense.store') }}" method="POST" ">
        @csrf
        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
        <input type="hidden" name="create_by" value="{{ auth()->user()->id }}">
        <div class="modal-body">
            <div class="mb-3">
                {{-- <label class="form-label">Input Clearance</label> --}}
                <select class="form-select" name="expense_type" id="inlineFormCustomSelect">
                  <option selected="">Choose Expense Type</option>
                  <option value="air_ticket">Air ticket</option>
                  <option value="translation">Translation</option>
                  <option value="mofa_attest">MOFA attest</option>
                  <option value="notary_attest">Notary attest</option>
                  <option value="transportation">Transportation</option>
                  <option value="photocopy">Photocopy</option>
                  <option value="bmet_clearance">BMET clearance</option>
                  <option value="visa_cost">Visa cost</option>
                  <option value="embassy_fee">Embassy fee</option>
                  <option value="embassy_apointment_fee">Embassy apointment fee</option>
                  <option value="agent_commission">Agent commission</option>
                  <option value="other_expenses">Other expenses</option>
                </select>
              </div>
        <div class="mb-3">
          <input type="float" name="amount" placeholder="Enter amount" class="form-control" required>
        </div>
           </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect  text-start">Upload</button>
            <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
            Close
          </button>
        </div>
    </form>
      </div>
    </div>
  </div>



