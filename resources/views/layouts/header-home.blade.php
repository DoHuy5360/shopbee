<div class="mainHome_navbar_wrapper">
    <div class="mainHome_navbar">
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
                            <li class="mainHome_navbar-topic" id="mainHome-navbar-user">
                                <img id="mainHome-avatar-ion" src="{{ asset(Auth::user()->avatar) }}
                                " alt="">
                                <a href="/profile" id="mainHome-profile-avatar">
                                    <div id="mainHome-user-name">{{ Auth::user()->name }}</div>
                                </a>
                                <div id="mainHome-hidden-tramform">
                                    <div id="mainHome-user-hidden-wrap">
                                        <div id="mainHome-hidden-option-user">
                                            <a class="mainHome__action--user" href="{{ route('profile.show', Auth::user()->code) }}">Hồ sơ của tôi</a>
                                            <a class="mainHome__action--user" href="">Đơn mua</a>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="mainHome__action--user" id="mainHome-logout-btn">Đăng xuất</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endauth
                        @if (Auth::guest())
                            <a href="{{ route('register') }}">
                                <li class="mainHome_navbar-topic">Đăng Ký</li>
                            </a>
                            <a href="{{ route('login') }}">
                                <li class="mainHome_navbar-topic">Đăng nhập</li>
                            </a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="mainHome_navbar_containt">
            <div class="mainHome_shopIcon">
                <a href="/" class="no_decoration">
                    <img id="mainHome-Icon" src="{{ asset('assets/img/shopbee.png') }}" alt="" />
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
                @if (!Auth::guest())
                    <div id="headerHome-display-cart-number"></div>
                    <a href="{{ route('cart.show', Auth::user()->code) }}" id="mainHome-cart-view-btn-respon">
                        <ion-icon name="cart"></ion-icon>
                    </a>
                @endif
                <ion-icon name="cart-outline"></ion-icon>
                <div id="mainHome-cart-hidden">
                    @if (Auth::guest())
                    <div id="mainHome-cart-empty-wrap">
                        <img src="{{ asset('assets/img/empty_cart.png') }}" alt="Giỏ hàng của bạn">
                        <div>Chưa Có Sản Phẩm</div>
                    </div>
                    @else
                        <input type="hidden" id="mainHome-user-code" name="" value="{{ Auth::user()->code }}">
                        <div id="mainHome-cart-product-title">Sản phẩm mới thêm</div>
                        <div id="mainHome-cart-list-product"></div>
                        <a href="{{ route('cart.show', Auth::user()->code) }}" id="mainHome-cart-view-btn">Xem giỏ hàng</a>
                    @endif
                </div>
            </div>
            <div id="mainHome_navbar_about_topic-respon-hidden">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>
</div>
