<div class="col-lg-4 mob-hid">
    <!-- list-searh-input-wrap-->
    <div
        class="list-searh-input-wrap box_list-searh-input-wrap lws_column hero_home_search lsiw_dec">
        <div class="list-searh-input-wrap-title_wrap">
            <div class="list-searh-input-wrap-title">
                <i class="far fa-sliders-h"></i><span>Use Quick Search</span>
            </div>
        </div>
        <form action="{{ route('appartment.type.search') }}" method="GET">
            <div class="custom-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Single Date Input for created_at -->
                            <div class="col-lg-6">
                                <div class="cs-intputwrap">
                                    <i class="fa-light fa-calendar-days"></i>
                                    <input type="date" name="created_at"
                                        class="dateInput" placeholder="Created Date"
                                        value="{{ request('created_at') }}" />
                                </div>
                            </div>
                            <!-- Single Date Input for updated_at -->
                            <div class="col-lg-6">
                                <div class="cs-intputwrap">
                                    <i class="fa-light fa-calendar-days"></i>
                                    <input type="date" name="updated_at"
                                        class="dateInput" placeholder="Updated Date"
                                        value="{{ request('updated_at') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- listsearch-input-item search property-->
                    <div class="col-lg-12">
                        <div class="cs-intputwrap">
                            <i class="fa-light fa-layer-group"></i>
                            <select name="appartment_type_id"
                                class="chosen-select on-radius no-search-select">
                                <option value="">Select Type of Property</option>
                                @foreach ($appartmentTypes as $type)
                                    <option value="{{ $type->id }}"
                                        {{ request('appartment_type_id') == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- listsearch-input-item -->
                    <div class="col-lg-12">
                        <div class="cs-intputwrap">
                            <div class="price-range-wrap">
                                <label>Price Range</label>
                                <div class="price-rage-item">
                                    <input type="text" class="price-range-double" name="price_range" data-min="100"
                                        data-max="100000" data-step="1" value="100" data-prefix="$" />
                                    <input type="hidden" name="price_min" id="price_min">
                                    <input type="hidden" name="price_max" id="price_max">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- listsearch-input-item -->
                </div>
                <!-- listsearch-input-item search property -->
                <!-- Search Button -->
                <button class="commentssubmit commentssubmit_fw">Search</button>
            </div>
        </form>
    </div>
    <div class="hero-notifer">Need more search options? <a
            href="{{ route('listing-search') }}">Advanced Search</a></div>
</div>
