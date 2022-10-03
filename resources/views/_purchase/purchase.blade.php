@extends('layouts.skeleton')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/purchase/purchase.css') }}">
@endsection
@section('content')
    <div id="purchase-page-containt">
        <div id="purchage-header-wrap">
            <div id="purchage-header-navbar-wrap">
                <div class="mainHome_navbar_aboutUs">
                    <div class="mainHome_navbar_about_topic">
                        <ul>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <li class="mainHome_navbar-topic">Kênh người bán</li>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div id="purchage-logo-title-wrap">
                <img src="../img/shopbee.png" alt="" />
                <div id="purchage-title">Thanh Toán</div>
            </div>
        </div>
        <div id="purchase-page-wrap">
            <div id="purchase-page-address">
                <div id="purchage-letter-img"></div>
                <div id="purchase-page-address-title">
                    <ion-icon name="location"></ion-icon>
                    <div>Địa Chỉ Nhận Hàng</div>
                </div>
                <div id="purchase-page-customerInfor">
                    <div id="purchase-page-infor">
                        <span>pham duy (+84)</span>
                        <span>0900008</span>
                    </div>
                    <div id="purchase-page-address-detail">
                        <div>84 An Khánh Châu Thành, Ấp 4, Xã An Khánh, Huyện Châu Thành, Bến Tre</div>
                    </div>
                    <div id="purchage-address-default">
                        <abbr title="Sản phẩm sẽ được giao đến địa chỉ này">Mặc định</abbr>
                    </div>
                    <div id="purchase-page-customInfor">
                        <input type="button" value="thay đổi" />
                    </div>
                </div>
            </div>
            <div id="purchase-page-productReview">
                <div id="purchase-page-productSight">
                    <div class="purchage__product--info-wrap">
                        <div id="purchase-page-prodcuctTilte">
                            <div class="purchase_page_product_name">
                                <div>Sản Phẩm</div>
                            </div>
                            <div class="purchase_page_product_about add__color--gray"></div>
                            <div class="purchase_page_product_price add__color--gray">
                                <div>Đơn Giá</div>
                            </div>
                            <div class="purchase_page_product_quantity add__color--gray">
                                <div>Số Lượng</div>
                            </div>
                            <div class="purchase_page_product_priceSum add__color--gray">
                                <div>Thành Tiền</div>
                            </div>
                        </div>
                        <div class="purchase_page_productCompany_chat">
                            <div class="purchase_page_productView_company">
                                <div>Công ty trách nhiệm hữu hạn vài thành viên</div>
                                <div class="purchase_page_message" style="color: red; font-size: 1.2rem">
                                    <ion-icon name="chatbox-ellipses"></ion-icon>
                                    <div>Chat ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="purchase_page_productView_detail">
                            <div class="purchase_page_product_name">
                                <div class="purchase_page_product_name_detail">
                                    <img class="purchase_page_product_name_img" src="https://i.dailymail.co.uk/1s/2020/01/21/22/23701324-7913735-image-a-19_1579646579999.jpg" alt=""
                                        srcset="" />
                                </div>
                                <div class="purchase_page_product_name_title">100% Thảo Dược Từ Mỹ. Được Bộ Y Tế Chứng Nhận. Tư Vấn Bệnh Và Giao Thuốc Miễn Phí. Thảo Dược Tiêu Chuẩn Mỹ 100% Thảo Dược Từ
                                    Mỹ. Được Bộ Y Tế Chứng Nhận. Tư Vấn Bệnh Và Giao Thuốc Miễn Phí. Thảo Dược Tiêu Chuẩn Mỹ 100% Thảo Dược Từ Mỹ. Được Bộ Y Tế Chứng Nhận. Tư Vấn Bệnh Và Giao Thuốc Miễn
                                    Phí. Thảo Dược Tiêu Chuẩn Mỹ</div>
                            </div>
                            <div class="purchase_page_product_about">Loại: Hoa cúc trắng + Hộp</div>
                            <div class="purchase_page_product_price">
                                <div>₫18.500</div>
                            </div>
                            <div class="purchase_page_product_quantity">
                                <div>1</div>
                            </div>
                            <div class="purchase_page_product_priceSum">
                                <div>₫18.500</div>
                            </div>
                        </div>
                    </div>
                    <div class="purchase_page_product_otherFunction">
                        <div class="purchase_page_product_chatFunct">
                            <label for="purchase_page_sellerChat">Lời nhắn: </label>
                            <input class="purchase_page_product_chatInput" type="text" name="purchase_page_sellerChat" placeholder="Lưu ý cho người bán..." />
                        </div>
                        <div class="purchase_page_product_transportFunct">
                            <div class="purchase_page_product_transTitle">Đơn vị vận chuyển:</div>
                            <div class="purchase_page_product_transDetail">
                                <div class="purchage__trans--property">Nhanh</div>
                                <div class="purchage__trans--property">Nhận hàng vào 5 Th10</div>
                                <div class="purchage__trans--property ws-nowrap">(Nhanh tay vào ngay "Shopee Voucher" để săn mã Miễn phí vận chuyển nhé!)</div>
                            </div>
                            <div class="purchase_page_product_transChange">THAY ĐỔI</div>
                            <div class="purchase_page_product_transPrice">₫22.200</div>
                        </div>
                    </div>
                    <div class="purchase_page_product_sumPrice">
                        <div class="purchase_page_product_sumDetail">
                            <span> Tổng số tiền (1 sản phẩm): </span>
                            <span>₫40.700</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="purchase-page-shop-voucherAndCoin">
                <div id="purchase-page-shop-voucher">
                    <div id="purchase-page-shop-voucher-title">
                        <ion-icon name="ticket"></ion-icon>
                        <div>ShopBee Voucher</div>
                    </div>
                    <div id="purchase-page-shop-voucher-select">chọn voucher</div>
                </div>
                <div id="purchase-page-shop-coin">
                    <div id="purchage-page-shop-coin-wrap">
                        <ion-icon name="logo-bitcoin"></ion-icon>
                        <div>ShopBee Xu</div>
                        <div id="purchage-coin-current">Dùng 8000300 ShopBee xu</div>
                    </div>
                    <div id="purchage-coin-shop-accept">
                        <span>[ -₫8000300 ]</span>
                        <input type="checkbox" name="" id="" />
                    </div>
                </div>
            </div>
            <div id="purchase-page-payment-wrap">
                <div id="purchase-page-payment-method">
                    <div id="purchase-page-payment-method-title">Phương thức thanh toán <span class="required__star--red">*</span></div>
                    <div id="purchase-page-payment-method-about">
                        <div class="purchage__checkout--method-wrap">
                            <label class="de" for="purchase-page-payment-shopbeePay">
                                <input class="purchage__check--method" type="radio" name="checkout-type" id="purchase-page-payment-shopbeePay" value="ví shopbeePay" />
                                <span>ví shopbeePay</span>
                            </label>
                        </div>
                        <div class="purchage__checkout--method-wrap">
                            <label for="purchase-page-payment-debit">
                                <input class="purchage__check--method" type="radio" name="checkout-type" id="purchase-page-payment-debit" value="credit/ debit card" />
                                <span>credit/ debit card</span>
                            </label>
                        </div>
                        <div class="purchage__checkout--method-wrap">
                            <label for="purchase-page-payment-byhand">
                                <input class="purchage__check--method" type="radio" name="checkout-type" id="purchase-page-payment-byhand" value="thanh toán khi nhận hàng" />
                                <span>thanh toán khi nhận hàng</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="purchase-page-payment-sumbit-wrap">
                    <div id="purchase-page-payment-sumbit-containt">
                        <div id="purchase-page-payment-sumbitProducTitle">Tổng tiền hàng</div>
                        <div id="purchase-page-payment-sumbitTrans">₫ <span> 1.022.500 </span></div>
                        <div id="purchase-page-payment-sumbitProduct">Phí vận chuyển</div>
                        <div id="purchase-page-payment-sumbitSumTitle">₫ <span> 1.022.500 </span></div>
                        <div id="purchase-page-payment-sumbitTransTitle">Tổng thanh toán:</div>
                        <div id="purchase-page-payment-sumbitSum">₫ <span> 1.022.500.000 </span></div>
                    </div>
                </div>
                <div id="purchase-page-payment-sumbitBtn">
                    <div id="purchage-page-warn-policy">
                        <span>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo </span>
                        <a href="">Điều khoản Shopbee</a>
                    </div>
                    <button id="purchase-page-payment-sumbitButton" type="submit">Đặt Hàng</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection