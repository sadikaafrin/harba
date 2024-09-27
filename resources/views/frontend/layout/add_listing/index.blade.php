@extends('frontend.app')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endpush
@section('content')
    @php
        $userRole = auth()->user()->role; // Assuming 'role' is the column used for roles
    @endphp
    <div class="content">
        <!--container-->
        <div class="content">
            <!--container-->
            <div class="container">
                <!--breadcrumbs-list-->
                <div class="breadcrumbs-list bl_flat">
                    <a href="#">Home</a><span>Add New Listing</span>
                    <div class="breadcrumbs-list_dec">
                        <i class="fa-thin fa-arrow-up"></i>
                    </div>
                </div>
                <!--breadcrumbs-list end-->
                <!--main-content-->
                <div class="main-content ms_vir_height">
                    <!--boxed-container-->
                    <div class="boxed-container">
                        <form id="propertyForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- pricing-column -->
                                <div class="col-lg-12">
                                    <div class="dashboard-title">
                                        <div class="dashboard-title-item">
                                            <span>Add Propperty</span>
                                        </div>
                                    </div>
                                    <div class="db-container">
                                        <!--dasboard-content-item-->
                                        <div class="dasboard-content-item">
                                            <div class="dashboard-widget-title-single">
                                                Basic Informations
                                            </div>
                                            <div class="custom-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-input-text"></i>
                                                            <input type="text" placeholder="Main Title"
                                                                value="{{ old('property_title') }}" name="property_title" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-building"></i>
                                                            <select name="category_id" id="category_id"
                                                                class="chosen-select on-radius no-search-select">
                                                                <option value="">Select Category</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}"
                                                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-layer-group"></i>
                                                            <select data-placeholder="Categories"
                                                                class="chosen-select on-radius no-search-select"
                                                                name="appartment_type_id" id="appartment_type_id">
                                                                <option>Appartement Categories</option>
                                                                @foreach ($appartmenType as $type)
                                                                    <option value="{{ $type->id }}"
                                                                        {{ old('appartment_type_id') == $type->id }}>
                                                                        {{ $type->name }}
                                                                    </option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-money-bill"></i>
                                                            <input type="text" placeholder="Price"
                                                                value="{{ old('price') }}" name="price" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-tags"></i>
                                                            <input type="text" placeholder="Keywords"
                                                                value="{{ old('keyword') }}" name="keyword" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--dasboard-content-item end-->
                                        <!--dasboard-content-item-->
                                        <div class="dasboard-content-item" style="margin-top: 20px">
                                            <div class="dashboard-widget-title-single">
                                                Location / Contacts
                                            </div>
                                            <div class="custom-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-phone-office"></i>
                                                            <input type="text" placeholder="Phone"
                                                                value="{{ old('phone') }}" name="phone" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-envelope"></i>
                                                            <input type="text" placeholder="E-mail"
                                                                value="{{ old('email') }}" name="email" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        @if ($userRole == 'user')
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-city"></i>
                                                                <select data-placeholder="All Cities"
                                                                    class="chosen-select on-radius no-search-select"
                                                                    name="all_cities_id[]" id="all_cities_id" multiple>
                                                                    <option disabled>Select Amenities</option>
                                                                    @foreach ($allCity as $city)
                                                                        <option value="{{ $city->id }}"
                                                                            {{ in_array($city->id, old('all_cities_id', [])) ? 'selected' : '' }}>
                                                                            {{ $city->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        @endif
                                                        <!-- listsearch-input-item end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-address-card"></i>
                                                            <input type="text" placeholder="Adress"
                                                                value="{{ old('address') }}" name="address" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--dasboard-content-item end-->
                                        <!--dasboard-content-item-->
                                        <div class="dashboard-content-item" style="margin-top: 20px">
                                            <div class="dashboard-widget-title-single">
                                                Upload Property Media
                                            </div>
                                            <div class="custom-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form class="fuzone">
                                                            <div class="fu-text">
                                                                <span>
                                                                    <i class="fa-light fa-cloud-arrow-up"></i>
                                                                    Click here or drop files to upload
                                                                </span>
                                                                <div class="photoUpload-files fl-wrap"></div>
                                                            </div>
                                                            <input type="file" class="upload" multiple
                                                                name="images[]" />
                                                        </form>
                                                        <!-- Image Preview Container -->
                                                        <div id="image-preview-container"
                                                            style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px;">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--dasboard-content-item end-->
                                        <!--dasboard-content-item-->
                                        <div class="dasboard-content-item" style="margin-top: 20px">
                                            <div class="dashboard-widget-title-single">
                                                Property Details
                                            </div>
                                            <div class="custom-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-chart-area"></i>
                                                                    <input type="text" placeholder="Area:"
                                                                        value="{{ old('area') }}" name="area" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-bed"></i>
                                                                    <input type="text" placeholder="Bedrooms:"
                                                                        value="{{ old('bedroom') }}" name="bedroom" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-bath"></i>
                                                                    <input type="text" placeholder="Bethrooms:"
                                                                        value="{{ old('bethrooms') }}"
                                                                        name="bethrooms" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-car"></i>
                                                                    <input type="text" placeholder="Parking:"
                                                                        value="{{ old('parking') }}" name="parking" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-users"></i>
                                                                    <input type="text" placeholder="Accomodation:"
                                                                        value="{{ old('accomudation') }}"
                                                                        name="accomudation" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <!-- listsearch-input-item -->
                                                                <div class="cs-intputwrap">
                                                                    <i class="fa-light fa-globe-pointer"></i>
                                                                    <input type="text" placeholder="Web site:"
                                                                        value="{{ old('website') }}" name="website" />
                                                                </div>
                                                                <!-- listsearch-input-item -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="cs-intputwrap">
                                                            <textarea name="details" id="comments" cols="40" rows="3" placeholder="Property Details:"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="dashboard-widget-title-single">
                                                            Amenities:
                                                        </div>
                                                        <ul class="filter-tags no-list-style ds-tg">
                                                            @foreach ($amenities as $amenity)
                                                                <li>
                                                                    <input id="check-{{ $amenity->id }}" type="checkbox"
                                                                        name="amenities[]" value="{{ $amenity->id }}" />
                                                                    <label
                                                                        for="check-{{ $amenity->id }}">{{ $amenity->title }}</label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    {{-- <div class="col-lg-6">
                                                    <div class="dashboard-widget-title-single">
                                                        Upload Plans and Brochure:
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa-light fa-cloud-arrow-up"></i>
                                                                Click here or drop files to upload</span>
                                                            <div class="photoUpload-files fl-wrap"></div>
                                                        </div>
                                                        <input type="file" class="upload" name="brochure_pdf"
                                                            id="brochure_pdf" />
                                                    </form>
                                                    <!-- listsearch-input-item -->
                                                </div> --}}
                                                </div>
                                            </div>
                                            <button type="submit" class="commentssubmit" style="margin-top: 10px">
                                                <span>Save Property Changes </span>
                                            </button>
                                        </div>
                                        <!--dasboard-content-item end-->
                                    </div>
                                </div>
                                <!-- pricing-column end-->
                            </div>
                            <div class="limit-box"></div>
                            </from>
                    </div>
                    <!--boxed-container end-->
                </div>
                <!--main-content end-->
                <div class="to_top-btn-wrap">
                    <div class="to-top to-top_btn">
                        <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
                    </div>
                    <div class="svg-corner svg-corner_white" style="top: 0; left: -40px; transform: rotate(-90deg)"></div>
                    <div class="svg-corner svg-corner_white" style="top: 0; right: -40px; transform: rotate(-180deg)">
                    </div>
                </div>
            </div>
            <!-- container end-->
        </div>
        <!-- container end-->
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#propertyForm').submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '{{ route('add-listing.store') }}',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        toastr.success(response.message); // Notify the user
                        $('#propertyForm')[0].reset(); // Reset the form
                        $('#image-preview-container').empty(); // Clear the image previews

                        // Clear any displayed listings if applicable
                        $('#properties-list').empty(); // Assuming this is your container for displaying listings
                    },
                    error: function(xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                toastr.error(value[0]); // Display the first error message for each field
                            });
                        } else {
                            toastr.error('An unexpected error occurred.'); // Fallback for unexpected errors
                        }
                    }
                });
            });

            // Image preview functionality
            $('.fuzone input').each(function() {
                $(this).on('change', function() {
                    var previewContainer = $('#image-preview-container');
                    previewContainer.empty(); // Clear previous previews

                    var files = $(this)[0].files;

                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var reader = new FileReader();

                        reader.onload = (function(file) {
                            return function(e) {
                                // Create a container for the image
                                var container = $("<div class='file-item'></div>").css({
                                    width: '150px',
                                    height: '150px',
                                    position: 'relative'
                                });

                                // Create an image element with object-fit and consistent size
                                var img = $("<img>").attr("src", e.target.result).css({
                                    width: '100%',
                                    height: '100%',
                                    objectFit: 'cover',
                                    borderRadius: '8px'
                                });

                                // Create a remove button
                                var removeButton = $("<button class='remove-btn'>&times;</button>")
                                    .css({
                                        background: 'none',
                                        border: 'none',
                                        color: 'red',
                                        cursor: 'pointer',
                                        fontSize: '18px',
                                        position: 'absolute',
                                        top: '5px',
                                        right: '5px'
                                    })
                                    .on('click', function() {
                                        container.remove();
                                    });

                                // Append image and remove button to the container
                                container.append(img).append(removeButton);
                                previewContainer.append(container);
                            };
                        })(file);

                        reader.readAsDataURL(file);
                    }
                });
            });
        });
    </script>
@endpush
