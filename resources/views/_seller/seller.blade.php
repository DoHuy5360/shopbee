@extends('layouts.skeleton')
@section('title', 'Kênh Người Bán')
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/header/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer/footer-home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/seller/seller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/seller/seller_respon.css') }}">

@endsection
@section('js')
    <script src="{{ asset('assets/js/seller/seller.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/seller/seller_respon.js') }}"></script> --}}
@endsection

@section('content')
    <div id="seller-navbar">
        <div id="seller-navbar-icon">
            <div id="seller-icon"><img src="{{ asset('assets/img/shopbee.png') }}" alt="" /></div>
            <span>Kênh Người Bán</span>
        </div>
        <div id="seller-navbar-content">
            <div id="navbar-content-icon">
                <div id="navbar-icon"><img src="https://bit.ly/3pbRb8m" alt="" /></div>
                <span>dohuy5360</span>
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
                            <li class="sidebar-subMenu">Tất Cả Sản Phẩm</li>
                            <a href="/new-product">
                                <li class="sidebar-subMenu">Thêm Sản Phẩm</li>
                            </a>
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
            <div id="seller-content-right">
                <div class="seller-content-left-part">
                    <div id="seller-ads-content">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://surl.li/dafng" alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://surl.li/dafnd" alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://surl.li/dafnj" alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="seller-contentCells" id="seller-todoList">
                        <div class="seller-content-title">
                            <span>Danh sách cần làm</span>
                            <p>Những việc bạn sẽ làm</p>
                        </div>
                        <div id="seller-todolistbox">
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                            <div class="seller__todoList--box">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <p class="todoList__boxItem--amount">0</p>
                                    <p class="todoList__boxItem--title">Chờ Xác Nhận</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="seller-contentCells" id="seller-shopAnalyst">
                        <div class="seller__content--title-wrap">
                            <div class="seller-content-title">
                                <span>Phân Tích Bán Hàng</span>
                                <p>Tổng quan dữ liệu của shop đối với đơn hàng đã xác nhận</p>
                            </div>
                            <a class="see-all-content" href="">Xem tất cả ></a>
                        </div>
                        <div id="chart-analyst">
                            <canvas id="myChart" style="width: 100%; max-width: 400px; height: 100px"></canvas>
                            <div id="chart-component">
                                <div class="chart-component-item">
                                    <p class="component-title"><span>Lượt truy cập</span>
                                        <ion-icon name="help-circle-outline"></ion-icon>
                                    </p>
                                    <h3 class="component-data">0</h3>
                                    <span class="component-percent">Vs hôm qua</span><span></span>
                                </div>
                                <div class="chart-component-item">
                                    <p class="component-title"><span>Lượt xem</span>
                                        <ion-icon name="help-circle-outline"></ion-icon>
                                    </p>
                                    <h3 class="component-data">0</h3>
                                    <span class="component-percent">Vs hôm qua</span><span></span>
                                </div>
                                <div class="chart-component-item">
                                    <p class="component-title"><span>Đơn hàng</span>
                                        <ion-icon name="help-circle-outline"></ion-icon>
                                    </p>
                                    <h3 class="component-data">0</h3>
                                    <span class="component-percent">Vs hôm qua</span><span></span>
                                </div>
                                <div class="chart-component-item">
                                    <p class="component-title"><span>Tỷ lệ chuyển đổi</span>
                                        <ion-icon name="help-circle-outline"></ion-icon>
                                    </p>
                                    <h3 class="component-data">0%</h3>
                                    <span class="component-percent">Vs hôm qua</span><span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="seller-contentCells" id="seller-marketingChannel">
                        <div class="seller__content--title-wrap">
                            <div class="seller-content-title">
                                <span>Kênh Marketing</span>
                                <p>Công cụ Marketing & Đăng ký chương trình Khuyến Mãi</p>
                            </div>
                            <a class="see-all-content" href="">Xem tất cả ></a>
                        </div>
                        <div class="seller__marketing--title">Chương trình nổi bật</div>
                        <div class="seller__marketing--wrap">
                            <div class="seller__switch--tab" data-switch-name="manage-marketing">
                                <div class="seller__opttion--bar">
                                    <div class="seller__arrow--back">
                                        <ion-icon name="chevron-back-outline"></ion-icon>
                                    </div>
                                    <ul class="seller__option--element-wrap">
                                        <li class="seller__option--element">Lịch</li>
                                        <li class="seller__option--element">Chương Trình Giảm Giá Sản Phẩm</li>
                                        <li class="seller__option--element">Chương Trình Mã Giảm Giá</li>
                                        <span class="___"></span>
                                    </ul>
                                    <div class="seller__arrow--forward">
                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="seller__content--display"></div>
                            </div>
                            <div class="seller__marketing--tool-wrap">
                                <div class="seller__marketing--title">Công Cụ Marketing</div>
                                <div id="seller-marketing-card-wrap">
                                    <div class="seller__marketing--card">
                                        <div class="seller__marketing--icon">
                                            <ion-icon name="id-card"></ion-icon>
                                        </div>
                                        <div class="seller__marketing-name">Mã Giản Giá Của Shop</div>
                                        <div class="seller__marketing--description">Công cụ tăng đơn hàng bằng cách tạo mã giảm giá</div>
                                        <div class="seller__marketing--recommend">Được đề suất</div>
                                    </div>
                                    <div class="seller__marketing--card">
                                        <div class="seller__marketing--icon">
                                            <ion-icon name="flower"></ion-icon>
                                        </div>
                                        <div class="seller__marketing-name">Chương Trình Của Shop</div>
                                        <div class="seller__marketing--description">Công cụ tăng đơn hàng bằng cách tạo chương trình giảm giá</div>
                                        <div class="seller__marketing--recommend"></div>
                                    </div>
                                    <div class="seller__marketing--card">
                                        <div class="seller__marketing--icon">
                                            <ion-icon name="heart-circle"></ion-icon>
                                        </div>
                                        <div class="seller__marketing-name">Combo Khuyến Mãi</div>
                                        <div class="seller__marketing--description">Tạo Combo Khuyễn Mãi</div>
                                        <div class="seller__marketing--recommend"></div>
                                    </div>
                                    <div class="seller__marketing--card">
                                        <div class="seller__marketing--icon">
                                            <ion-icon name="flash"></ion-icon>
                                        </div>
                                        <div class="seller__marketing-name">Flash Sale Của Shop</div>
                                        <div class="seller__marketing--description">Công cụ giúp tăng doanh số bằng cách tạo khuyến mãi khủng trong các khung giờ nhất định</div>
                                        <div class="seller__marketing--recommend"></div>
                                    </div>
                                    <div class="seller__marketing--card">
                                        <div class="seller__marketing--icon">
                                            <ion-icon name="gift"></ion-icon>
                                        </div>
                                        <div class="seller__marketing-name">Ưu đãi Follower</div>
                                        <div class="seller__marketing--description">Khuyến khích người mua theo dõi Shop bằng cách tặng voucher cho Người theo dõi mới</div>
                                        <div class="seller__marketing--recommend"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="seller-contentCells" id="seller-KPI">
                        <div class="seller__content--title-wrap">
                            <div class="seller-content-title">
                                <span>Hiệu Quả Hoạt Động</span>
                                <p>Bảng Hiệu Quả Hoạt Động giúp Người Bán hiểu rõ hơn về hoạt động buôn bán của Shop mình dựa trên những chỉ tiêu sau:</p>
                            </div>
                            <a class="see-all-content" href="">Xem tất cả ></a>
                        </div>
                        <div class="seller__switch--tab" data-switch-name="manage-activity">
                            <div class="seller__opttion--bar">
                                <div class="seller__arrow--back">
                                    <ion-icon name="chevron-back-outline"></ion-icon>
                                </div>
                                <ul class="seller__option--element-wrap">
                                    <li class="seller__option--element">Các sản phẩm vi phạm</li>
                                    <li class="seller__option--element">Quản Lý Đơn Hàng</li>
                                    <li class="seller__option--element">Chăm sóc khách hàng</li>
                                    <li class="seller__option--element">Mức độ hài lòng của người mua</li>
                                    <span class="___"></span>
                                </ul>
                                <div class="seller__arrow--forward">
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="seller__content--display">
                                <div class="de">1</div>
                                <div class="de">2</div>
                                <div class="de">3</div>
                                <div class="de">4</div>
                            </div>
                        </div>
                    </div>
                    <div class="seller-contentCells" id="seller-shopPoint">
                        <div class="seller__content--title-wrap">
                            <div class="seller-content-title">
                                <span>Điểm Sao Quả Tạ</span>
                                <p>Hệ thống Sao Quả Tạ giúp Người bán duy trì dịch vụ bán hàng chất lượng, mang đến sự hài lòng cho Người mua.</p>
                            </div>
                            <a class="see-all-content" href="">Xem tất cả ></a>
                        </div>
                        <div id="seller-dumbbel--starPoin-wrap">
                            <div id="seller-dumbbel-starPoin">
                                <div id="seller-dumbbel-point-wrap">
                                    <span id="seller-dumbbel-poin">0</span>
                                    <span>Điểm</span>
                                </div>
                                <div id="seller-dumbbel-status">Shop đang hoạt động rất hiệu quả, hãy giữ vững kết quả này để Người mua thêm vững lòng tin Shop nhé!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="seller-content-right-part">
                    <div id="seller-notificaton">
                        <div class="seller-content-title">
                            <span>Thông Báo</span>
                        </div>
                        <a class="see-all-content" href="">Xem tất cả ></a>
                    </div>
                    <!-- <div id="seller-mission">
                          <div class="seller-content-title">
                            <span>Nhiệm Vụ Người Bán</span>
                          </div>
                          <a class="see-all-content" href="">Xem tất cả ></a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/seller/seller_respon.js') }}"></script>

@endsection
