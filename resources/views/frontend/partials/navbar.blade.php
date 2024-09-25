<header class="main-header">
    <div class="container">
      <div class="header-inner">
        <a href="{{ route('homepage') }}" class="logo-holder"
          ><img src="{{asset('frontend/images/logo.png')}}" alt=""
        /></a>
        <!--  navigation -->
        <div class="nav-holder main-menu">
          <nav>
            <!-- <ul class="no-list-style">
              <li>
                <a href="#" class="act-link"
                  >Home</a>

              </li>
              <li>
                <a href="#"
                  >Listings</a>

              </li>
              <li>
                <a href="#">News</a>
              </li>
              <li>
                <a href="#">Pages</a>

              </li>
            </ul>
          </nav> -->
        </div>
        <!-- navigation  end -->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap">
          <div class="nav-button">
            <span></span><span></span><span></span>
          </div>
        </div>
        <!-- nav-button-wrap end-->
        <div
          class="header-search-btn tolt"
          data-microtip-position="bottom"
          data-tooltip="Search"
        >
          <i class="fa-regular fa-magnifying-glass"></i>
        </div>
        <a href="{{ route('add-listing') }}" class="header-btn"
          ><span>Publish Announcement</span></a
        >
        <div class="show-reg-form modal-open">
          <i class="fa-thin fa-user"></i><span>Sign In</span>
        </div>
        <!-- header-search-wrap  -->
        <div class="header-search-wrap novis_search">
          <div class="header-search">
            <div class="header-search-container">
              <div class="custom-form">
                <!-- listsearch-input-item -->
                <div class="cs-intputwrap">
                  <i class="fa-light fa-house"></i>
                  <input type="text" placeholder="Keywords..." value="" />
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
                <div class="cs-intputwrap">
                  <i class="fa-light fa-location-dot"></i>
                  <input type="text" placeholder="Location..." value="" />
                </div>
                <!-- listsearch-input-item -->
                <!-- listsearch-input-item -->
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
                <!-- listsearch-input-item -->
                <button
                  class="commentssubmit commentssubmit_fw"
                >
                  Search
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- header-search-wrap  end -->
      </div>
    </div>
  </header>
