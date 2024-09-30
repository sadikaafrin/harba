<div class="main-register-container">
    <div class="main-register_box">
        <div class="main-register-holder">
            <div class="main-register-wrap ">
                <div class="main-register_bg">
                    <div class="mr_title">
                        <h4>Welcome to Rentstate</h4>
                        <h5>Premium Real Estate Agency</h5>
                    </div>
                    <div class="main-register_contacts-wrap">
                        <h4>Have a questions?</h4>
                        <a href="contacts.html"> Get in Touch</a>
                        <div class="svg-corner svg-corner_white" style="bottom:0;left:  -39px;"></div>
                        <div class="svg-corner svg-corner_white"
                            style="bottom:0;right:  -39px;transform: rotate(90deg)"></div>
                    </div>
                    <div class="main-register_bg-dec"></div>
                </div>
                <div class="main-register tabs-act fl-wrap">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1"><i class="fa-regular fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="#tab-2"> <i class="fa-regular fa-user-plus"></i> Register</a></li>
                    </ul>
                    <div class="close-modal close-reg-form"><i class="fa-regular fa-xmark"></i></div>
                    <!--tabs -->
                    <div id="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content first-tab">
                                <div class="custom-form">
                                    <form method="POST" action="{{ route('login') }}" name="registerform">
                                        @csrf
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap">
                                            <i class="fa-light fa-user"></i>
                                            <input type="text" name="email"
                                                class="@error('email') is-invalid @enderror" placeholder="Email Address"
                                                value="">
                                            @error('email')
                                                <div class="invalid-feedback" style="color: #ee7838;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-lock"></i>
                                            <input type="password" name="password"
                                                class="pass-input @error('password') is-invalid @enderror"
                                                placeholder="Current Password" value="">
                                            <div class="view-pass"></div>
                                            @error('password')
                                                <div class="invalid-feedback" style="color: #ee7838;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check" checked>
                                            <label for="check-a">Remember me</label>
                                        </div>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="commentssubmit"> Log In </button>
                                    </form>
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <!-- Registration Tab -->
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">
                                        <form method="POST" action="{{ route('register') }}" name="registerform"
                                            class="main-register-form" id="main-register-form2">
                                            @csrf
                                            <!-- Full Name Input -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-light fa-user"></i>
                                                <input type="text" name="name" placeholder="Full Name"
                                                    value="" class="@error('name') is-invalid @enderror">
                                                @error('name')
                                                    <div class="invalid-feedback" style="color: #ee7838;">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- Email Input -->
                                            <div class="cs-intputwrap">
                                                <i class="fa-light fa-envelope"></i>
                                                <input type="text" name="email" placeholder="Email Address"
                                                    value="" class="@error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="invalid-feedback" style="color: #ee7838;">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- Password Input -->
                                            <div class="cs-intputwrap pass-input-wrap">
                                                <i class="fa-light fa-lock"></i>
                                                <input type="password" name="password" class="pass-input"
                                                    placeholder="Password" value=""
                                                    class="@error('password') is-invalid @enderror">
                                                <div class="view-pass"></div>
                                                @error('password')
                                                    <div class="invalid-feedback" style="color: #ee7838;">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- Confirm Password Input -->
                                            <div class="cs-intputwrap pass-input-wrap">
                                                <i class="fa-light fa-lock"></i>
                                                <input type="password" name="password_confirmation" class="pass-input"
                                                    placeholder="Confirm Password" value="">
                                            </div>
                                            <!-- Submit Button -->
                                            <button type="submit"
                                                class="commentssubmit"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div class="soc-log  fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="google_log"><i class="fa-brands fa-google"></i>Connect with
                                Google</a>
                            <a href="#" class="fb_log"><i class="fa-brands fa-facebook-f"></i> Connect with
                                Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay fs-wrapper reg-overlay close-reg-form"></div>
</div>
