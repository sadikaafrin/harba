<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Harba-Dz</title>
    <!--=============== css  ===============-->

    @include('frontend.partials.style')


    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />
  </head>
  <body>
    <!--loader-->
    <div class="loader-wrap">
      <div class="loader-inner">
        <svg>
          <defs>
            <filter id="goo">
              <fegaussianblur
                in="SourceGraphic"
                stdDeviation="2"
                result="blur"
              />
              <fecolormatrix
                in="blur"
                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2"
                result="gooey"
              />
              <fecomposite in="SourceGraphic" in2="gooey" operator="atop" />
            </filter>
          </defs>
        </svg>
      </div>
    </div>
    <!--loader end-->
    <!--  main   -->
    <div id="main">
      <!--header-->


      @include('frontend.partials.navbar')
      <div
        class="body-overlay fs-wrapper search-form-overlay close-search-form"
      ></div>
      <!--header-end-->
      <!--warpper-->
      <div class="wrapper">


        @yield('content')
        <!--content  end-->
        <!--main-footer-->


        @include('frontend.partials.footer')
        <!--main-footer end-->
      </div>
      <!--warpper end-->
      <!--wish-list-wrap-->
      <div class="wish-list-wrap">
        <div class="wish-list-close clwl_btn">
          <i class="fa-regular fa-xmark"></i>
        </div>
        <div class="wish-list_header">
          <div class="wish-list-title">Your Wishlist <span>3</span></div>
        </div>
        <div class="wish-list-container">
          <!--wish-list-item-->
          <div class="wish-list-item fl-wrap">
            <div class="wish-list-img">
              <a href="listing-single.html"
                ><img src="frontend/images/all/thumbnails/1.jpg" alt=""
              /></a>
            </div>
            <div class="wish-list-descr">
              <h4><a href="listing-single.html">Urban House</a></h4>
              <div class="geodir-category-location fl-wrap">
                <a href="#"> 40 Journal Square , NJ, USA</a>
              </div>
              <div class="wish-list-price">$ 320,000</div>
              <div
                class="clear-wishlist tolt"
                data-microtip-position="left"
                data-tooltip="Remove Item"
              >
                <i class="fa-regular fa-trash-can"></i>
              </div>
            </div>
          </div>
          <!--wish-list-item end-->
          <!--wish-list-item-->
          <div class="wish-list-item fl-wrap">
            <div class="wish-list-img">
              <a href="listing-single.html"
                ><img src="{{asset('frontend/images/all/thumbnails/1.jpg')}}" alt=""
              /></a>
            </div>
            <div class="wish-list-descr">
              <h4><a href="listing-single.html">Luxury Family Home</a></h4>
              <div class="geodir-category-location fl-wrap">
                <a href="#"> 34-42 Montgomery St , NY, USA</a>
              </div>
              <div class="wish-list-price">$ 1500 - per month</div>
              <div
                class="clear-wishlist tolt"
                data-microtip-position="left"
                data-tooltip="Remove Item"
              >
                <i class="fa-regular fa-trash-can"></i>
              </div>
            </div>
          </div>
          <!--wish-list-item end-->
          <!--wish-list-item-->
          <div class="wish-list-item fl-wrap">
            <div class="wish-list-img">
              <a href="listing-single.html"
                ><img src="{{asset('frontend/images/all/thumbnails/1.jpg')}}" alt=""
              /></a>
            </div>
            <div class="wish-list-descr">
              <h4><a href="listing-single.html">Modern Apartment</a></h4>
              <div class="geodir-category-location fl-wrap">
                <a href="#"> 75 Prince St, NY, USA</a>
              </div>
              <div class="wish-list-price">$ 1,600,000</div>
              <div
                class="clear-wishlist tolt"
                data-microtip-position="left"
                data-tooltip="Remove Item"
              >
                <i class="fa-regular fa-trash-can"></i>
              </div>
            </div>
          </div>
          <!--wish-list-item end-->
        </div>
        <div class="wish-list-footer">
          <button class="commentssubmit commentssubmit_fw">
            Clear Wishlist
          </button>
        </div>
      </div>
      <div class="body-overlay fs-wrapper wishlist-wrap-overlay clwl_btn"></div>
      <div class="mob-nav-overlay fs-wrapper"></div>
      <!--wish-list-wrap end-->
      <!--register form -->


      @include('frontend.partials.register')
      <!-- progress-bar end -->
      <!--map-modal -->
      <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
          <div class="map-modal-container fl-wrap">
            <h3><span>Listing Title </span></h3>
            <div class="map-modal-close">
              <i class="fa-regular fa-xmark"></i>
            </div>
            <div class="map-modal fl-wrap">
              <div
                id="singleMap"
                data-latitude="40.7"
                data-longitude="-73.1"
              ></div>
              <div class="scrollContorl"></div>
            </div>
          </div>
        </div>
      </div>
      <!--map-modal end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->


    @include('frontend.partials.scripts')
  </body>
</html>

