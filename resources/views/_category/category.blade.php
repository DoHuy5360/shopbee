@extends('layouts.skeleton')
@section('title', 'Category')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/category/category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/components/card.css') }}">
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/js/header/header.js') }}"></script>
@endsection
@section('content')
    @include('layouts.header-home')
    <div id="category-gallery-wrap">
        <div id="category-left-part">
            <div id="category-search-filter-title-wrap">
                <ion-icon name="funnel-outline"></ion-icon>
                <span>SEARCH FILTER</span>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">By category</div>
                <div class="category__search--filter-option">
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Other category name &nbsp;<span>(12k)</span></div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Other category name &nbsp;<span>(1k)</span></div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Other category name &nbsp;<span>(2k)</span></div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Other category name &nbsp;<span>(282k)</span></div>
                    </div>
                </div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Shipped from</div>
                <div class="category__search--filter-option">
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 7</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Ho Chi Minh City</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Ha Noi</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 1</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 3</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 6</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 8</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 10</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 11</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">District 12</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Go Vap District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Tan Phu District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Binh Tan District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Tan Binh District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Thu Duc City</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Binh Thanh District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Phu Nhuan District</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Binh Chanh District</div>
                    </div>
                </div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Shipping option</div>
                <div class="category__search--filter-option">
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Express</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Fast</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Saving</div>
                    </div>
                </div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Brands</div>
                <div class="category__search--filter-option">
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Samsung</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">OPPO</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Xiaomi</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Huawei</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Baseus</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Nokia</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Sony</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">OnePlus</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Hewlett Packard HP</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Lenovo</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Acer</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Dell</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Meizu</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Motorola</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Realme</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">FOSCAM</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">FPT</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">UNITEK</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Vsmart</div>
                    </div>
                    <div class="category__search--filter-option-wrap">
                        <input type="checkbox" name="" id="" class="category__search--filter-checkbox">
                        <div class="category__search--filter-name">Blackberry</div>
                    </div>
                </div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Price range</div>
                <div class="category__search--filter-option"></div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Shop type</div>
                <div class="category__search--filter-option"></div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Condition</div>
                <div class="category__search--filter-option"></div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Payment options</div>
                <div class="category__search--filter-option"></div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Rating</div>
                <div class="category__search--filter-option"></div>
            </div>
            <div class="category__search--filter-block-wrap">
                <div class="category__search--filter-title">Service & Promotion</div>
                <div class="category__search--filter-option"></div>
            </div>
            <button id="category-filter-clear-all-btn" type="button">Clear All</button>
        </div>
        <div id="category-right-part">
            <div id="category-head-banner-wrap">
                <div id="category-banner-title-wrap">
                    <div id="category-banner-title-left">
                        <img id="category-banner-icon" src="{{ asset('assets/img/user/_bee_user_default_avatar.jpg') }}" />
                        <div id="category-banner-title">Super Sale Black Friday Event</div>
                    </div>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
                <div id="category-bnner-image">
                    <img src="{{ asset('assets/img/home/black_friday.jpg') }}" draggable="false" alt="">
                </div>
            </div>
            <div id="category-shop-relative-wrap">
                <div id="category-shop-head-wrap">
                    <div id="category-shop-title">Shop relative for <span>Category name</span></div>
                    <div id="category-shop-view-more">More shop <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
                <div id="category-shop-body-wrap">
                    <div id="category-shop-body-left">
                        <div id="category-shop-product-thumbnail">
                            <img src="{{ asset('assets/img/user/_bee_user_default_avatar.jpg') }}" alt="" draggable="false">
                            <span>Prefered</span>
                        </div>
                        <div id="category-shop-combo-info">
                            <div id="category-shop-product-name">Áo sweater & hoodie basic giá chỉ 99k</div>
                            <div id="category-shop-name">Sponsored by tichuotstudio</div>
                            <div id="category-interactive-index">
                                <div id="category-shop-followers">15,1k Followers</div>
                                <div id="category-shop-following">21 Following</div>
                            </div>
                        </div>
                    </div>
                    <div id="category-shop-body-right">
                        <div id="category-shop-index-wrap">
                            <div class="category__block--data">
                                <div class="category__shop--index">
                                    <ion-icon name="shirt-outline"></ion-icon>
                                    <span>203</span>
                                </div>
                                <span class="category__shop--index-name">Products</span>
                            </div>
                            <div class="category__block--data">
                                <div class="category__shop--index">
                                    <ion-icon name="star-outline"></ion-icon>
                                    <span>4.7</span>
                                </div>
                                <span class="category__shop--index-name">Ratings</span>
                            </div>
                            <div class="category__block--data">
                                <div class="category__shop--index">
                                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                    <span>98%</span>
                                </div>
                                <span class="category__shop--index-name">Response Rate</span>
                            </div>
                            <div class="category__block--data">
                                <div class="category__shop--index">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <span>Whithin hours</span>
                                </div>
                                <span class="category__shop--index-name">Response Time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="category-product-relative-wrap">
                <div id="category-search-result-title">
                    <ion-icon name="bulb-outline"></ion-icon>
                    <span>Search result for '<span>Product name</span>'</span>
                </div>
                <div id="category-product-filter-bar">
                    <div id="category-product-bar-left">
                        <span>Sort by</span>
                        <button id="category-product-relevance-btn" type="button">Relevance</button>
                        <button id="category-product-latest-btn" type="button">Latest</button>
                        <button id="category-product-topSale-btn" type="button">Top Sales</button>
                        <select id="category-product-sortPrice-btn" name="">
                            <option value="" hidden>Price</option>
                            <option value="">Low to hight</option>
                            <option value="">Hight to Low</option>
                        </select>
                    </div>
                    <div id="category-product-bar-right">
                        <div id="category-product-page-number">
                            <span>1</span>/<span>50</span>
                        </div>
                        <div id="category-filter-bar-action">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div id="category-product-list-wrap">
                    <div id="category-product-seperate-grid">
                        @foreach ($get_pdt as $pdt)
                            <a href="{{ route('product.show', $pdt->code) }}" class="mainHome__cardSuggest-padding">
                                <div class="mainHome__cardSuggest-content">
                                    <div class="mainHome__cardSuggest--image">
                                        <div class="mainHome__cardSuggest--label-like">Like</div>
                                        <img src="{{ asset($pdt->path) }}" alt="{{ $pdt->path }}" draggable="false" />
                                    </div>
                                    <div class="mainHome__cardSuggest--text">
                                        <div class="mainHome__cardSuggest--name">{{ $pdt->name }}</div>
                                        <div class="mainHome__cardSuggest--footer">
                                            <div class="mainhome__bonus--bebefit">
                                                <ion-icon name="cart-outline"></ion-icon>
                                            </div>
                                            <div class="mainHome__cardSuggest--price-wrap">
                                                <div class="mainHome__cardSuggest--price"><span>₫</span><span>{{ $pdt->price }}</span></div>
                                                <span>Saled {{ $pdt->sold }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
