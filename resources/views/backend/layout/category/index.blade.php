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
                {{-- <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">Category Category</h5>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New</a>
                </div> --}}

                <!-- Button trigger modal -->
                   <div class="d-flex justify-content-between align-items-center mt-3 p-3">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
    Add New Category
  </button>
                   </div>

  <!-- Modal -->
  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="addCategoryForm">
          @csrf <!-- CSRF token for security -->
          <div class="modal-header">
            <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Category Name Field -->
            <div class="mb-3">
              <label for="categoryName" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="categoryName" name="name" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>

                <div class="table-responsive mt-4 p-4">
                    <table class="table table-hover" id="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
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
        url: "{{ route('category.index') }}",
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
            var url = '{{ route('category.status', ':id') }}';
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

@push('script')
<script>
var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()</script>

})
</script>
@endpush
