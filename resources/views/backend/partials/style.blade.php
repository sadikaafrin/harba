  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="{{asset('backend/vendor/fonts/boxicons.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('backend/vendor/css/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('backend/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('backend/css/demo.css')}}" />

  <link rel="stylesheet" href="{{ asset('backend/vendor/libs/DataTable/css/jquery.dataTables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/vendor/libs/DataTable/css/dataTable.custom.css') }}">

{{-- Bootstrap CDN Icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />


  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/vendor/libs/apex-charts/apex-charts.css')}}" />
<!--dropify cdn -->
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />



<!-- INTERNAL Switcher css -->
<link href="{{ asset('backend/switcher/css/switcher.css') }}" rel="stylesheet">
<link href="{{ asset('backend/switcher/demo.css') }}" rel="stylesheet">

@stack('style')
<style>
    /* cs-editor */
    #description {
        width: 100%;
        height: 100px;
    }
    .ck-editor__editable {
        min-height: 300px;
    }
/* all from label text format */
    label.col-form-label {
    text-transform: none;
}
</style>
