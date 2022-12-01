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
    <div id="cart-page-backdrop">
        <div id="cartPage-limit-alert" open>
            <div>Rất tiếc, bạn chỉ có thể mua <strong id="cart-page-amount-item"></strong> sản phẩm này.</div>
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
        <div id="cart-search-warp">
            <div id="cart-search-shopbee-icon">
                <div id="cart-shopbee-img">
                    <a href="/" class="no_decoration">
                        <img src="{{ asset('assets/img/shopbee.png') }}" alt="" srcset="" /></a>
                </div>
                <div id="cart-shopbee">Giỏ Hàng</div>
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
                <div>Nhấn vào mục Mã giảm giá ở cuối trang để hưởng miễn phí vận chuyển bạn nhé!</div>
            </div>
            <div class="cart_page_product_guide" id="cart-page-product-guide">
                <div class="cart_page_btn">
                    <input type="checkbox" name="" id="" />
                </div>
                <div class="cart_page_name_product">
                    <div>Sản Phẩm</div>
                </div>
                <div class="cart_page_about_product"></div>
                <div class="cart_page_pricePerNumb">
                    <div>Đơn Giá</div>
                </div>
                <div class="cart_page_quantity">
                    <div>Số Lượng</div>
                </div>
                <div class="cart_page_price">
                    <div>Số Tiền</div>
                </div>
                <div class="cart_page_otherAction">
                    <div>Thao Tác</div>
                </div>
            </div>
            <form action="{{ route('purchase.create') }}" id="cart-form-submit" class="cart_page_warp_containt_border" method="GET">
                @foreach ($get_pdt_creator as $index_pdt => $product_creator)
                    <input type="hidden" name="product_information[{{ $index_pdt }}][user_code]" value="{{ $product_creator->user_code }}">
                    <input type="hidden" name="product_information[{{ $index_pdt }}][user_name]" value="{{ $product_creator->name }}">
                    <div class="cart_page_product_infor">
                        <div class="cart_page_product_prize_infor">
                            <div class="cart_page_product_seller">
                                <div class="cart_page_btn">
                                    <input type="checkbox" name="" id="" />
                                </div>
                                <div class="cart_page_name_product">
                                    <div>Đại diện cung cấp <strong>{{ $product_creator->name }}</strong></div>
                                    <ion-icon style="color: red; font-size: 1.4rem" name="chatbubbles-sharp"></ion-icon>
                                </div>
                                <span class="cart__page-product-edit">Sửa</span>
                            </div>
                            @foreach ($product_creator->products as $index_item => $item)
                            <input type="hidden" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][product_code]" value="{{ $item->code }}">
                                <div class="cart_page_warp_containt_border">
                                    <div class="cart_page_wrap_containt">
                                        <div class="cart_page_voucher_cover">
                                            <div class="cart_page_voucher_title">Combo khuyến mãi</div>
                                            <div class="cart_page_voucher_detail">Mua 2 sản phẩm giảm 8%</div>
                                            <div class="cart_page_voucher_add"><a href="http://" target="_blank" rel="noopener noreferrer">Thêm ></a></div>
                                        </div>
                                        <div class="cart__page--hidden-wrap">

                                            <div class="cart_page_infor_warp">
                                                <div class="cart_page_btn">
                                                    <input class="cartPage__choose--item" type="checkbox" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][checked]" data-cart-select="{{ $item->cart_code }}" />
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
                                                            <span>Phân Loại Hàng</span>
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
                                                                                <input class="cart_check--method" type="radio" name="checkout-type" id="cart-page-payment-feature-1" value="white" />
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
                                                            <button type="button" class="cart_page_option_submit_btn_wrap">
                                                                Xác nhận
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart_page_pricePer_wrap_respon">
                                                    <div>₫ <span>{{ number_format((int) $item->price, 0, ',', '.') }}</span></div>
                                                </div>
                                                <div class="cart__set--number-product-wrap">
                                                    <div class="cart__set--number-product">
                                                        <button class="cart_page_quantity_btn cart_page_quantity_btn_minus" type="button">-</button>
                                                        <input class="cartPage__item--amount" name="product_information[{{ $index_pdt }}][products][{{ $index_item }}][amount]" type="number" value="1" min="1"
                                                            max="{{ $item->storage }}" data-item-code="{{ $item->cart_code }}" />
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
                                                            <div>Tìm sản phảm tương tự</div>
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
                                <div class="cart_page_voucher_detail">Shop Voucher giảm đến ₫50k</div>
                                <div class="cart_page_voucherAdd">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">Xem thêm Voucher</a>
                                </div>
                            </div>
                            <div class="cart_page_product_trans">
                                <div class="cart_page_trans_icon">
                                    <ion-icon name="car-outline"></ion-icon>
                                </div>
                                <div class="cart_page_trans_detail">Giảm ₫40.000 phí vận chuyển đơn tối thiểu ₫0</div>
                                <div class="cart_page_transAdd">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </form>
            <div class="cart_page_product_prize_infor" id="cart_page-product-inactive">
                <div id="cart_page-product-inactive-warp">
                    <div id="cart_page-product-inactive-title">Danh Sách Sản Phẩm Không Hoạt Động</div>
                    <div id="cart_page-product-inactive-containt">
                        <div class="cart_page_warp_containt_border">
                            <div class="cart_page_wrap_containt">
                                <div class="cart_page_voucher_cover">
                                    <div class="cart_page_voucher_title">Combo khuyến mãi</div>
                                    <div class="cart_page_voucher_detail">Mua 2 sản phẩm giảm 8%</div>
                                    <div class="cart_page_voucher_add"><a href="http://" target="_blank" rel="noopener noreferrer">Thêm ></a></div>
                                </div>
                                <div class="cart_page_infor_warp">
                                    <div class="cart_page_btn">
                                        <input type="checkbox" name="" id="" />
                                    </div>
                                    <div class="cart_page_name_product">
                                        <div class="cart_page_product_img">
                                            <img src="https://gifimage.net/wp-content/uploads/2017/09/anime-pixel-gif-3.gif" alt="" srcset="" />
                                        </div>
                                        <div class="cart_page_product_desc">
                                            <div>Combo 5 quần lót nam tam giác Cotton thương hiệu Coolmate (đỏ, xanh, vàng, lam, lục tímmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm)</div>
                                        </div>
                                    </div>
                                    <div class="cart_page_option_wrap_respon">
                                        <div class="cart_page_about_option">
                                            <div class="cart_page_about_title">
                                                <span>Phân Loại Hàng</span>
                                                <ion-icon name="chevron-down-outline"></ion-icon>
                                            </div>
                                            <div class="cart_page_about_choice">M</div>
                                        </div>
                                    </div>
                                    <div class="cart_page_pricePer_wrap_respon">
                                        <div>₫ <span>199.000</span></div>
                                    </div>
                                    <div class="cart__set--number-product-wrap">
                                        <div class="cart__set--number-product">
                                            <button class="cart_page_quantity_btn" id="cart_page_quantity_btn_plus">+</button>
                                            <input type="text" aria-valuenow="1" value="1" />
                                            <button class="cart_page_quantity_btn" id="cart_page_quantity_btn_minus">-</button>
                                        </div>
                                    </div>
                                    <div class="cart_page_price_wrap_respon">
                                        <div style="color: red">900.000</div>
                                    </div>
                                    <div class="cart_page_action_wrap_respon">
                                        <div class="cart_page_action_wrap">
                                            <div class="cart_page_actionDel">
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </div>
                                            <div class="cart_page_actionAdd">
                                                <div>Tìm sản phảm tương tự</div>
                                                <ion-icon name="chevron-down-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart_page_product_blur"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cart_page-product-inactive-del-wrap">
                        <div id="cart_page-product-inactive-del">Bỏ sản phẩm không hoạt động</div>
                    </div>
                </div>
            </div>
            <div class="cart_page_product_prize_infor" id="cart-page-sticky-block">
                <div id="cart-page-sticky-wrap">
                    <div id="cart-page-sticky-voucher">
                        <div id="cart-page-sticky-voucher-wrap">
                            <ion-icon style="color: red" name="ticket-outline"></ion-icon>
                            <div>ShopBee Voucher</div>
                        </div>
                        <div id="cart-page-sticky-voucher-input"><a href="http://" target="_blank" rel="noopener noreferrer">Chon Hoặc Nhập Mã</a></div>
                    </div>
                    <div id="cart-page-sticky-coin">
                        <div id="cart-page-sticky-coin-check">
                            <input type="checkbox" name="" id="" />
                            <ion-icon style="color: rgb(177, 177, 77)" name="logo-bitcoin"></ion-icon>
                            <div>ShopBee Xu</div>
                            <div id="cart-page-sticky-coin-amount-display">Bạn chưa chọn sản phẩm</div>
                        </div>
                        <div id="cart-page-sticky-coin-amount">
                            <span>₫ <span id="cart-page-total-price">0</span></span>
                        </div>
                    </div>
                    <div id="cart-page-sticky-function">
                        <div id="cart-page-sticky-function-check">
                            <input type="checkbox" name="" id="" />
                        </div>
                        <div id="cart-page-sticky-function-selectAll">
                            <div>Chọn Tất Cả (<span>2</span>)</div>
                        </div>
                        <div id="cart-page-sticky-function-del">
                            <div>Xoá</div>
                        </div>
                        <div id="cart-page-sticky-function-delInactive">
                            <div>Bỏ sản phẩm không hoạt động</div>
                        </div>
                        <div id="cart-page-sticky-function-saveToLike">
                            <div style="color: red">Lưu vào mục Yêu thích</div>
                        </div>
                        <div id="cart-page-sticky-function-sumCost">
                            <div>Tổng thanh toán (<span>0</span>)</div>
                        </div>
                        <div id="cart-page-sticky-function-btnBuy">
                            <button id="cart-page-go-buy" form="cart-form-submit" type="submit">Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
