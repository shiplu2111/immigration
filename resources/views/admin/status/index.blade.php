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
                            <h4 class="card-title mb-0">Status</h4>
                          <a href="{{route('status.create')}}" class="btn btn-primary float-end" type="button" onclick="addData()">Add Status</a>

                          </div>
                    </div>
                  <div class="card-body">

                  <ul id="sortable-list">
    @foreach ($statuses as $status)
        <li class="sortable-item" data-id="{{ $status->id }}">
            <div class="card p-4">
                <div class="d-flex align-items-center  justify-content-between">
                    <span  class="d-flex align-items-center gap-2">

                        {{ $status->status_name }}
                    </span>
                    <span class="d-flex align-items-center gap-2">
                        <div>
                        <span class="mb-1 badge text-bg-secondary">{{ $status->status }}</span>

                        </div>
                        <div>
                            <a href="{{ route('status.status_update', $status->id) }}" class="btn btn-primary btn-sm">Update Status</a>
                        </div>
                    </span>

            </div>
        </li>
    @endforeach
</ul>
                  </div>
                </div>
                <!-- end File export -->
              </div>
        </div>
      </div>
      <script>
    const sortableList = document.getElementById('sortable-list');
    Sortable.create(sortableList, {
        animation: 150,
        onEnd: function () {
            // Get the new order of item IDs after drag-and-drop
            const orderedIds = Array.from(sortableList.children).map(item => item.dataset.id);

            // Send the new order to the backend
            fetch("{{ route('statuses.update-order') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ order: orderedIds })
            }).then(response => {
                if (response.ok) {
                    // alert("Order updated successfully!");
                } else {
                    // alert("Failed to update order.");
                }
            });
        }
    });
</script>
   </x-app-layout>
