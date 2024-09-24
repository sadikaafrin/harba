 <!-- Helpers -->
 <script src="{{ asset('backend/vendor/js/helpers.js') }}"></script>
 <script src="{{ asset('backend/js/config.js') }}"></script>

 <!-- Core JS -->
 <!-- build:js assets/vendor/js/core.js -->

 <script src="{{ asset('backend/vendor/libs/jquery/jquery.js') }}"></script>
 <script src="{{ asset('backend/vendor/libs/popper/popper.js') }}"></script>
 <script src="{{ asset('backend/vendor/js/bootstrap.js') }}"></script>
 <script src="{{ asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('backend/vendor/js/menu.js') }}"></script>

 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{ asset('backend/vendor/libs/apex-charts/apexcharts.js') }}"></script>

 <!-- Main JS -->
 <script src="{{ asset('backend/js/main.js') }}"></script>

 <!-- Page JS -->
 <script src="{{ asset('backend/js/dashboards-analytics.js') }}"></script>

 <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>


 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>



 <!-- dropify js -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<!-- sweet alert js -->
<script src="{{ asset('backend/js/sweetalert2@11.js') }}"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('backend/switcher/js/switcher.js') }}"></script>
   <!-- toastr -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


@stack('script')
   <script>
       $(document).ready(function() {
           toastr.options.timeOut = 10000;
           toastr.options.positionClass = 'toast-top-right';

           @if (Session::has('t-success'))
               toastr.options = {
                   'closeButton': true,
                   'debug': false,
                   'newestOnTop': true,
                   'progressBar': true,
                   'positionClass': 'toast-top-right',
                   'preventDuplicates': false,
                   'showDuration': '1000',
                   'hideDuration': '1000',
                   'timeOut': '5000',
                   'extendedTimeOut': '1000',
                   'showEasing': 'swing',
                   'hideEasing': 'linear',
                   'showMethod': 'fadeIn',
                   'hideMethod': 'fadeOut',
               };
               toastr.success("{{ session('t-success') }}");
           @endif

           @if (Session::has('t-error'))
               toastr.options = {
                   'closeButton': true,
                   'debug': false,
                   'newestOnTop': true,
                   'progressBar': true,
                   'positionClass': 'toast-top-right',
                   'preventDuplicates': false,
                   'showDuration': '1000',
                   'hideDuration': '1000',
                   'timeOut': '5000',
                   'extendedTimeOut': '1000',
                   'showEasing': 'swing',
                   'hideEasing': 'linear',
                   'showMethod': 'fadeIn',
                   'hideMethod': 'fadeOut',
               };
               toastr.error("{{ session('t-error') }}");
           @endif

           @if (Session::has('t-info'))
               toastr.options = {
                   'closeButton': true,
                   'debug': false,
                   'newestOnTop': true,
                   'progressBar': true,
                   'positionClass': 'toast-top-right',
                   'preventDuplicates': false,
                   'showDuration': '1000',
                   'hideDuration': '1000',
                   'timeOut': '5000',
                   'extendedTimeOut': '1000',
                   'showEasing': 'swing',
                   'hideEasing': 'linear',
                   'showMethod': 'fadeIn',
                   'hideMethod': 'fadeOut',
               };
               toastr.info("{{ session('t-info') }}");
           @endif

           @if (Session::has('t-warning'))
               toastr.options = {
                   'closeButton': true,
                   'debug': false,
                   'newestOnTop': true,
                   'progressBar': true,
                   'positionClass': 'toast-top-right',
                   'preventDuplicates': false,
                   'showDuration': '1000',
                   'hideDuration': '1000',
                   'timeOut': '5000',
                   'extendedTimeOut': '1000',
                   'showEasing': 'swing',
                   'hideEasing': 'linear',
                   'showMethod': 'fadeIn',
                   'hideMethod': 'fadeOut',
               };
               toastr.warning("{{ session('t-warning') }}");
           @endif
       });
   </script>

   <!-- CSRF -->
   <script>
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
   </script>
 <script>
     $(document).ready(function() {
         $('.dropify').dropify();
     });
 </script>

  <script>
     ClassicEditor
         .create(document.querySelector('#description'))
         .catch(error => {
             console.error(error);
         });
 </script>

<script>
    ClassicEditor
        .create(document.querySelector('#description1'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#description2'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#description3'))
        .catch(error => {
            console.error(error);
        });
</script>
