<div class="mainHome_navbar_wrapper">
    <div class="mainHome_navbar">
        <div class="mainHome_navbar_aboutUs">
            <div class="mainHome_navbar_aboutUs-wrapper">
                <div class="mainHome_navbar_about_topic">
                    <ul>
                        <a href="{{ route('seller.index') }}" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Seller page</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Become Seller</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Download App</li>
                        </a>
                        <li class="mainHome__split--line">|</li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <li class="mainHome_navbar-topic">Link</li>
                        </a>
                    </ul>
                </div>
                <div class="mainHome_navbar_about_topic">
                    <ul>
                        <li class="mainHome_navbar-topic">Notification</li>
                        <li class="mainHome_navbar-topic">Support</li>
                        <li class="mainHome_navbar-topic">Language</li>
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
                                            <a class="mainHome__action--user" href="{{ route('profile.index') }}">My profile</a>
                                            <a class="mainHome__action--user" href="{{ route('profile.show', 'order') }}">Order</a>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="mainHome__action--user" id="mainHome-logout-btn">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endauth
                        @if (Auth::guest())
                            <li class="mainHome_navbar-topic">
                                <a href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                            <li class="mainHome_navbar-topic">
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div id="mainHome_navbar_about_topic-close-icon">
                        <ion-icon name="close-circle"></ion-icon>
                    </div>
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
                    <input id="mainHome-search-inp" name="navb-field" type="text" placeholder="Sale hunting February 31 ..." spellcheck="false" />
                    <button id="mainHome_pageSearchHome_search">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>
                <div id="mainHome-list-recommend">
                    <a href="">Xiaomi phone</a>
                    <a href="">Camera XY672</a>
                    <a href="">Air Pod 23</a>
                    <a href="">Fan UMX</a>
                    <a href="">Spare battery Charge</a>
                    <a href="">Steel shoes</a>
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
                            <div>Empty Cart</div>
                        </div>
                    @else
                        <div id="mainHome-cart-product-title">New product added</div>
                        <div id="mainHome-cart-list-product"></div>
                        <a href="{{ route('cart.show', Auth::user()->code) }}" id="mainHome-cart-view-btn">View cart</a>
                    @endif
                </div>
            </div>
            <div id="mainHome_navbar_about_topic-respon-hidden">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>
</div>
