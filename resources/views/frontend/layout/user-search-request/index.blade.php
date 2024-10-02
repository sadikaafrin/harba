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
                            </div>
                            <div class="db-container">
                                <div class="dasboard-opt-header">
                                    {{-- <div class="dashboard-search-listing">
                                        <input type="text" onclick="this.select()" placeholder="Search" value="">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div> --}}
                                    <form action="{{ route('user-request.search') }}" method="GET">
                                        <div class="dashboard-search-listing">
                                            <input type="text" name="search" placeholder="Search by name"
                                                value="{{ request()->input('search') }}">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="db-price-opt-container">
                                        <!-- price-opt-->
                                        <div class="db-price-opt">
                                            <span class="price-opt-title">Sort by:</span>
                                            <div class="cs-intputwrap" style="margin-bottom: 0">
                                                <i class="fa-light fa-arrow-down-small-big"></i>
                                                <select data-placeholder="Popularity"
                                                    class="chosen-select no-search-select">
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
                                    <!-- bookings-item -->
                                    @if ($properties->isEmpty())
                                        <div class="col-lg-12">
                                            <p>No results found for your search.</p>
                                        </div>
                                    @else
                                        @foreach ($properties as $property)
                                            <div class="col-lg-6">
                                                <div class="bookings-item">
                                                    <div class="bookings-item-header">
                                                        <img src="{{ asset('images/all/thumbnails/1.jpg') }}"
                                                            alt="">
                                                        <h4>For <a href="listing-single.html"
                                                                target="_blank">{{ $property->name }}</a></h4>
                                                        <span class="new-bookmark">New</span>
                                                    </div>
                                                    <div class="bookings-item-content">
                                                        <ul>
                                                            <li>Name: <span>{{ $property->name }}</span></li>
                                                            <li>Phone: <span>{{ $property->phone }}</span></li>
                                                            <li>Date:
                                                                <span>{{ $property->created_at->format('Y-m-d') }}</span>
                                                            </li>
                                                            <li>Time:
                                                                <span>{{ $property->created_at->format('H:i:s') }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bookings-item-footer">
                                                        <span class="message-date"><i class="fa-regular fa-calendar"></i>
                                                            {{ $property->created_at->format('Y-m-d') }}</span>
                                                        <ul>
                                                            <li><a href="#" class="tolt"
                                                                    data-microtip-position="left" data-tooltip="Call"><i
                                                                        class="fa-regular fa-phone"></i></a></li>
                                                            <li><a href="#" class="tolt"
                                                                    data-microtip-position="left" data-tooltip="Delete"><i
                                                                        class="fa-regular fa-trash-can"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- bookings-item end -->

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

    {{-- <div class="content">
        <div class="row">
            @if ($properties->isEmpty())
                <div class="col-lg-12">
                    <p>No results found for your search.</p>
                </div>
            @else
                @foreach ($properties as $property)
                    <div class="col-lg-6">
                        <div class="bookings-item">
                            <div class="bookings-item-header">
                                <img src="{{ asset('images/all/thumbnails/1.jpg') }}" alt="">
                                <h4>For <a href="listing-single.html" target="_blank">{{ $property->name }}</a></h4>
                                <span class="new-bookmark">New</span>
                            </div>
                            <div class="bookings-item-content">
                                <ul>
                                    <li>Name: <span>{{ $property->name }}</span></li>
                                    <li>Phone: <span>{{ $property->phone }}</span></li>
                                    <li>Date: <span>{{ $property->created_at->format('Y-m-d') }}</span></li>
                                    <li>Time: <span>{{ $property->created_at->format('H:i:s') }}</span></li>
                                </ul>
                            </div>
                            <div class="bookings-item-footer">
                                <span class="message-date"><i class="fa-regular fa-calendar"></i>
                                    {{ $property->created_at->format('Y-m-d') }}</span>
                                <ul>
                                    <li><a href="#" class="tolt" data-microtip-position="left"
                                            data-tooltip="Call"><i class="fa-regular fa-phone"></i></a></li>
                                    <li><a href="#" class="tolt" data-microtip-position="left"
                                            data-tooltip="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div> --}}
@endsection
