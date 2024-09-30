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
                    <h5 class="mb-0">User List</h5>
                </div>

                <div class="table-responsive mt-4 p-4">
                    <table class="table table-hover" id="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Property Name</th>
                                <th>Status</th>
                                <th>Action</th>
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
    <script type="text/javascript" src="{{ asset('backend/vendor/libs/DataTable/js/dataTables.bootstrap4.min.js') }}">
    </script>

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
                url: "{{ route('all-property.index') }}",
                type: "GET",
            },

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'property_title', // Corresponding to the backend 'fname' field
                    name: 'property_title',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'feature', // Feature switch from backend
                    name: 'feature',
                    orderable: false,
                    searchable: false
                },


                {
                    data: 'status', // Feature switch from backend
                    name: 'feature',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action', // Action buttons from backend
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
        });

        const PropertyFeaturedHandler = (id, featuredElement) => {
            try {
                // Get the feature status from the checkbox
                let selected_state = $(featuredElement).is(':checked') ? 'active' : 'inactive';
                console.log(selected_state); // Verify the value

                $.ajax({
                    url: `{{ route('all-roperty.feature') }}`,
                    method: 'PATCH',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        featured: selected_state
                    },
                    success: function(response) {
                        // Handle success if needed
                        console.log('Feature status updated successfully.');
                        if (response.success === true) {
                            Swal.fire({
                                icon: "success",
                                title: "Featured status has been updated",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            console.log(response.message);

                        } else if (response.errors) {
                            console.log(response.errors[0]);
                            errorAlert();
                        } else {
                            console.log(response.message);
                            errorAlert();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating feature status:', error);
                        errorAlert();
                    }
                });
            } catch (e) {
                console.log(e);
            }
        };
        // Status Change
        const PropertyStatusHandler = (id, status) => {
            try {
                let selected_state = $(status).val(); // Get selected value
                $.ajax({
                    url: `{{ route('all-property.status', ['id' => ':id']) }}`.replace(':id',
                    id), // Use named route
                    method: 'PATCH',
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token
                        status: selected_state // Send the selected status
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Status has been updated",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location.reload(); // Reload the page after success
                            });
                        } else if (response.errors) {
                            console.log(response.errors[0]);
                            errorAlert();
                        } else {
                            console.log(response.message);
                            errorAlert();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating status:', error);
                        errorAlert();
                    }
                });
            } catch (e) {
                console.log(e);
            }
        };
    </script>
@endpush
