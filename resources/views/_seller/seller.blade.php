@extends('layouts.skeleton')
@section('title', 'Seller page')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/seller/seller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/seller/seller_respon.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/seller/seller_respon.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/seller/seller.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/monitor/monitor.js') }}"></script>
@endsection

@section('content')
    <div id="seller-frame-cover-fixed">
        <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
    </div>
    <div id="seller-navbar">
        <div id="seller-navbar-icon">
            <div id="seller-icon"><img src="{{ asset('assets/img/shopbee.png') }}" alt="" /></div>
            <div id="seller-current-page">
                <div id="seller-navbar-current-title">Seller Page</div>
            </div>
        </div>
        <div id="seller-navbar-content">
            <div id="navbar-content-icon">
                <div id="navbar-icon"><img src="{{ asset(Auth::user()->avatar) }}" alt="" /></div>
                <span>{{ Auth::user()->name }}</span>
            </div>
            <div id="navbar-content-list">
                <ion-icon name="apps-outline"></ion-icon>
                <div id="seller-bell">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>
                <input type="button" value="SHOPBEE UNI" />
            </div>
        </div>
    </div>
    <div id="seller-body-wrap">
        <div id="seller-content">
            <div id="seller-listOfContent">
                <div class="seller-sidebar">
                    <ul id="seller-sidebarMenu">
                        <li id="seller-sidebar-transport" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="rocket-outline"></ion-icon>
                                    <span>Deliver</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Deliver management</li>
                                <li class="sidebar-subMenu">Mass delivery</li>
                                <li class="sidebar-subMenu">Deliver setting</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-sellManage" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="file-tray-stacked-outline"></ion-icon>
                                    <span>Order Management</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li id="seller-all-order-btn" class="sidebar-subMenu">All</li>
                                <li class="sidebar-subMenu">Cancellation Order</li>
                                <li class="sidebar-subMenu">Cancel/Refund</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-productManage" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="cube-outline"></ion-icon>
                                    <span>Product Management</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li id="seller-all-product-btn" class="sidebar-subMenu">All Products</li>
                                <li id="seller-new-product-btn" class="sidebar-subMenu">
                                    <a href="{{ route('product.index') }}" target="_blank">Add New Products</a>
                                </li>
                                <li class="sidebar-subMenu">Product Violation</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-marketing" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="flag-outline"></ion-icon>
                                    <span>Marketing Channel</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Marketing Channel</li>
                                <li class="sidebar-subMenu">Shopee Advertisement</li>
                                <li class="sidebar-subMenu">My Discount Code</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-finance" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="cash-outline"></ion-icon>
                                    <span>Finance</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Turnover</li>
                                <li class="sidebar-subMenu">Shopee Account Balance</li>
                                <li class="sidebar-subMenu">Bank Account</li>
                                <li class="sidebar-subMenu">Set up Payment</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-data" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="bar-chart-outline"></ion-icon>
                                    <span>Data</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Sales Analyzis</li>
                                <li class="sidebar-subMenu">Operational Efficiency</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-development" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="trending-up-outline"></ion-icon>
                                    <span>Development</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Seller Missions</li>
                                <li class="sidebar-subMenu">Favorite Shop</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-clientCare" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="people-outline"></ion-icon>
                                    <span>Custom Care</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Chat Assistant</li>
                                <li class="sidebar-subMenu">Question & Answer</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-shopMange" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="storefront-outline"></ion-icon>
                                    <span>Shop Management</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Shop Rate</li>
                                <li class="sidebar-subMenu">Shop Profile</li>
                                <li class="sidebar-subMenu">Shop Decoration</li>
                                <li class="sidebar-subMenu">Shop Menu</li>
                                <li class="sidebar-subMenu">Media</li>
                                <li class="sidebar-subMenu">My Report</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-shopSetup" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="library-outline"></ion-icon>
                                    <span>Shop Setup</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Address</li>
                                <li class="sidebar-subMenu">Shop Setup</li>
                                <li class="sidebar-subMenu">Account</li>
                                <li class="sidebar-subMenu">API</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="seller-listOfContent-respons">
                <div class="seller-sidebar-respon">
                    <div id="seller-sidebar-responMenu-title"></div>
                    <ul id="seller-sidebar-responMenu">
                        <li id="seller-sidebar-respon-transport" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-sellManage" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-productManage" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-marketing" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-finance" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-data" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-development" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-clientCare" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-shopMange" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-shopSetup" class="sidebarList_respon"></li>
                        <li id="seller-sidebar-respon-shopSetup1" class="sidebarList_respon"></li>
                    </ul>
                </div>
            </div>
            <div id="seller-contentTable">
                <div id="seller-frame-cover">
                    <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
                </div>
                <div id="seller-contentTable-tranfer">
                    @include($content)
                </div>
            </div>
        </div>
    </div>
@endsection
