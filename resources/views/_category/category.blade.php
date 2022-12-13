@extends('layouts.skeleton')
@section('title', 'Category')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/category/category.css') }}">
@endsection
@section('js')

@endsection
@section('content')
    @include('layouts.header-home')
    <div id="category-gallery-wrap">
        <div id="category-left-part"></div>
        <div id="category-right-part">
            <div id="category-head-banner-wrap">
                <div id="category-banner-title-wrap">
                    <div id="category-banner-title-left">
                        <img id="category-banner-icon" src="{{ asset('assets/img/user/_bee_user_default_avatar.jpg') }}"/>
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
                    <div id="category-product-card">User component</div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
