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

                    @include('frontend.layout.dashboard')

                    <!-- user-dasboard-menu_wrap end-->
                    <!-- pricing-column -->
                    <div class="col-lg-9">
                        <div class="dashboard-title">
                            <div class="dashboard-title-item"><span>  Your Advertisements </span></div>
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
                            <div class="dasboard-opt-header">
                                <div class="dashboard-search-listing">
                                    <input type="text" onclick="this.select()" placeholder="Search" value="">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                                <div class="db-price-opt-container">
                                    <a href="add-listing.html" class="dashboard-addnew_btn">Add New <i class="fal fa-plus"></i></a>
                                    <!-- price-opt-->
                                    <div class="db-price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="cs-intputwrap" style="margin-bottom: 0">
                                            <i class="fa-light fa-arrow-down-small-big"></i>
                                            <select data-placeholder="Popularity" class="chosen-select no-search-select" style="display: none;">
                                                <option>Lastes</option>
                                                <option>Oldes</option>
                                                <option>Name: A-Z</option>
                                                <option>Name: Z-A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                            </div>
                            <div class="row">
                                <!-- dashboard-listings-item-->
                                @foreach ($property as $data)
                                <div class="col-lg-6">
                                    <div class="dashboard-listings-item">
                                        <div class="dashboard-listings-item_img">
                                            <div class="bg-wrap">
                                                <div class="bg  "  data-bg="{{ asset($data->images->first()->images) }}"></div>
                                            </div>
                                            <div class="overlay"></div>
                                            {{-- <a href="listing-single.html" target="_blank">View</a> --}}
                                            <a href="{{ route('single-property', $data->id) }}" target="_blank">View
                                                </a>
                                        </div>
                                        <div class="dashboard-listings-item_content">
                                            <h4><a href="listing-single.html">{{ $data->property_title }}</a></h4>
                                            <div class="geodir-category-location">
                                                <a href="#"> <span>{{ $data->address }}</span></a>
                                            </div>
                                            {{-- <div class="dashboard-listings-item_opt">
                                                <span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  224 </span>
                                                <ul>
                                                    <li><a href="#" class="tolt" data-microtip-position="left"  data-tooltip="Edit"><i class="fa-regular fa-file-pen"></i></a></li>
                                                    <li><a href="#" class="tolt" data-microtip-position="left"  data-tooltip="Disable"><i class="fa-regular fa-signal-slash"></i></a></li>
                                                    <li><a href="#" class="tolt" data-microtip-position="left"  data-tooltip="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <!-- dashboard-listings-item end-->

                                <!-- dashboard-listings-item end-->
                            </div>
                        </div>
                        <div class="pagination-wrap">
                            <div class="pagination float-pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#">1</a>
                                <a href="#" class="current-page">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="load-more_btn"><i class="fa-solid fa-arrows-spin"></i>Load More</div>
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
