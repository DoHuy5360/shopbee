@extends('layouts.skeleton')
@section('title', 'Thông tin sản phẩm')
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/header/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer/footer-home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/product/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product/product_respon.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/product/product_respon.js') }}"></script>
    <script src="{{ asset('assets/js/product/product.js') }}"></script>
@endsection
@section('content')
    <div id="product-alert-wrap">
        <div id="product-alert-icon">
            <ion-icon name="checkmark-outline"></ion-icon>
        </div>
        <div id="product-alert-mesage">Sản phẩm đã được thêm vào Giỏ hàng</div>
    </div>
    @include('layouts.header-home')
    <form action="{{ route('cart.store') }}" id="theForm" method="POST">
        @csrf
        @auth
            <input name="buyer_code" type="hidden" value="{{ Auth::user()->code }}">
        @endauth
        <input name="product_code" type="hidden" value="{{ $get_pdt->code }}">
    </form>
    <div id="product-page-content">
        <div id="product-body">
            <div class="product_content" id="product-img">
                <div id="product-main-img">
                    <video class="product__media--display" src="{{ asset($get_pdt_vid->path) }}" data-index="0" controls></video>
                    @for ($index = 1; $index < sizeOf($get_pdt_img); $index++)
                        <div class="product__media--display" data-index="{{ $index }}">
                            <img class="product__image--carousel-element" src="{{ asset($get_pdt_img[$index]->path) }}" alt="{{ $get_pdt->name }}">
                        </div>
                    @endfor
                </div>
                <div id="product-image-carousel-wrap">
                    <div id="product__carousel--arrow-previous">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div id="product-carousel-tray">
                        <div class="product__image--carousel-element-wrap" data-index="0">
                            <video class="product__image--carousel-element" src="{{ asset($get_pdt_vid->path) }}"></video>
                        </div>
                        @for ($index = 1; $index < sizeOf($get_pdt_img); $index++)
                            <div class="product__image--carousel-element-wrap" data-index="{{ $index }}">
                                <img class="product__image--carousel-element" src="{{ asset($get_pdt_img[$index]->path) }}" alt="{{ $get_pdt->name }}">
                            </div>
                        @endfor
                    </div>
                    <div id="product__carousel--arrow-next">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
                <div id="product-shareLike">
                    <div id="product-shareLike-item">
                        <span>Chia sẻ:</span>
                        <div id="product-social-wrap">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Facebook_Messenger_logo_2020.svg/2048px-Facebook_Messenger_logo_2020.svg.png" alt=""
                                srcset="" />
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="" srcset="" />
                            <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/11/logo-pinterest-inkythuatso-01-30-09-00-35.jpg" alt="" srcset="" />
                        </div>
                    </div>
                    <div id="product-like-index-wrap">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span>Đã thích</span>
                        <span>(234)</span>
                    </div>
                </div>
            </div>
            <div class="product_content" id="product-about">
                <div id="product-title">
                    <div id="product-title_rating">
                        <p>{{ $get_pdt->name }}</p>
                        <div id="product-title_rate_infor">
                            <div>
                                <p style="color: red; border-bottom: 1px red solid">5.0</p>
                                <div id="product-title_rate-star">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>
                            <div id="product-title_rate_item1">
                                <p style="border-bottom: 1px #000 solid">2,6k</p>
                                <p style="color: gray">Đánh giá</p>
                            </div>
                            <div>
                                <p>7,7k</p>
                                <p style="color: gray">Đã bán</p>
                            </div>
                        </div>
                    </div>
                    <div id="product-title-column">
                        <div class="product_title_column-item" id="product-title-price">
                            <div class="product_title_column-item-infor">₫<span>{{ $get_pdt->price }}</span></div>
                        </div>
                        <div class="product_title_column-item" id="product-title_insurance">
                            <div class="product_title_column_title">Bảo Hiểm</div>
                            <div class="product_title_column-item-infor" id="product-title-columnItem1">Bảo hiểm Thiết bị điện tử</div>
                        </div>
                        <div class="product_title_column-item" id="product-title_transport">
                            <div class="product_title_column_title">Vận Chuyển</div>
                            <div class="product_title_column-item-infor" id="product-title-columnItem2">
                                <div id="product-title-transportItem1">Miễn phí vận chuyển</div>
                                <div id="product-title-transportItem2">
                                    <div id="product-title-transportItem-row1">
                                        Vận Chuyển Tới
                                        <span>HoChiMinh P8, Tân Bình</span>
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                    <div id="product-title-transportItem-row2">
                                        Phí Vận Chuyển
                                        <span><sup>đ</sup>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (isset($get_pdt->classificationone))
                            <div class="product_title_column-item" id="product-title_colour">
                                <div class="product_title_column_title">{{ $get_pdt->classificationone }}</div>
                                <div class="product_title_column-item-infor">
                                    @foreach ($get_classification_one as $cls1)  
                                        <div class="product_title_colour-block">{{ $cls1->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if (isset($get_pdt->classificationtwo))
                            <div class="product_title_column-item" id="product-title_colour">
                                <div class="product_title_column_title">{{ $get_pdt->classificationtwo }}</div>
                                <div id="product-classification2--wrap">
                                    @foreach ($array_classification_two as $array_cls2)
                                        <div class="product_title_column-item-infor">
                                            @foreach ($array_cls2 as $cls2)
                                                <div class="product_title_colour-block">{{ $cls2->name }}</div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="product_title_column-item" id="product-title_quantity">
                            <div class="product_title_column_title">Số Lượng</div>
                            <div class="product-title-column-item-infor" id="product-title-columnItem4">
                                <div id="product-title_quantity-inputfield">
                                    <div id="product-up-down-wrap">
                                        <button id="product-title_quantity-minus">-</button>
                                        <input type="text" aria-valuenow="1" value="1" />
                                        <button id="product-title_quantity-plus">+</button>
                                    </div>
                                    <span><span id="product-storage-number">{{ $get_pdt->storage }}</span> Sản phẩm có sẵn</span>
                                </div>
                            </div>
                        </div>
                        <div class="product_title_column-item" id="product-title_incartBtn">
                            <button type="submit" id="product-title-add2cart">
                                <ion-icon name="cart-outline"></ion-icon>
                                <div>Thêm Vào Giỏ Hàng</div>
                            </button>
                            <a href="/cart" class="no_decoration">
                                <button type="submit" id="product-title-buyNow">Mua Ngay</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-seller-action">
            <div id="product-seller-profile">
                <div id="product-seller-profile-left">
                    <div id="product__seller--avatar">
                        <img src="https://bit.ly/3pbRb8m" alt="" src="" />
                        <span>Yêu Thích</span>
                    </div>
                    <div id="product-seller-info-wrap">
                        <div class="product-seller-info-wrap-name">
                            <div id="product-seller-name">DoHuy5360</div>
                            <div id="product-seller-active">Online 20 năm trước</div>
                        </div>
                        <div id="product-seller-info-wrap-contact">
                            <button id="product-seller-chat-btn" type="button">
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                                <span>Chat Ngay</span>
                            </button>
                            <button id="product-seller-viewShop-btn" type="button">
                                <ion-icon name="storefront-outline"></ion-icon>
                                <span>Xem Shop</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="product-seller-profile-right">
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Đánh giá</div>
                            <div class="product__seller--profile-value">2,9k</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Sản phẩm</div>
                            <div class="product__seller--profile-value">26</div>
                        </div>
                    </div>
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Tỉ Lệ Phản Hồi</div>
                            <div class="product__seller--profile-value">88%</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Thời Gian Phản Hồi</div>
                            <div class="product__seller--profile-value">trong vài giờ</div>
                        </div>
                    </div>
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Tham gia</div>
                            <div class="product__seller--profile-value">7 tháng trước</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Người theo dõi</div>
                            <div class="product__seller--profile-value">1k</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seller-action-rate">
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="product_seller_action" id=""><span class="product_seller_action-number"></span></a>
            </div>
        </div>
        <div id="product-spec_feature" class="product-spec_feature_respon">
            <div id="product-spec_feature-wrapper">
                <button id="product-spec_feature-btn-down" class="product-spec_feature_btn_down">Xem tất cả</button>
                <div id="product-detail">
                    <div class="product-detail-title">CHI TIẾT SẢN PHẨM</div>
                    <div id="product-specifications">
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Danh Mục</div>
                            <div class="">
                                <span><a href="http://" target="_blank" rel="noopener noreferrer">Shopbee</a></span>> <span><a href="http://" target="_blank" rel="noopener noreferrer">Máy Tính &
                                        Laptop</a></span>> <span><a href="http://" target="_blank" rel="noopener noreferrer">Gaming</a></span>> <span><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Bàn Phím Máy Tính</a></span>
                            </div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Thương hiệu</div>
                            <div><a href="http://" target="_blank" rel="noopener noreferrer">LEAVEN裂纹</a></div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Kiểu kết nối</div>
                            <div class="">Có dây</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Bộ sản phẩm</div>
                            <div class="">Không</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Loại bàn phím</div>
                            <div class="">Bàn phím cơ</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Hạn bảo hành</div>
                            <div class="">24 tháng</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Loại bảo hành</div>
                            <div class="">Bảo hành nhà cung cấp</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Game chuyên dụng</div>
                            <div class="">Có</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Model bàn phím & chuột</div>
                            <div class="">K550</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Bàn phím tương thích</div>
                            <div class="">Tương thích với tất cả các hệ thống</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Kích thước (dài x rộng x cao)</div>
                            <div class="">35.5*12.6*4</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Số lượng hàng khuyến mãi</div>
                            <div class="">199279</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Số sản phẩm còn lại</div>
                            <div class="">278500</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Gửi từ</div>
                            <div class="">Hà Nội</div>
                        </div>
                    </div>
                </div>
                <div id="product-feature">
                    <div class="product-detail-title">MÔ TẢ SẢN PHẨm</div>
                    <div id="product-detail-content-description">{{ $get_pdt->description }}</div>
                </div>
                <button class="product-spec_feature_btn_up">
                    <a href="#product-spec_feature" style="color:#ee4d2d;">Thu nhỏ</a>
                </button>
            </div>
        </div>
        <div id="product-rate">
            <div class="product-detail-title">Đánh Giá Sản Phẩm</div>
            <div id="product-rate-star-table">
                <div id="product-rate-star-table-content">
                    <div id="product-rate-star-amount">
                        <div id="product-rate-star-amount-detail">
                            <h3>4.9</h3>
                            <span>trên 5</span>
                        </div>
                        <div id="product-rate-star">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <div id="product-rate-typeOfRate">
                        <div id="product_rate-activeBlock">Tất Cả</div>
                        <div class="product_rate_typeOfRate_block">5 Sao <span>(8.3)</span></div>
                        <div class="product_rate_typeOfRate_block">4 Sao <span>(5)</span></div>
                        <div class="product_rate_typeOfRate_block">3 Sao <span>(8)</span></div>
                        <div class="product_rate_typeOfRate_block">2 Sao <span>(1)</span></div>
                        <div class="product_rate_typeOfRate_block">1 Sao <span>(500)</span></div>
                        <div class="product_rate_typeOfRate_block">Có Bình Luận <span>(1)</span></div>
                        <div class="product_rate_typeOfRate_block">Có Hình Ảnh/ Video <span>(2)</span></div>
                    </div>
                </div>
                <div id="product-list-rate-wrap">
                    <div class="product_rate_comment_section">
                        <div class="product_rate_comment_avat">
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img src="https://cdn.britannica.com/33/233233-050-BD461F52/miniature-pinscher-dog.jpg" alt="" srcset="" />
                            </a>
                        </div>
                        <div class="product_rate_comment_detail">
                            <a href="http://" target="_blank" rel="noopener noreferrer">duypham189</a>
                            <div class="product_rate_comment_rate_star">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div class="product_rate_cmt_date">24/9/2002 | Phân loại hàng: K880---đen và trắng</div>
                            <div class="product_rate_cmt_typeOfProduct">
                                <div><span class="product-rate-cmt-productType">Chất liệu:</span> <span class="product-rate-cmt-productType-aws">n</span></div>
                                <div><span class="product-rate-cmt-productType">Màu sắc: </span> <span class="product-rate-cmt-productType-aws">trắng</span></div>
                                <div><span class="product-rate-cmt-productType">Đúng với mô tả:</span> <span class="product-rate-cmt-productType-aws">đúng</span></div>
                            </div>
                            <div class="product_rate_cmt_customer_aws">Xl vì mình hơi lười chụp ảnh nhưng áo đẹp lắm mn nha vải mềm mịn trắng tinh ko bị dính dơ đc tặng kẹo nữa rất ưng lun</div>
                            <div class="product_rate_cmt_customer_img_vid">
                                <div class="product__rate--img-video">
                                    <img src="https://i.etsystatic.com/28005916/r/il/21f7d3/3282311401/il_1588xN.3282311401_ehwy.jpg" alt="" />
                                </div>
                                <div class="product__rate--img-video">
                                    <img src="https://i.etsystatic.com/28005916/r/il/21f7d3/3282311401/il_1588xN.3282311401_ehwy.jpg" alt="" />
                                </div>
                                <div class="product__rate--img-video">
                                    <img src="https://i.etsystatic.com/28005916/r/il/21f7d3/3282311401/il_1588xN.3282311401_ehwy.jpg" alt="" />
                                </div>
                                <div class="product__rate--img-video">
                                    <img src="https://th.bing.com/th/id/R.9bd00789cbd441f3fb32bdddaca31e65?rik=1zoZcFj7q5LHig&pid=ImgRaw&r=0" alt="" />
                                </div>
                                <div class="product__rate--img-video">
                                    <img src="https://i.etsystatic.com/28005916/r/il/21f7d3/3282311401/il_1588xN.3282311401_ehwy.jpg" alt="" />
                                </div>
                                <div class="product__rate--img-video">
                                    <img src="https://th.bing.com/th/id/R.9bd00789cbd441f3fb32bdddaca31e65?rik=1zoZcFj7q5LHig&pid=ImgRaw&r=0" alt="" />
                                </div>
                            </div>
                            <div class="product_rate_cmt_like_report">
                                <div class="product_rate_cmt_like">
                                    <ion-icon name="thumbs-up-sharp"></ion-icon>
                                    <span>1</span>
                                </div>
                                <label class="product_rate_cmt_report">
                                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                    <input type="checkbox" class="product_rate_cmt_report_btn">
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
