@extends('frontend.app')
@section('content')
<div class="content">
    <!--section-->
    <div class="section hero-section home-hero-section">
      <div class="hero-section-wrap">
        <div class="hero-section-wrap-item">
          <div class="container">
            <div class="hero-section-container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="hero-slider-wrapper">
                    <div class="hero-slider">
                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <!-- swiper-slide-->
                          <div class="swiper-slide">
                            <div
                              class="hero-carousel_item"
                              data-imbg="{{asset('frontend/images/bg/12.jpg')}}"
                            >
                              <div
                                class="hero-section-title hs_align-title"
                              >
                                <div class="hero-section-title_sub">
                                  Welcome to the Renstate Agency
                                </div>
                                <h2>
                                  Find The House of Your Dream Using
                                  <br />
                                  Our RealEstate Platform
                                </h2>
                                <h5>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit. Ut nec tincidunt arcu,
                                  sit amet fermentum sem.
                                </h5>
                                <a
                                  href="#sec1"
                                  class="commentssubmit csb_color custom-scroll-link"
                                  style="margin-top: 40px"
                                  >Start Explore</a
                                >
                              </div>
                            </div>
                          </div>
                          <!-- swiper-slide end-->
                          <!-- swiper-slide-->
                          <div class="swiper-slide">
                            <div
                              class="hero-carousel_item"
                              data-imbg="{{asset('frontend/images/bg/8.jpg')}}"
                            >
                              <div
                                class="hero-section-title hs_align-title"
                              >
                                <div class="hero-section-title_sub">
                                  View Our Hot Offer
                                </div>
                                <h2>
                                  <a href="listing-single.html"
                                    >House in Financial District</a
                                  >
                                </h2>
                                <div class="geodir-category-location">
                                  <a
                                    href="#4"
                                    class="map-item single-map-item"
                                    ><i class="fas fa-map-marker-alt"></i>
                                    70 Bright St, Jersey City, NJ USA</a
                                  >
                                </div>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit. Maecenas in pulvinar
                                  neque. Nulla finibus lobortis pulvina
                                </p>
                                <a
                                  href="listing-single.html"
                                  class="commentssubmit csb_color"
                                  style="margin-top: 40px"
                                  >View Details</a
                                >
                              </div>
                            </div>
                          </div>
                          <!-- swiper-slide end-->
                          <!-- swiper-slide-->
                          <div class="swiper-slide">
                            <div
                              class="hero-carousel_item"
                              data-imbg="{{asset('frontend/images/bg/9.jpg')}}"
                            >
                              <div
                                class="hero-section-title hs_align-title"
                              >
                                <div class="hero-section-title_sub">
                                  Few Words About Our Agency
                                </div>
                                <h2>
                                  We are International <br />
                                  RealEstate Agency
                                </h2>
                                <h5>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit. Ut nec tincidunt arcu,
                                  sit amet fermentum sem.
                                </h5>
                                <a
                                  href="#about"
                                  class="commentssubmit csb_color custom-scroll-link"
                                  style="margin-top: 40px"
                                  >Read more about us</a
                                >
                              </div>
                            </div>
                          </div>
                          <!-- swiper-slide end-->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- hero-carousel-wrapper -->
                </div>
                <div class="col-lg-4 mob-hid">
                  <!-- list-searh-input-wrap-->
                  <div
                    class="list-searh-input-wrap box_list-searh-input-wrap lws_column hero_home_search lsiw_dec"
                  >
                    <div class="list-searh-input-wrap-title_wrap">
                      <div class="list-searh-input-wrap-title">
                        <i class="far fa-sliders-h"></i
                        ><span>Use Quick Search</span>
                      </div>
                    </div>
                    <div class="custom-form">
                      <div class="row">
                        <!-- listsearch-input-item -->
                        <div class="col-lg-12">
                          <div class="cs-intputwrap">
                            <i class="fa-light fa-location-dot"></i>
                            <input
                              type="text"
                              placeholder="Where to go"
                              value=""
                            />
                          </div>
                        </div>
                        <!-- listsearch-input-item -->
                         <!-- listsearch-input-item -->
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-calendar-days"></i>
                                <input
                                  type="text"
                                  class="dateInput"
                                  placeholder="Arrival Date"
                                  value=""
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="cs-intputwrap">
                                <i class="fa-light fa-calendar-days"></i>
                                <input
                                  type="text"
                                  class="dateInput"
                                  placeholder="Departure Date"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- listsearch-input-item -->
                        <!-- listsearch-input-item -->
                        <div class="col-lg-12">
                          <div class="cs-intputwrap">
                            <i class="fa-light fa-layer-group"></i>
                            <select
                              data-placeholder="Categories"
                              class="chosen-select on-radius no-search-select"
                            >
                              <option>Type of property</option>
                              <option>Appartement</option>
                              <option>Villa</option>
                              <option>Guesthouse</option>
                              <option>Hotel</option>
                              <option>Office</option>
                            </select>
                          </div>
                        </div>
                        <!-- listsearch-input-item -->
                        <!-- listsearch-input-item -->
                        <div class="col-lg-12">
                          <div class="cs-intputwrap">
                            <div class="price-range-wrap">
                              <label>Price Range</label>
                              <div class="price-rage-item">
                                <input
                                  type="text"
                                  class="price-range-double"
                                  data-min="100"
                                  data-max="100000"
                                  name="price-range1"
                                  data-step="1"
                                  value="1"
                                  data-prefix="$"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- listsearch-input-item -->
                      </div>
                      <!-- listsearch-input-item -->
                      <button
                        class="commentssubmit commentssubmit_fw"
                      >
                        Search
                      </button>
                    </div>
                  </div>
                  <div class="hero-notifer">Need more search options? <a href="{{ route('listing-search') }}">Advanced Search</a></div>
                </div>
              </div>
            </div>
            <div class="hs-scroll-down-wrap">
              <div class="scroll-down-item">
                <div class="mousey">
                  <div class="scroller"></div>
                </div>
                <span>Scroll Down To Discover</span>
              </div>
              <div
                class="svg-corner svg-corner_white"
                style="bottom: 0; right: -39px; transform: rotate(90deg)"
              ></div>
              <div
                class="svg-corner svg-corner_white"
                style="bottom: 0; left: -39px"
              ></div>
            </div>
            <div
              class="sc-controls shc_controls2 shc_controls3 slideshow-container-pag-init"
            ></div>
            <div class="hs-slider-controls">
              <div class="hs-button-prev hs-slider-button">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
              <div class="hs-button-next hs-slider-button">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            </div>
          </div>
          <div
            class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper"
          >
            <div class="hero-blur-container fs-wrapper">
              <div class="hero-blur-container_item fs-wrapper">
                <div class="bg" data-bg=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--section-end-->
    <!--container-->
    <div class="container">
      <!--main-content-->
      <div class="main-content ms_vir_height" id="sec1">
        <!--boxed-container-->
        <div class="boxed-container">
          <div class="listing-grid_heroheader">
            <h3>Browse Hot Properties</h3>
            <div class="gallery-filters">
              <a
                href="#"
                class="gallery-filter gallery-filter-active"
                data-filter="*"
              >
                All Properties</a
              >
              <a href="#" class="gallery-filter" data-filter=".cat-sale"
                >Sale</a
              >
              <a href="#" class="gallery-filter" data-filter=".cat-rent"
                >Rent</a
              >
              <a
                href="#"
                class="gallery-filter"
                data-filter=".cat-comercial"
                >Comercial</a
              >
            </div>
          </div>
          <!-- listing-grid-->
          <div class="listing-grid gisp">
            <!-- listing-grid-item-->
            <div class="listing-grid-item">
              <div class="listing-item cat-comercial cat-sale">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties1.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.72956781"
                        data-newlongitude="-73.99726866"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> 40 Journal
                        Square , NJ, USA</a
                      >
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Sale</a></li>
                      <li><a href="#" class="cat-opt">House</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 13</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="{{ route('single-property') }}"
                        >Gorgeous House For Sale</a
                      >
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 500,000
                    </div>
                    <p>
                      Maecenas in pulvinar neque. Nulla finibus lobortis
                      pulvinar. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>150 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                        >By Niko Furingee
                      </span></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
            <!-- listing-grid-item-->
            <div class="listing-grid-item cat-sale cat-rent">
              <div class="listing-item">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties2.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.88496706"
                        data-newlongitude="-73.88191222"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> 70 Bright
                        St, Jersey City, NJ USA</a
                      >
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Rent</a></li>
                      <li><a href="#" class="cat-opt">Apartment</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 5</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="listing-single.html">Kayak Point House</a>
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 1500 / per month
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>1</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>1</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>70 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                        >By Andy Sposty</span
                      ></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
            <!-- listing-grid-item-->
            <div class="listing-grid-item cat-sale">
              <div class="listing-item">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties3.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.94982541"
                        data-newlongitude="-73.84357452"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> W 85th St,
                        New York, USA
                      </a>
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Sale</a></li>
                      <li><a href="#" class="cat-opt">Apartment</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 7</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="listing-single.html">Luxury Family Home</a>
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 450,000
                    </div>
                    <p>
                      Maecenas in pulvinar neque. Nulla finibus lobortis
                      pulvinar. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>1</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>150 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                        >By Anna Lips</span
                      ></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
            <!-- listing-grid-item-->
            <div class="listing-grid-item cat-rent">
              <div class="listing-item">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties4.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.72228267"
                        data-newlongitude="-73.99246214"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> 75 Prince
                        St, NY, USA</a
                      >
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Rent</a></li>
                      <li><a href="#" class="cat-opt">House</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 11</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="listing-single.html"
                        >Urban House for Rent</a
                      >
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 130,000
                    </div>
                    <p>
                      Maecenas in pulvinar neque. Nulla finibus lobortis
                      pulvinar. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>1</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>110 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="./frontend/images/announcer.jpg" alt="" /><span
                        >By Viki Morintagee
                      </span></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
            <!-- listing-grid-item-->
            <div class="listing-grid-item cat-rent cat-comercial">
              <div class="listing-item">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties5.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.88496706"
                        data-newlongitude="-73.88191222"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> 34-42
                        Montgomery St , NY, USA</a
                      >
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Rent</a></li>
                      <li><a href="#" class="cat-opt">Residential</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 8</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="listing-single.html"
                        >Family House for Rent</a
                      >
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 1500 / per month
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>95 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                        >By Liza Archer</span
                      ></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
            <!-- listing-grid-item-->
            <div class="listing-grid-item cat-sale cat-comercial">
              <div class="listing-item">
                <div class="geodir-category-listing">
                  <div class="geodir-category-img">
                    <a
                      href="listing-single.html"
                      class="geodir-category-img_item"
                    >
                      <div class="bg" data-bg="{{asset('frontend/images/all/properties6.jpg')}}"></div>
                      <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location">
                      <a
                        href="#4"
                        class="map-item tolt single-map-item"
                        data-newlatitude="40.76221766"
                        data-newlongitude="-73.96511769"
                        data-microtip-position="top"
                        data-tooltip="On the map"
                        ><i class="fas fa-map-marker-alt"></i> 75 Prince
                        St, NY, USA
                      </a>
                    </div>
                    <ul class="list-single-opt_header_cat">
                      <li><a href="#" class="cat-opt">Sale</a></li>
                      <li><a href="#" class="cat-opt">Comercial</a></li>
                    </ul>
                    <a
                      href="#"
                      class="geodir_save-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Save"
                      ><span><i class="fal fa-heart"></i></span
                    ></a>
                    <div class="geodir-category-listing_media-list">
                      <span><i class="fas fa-camera"></i> 5</span>
                    </div>
                  </div>
                  <div class="geodir-category-content">
                    <h3>
                      <a href="listing-single.html"
                        >Contemporary Apartment</a
                      >
                    </h3>
                    <div class="geodir-category-content_price">
                      $ 850,000
                    </div>
                    <p>
                      Maecenas in pulvinar neque. Nulla finibus lobortis
                      pulvinar. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Donec a consectetur nulla.
                    </p>
                    <div class="geodir-category-content-details">
                      <ul>
                        <li>
                          <i class="fa-light fa-bed"></i><span>4</span>
                        </li>
                        <li>
                          <i class="fa-light fa-bath"></i><span>2</span>
                        </li>
                        <li>
                          <i class="fa-light fa-chart-area"></i
                          ><span>450 ft2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="geodir-category-footer">
                    <a href="agent-single.html" class="gcf-company"
                      ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                        >By Judi Colinns</span
                      ></a
                    >
                    <a href="listing-single.html" class="gid_link"
                      ><span>View Details</span>
                      <i class="fa-solid fa-caret-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- listing-grid-item end-->
          </div>
          <!-- listing-grid end-->
          <!-- <a href="listing.html" class="commentssubmit csb-no-align"
            >View All Properties <i class="fa-solid fa-caret-right"></i
          ></a> -->
        </div>
        <!--boxed-container end-->
      </div>
      <!--main-content end-->
    </div>
    <!--main-content-->
    <div class="main-content ms_vir_height" id="about">
      <!--container -->
      <div class="container">
        <div class="boxed-container">
          <div class="boxed-content">
            <div class="about-wrap boxed-content-item">
              <div class="row">
                <div class="col-lg-5">
                  <div class="about-title ab-hero">
                    <h2>Why Choose Our Properties</h2>
                    <h4>
                      Check video presentation to find out more about us .
                    </h4>
                  </div>
                  <div class="services-opions">
                    <ul>
                      <li>
                        <i class="fal fa-headset"></i>
                        <h4>24 Hours Support</h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur
                          adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolore magna aliqua.
                        </p>
                      </li>
                      <li>
                        <i class="fal fa-users-cog"></i>
                        <h4>User Admin Panel</h4>
                        <p>
                          Nulla posuere sapien vitae lectus suscipit, et
                          pulvinar nisi tincidunt. Curabitur convallis
                          fringilla diam sed aliquam.
                        </p>
                      </li>
                      <li>
                        <i class="fal fa-phone-laptop"></i>
                        <h4>Mobile Friendly</h4>
                        <p>
                          Curabitur convallis fringilla diam sed aliquam.
                          Sed tempor iaculis massa faucibus feugiat. In
                          fermentum facilisis massa.
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="about-img">
                      <img src="{{ asset('frontend/images/all/15.jpg') }}" class="respimg" alt="" />

                    <div class="about-img-hotifer">
                      <p>
                        Your website is fully responsive so visitors can
                        view your content from their choice of device.
                      </p>
                      <h4>Mark Antony</h4>
                      <h5>Renstate CEO</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--container end-->
      <div class="parallax-section-wrap">
        <div class="bg-wrap fs-wrapper" data-scrollax-parent="true">
          <div
            class="bg"
            data-bg="{{asset('frontend/images/bg/works-bg.jpg')}}"
            data-scrollax="properties: { translateY: '20%' }"
          ></div>
          <div class="overlay"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="parallax-section-content">
                <h3>How Our Platform Works</h3>
                <p>
                  In ut odio libero, at vulputate urna. Nulla tristique mi
                  a massa convallis cursus. Nulla eu mi magna. Etiam
                  suscipit commodo gravida. Lorem ipsum dolor sit amet,
                  conse ctetuer adipiscing elit, sed diam nonu mmy nibh
                  euismod tincidunt ut laoreet dolore magna aliquam erat
                </p>
                <a
                  href="add-listing.html"
                  class="commentssubmit csb_color"
                  style="margin-top: 20px"
                  >Add Your Propperty</a
                >
              </div>
            </div>
            <div class="col-lg-8">
              <div class="process-wrap">
                <ul>
                  <li>
                    <div class="process-item">
                      <span class="process-count">01 . </span>
                      <div class="process-item-icon">
                        <i class="fa-light fa-house-building"></i>
                      </div>
                      <h4>Find Interesting Place</h4>
                      <p>
                        Proin dapibus nisl ornare diam varius tempus.
                        Aenean a quam luctus, finibus tellus ut, convallis
                        eros sollicitudin turpis.
                      </p>
                    </div>
                    <span class="pr-dec"></span>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">02 .</span>
                      <div class="process-item-icon">
                        <i class="fa-light fa-mailbox"></i>
                      </div>
                      <h4>Contact a Few Owners</h4>
                      <p>
                        Faucibus ante, in porttitor tellus blandit et.
                        Phasellus tincidunt metus lectus sollicitudin
                        feugiat pharetra consectetur.
                      </p>
                    </div>
                    <span class="pr-dec"></span>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">03 .</span>
                      <div class="process-item-icon">
                        <i class="fa-light fa-layer-plus"></i>
                      </div>
                      <h4>Make a Listing</h4>
                      <p>
                        Maecenas pulvinar, risus in facilisis dignissim,
                        quam nisi hendrerit nulla, id vestibulum metus
                        nullam viverra porta.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--container-->
      <div class="container">
        <div class="api-wrap">
          <div class="api-container">
            <div class="api-img">
              <img src="{{asset('frontend/images/api.png')}}" alt="" class="respimg" />
            </div>
            <div class="api-text">
              <h3>Discover Modern Living</h3>
              <p>
                In ut odio libero, at vulputate urna. Nulla tristique mi a
                massa convallis cursus. Nulla eu mi magna. Etiam suscipit
                commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer
                adipiscing elit, sed diam nonu mmy nibh euismod tincidunt
                ut laoreet dolore magna aliquam erat.
              </p>
              <div class="api-text-links">
                <a href="#about"
                  ><span> Discover with us</span
                  ><i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="api-wrap-bg" data-run="2">
              <div class="api-wrap-bg-container">
                <span class="api-bg-pin"></span
                ><span class="api-bg-pin"></span>
                <div class="abs_bg"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="to_top-btn-wrap">
          <div class="to-top to-top_btn">
            <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
          </div>
          <div
            class="svg-corner svg-corner_white"
            style="top: 0; left: -40px; transform: rotate(-90deg)"
          ></div>
          <div
            class="svg-corner svg-corner_white"
            style="top: 0; right: -40px; transform: rotate(-180deg)"
          ></div>
        </div>
      </div>
      <!--container end-->
    </div>
    <!--main-content end-->
  </div>
@endsection
