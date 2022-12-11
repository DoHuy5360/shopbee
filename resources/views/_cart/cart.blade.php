@extends('layouts.skeleton')
@section('title', 'Giỏ hàng')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/cart/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cart/cart_respon.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/cart/cart.js') }}"></script>
@endsection
@section('content')
    <div id="seller-frame-cover-fixed">
        <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
    </div>
    <div id="cart-page-backdrop">
        <div id="cartPage-limit-alert" open>
            <div>Oops! You can only buy <strong id="cart-page-amount-item"></strong> these Products.</div>
            <button id="cart-page-close-alert" type="button">OK</button>
        </div>
    </div>
    <input type="hidden" id="cartPage-csrf" value="{{ csrf_token() }}">
    <div id="cart-search-voucher">
        <div id="cart-header-wrap">
            <div class="mainHome_navbar_aboutUs">
                <div class="mainHome_navbar_about_topic">
                    <ul>
                        <a href="/seller" target="_blank" rel="noopener noreferrer">
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
                                            <a class="mainHome__action--user" href="">Order</a>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="mainHome__action--user" id="mainHome-logout-btn">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endauth
                        @guest
                            <li class="mainHome_navbar-topic">
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="mainHome_navbar-topic">
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div id="cart-search-warp">
            <div id="cart-search-shopbee-icon">
                <div id="cart-shopbee-img">
                    <a href="/" class="no_decoration">
                        <img src="{{ asset('assets/img/shopbee.png') }}" alt="" srcset="" /></a>
                </div>
                <div id="cart-shopbee">Cart</div>
            </div>
            <div id="cart-search-inputVoucher">
                <input id="cart-search-input-field" placeholder="VOUCHER FREE SHIP ĐẾN 70K" type="text" />
                <button id="cart-search-icon">
                    <ion-icon style="color: #fff" name="search"></ion-icon>
                </button>
            </div>
        </div>
    </div>
    <div id="cart-page-warp-hidden"></div>
    <div id="cart-page-warp">
        <div id="cart-page-warp-containt">
            <div id="cart-page-notif">
                <svg class="cart__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#00BFA5"
                        d="M19,9.5h-.32L17.43,6.38A3,3,0,0,0,14.65,4.5h-6A3,3,0,0,0,5.7,6.91L5.18,9.5H5a3,3,0,0,0-3,3v3a1,1,0,0,0,1,1H4a3,3,0,0,0,6,0h4a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1v-3A3,3,0,0,0,19,9.5Zm-6-3h1.65a1,1,0,0,1,.92.63l.95,2.37H13Zm-5.34.8a1,1,0,0,1,1-.8H11v3H7.22ZM7,17.5a1,1,0,1,1,1-1A1,1,0,0,1,7,17.5Zm10,0a1,1,0,1,1,1-1A1,1,0,0,1,17,17.5Zm3-3h-.78a3,3,0,0,0-4.44,0H9.22a3,3,0,0,0-4.44,0H4v-2a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z" />
                </svg>
                <div>Click on the Coupon Code section at the bottom of the page to get your free shipping delivered!</div>
            </div>
            <div class="cart_page_product_guide" id="cart-page-product-guide">
                <div class="cart_page_btn">
                    <input type="checkbox" name="" class="cart__page-check-all" />
                </div>
                <div class="cart_page_name_product">
                    <div>Product</div>
                </div>
                <div class="cart_page_about_product"></div>
                <div class="cart_page_pricePerNumb">
                    <div>Price</div>
                </div>
                <div class="cart_page_quantity">
                    <div>Amount</div>
                </div>
                <div class="cart_page_price">
                    <div>Total</div>
                </div>
                <div class="cart_page_otherAction">
                    <div>Action</div>
                </div>
            </div>
            <form action="{{ route('purchase.create') }}" id="cart-form-submit" class="cart_page_warp_containt_border" method="GET">
                @foreach ($get_grp_pdt as $index_pdt => $product_creator)
                    <div class="cart_page_product_infor" data-owner-wrap-code="{{ $product_creator->user_code }}">
                        <input type="hidden" name="product_information[{{ $index_pdt }}][user_code]" value="{{ $product_creator->user_code }}">
                        <input type="hidden" name="product_information[{{ $index_pdt }}][user_name]" value="{{ $product_creator->name }}">
                        <div class="cart_page_product_prize_infor">
                            <div class="cart_page_product_seller">
                                <div class="cart_page_btn">
                                    <input type="checkbox" name="" id="" class="cart__page--owner-check" data-owner-check-code="{{ $product_creator->user_code }}"
                                        title="Check all this shop's products" />
                                </div>
                                <div class="cart_page_name_product">
                                    <div>Product Provider  <strong>{{ $product_creator->name }}</strong></div>
                                    <ion-icon style="color: red; font-size: 1.4rem" name="chatbubbles-sharp"></ion-icon>
                                </div>
                                <span class="cart__page-product-edit">Sửa</span>
                            </div>
                            @foreach ($product_creator->products as $index_item => $item)
                                <div class="cart_page_warp_containt_border">
                                    <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][product_code]" value="{{ $item->product_code }}">
                                    <div class="cart_page_wrap_containt">
                                        <div class="cart_page_voucher_cover">
                                            <div class="cart_page_voucher_title">Sale combo</div>
                                            <div class="cart_page_voucher_detail">Promotion comboBuy 2 products 8% off</div>
                                            <div class="cart_page_voucher_add"><a href="http://" target="_blank" rel="noopener noreferrer">More ></a></div>
                                        </div>
                                        <div class="cart__page--hidden-wrap">

                                            <div class="cart_page_infor_warp">
                                                <div class="cart_page_btn">
                                                    <input class="cartPage__choose--item" type="checkbox" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][checked]"
                                                        data-cart-select="{{ $item->cart_code }}" data-owner-code="{{ $product_creator->user_code }}" />
                                                </div>
                                                <div class="cart_page_name_product">
                                                    <div class="cart_page_product_img">
                                                        <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][image]" value="{{ $item->path }}">
                                                        <img src="{{ asset($item->path) }}" alt="" />
                                                    </div>
                                                    <div class="cart_page_product_desc">
                                                        <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][name]" value="{{ $item->name }}">
                                                        {{ $item->name }}
                                                    </div>
                                                </div>
                                                <div class="cart_page_option_wrap_respon">
                                                    <div class="cart_page_about_option">
                                                        <div class="cart_page_about_title">
                                                            <span>Classify</span>
                                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                                        </div>
                                                        <div class="cart_page_about_choice">-/-/-/-/-</div>
                                                    </div>
                                                    @if (isset($item->classificationone))
                                                        <div class="cart_page_option_items">
                                                            <div class="cart_page_option_items_wrap">
                                                                <div class="cart_page_option_fix">
                                                                    <div class="cart_page_option_fix_title">
                                                                        <span>{{ $item->classificationone }}</span>:
                                                                    </div>
                                                                    <div class="cart_page_option_choice">
                                                                        @foreach ($item->classificationones as $cls1)
                                                                            <div class="cart_checkout--method-wrap">
                                                                                <label class="cart_check--method-feature">
                                                                                    <input class="cart_check--method" type="radio"
                                                                                        name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][classification1]"
                                                                                        value="{{ $cls1->name }}"
                                                                                        {{ isset($cls1->checked) ? ($cls1->checked == $cls1->code ? 'checked' : '') : '' }} />
                                                                                    <span>{{ $cls1->name }}</span>
                                                                                </label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                @if (isset($item->classificationtwo))
                                                                    <div class="cart_page_option_fix">
                                                                        <div class="cart_page_option_fix_title">
                                                                            <span>{{ $item->classificationtwo }}</span>:
                                                                        </div>
                                                                        <div id="cart-page-classification2-wrap">
                                                                            @foreach ($item->classificationtwos as $array_cls2)
                                                                                <div class="cart_page_option_choice">
                                                                                    @foreach ($array_cls2 as $cls2)
                                                                                        <div class="cart_checkout--method-wrap">
                                                                                            <label class="cart_check--method-feature">
                                                                                                <input class="cart_check--method" type="radio"
                                                                                                    name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][classification2]"
                                                                                                    value="{{ $cls2->name }}"
                                                                                                    {{ isset($cls2->checked) ? ($cls2->checked == $cls2->code ? 'checked' : '') : '' }} />
                                                                                                <span>{{ $cls2->name }}</span>
                                                                                            </label>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                <button type="button" class="cart_page_option_submit_btn_wrap">Confirm</button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="cart_page_pricePer_wrap_respon">
                                                    <div>₫ <span>{{ number_format((int) $item->price, 0, ',', '.') }}</span></div>
                                                </div>
                                                <div class="cart__set--number-product-wrap">
                                                    <div class="cart__set--number-product">
                                                        <button class="cart_page_quantity_btn cart_page_quantity_btn_minus" type="button">-</button>
                                                        <input class="cartPage__item--amount" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][amount]" type="number"
                                                            value="{{ $item->amount }}" min="1" max="{{ $item->storage }}" data-item-code="{{ $item->cart_code }}" />
                                                        <button class="cart_page_quantity_btn cart_page_quantity_btn_plus" type="button">+</button>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][price]" value="{{ $item->price }}">
                                                <div class="cart_page_price_wrap_respon" data-item-code-price="{{ $item->cart_code }}" data-origin-price="{{ $item->price }}"
                                                    data-new-price="{{ $item->price }}">{{ number_format((int) $item->price, 0, ',', '.') }}</div>
                                                <div class="cart_page_action_wrap_respon">
                                                    <div class="cart_page_action_wrap">
                                                        <div class="cart_page_actionDel" data-item-code="{{ $item->cart_code }}">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </div>
                                                        <div class="cart_page_actionAdd">
                                                            <div>Search similar products</div>
                                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="cart_page_product_voucher">
                                <div class="cart_page_voucher_icon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>
                                <div class="cart_page_voucher_detail">Shop Voucher up to 50k</div>
                                <div class="cart_page_voucherAdd">
                                    <a href="http://" rel="noopener noreferrer">More Voucher</a>
                                </div>
                            </div>
                            <div class="cart_page_product_trans">
                                <div class="cart_page_trans_icon">
                                    <ion-icon name="car-outline"></ion-icon>
                                </div>
                                <div class="cart_page_trans_detail">Discount 40,000 minimum single shipping fee 0</div>
                                <div class="cart_page_transAdd">
                                    <a href="http://" rel="noopener noreferrer">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </form>
            <div class="cart_page_product_infor" id="cart_page-product-inactive">
                @foreach ($get_grp_pdt_hid as $index_pdt => $product_creator)
                    <div class="cart_page-product-inactive-warp">
                        <div class="cart_page-product-inactive-title">Inactive products List</div>
                        <input type="hidden" name="product_information[{{ $index_pdt }}][user_code]" value="{{ $product_creator->user_code }}">
                        <input type="hidden" name="product_information[{{ $index_pdt }}][user_name]" value="{{ $product_creator->name }}">
                        <div class="cart_page_product_prize_infor">
                            <div class="cart_page_product_seller">
                                <div class="cart_page_btn">
                                    <input type="checkbox" name="" id="" />
                                </div>
                                <div class="cart_page_name_product">
                                    <div>Provider <strong>{{ $product_creator->name }}</strong></div>
                                    <ion-icon style="color: red; font-size: 1.4rem" name="chatbubbles-sharp"></ion-icon>
                                </div>
                                <span class="cart__page-product-edit">Edit</span>
                            </div>
                            @foreach ($product_creator->products as $index_item => $item)
                                <div class="cart_page_warp_containt_border cart__product--inactive" data-cart-code="{{ $item->cart_code }}">
                                    <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][product_code]" value="{{ $item->product_code }}">
                                    <div class="cart_page_wrap_containt">
                                        <div class="cart_page_voucher_cover">
                                            <div class="cart_page_voucher_title">Sale combo</div>
                                            <div class="cart_page_voucher_detail">Buy 2 products 8% off</div>
                                            <div class="cart_page_voucher_add"><a href="http://" target="_blank" rel="noopener noreferrer">More ></a></div>
                                        </div>
                                        <div class="cart__page--hidden-wrap">

                                            <div class="cart_page_infor_warp">
                                                <div class="cart_page_btn">
                                                    <input type="checkbox" disabled />
                                                </div>
                                                <div class="cart_page_name_product">
                                                    <div class="cart_page_product_img">
                                                        <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][image]" value="{{ $item->path }}">
                                                        <img src="{{ asset($item->path) }}" alt="" />
                                                    </div>
                                                    <div class="cart_page_product_desc">
                                                        <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][name]" value="{{ $item->name }}">
                                                        {{ $item->name }}
                                                    </div>
                                                </div>
                                                <div class="cart_page_option_wrap_respon">
                                                    <div class="cart_page_about_option">
                                                        <div class="cart_page_about_title">
                                                            <span>Classify</span>
                                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                                        </div>
                                                        <div class="cart_page_about_choice">MS</div>
                                                    </div>
                                                    <div class="cart_page_option_items">
                                                        <div class="cart_page_option_items_wrap">
                                                            <div class="cart_page_option_fix">
                                                                <div class="cart_page_option_fix_title">
                                                                    <span>{{ $item->classificationone }}</span>:
                                                                </div>
                                                                <div class="cart_page_option_choice">
                                                                    @foreach ($item->classificationones as $cls1)
                                                                        <div class="cart_checkout--method-wrap">
                                                                            <label for="cart-page-payment-feature-1">
                                                                                <input class="cart_check--method" type="radio" name="checkout-type" id="cart-page-payment-feature-1"
                                                                                    value="white" />
                                                                                <span>{{ $cls1->name }}</span>
                                                                            </label>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="cart_page_option_fix">
                                                                <div class="cart_page_option_fix_title">
                                                                    <span>{{ $item->classificationtwo }}</span>:
                                                                </div>
                                                                <div id="cart-page-classification2-wrap">
                                                                    @foreach ($item->classificationtwos as $array_cls2)
                                                                        <div class="cart_page_option_choice">
                                                                            @foreach ($array_cls2 as $cls2)
                                                                                <div class="cart_checkout--method-wrap">
                                                                                    <label for="cart-page-payment-feature-1">
                                                                                        <input class="cart_check--method" type="radio" name="checkout-type" id="cart-page-payment-feature-0"
                                                                                            value="small" />
                                                                                        <span>{{ $cls2->name }}</span>
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <button type="button" class="cart_page_option_submit_btn_wrap">Confirm</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart_page_pricePer_wrap_respon">
                                                    <div>₫ <span>{{ number_format((int) $item->price, 0, ',', '.') }}</span></div>
                                                </div>
                                                <div class="cart__set--number-product-wrap">
                                                    <div class="cart__set--number-product">
                                                        <button class="cart_page_quantity_btn cart_page_quantity_btn_minus" type="button">-</button>
                                                        <input class="cartPage__item--amount" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][amount]" type="number"
                                                            value="1" min="1" max="{{ $item->storage }}" data-item-code="{{ $item->cart_code }}" />
                                                        <button class="cart_page_quantity_btn cart_page_quantity_btn_plus" type="button">+</button>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][price]" value="{{ $item->price }}">
                                                <div class="cart_page_price_wrap_respon" data-item-code-price="{{ $item->cart_code }}" data-origin-price="{{ $item->price }}"
                                                    data-new-price="{{ $item->price }}">{{ number_format((int) $item->price, 0, ',', '.') }}</div>
                                                <div class="cart_page_action_wrap_respon">
                                                    <div class="cart_page_action_wrap">
                                                        <div class="cart_page_actionDel" data-item-code="{{ $item->cart_code }}">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </div>
                                                        <div class="cart_page_actionAdd">
                                                            <div>Search familiar products</div>
                                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart_page_product_blur"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="cart_page_product_prize_infor" id="cart-page-sticky-block">
                <div id="cart-page-sticky-wrap">
                    <div id="cart-page-sticky-voucher">
                        <div id="cart-page-sticky-voucher-wrap">
                            <ion-icon style="color: red" name="ticket-outline"></ion-icon>
                            <div>ShopBee Voucher</div>
                        </div>
                        <div id="cart-page-sticky-voucher-input"><a href="http://" target="_blank" rel="noopener noreferrer">Choose or Enter code</a></div>
                    </div>
                    <div id="cart-page-sticky-coin">
                        <div id="cart-page-sticky-coin-check">
                            <input type="checkbox" name="" id="" />
                            <ion-icon style="color: rgb(177, 177, 77)" name="logo-bitcoin"></ion-icon>
                            <div>ShopBee coin</div>
                            <div id="cart-page-sticky-coin-amount-display">You not choosed yet</div>
                        </div>
                        <div id="cart-page-sticky-coin-amount">
                            <span>₫ <span id="cart-page-total-price">0</span></span>
                        </div>
                    </div>
                    <div id="cart-page-sticky-function">
                        <div id="cart-page-sticky-function-check">
                            <input type="checkbox" name="" class="cart__page-check-all" />
                        </div>
                        <div id="cart-page-sticky-function-selectAll">
                            <div>Check all (<span id="cart-page-amnt-pdt-slct">0</span>)</div>
                        </div>
                        <div id="cart-page-sticky-function-del">
                            <div>Delete</div>
                        </div>
                        <div id="cart-page-sticky-function-delInactive">
                            <div>Remove all inactive products</div>
                        </div>
                        <div id="cart-page-sticky-function-saveToLike">
                            <div style="color: red">Add to bookmark</div>
                        </div>
                        <div id="cart-page-sticky-function-sumCost">
                            <span>Total</span>
                            <div>(₫<span id="cart-page-final-cost">0</span>)</div>
                        </div>
                        <div id="cart-page-sticky-function-btnBuy">
                            <button id="cart-page-go-buy" form="cart-form-submit" type="submit">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
