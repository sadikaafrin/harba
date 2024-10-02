  <div class="col-lg-3">
      <div class="boxed-content btf_init">
          <div class="user-dasboard-menu_wrap">
              <div class="user-dasboard-menu-header">
                  <div class="user-dasboard-menu_header-avatar">
                      <img src="images/avatar/1.jpg" alt="">
                      <span>Welcome : <strong>{{ Auth::user()->name  }}</strong></span>
                      <a href="dashboard-editprofile.html" class="usmha_edit tolt" data-microtip-position="left"
                          data-tooltip="Edit Profile"><i class="fa-light fa-user-pen"></i></a>
                      <div class="db-menu_modile_btn"><strong>Menu</strong><i class="fa-regular fa-bars"></i></div>
                  </div>
              </div>
              <div class="user-dasboard-menu faq-nav ">
                  <ul>
                      <li><a href="{{ route('user-dashboard') }}" class="act-scrlink"> Dashboard</a></li>
                      <li><a href="{{ route('user-advertisement') }}"> Your Advertisements </a></li>
                      <li><a href="{{ route('user-all-requests') }}"> Your Requests</a></li>
                      <li><a href="{{ route('add-listing') }}"> Add New Propperty </a></li>
                      <li><a href="{{ route('edit-profile') }}"> Edit profile</a></li>
                  </ul>
                  <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i>
                      Log Out </a>
              </div>
          </div>
      </div>
  </div>
