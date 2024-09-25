@extends('frontend.app')
@section('content')
<div class="content">
    <!--section-->
    <div class="section hero-section hero-section_sin">
      <div class="hero-section-wrap">
        <div class="hero-section-wrap-item">
          <div class="container">
            <div class="hero-section-container">
              <div class="hero-section-title">
                <h2>Latest Properties</h2>
                <h5>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Ut nec tincidunt arcu, sit amet fermentum sem.
                </h5>
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
            class="bg-wrap bg-hero bg-parallax-wrap-gradien fs-wrapper"
            data-scrollax-parent="true"
          >
            <div
              class="bg"
              data-bg="{{asset('frontend/images/bg/12.jpg')}}"
              data-scrollax="properties: { translateY: '30%' }"
            ></div>
          </div>
        </div>
      </div>
    </div>
    <!--section-end-->
    <!--container-->
    <div class="container">
      <!--breadcrumbs-list-->
      <div class="breadcrumbs-list bl_flat">
        <a href="#">Home</a><a href="#">Advance Search</a>
        <div class="breadcrumbs-list_dec">
          <i class="fa-thin fa-arrow-up"></i>
        </div>
      </div>
      <!--breadcrumbs-list end-->
      <!--main-content-->
      <div class="main-content">
        <!--boxed-container-->
        <div class="boxed-container">
          <div class="show-mob-filter">
            <i class="far fa-sliders-h"></i> Search Filters
          </div>
          <!-- list-searh-input-wrap-->
          <div
            class="list-searh-input-wrap box_list-searh-input-wrap lws_mobile lsw_mb-btn"
          >
            <div class="close_mob-filter cmf">
              <i class="fa-regular fa-xmark"></i>
            </div>
            <div class="list-searh-input-wrap-title_wrap">
              <div class="list-searh-input-wrap-title">
                <i class="far fa-sliders-h"></i
                ><span> Advance Search Filters</span>
              </div>
            </div>
            <div class="custom-form">
              <div class="row">
                <!-- listsearch-input-item -->
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-4">
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
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-4">
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
                <div class="col-lg-4">
                  <div class="cs-intputwrap">
                    <i class="fa-light fa-city"></i>
                    <select
                      data-placeholder="All Cities"
                      class="chosen-select on-radius no-search-select"
                    >
                      <option>All Cities</option>
                      <option>New York</option>
                      <option>London</option>
                      <option>Paris</option>
                      <option>Kiev</option>
                      <option>Moscow</option>
                      <option>Dubai</option>
                      <option>Rome</option>
                      <option>Beijing</option>
                    </select>
                  </div>
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-4">
                  <div class="cs-intputwrap">
                    <div class="price-range-wrap fl-wrap">
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
                <!-- listsearch-input-item -->
                <div class="col-lg-4">
                  <div class="cs-intputwrap">
                    <div class="price-range-wrap fl-wrap">
                      <label>Area Sq/ft</label>
                      <div class="price-rage-item pr-nopad fl-wrap">
                        <input
                          type="text"
                          class="price-range-double"
                          data-min="1"
                          data-max="1000"
                          name="price-range2"
                          data-step="1"
                          value="1"
                          data-prefix=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-2">
                  <div class="hidden-listing_search_wrap">
                    <div class="more_search-btn">
                      More Options <i class="fa-regular fa-plus"></i>
                    </div>
                    <div class="hidden-listing-filter">
                      <!-- quantity_wrap -->
                      <div class="quantity_wrap">
                        <div class="quantity_wrap_title">
                          <i class="fa-light fa-bath"></i
                          ><span>Bathrooms</span>
                        </div>
                        <div class="quantity">
                          <div class="quantity-item">
                            <input
                              type="button"
                              value="-"
                              class="minus"
                            />
                            <input
                              type="text"
                              name="quantity"
                              title="Qty"
                              class="qty"
                              data-min="1"
                              data-max="6"
                              data-step="1"
                              value="1"
                            />
                            <input type="button" value="+" class="plus" />
                          </div>
                        </div>
                      </div>
                      <!-- quantity_wrap end-->
                      <!-- hidden-listing-item -->
                      <div class="hidden-listing-item">
                        <div class="filter-tags-title">Amenities</div>
                        <div class="filter-tags">
                          <ul class="no-list-style">
                            <li>
                              <input
                                id="check-c"
                                type="checkbox"
                                name="check"
                                checked
                              />
                              <label for="check-c"
                                >Equipped Kitchen</label
                              >
                            </li>
                            <li>
                              <input
                                id="check-d2"
                                type="checkbox"
                                name="check"
                                checked
                              />
                              <label for="check-d2">Parking</label>
                            </li>
                            <li>
                              <input
                                id="check-d3"
                                type="checkbox"
                                name="check"
                                checked
                              />
                              <label for="check-d3">Swimming Pool</label>
                            </li>
                            <li>
                              <input
                                id="check-d4"
                                type="checkbox"
                                name="check"
                              />
                              <label for="check-d4">Wifi</label>
                            </li>
                            <li>
                              <input
                                id="check-d5"
                                type="checkbox"
                                name="check"
                              />
                              <label for="check-d5">Security</label>
                            </li>
                            <li>
                              <input
                                id="check-d6"
                                type="checkbox"
                                name="check"
                              />
                              <label for="check-d6"
                                >Allow Pets</label
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- hidden-listing-item end-->
                    </div>
                  </div>
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="col-lg-2">
                  <button
                    onclick="window.location.href='listing.html'"
                    class="commentssubmit commentssubmit_fw"
                  >
                    Search
                  </button>
                </div>
                <!-- listsearch-input-item -->
              </div>
            </div>
          </div>
          <!-- list-searh-input-wrap end-->
          <div class="mob-filter-overlay cmf fs-wrapper"></div>
          <!-- list-main-wrap-header-->
          <div class="list-main-wrap-header box-list-header">
            <!-- list-main-wrap-title-->
            <div class="list-main-wrap-title">
              <h2>
               Popular Properties
              </h2>
            </div>
            <!-- list-main-wrap-title end-->
          </div>
          <!-- list-main-wrap-header end-->
          <!--listing-item-container-->
          <div class="listing-item-container three-columns-grid">
            <!-- listing-item -->
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
                    <a href="listing-single.html"
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
            <!-- listing-item end-->
            <!-- listing-item -->
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
                      data-newlatitude="40.88496706"
                      data-newlongitude="-73.88191222"
                      data-microtip-position="top"
                      data-tooltip="On the map"
                      ><i class="fas fa-map-marker-alt"></i> 70 Bright St,
                      Jersey City, NJ USA</a
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
                    ><img src="frontend/images/announcer.jpg" alt="" /><span
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
            <!-- listing-item end-->
            <!-- listing-item -->
            <div class="listing-item">
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
            <!-- listing-item end-->
          </div>
        </div>
        <!--boxed-container end-->
      </div>
      <!--main-content end-->
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
    <!-- container end-->
  </div>
@endsection
