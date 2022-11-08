
<div class="mainHome_navbar_wrapper">
    <div class="mainHome_navbar">
        {{-- <div class="mainHome_navbar_aboutUs_respon_wrap"></div> --}}
        <div class="mainHome_navbar_aboutUs">
            <div class="mainHome_navbar_aboutUs-wrapper">
                <div class="mainHome_navbar_about_topic">
                    <ul>
                        <div id="mainHome_navbar_about_topic-close-icon">
                            <ion-icon name="close-circle"></ion-icon>
                        </div>
                        <a href="/seller" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Kênh người bán</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Become Seller</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Tải ứng dụng</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Liên kết</li>
                        </a>
                    </ul>
                </div>
                <div class="mainHome_navbar_about_topic">
                    <ul>
                        <li class="mainHome_navbar-topic">Thông báo</li>
                        <li class="mainHome_navbar-topic">Hỗ Trợ</li>
                        <li class="mainHome_navbar-topic">Ngôn ngữ</li>
                        @auth
                        <a href="">
                            <li class="mainHome_navbar-topic">{{ Auth::user()->name }}</li>
                            </a>
        
                            @endauth
                        <a href="{{ route('register') }}">
                            <li class="mainHome_navbar-topic">Đăng Ký</li>
                        </a>
                        <a href="{{ route('login') }}">
                            <li class="mainHome_navbar-topic">Đăng nhập</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mainHome_navbar_containt">
            <div class="mainHome_shopIcon">
                <a href="/" class="no_decoration">
                    <img id="mainHome-Icon" src="{{ asset('assets/imgs/shopbee.png') }}" alt="" />
                </a>
            </div>
            <div id="mainHone-search-field">
                <div class="mainHome_pageSearch">
                    <input id="mainHome-search-inp" name="navb-field" type="text" placeholder="Săn sale 31 tháng 2 ..." spellcheck="false" />
                    <button id="mainHome_pageSearchHome_search">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>
                <div id="mainHome-list-recommend">
                    <a href="">Điện thoại Xiaomi</a>
                    <a href="">Camera XY672</a>
                    <a href="">Air Pod 23</a>
                    <a href="">Fan UMX</a>
                    <a href="">Sạc dự phòng</a>
                    <a href="">Giày thép</a>
                    <a href="">Tablet 249f</a>
                    <a href="">Macbook Pro</a>
                </div>
            </div>
            <div class="mainHome_personal">
                <a href="/cart" id="mainHome-cart-view-btn-respon">
                    <ion-icon name="cart">
                    </ion-icon>
                </a>
                <ion-icon name="cart-outline">
                </ion-icon>
                <div id="mainHome-cart-hidden">
                    <div id="mainHome-cart-product-title">Sản phẩm mới thêm</div>
                    <div id="mainHome-cart-list-product">
                        <div class="mainHome__cart--product-wrap">
                            <img src="http://surl.li/dafng" alt="">
                            <div class="mainHome__cart--product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil natus unde distinctio voluptatem eaque recusandae neque</div>
                            <div class="mainHome__cart--product-price">9.000.000</div>
                        </div>
                        <div class="mainHome__cart--product-wrap">
                            <img src="http://surl.li/dafnd" alt="">
                            <div class="mainHome__cart--product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil natus unde distinctio voluptatem eaque recusandae neque</div>
                            <div class="mainHome__cart--product-price">9.000.000</div>
                        </div>
                        <div class="mainHome__cart--product-wrap">
                            <img src="http://surl.li/dafnj" alt="">
                            <div class="mainHome__cart--product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil natus unde distinctio voluptatem eaque recusandae neque</div>
                            <div class="mainHome__cart--product-price">9.000.000</div>
                        </div>
                    </div>
                    <a href="/cart" id="mainHome-cart-view-btn">Xem giỏ hàng</a>
                    {{-- <button id="mainHome-cart-view-btn">Xem giỏ hàng</button> --}}
                </div>
            </div>
            <div id="mainHome_navbar_about_topic-respon-hidden">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
        {{-- <div id="mainHome_navbar_about_topic-respon-hidden">
            <ion-icon name="menu-outline"></ion-icon>
        </div> --}}
    </div>
</div>
