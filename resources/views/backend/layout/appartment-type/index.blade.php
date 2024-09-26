@extends('backend.app')

@push('style')
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/DataTable/css/jquery.dataTables.min.css') }}" />

@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">Property Appartment Type</h5>
                    <a href="{{ route('appartment-type.create') }}" class="btn btn-primary">Add New</a>
                </div>

                <div class="table-responsive mt-4 p-4">
                    <table class="table table-hover" id="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Appartment Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
        <!-- / Content -->
    </div>
@endsection
@push('script')
<script type="text/javascript" src="{{ asset('backend/vendor/libs/DataTable/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/vendor/libs/DataTable/js/dataTables.bootstrap4.min.js') }}"></script>

<script>
  let dTable = $('#data-table').DataTable({
    order: [],
    lengthMenu: [
        [25, 50, 100, 200, 500, -1],
        [25, 50, 100, 200, 500, "All"]
    ],
    processing: true,
    responsive: true,
    serverSide: true,

    language: {
        processing: `<div class="text-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
            </div>`
    },

    scroller: {
        loadingIndicator: false
    },
    pagingType: "full_numbers",
    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
    ajax: {
        url: "{{ route('appartment-type.index') }}",
        type: "get",
    },

    columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false
        },
        {
            data: 'name',   // Should match the name used in the PHP method
            name: 'name',
            orderable: true,
            searchable: true
        },
        {
            data: 'status', // Should match the status used in the PHP method
            name: 'status',
            orderable: true,
            searchable: true
        },
        {
            data: 'action', // Should match the action used in the PHP method
            name: 'action',
            orderable: false,
            searchable: false
        },
    ],
});
           delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                text: 'If you delete this, it will be gone forever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteItem(id);
                }
            });
        }

        // Delete Button
        function deleteItem(id) {
            let url = '{{ route('appartment-type.destroy', ':id') }}';
            let csrfToken = '{{ csrf_token() }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(resp) {
                    $('#data-table').DataTable().ajax.reload();
                    if (resp['t-success']) {
                        toastr.success(resp.message);
                    } else {
                        toastr.error(resp.message);
                    }
                },
                error: function(error) {
                    toastr.error('An error occurred. Please try again.');
                }
            });
        }

         // Status Change Confirm Alert
         function   showStatusChangeAlert(id) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to update the status?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                    statusChange(id);
                }
            });
        }

        // Status Change
        function statusChange(id) {
            var url = '{{ route('appartment-type.status', ':id') }}';
            $.ajax({
                type: "GET",
                url: url.replace(':id', id),
                success: function(resp) {
                    console.log(resp);
                    // console.log('AJAX success response:', resp); // Debugging
                    // Reloade DataTable
                    $('#data-table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function(error) {
                    // location.reload();
                } // Erro
            });
        }


</script>
@endpush
