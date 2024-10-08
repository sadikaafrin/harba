<header class="main-header">
    <div class="container">
        <div class="header-inner">
            <a href="{{ route('homepage') }}" class="logo-holder">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo">
            </a>
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul class="no-list-style">
                        <li>
                            <a href="#">Pages <i class="fa-solid fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="about.html">Bnagladesh</a></li>

                            </ul>
                            <!--second level end-->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->

            <!-- nav-button-wrap-->
            <div class="nav-button-wrap">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->

            <div class="header-search-btn tolt" data-microtip-position="bottom" data-tooltip="Search">
                <i class="fa-regular fa-magnifying-glass"></i>
            </div>

            <!-- Check if the user is authenticated -->
            @auth
                <a href="{{ route('add-listing') }}" class="header-btn">
                    <span>Publish Announcement</span>
                </a>

                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span>Hello, <strong>{{ Auth::user()->name }}</strong></span>
                        {{-- <img src="{{ asset('frontend/images/announcer.jpg') }}" alt="User Image"> --}}
                        {{-- <img src="{{ Auth::user()->profile_picture }}" alt="User Image"> --}}

                        <img src="{{ Auth::user()->profile_picture ? asset(Auth::user()->profile_picture) : asset('frontend/images/announcer.jpg') }}"
                            alt="User Image">

                    </div>
                    <div class="header-user-menu_wrap">
                        <ul>
                            @if (Auth::check())
                                @if (Auth::user()->role === 'admin')
                                    <!-- Links for admin role -->
                                    <li><a href="{{ route('dashboard') }}" class="hum_act">Dashboard</a></li>
                                    <li><a href="">Edit Profile</a></li>
                                    <li><a href="">Add Listing</a></li>
                                    <li><a href="">Properties</a></li>
                                @elseif (Auth::user()->role === 'user')
                                    <!-- Links for user role -->
                                    <li><a href="{{ route('user-dashboard') }}" class="hum_act">{{ __('messages.welcome') }}</a></li>
                                    <li><a href="{{ route('edit-profile') }}">{{ __('messages.edit_profile') }}</a></li>
                                    <li><a href="">Add Listing</a></li>
                                    <li><a href="">Properties</a></li>

                                    
                                @endif
                            @else
                                <!-- For guests (not logged in users) -->
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                        <a href="{{ route('logout') }}" class="hum_log-out_btn"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-light fa-power-off"></i> Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth

            <!-- If the user is not authenticated (guest) -->
            @guest
                <a href="{{ route('add-listing') }}" class="header-btn">
                    <span>Publish Announcement</span>
                </a>
                <div class="show-reg-form modal-open">
                    <i class="fa-thin fa-user"></i><span>Sign In</span>
                </div>
            @endguest

            <!-- header-search-wrap -->
            <div class="header-search-wrap novis_search">
                <form action="{{ route('properties.search') }}" method="GET">
                    <div class="header-search">
                        <div class="header-search-container">
                            <div class="custom-form">
                                <!-- listsearch-input-item -->
                                <div class="cs-intputwrap">
                                    <i class="fa-light fa-house"></i>
                                    <input type="text" name="property_title" placeholder="Keywords..."
                                        value="">
                                </div>
                                <!-- listsearch-input-item -->
                                <div class="cs-intputwrap">
                                    <div class="price-range-wrap">
                                        <label>Price Range</label>
                                        <div class="price-rage-item">
                                            <input type="text" class="price-range-double" data-min="100"
                                                data-max="100000" name="price-range1" data-step="1" value="1"
                                                data-prefix="$">
                                        </div>
                                    </div>
                                </div>
                                <!-- listsearch-input-item -->
                                <button type="submit" class="commentssubmit commentssubmit_fw">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- header-search-wrap end -->
        </div>
    </div>
</header>
