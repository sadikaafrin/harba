@extends('frontend.app')
@section('content')
    <div class="content">
        <!--container-->
        <div class="content">
            <!--container-->
            <div class="container">
                <!--breadcrumbs-list-->
                <div class="breadcrumbs-list bl_flat">
                    <a href="#">Home</a><span>Add New Listing</span>
                    <div class="breadcrumbs-list_dec">
                        <i class="fa-thin fa-arrow-up"></i>
                    </div>
                </div>
                <!--breadcrumbs-list end-->
                <!--main-content-->
                <div class="main-content ms_vir_height">
                    <!--boxed-container-->
                    <div class="boxed-container">
                        <div class="row">
                            <!-- pricing-column -->
                            <div class="col-lg-12">
                                <div class="dashboard-title">
                                    <div class="dashboard-title-item">
                                        <span>Add Propperty</span>
                                    </div>
                                </div>
                                <div class="db-container">
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item">
                                        <div class="dashboard-widget-title-single">
                                            Basic Informations
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-input-text"></i>
                                                        <input type="text" placeholder="Main Title" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-building"></i>
                                                        <select data-placeholder="Categories"
                                                            class="chosen-select on-radius no-search-select">
                                                            <option>Appartement Types</option>
                                                            <option>Sale</option>
                                                            <option>Rent</option>
                                                            <option>Comercial</option>
                                                        </select>
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-layer-group"></i>
                                                        <select data-placeholder="Categories"
                                                            class="chosen-select on-radius no-search-select">
                                                            <option>Appartement Categories</option>
                                                            <option>House</option>
                                                            <option>Apartment</option>
                                                            <option>Hotel</option>
                                                            <option>Villa</option>
                                                            <option>Office</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-money-bill"></i>
                                                        <input type="text" placeholder="Price" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-8">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-tags"></i>
                                                        <input type="text" placeholder="Keywords" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Location / Contacts
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-phone-office"></i>
                                                        <input type="text" placeholder="Phone" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-envelope"></i>
                                                        <input type="text" placeholder="E-mail" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-city"></i>
                                                        <select data-placeholder="All Cities"
                                                            class="chosen-select on-radius no-search-select">
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
                                                    <!-- listsearch-input-item end-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-address-card"></i>
                                                        <input type="text" placeholder="Adress" value="" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Upload Property Media
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa-light fa-cloud-arrow-up"></i>
                                                                Click here or drop files to upload</span>
                                                            <div class="photoUpload-files fl-wrap"></div>
                                                        </div>
                                                        <input type="file" class="upload" multiple />
                                                    </form>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Property Details
                                        </div>
                                        <div class="custom-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-chart-area"></i>
                                                                <input type="text" placeholder="Area:" value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-bed"></i>
                                                                <input type="text" placeholder="Bedrooms:"
                                                                    value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-bath"></i>
                                                                <input type="text" placeholder="Bethrooms:"
                                                                    value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-car"></i>
                                                                <input type="text" placeholder="Parking:"
                                                                    value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-users"></i>
                                                                <input type="text" placeholder="Accomodation:"
                                                                    value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-globe-pointer"></i>
                                                                <input type="text" placeholder="Web site:"
                                                                    value="" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="cs-intputwrap">
                                                        <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Property Details:"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="dashboard-widget-title-single">
                                                        Amenities:
                                                    </div>
                                                    <ul class="filter-tags no-list-style ds-tg">
                                                        <li>
                                                            <input id="check-aaa5" type="checkbox" name="check"
                                                                checked="" />
                                                            <label for="check-aaa5"> Wi Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-bb5" type="checkbox" name="check"
                                                                checked="" />
                                                            <label for="check-bb5">Swimming</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-dd5" type="checkbox" name="check" />
                                                            <label for="check-dd5"> Security</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-cc5" type="checkbox" name="check" />
                                                            <label for="check-cc5"> Laundry Room</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-ff5" type="checkbox" name="check"
                                                                checked="" />
                                                            <label for="check-ff5">
                                                                Equipped Kitchen</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c4" type="checkbox" name="check" />
                                                            <label for="check-c4">Air Conditioning</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c18" type="checkbox" name="check" />
                                                            <label for="check-c18">Parking</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-bb53" type="checkbox" name="check"
                                                                checked="" />
                                                            <label for="check-bb53">Garage Attached</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-dd54" type="checkbox" name="check" />
                                                            <label for="check-dd54"> Fireplace</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-cc555" type="checkbox" name="check" />
                                                            <label for="check-cc555">
                                                                Window Covering</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-ff511" type="checkbox" name="check"
                                                                checked="" />
                                                            <label for="check-ff511">Back yard</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c444" type="checkbox" name="check" />
                                                            <label for="check-c444">Fitness Gym</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c1843" type="checkbox" name="check" />
                                                            <label for="check-c1843">Elevator in building</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="dashboard-widget-title-single">
                                                        Upload Plans and Brochure:
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <form class="fuzone">
                                                        <div class="fu-text">
                                                            <span><i class="fa-light fa-cloud-arrow-up"></i>
                                                                Click here or drop files to upload</span>
                                                            <div class="photoUpload-files fl-wrap"></div>
                                                        </div>
                                                        <input type="file" class="upload" multiple />
                                                    </form>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="commentssubmit" style="margin-top: 10px">
                                            <span>Save Property Changes </span>
                                        </button>
                                    </div>
                                    <!--dasboard-content-item end-->
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
                    <div class="to-top to-top_btn">
                        <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
                    </div>
                    <div class="svg-corner svg-corner_white" style="top: 0; left: -40px; transform: rotate(-90deg)"></div>
                    <div class="svg-corner svg-corner_white" style="top: 0; right: -40px; transform: rotate(-180deg)">
                    </div>
                </div>
            </div>
            <!-- container end-->
        </div>
        <!-- container end-->
    </div>
@endsection
