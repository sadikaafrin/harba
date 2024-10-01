@extends('frontend.app')
@section('content')
    <div class="content">
        <!--container-->
        <div class="container">
            <!--breadcrumbs-list-->
            <div class="breadcrumbs-list bl_flat">
                <a href="#">Home</a><a href="#">Dashboard</a><span>Edit Profile</span>
                <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
            </div>
            <!--breadcrumbs-list end-->
            <!--main-content-->
            <div class="main-content  ms_vir_height">
                <!--boxed-container-->
                <div class="boxed-container">
                    <div class="row">
                        <!-- user-dasboard-menu_wrap -->
                        <div class="col-lg-3">
                            <div class="boxed-content btf_init">
                                <div class="user-dasboard-menu_wrap">
                                    <div class="user-dasboard-menu-header">
                                        <div class="user-dasboard-menu_header-avatar">
                                            <img src="images/avatar/1.jpg" alt="">
                                            <span>Welcome : <strong> Alisa</strong></span>
                                            <a href="dashboard-editprofile.html" class="usmha_edit tolt"
                                                data-microtip-position="left" data-tooltip="Edit Profile"><i
                                                    class="fa-light fa-user-pen"></i></a>
                                            <div class="db-menu_modile_btn"><strong>Menu</strong><i
                                                    class="fa-regular fa-bars"></i></div>
                                        </div>
                                    </div>
                                    <div class="user-dasboard-menu faq-nav ">
                                        <ul>
                                            <li><a href="dashboard.html"> Dashboard</a></li>
                                            <li><a href="dashboard-listing.html"> Your Advertisements </a></li>
                                            <li><a href="dashboard-requests.html"> Your Requests <span>6</span> </a></li>
                                            <li><a href="add-listing.html"> Add New Propperty </a></li>
                                            <li><a href="dashboard-editprofile.html" class="act-scrlink"> Edit profile</a>
                                            </li>
                                        </ul>
                                        <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i>
                                            Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- user-dasboard-menu_wrap end-->
                        <!-- pricing-column -->
                        <div class="col-lg-9">
                            <div class="dashboard-title">
                                <div class="dashboard-title-item"><span>Edit your profile</span></div>
                                <!--Tariff Plan menu-->
                                <div class="tfp-det-container">
                                    <div class="db-date"><i class="fa-regular fa-calendar"></i><strong></strong></div>
                                    <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                                    <div class="tfp-det">
                                        <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or
                                            upgrade. </p>
                                        <a href="#" class="tfp-det-btn color-bg">View Details <i
                                                class="fa-solid fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!--Tariff Plan menu end-->
                            </div>
                            <div class="db-container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dasboard-content-item">
                                            <div class="dashboard-widget-title-single">Personal Info</div>
                                            <div class="custom-form">
                                                <!-- Full Name -->
                                                <div class="cs-intputwrap">
                                                    <i class="fa-light fa-user"></i>
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Full Name" value="{{ Auth::user()->name }}">
                                                </div>

                                                <!-- Email Address -->
                                                <div class="cs-intputwrap">
                                                    <i class="fa-light fa-envelope"></i>
                                                    <input type="email" name="email" id="email"
                                                        placeholder="Email Address" value="{{ Auth::user()->email }}">
                                                </div>

                                                <!-- Phone -->
                                                <div class="cs-intputwrap">
                                                    <i class="fa-light fa-phone"></i>
                                                    <input type="text" name="phone" id="phone" placeholder="Phone"
                                                        value="{{ Auth::user()->userDetail->phone ?? '' }}">
                                                </div>

                                                <!-- Submit Button -->
                                                <button type="button" class="commentssubmit"
                                                    id="updatePersonalInfo">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="edit-profile-photo">
                                            <div class="edit-profile-photo_cur">
                                                <img src="images/avatar/1.jpg" alt="">
                                            </div>
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span> Upload New Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                            <div class="abs_bg"></div>
                                            <div class="remove_phav tolt" data-microtip-position="left"
                                                data-tooltip="Remove Photo"><i class="fa-light fa-trash"></i></div>
                                        </div>
                                        <!--dasboard-content-item-->
                                        {{-- <div class="dasboard-content-item">
                                        <div class="dashboard-widget-title-single">Your Socials Links</div>
                                        <div class="custom-form">
                                            <!-- listsearch-input-item -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <input type="text"   placeholder="Facebook" value="">
                                            </div>
                                            <!-- listsearch-input-item -->
                                            <!-- listsearch-input-item -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-brands fa-tiktok"></i>
                                                <input type="text"   placeholder="TikTok" value="">
                                            </div>
                                            <!-- listsearch-input-item -->
                                            <!-- listsearch-input-item -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-brands fa-instagram"></i>
                                                <input type="text"   placeholder="Instagram" value="">
                                            </div>
                                            <!-- listsearch-input-item -->
                                            <!-- listsearch-input-item -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-brands fa-x-twitter"></i>
                                                <input type="text"   placeholder="X-Twitter" value="">
                                            </div>
                                            <!-- listsearch-input-item -->
                                            <!-- listsearch-input-item -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-brands fa-youtube"></i>
                                                <input type="text"   placeholder="Youtube" value="">
                                            </div>
                                            <!-- listsearch-input-item -->
                                        </div>
                                        <button class="commentssubmit">Update</button>
                                    </div> --}}
                                        <form method="POST" action="{{ route('update-user-profile') }}">
                                            @csrf
                                            <div class="dashboard-content-item">
                                                <div class="dashboard-widget-title-single">Your Socials Links</div>
                                                <div class="custom-form">
                                                    <!-- Facebook -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                        <input type="text" name="facebook" placeholder="Facebook"
                                                            value="{{ auth()->user()->userDetail->facebook ?? '' }}">
                                                    </div>

                                                    <!-- TikTok -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-tiktok"></i>
                                                        <input type="text" name="tiktok" placeholder="TikTok"
                                                            value="{{ auth()->user()->userDetail->tiktok ?? '' }}">
                                                    </div>

                                                    <!-- Instagram -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-instagram"></i>
                                                        <input type="text" name="instagram" placeholder="Instagram"
                                                            value="{{ auth()->user()->userDetail->instagram ?? '' }}">
                                                    </div>

                                                    <!-- X-Twitter -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-x-twitter"></i>
                                                        <input type="text" name="x_twitter" placeholder="X-Twitter"
                                                            value="{{ auth()->user()->userDetail->x_twitter ?? '' }}">
                                                    </div>

                                                    <!-- YouTube -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-youtube"></i>
                                                        <input type="text" name="youtube" placeholder="Youtube"
                                                            value="{{ auth()->user()->userDetail->youtube ?? '' }}">
                                                    </div>
                                                </div>
                                                <button class="commentssubmit" type="submit">Update</button>
                                            </div>
                                        </form>
                                        <!--dasboard-content-item end-->
                                    </div>
                                </div>
                                <!--dasboard-content-item-->
                                {{-- <div class="dasboard-content-item" style="margin-top: 20px">
                                <div class="dashboard-widget-title-single">Change Password</div>
                                <div class="custom-form">
                                    <!-- listsearch-input-item -->
                                    <div class="cs-intputwrap pass-input-wrap">
                                        <i class="fa-light fa-lock-open"></i>
                                        <input type="password" class="pass-input" placeholder="Current Password" value="">
                                        <div class="view-pass"></div>
                                    </div>
                                    <!-- listsearch-input-item -->
                                    <!-- listsearch-input-item -->
                                    <div class="cs-intputwrap pass-input-wrap">
                                        <i class="fa-light fa-lock"></i>
                                        <input type="password" class="pass-input" placeholder="New Password" value="">
                                        <div class="view-pass"></div>
                                    </div>
                                    <!-- listsearch-input-item -->
                                    <!-- listsearch-input-item -->
                                    <div class="cs-intputwrap pass-input-wrap">
                                        <i class="fa-light fa-shield-check"></i>
                                        <input type="password" class="pass-input" placeholder="Confirm New Password" value="">
                                        <div class="view-pass"></div>
                                    </div>
                                    <!-- listsearch-input-item -->
                                </div>
                                <button class="commentssubmit">Update</button>
                            </div> --}}
                                <div class="dashboard-content-item" style="margin-top: 20px">
                                    <div class="dashboard-widget-title-single">Change Password</div>
                                    <div class="custom-form">
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-lock-open"></i>
                                            <input type="password" class="pass-input" id="current_password"
                                                placeholder="Current Password">
                                            <div class="view-pass"></div>
                                        </div>
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-lock"></i>
                                            <input type="password" class="pass-input" id="new_password"
                                                placeholder="New Password">
                                            <div class="view-pass"></div>
                                        </div>
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-shield-check"></i>
                                            <input type="password" class="pass-input" id="new_password_confirmation"
                                                placeholder="Confirm New Password">
                                            <div class="view-pass"></div>
                                        </div>
                                    </div>
                                    <button class="commentssubmit" id="updatePasswordBtn">Update</button>
                                </div>
                                <!--dasboard-content-item end-->
                            </div>
                        </div>
                        <!-- pricing-column end-->
                    </div>
                    <div class="limit-box"></div>
                </div>
                <!--boxed-container end-->
            </div>
            <!--main-content end-->
            <div class="to_top-btn-wrap">
                <div class="to-top to-top_btn"><span>Back to top</span> <i class="fa-solid fa-arrow-up"></i></div>
                <div class="svg-corner svg-corner_white" style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                <div class="svg-corner svg-corner_white" style="top:0;right: -40px; transform: rotate(-180deg)"></div>
            </div>
        </div>
        <!-- container end-->
    </div>
@endsection
@push('script')
    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />



    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // Check for success message
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            // Check for error message
            @if ($errors->any())
                toastr.error("{{ implode('', $errors->all(':message')) }}");
            @endif
        });
    </script>
    <script>
        $('#updatePasswordBtn').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route('change-password') }}',
                type: 'POST',
                data: {
                    current_password: $('#current_password').val(),
                    new_password: $('#new_password').val(),
                    new_password_confirmation: $('#new_password_confirmation').val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);

                        // Clear the form fields after a successful update
                        $('#current_password').val('');
                        $('#new_password').val('');
                        $('#new_password_confirmation').val('');
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    toastr.error('An error occurred while updating the password');
                }
            });
        });

        $(document).ready(function() {
    $('#updatePersonalInfo').click(function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        $.ajax({
            url: "{{ route('profile-update') }}", // The route for the update
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}", // Laravel's CSRF protection
                name: name,
                email: email,
                phone: phone
            },
            success: function(response) {
                if (response.success) {
                    toastr.success(response.message); // Show success message
                } else {
                    toastr.error(response.message || 'Failed to update personal information.');
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                if (errors) {
                    if (errors.name) {
                        toastr.error(errors.name[0]);
                    }
                    if (errors.email) {
                        toastr.error(errors.email[0]);
                    }
                    if (errors.phone) {
                        toastr.error(errors.phone[0]);
                    }
                } else {
                    toastr.error('An error occurred. Please try again.');
                }
            }
        });
    });
});
    </script>
@endpush
