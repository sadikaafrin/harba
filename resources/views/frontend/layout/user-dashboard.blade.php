@extends('frontend.app')
@section('content')
<div class="content">
    <!--container-->
    <div class="container">
        <!--breadcrumbs-list-->
        <div class="breadcrumbs-list bl_flat">
            <a href="#">Home</a> <span>Dashboard</span>
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
                                        <span>Welcome :  <strong> Alisa</strong></span>
                                        <a href="dashboard-editprofile.html" class="usmha_edit tolt" data-microtip-position="left"  data-tooltip="Edit Profile"><i class="fa-light fa-user-pen"></i></a>
                                        <div class="db-menu_modile_btn"><strong>Menu</strong><i class="fa-regular fa-bars"></i></div>
                                    </div>
                                </div>
                                <div class="user-dasboard-menu faq-nav ">
                                    <ul>
                                        <li><a href="dashboard.html" class="act-scrlink"> Dashboard</a></li>
                                        <li><a href="dashboard-listing.html"> Your Advertisements </a></li>
                                        <li><a href="dashboard-requests.html"> Your  Requests <span>6</span> </a></li>
                                        <li><a href="add-listing.html"> Add New Propperty </a></li>
                                        <li><a href="dashboard-editprofile.html">  Edit profile</a></li>
                                    </ul>
                                    <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i> Log Out  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- user-dasboard-menu_wrap end-->
                    <!-- pricing-column -->
                    <div class="col-lg-9">
                        <div class="dashboard-title">
                            <div class="dashboard-title-item"><span>Your Dashboard</span></div>
                            <!--Tariff Plan menu-->
                            <div class="tfp-det-container">
                                <div class="db-date"><i class="fa-regular fa-calendar"></i><strong></strong></div>
                                <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                                <div class="tfp-det">
                                    <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                    <a href="#" class="tfp-det-btn color-bg">View Details <i class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                            <!--Tariff Plan menu end-->
                        </div>
                        <div class="db-container">
                            <div class="notification success-notif">
                                <p>Your listing <a href="#">Family house in Brooklyn</a> has been approved!</p>
                                <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
                            </div>
                            <!-- dashboard facts -->
                            <div class="db-single-facts-container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!-- inline-facts -->
                                        <div class="db-single-facts-wrap">
                                            <div class="db-single-facts">
                                                <i class="fa-light fa-eye"></i>
                                                <h6>Properties Views</h6>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="1054">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewbox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 17 55 7 T100 11 V30z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                    <div class="col-lg-4">
                                        <!-- inline-facts  -->
                                        <div class="db-single-facts-wrap">
                                            <div class="db-single-facts">
                                                <i class="fa-light fa-heart"></i>
                                                <h6>Total Favourites</h6>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="557">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewbox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                    <div class="col-lg-4">
                                        <!-- inline-facts  -->
                                        <div class="db-single-facts-wrap">
                                            <div class="db-single-facts">
                                                <i class="fa-light fa-house-building"></i>
                                                <h6>Total Properties </h6>
                                                <div class="milestone-counter">
                                                    <div class="stats animaper">
                                                        <div class="num" data-content="0" data-num="16">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stat-wave">
                                                <svg viewbox="0 0 100 25">
                                                    <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!-- inline-facts end -->
                                    </div>
                                </div>
                            </div>
                            <!-- dashboard facts end-->
                            <div class="dasboard-content">
                                <!-- chart-wrap-->
                                <div class="chart-wrap">
                                    <div class="chart-header">
                                        <div class="dashboard-widget-title">Your weekly  Statistic</div>
                                        <div id="myChartLegend"></div>
                                    </div>
                                    <canvas id="canvas-chart"></canvas>
                                </div>
                                <!--chart-wrap end-->
                            </div>
                            <div class="dasboard-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="dashboard-widget-title-single">Last Activites</div>
                                        <div class="dashboard-list-box">
                                            <!-- dashboard-list end-->
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="close-dashboard-item"><i class="fa-regular fa-xmark"></i></span>
                                                    <div class="main-dashboard-message-icon"><i class="fa-regular fa-check"></i></div>
                                                    <div class="main-dashboard-message-text">
                                                        <p>Your listing <a href="#">Urban Appartmes</a> has been approved! </p>
                                                    </div>
                                                    <div class="main-dashboard-message-time"><i class="fa-regular fa-calendar"></i> 28 may 2024</div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->
                                            <!-- dashboard-list end-->
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="close-dashboard-item"><i class="fa-regular fa-xmark"></i></span>
                                                    <div class="main-dashboard-message-icon"><i class="fa-light fa-house-building"></i></div>
                                                    <div class="main-dashboard-message-text">
                                                        <p> Someone Request a Showing  on <a href="#">Park Central</a> listing!</p>
                                                    </div>
                                                    <div class="main-dashboard-message-time"><i class="fa-regular fa-calendar"></i>  05 April 2024</div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->
                                            <!-- dashboard-list end-->
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="close-dashboard-item"><i class="fa-regular fa-xmark"></i></span>
                                                    <div class="main-dashboard-message-icon"><i class="fa-light fa-heart"></i></div>
                                                    <div class="main-dashboard-message-text">
                                                        <p><a href="#">Fider Mamby</a> bookmarked your <a href="#">Holiday Home</a> listing!</p>
                                                    </div>
                                                    <div class="main-dashboard-message-time"><i class="fa-regular fa-calendar"></i> 10 March 2024</div>
                                                </div>
                                            </div>
                                            <!-- dashboard-list end-->
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="post-banner-widget">
                                            <div class="bg-wrap fs-wrapper bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="images/all/1.jpg"></div>
                                            </div>
                                            <div class="post-banner-widget_content">
                                                <h5>Participate in our loyalty program. Refer a friend and get a discount.</h5>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <div class="svg-corner svg-corner_white"  style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
            <div class="svg-corner svg-corner_white"  style="top:0;right: -40px; transform: rotate(-180deg)"></div>
        </div>
    </div>
    <!-- container end-->
</div>
@endsection
