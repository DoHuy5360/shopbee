@extends('layouts.skeleton')
@section('title', 'Kênh Người Bán')
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
                <div id="seller-navbar-current-title">Kênh Người Bán</div>
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
                                    <span>Vận chuyển</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Quản Lý Vận Chuyển</li>
                                <li class="sidebar-subMenu">Giao Hàng Loạt</li>
                                <li class="sidebar-subMenu">Cài Đặt Vận Chuyển</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-sellManage" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="file-tray-stacked-outline"></ion-icon>
                                    <span>Quản Lý Đơn Hàng</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Tất cả</li>
                                <li class="sidebar-subMenu">Đơn huỷ</li>
                                <li class="sidebar-subMenu">Trả Hàng/Hoàn Tiền</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-productManage" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="cube-outline"></ion-icon>
                                    <span>Quản Lý Sản Phẩm</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li id="seller-all-product-btn" class="sidebar-subMenu">Tất Cả Sản Phẩm</li>
                                <li id="seller-new-product-btn" class="sidebar-subMenu">
                                    <a href="{{ route('product.index') }}" target="_blank">Thêm Sản Phẩm</a>
                                </li>
                                <li class="sidebar-subMenu">Sản Phẩm Vi Phạm</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-marketing" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="flag-outline"></ion-icon>
                                    <span>Kênh Marketing</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Kênh Marketing</li>
                                <li class="sidebar-subMenu">Quảng Cáo Shopee</li>
                                <li class="sidebar-subMenu">Mã giảm giá của tôi</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-finance" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="cash-outline"></ion-icon>
                                    <span>Tài Chính</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Doanh Thu</li>
                                <li class="sidebar-subMenu">Số dư TK Shopee</li>
                                <li class="sidebar-subMenu">Tài Khoản Ngân Hàng</li>
                                <li class="sidebar-subMenu">Thiết lập Thanh Toán</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-data" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="bar-chart-outline"></ion-icon>
                                    <span>Dữ Liệu</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Phân Tích Bán Hàng</li>
                                <li class="sidebar-subMenu">Hiệu Quả Hoạt Động</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-development" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="trending-up-outline"></ion-icon>
                                    <span>Phát Triển</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Nhiệm Vụ Người Bán</li>
                                <li class="sidebar-subMenu">Shop Yêu Thích</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-clientCare" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="people-outline"></ion-icon>
                                    <span>Chăm Sóc Khách Hàng</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Trợ lý chat</li>
                                <li class="sidebar-subMenu">Hỏi - Đáp</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-shopMange" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="storefront-outline"></ion-icon>
                                    <span>Quản Lý Shop</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Đánh Giá Shop</li>
                                <li class="sidebar-subMenu">Hồ Sơ Shop</li>
                                <li class="sidebar-subMenu">Trang Trí Shop</li>
                                <li class="sidebar-subMenu">Danh Mục Của Shop</li>
                                <li class="sidebar-subMenu">Kho Hình Ảnh/Video</li>
                                <li class="sidebar-subMenu">Báo Cáo Của Tôi</li>
                            </ul>
                        </li>
                        <li id="seller-sidebar-shopSetup" class="sidebarList">
                            <div class="sidebar__menu--title">
                                <div class="seller__name--title">
                                    <ion-icon class="seller_sidebarIcon" name="library-outline"></ion-icon>
                                    <span>Thiết Lập Shop</span>
                                </div>
                                <span class="seller__arrow--sidebar">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                </span>
                            </div>
                            <ul class="sidebar__menu--content">
                                <li class="sidebar-subMenu">Địa Chỉ</li>
                                <li class="sidebar-subMenu">Thiết Lập Shop</li>
                                <li class="sidebar-subMenu">Tài Khoản</li>
                                <li class="sidebar-subMenu">Nền tảng đối tác (Kết nối API)</li>
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
