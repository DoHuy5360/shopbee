@extends('layouts.skeleton')
@section('title', 'Thông tin sản phẩm')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product/product_respon.css') }}">
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/js/product/product_respon.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/product/product.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/header/header.js') }}"></script>
@endsection
@section('content')
    <div id="seller-frame-cover-fixed">
        <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
    </div>
    <div id="product-alert-wrap">
        <div id="product-alert-icon">
            <ion-icon name="checkmark-outline"></ion-icon>
        </div>
        <div id="product-alert-mesage">Product successfully stored</div>
    </div>
    @include('layouts.header-home')
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
                        <span>Shared:</span>
                        <div id="product-social-wrap">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Facebook_Messenger_logo_2020.svg/2048px-Facebook_Messenger_logo_2020.svg.png" alt=""
                                srcset="" />
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" alt="" srcset="" />
                            <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/11/logo-pinterest-inkythuatso-01-30-09-00-35.jpg" alt="" srcset="" />
                        </div>
                    </div>
                    <div id="product-like-index-wrap">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span>Like</span>
                        <span>(234)</span>
                    </div>
                </div>
            </div>
            <div class="product_content" id="product-about">
                <div id="product-title">
                    <div id="product-title_rating">
                        <div id="product-title-text">{{ $get_pdt->name }}</div>
                        <div id="product-title_rate_infor">
                            <div id="product-title-rate-star">
                                <div style="color: red; border-bottom: 1px red solid">5.0</div>
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
                                <p style="color: gray">Review</p>
                            </div>
                            <div>
                                <p>7,7k</p>
                                <p style="color: gray">Sold</p>
                            </div>
                        </div>
                    </div>
                    <div id="product-title-column">
                        <div id="product-title-price">
                            <div id="product-title-price-currentcy-wrp"><span>₫</span><span id="product-price">{{ number_format($get_pdt->price, 0, ',', '.') }}</span></div>
                        </div>
                        <div class="product_title_column-item" id="product-title_insurance">
                            <div class="product_title_column_title">Insurance</div>
                            <div class="product_title_column-item-infor" id="product-title-columnItem1">Electronic Device Insurance</div>
                        </div>
                        <div class="product_title_column-item" id="product-title_transport">
                            <div class="product_title_column_title">Transport</div>
                            <div class="product_title_column-item-infor" id="product-title-columnItem2">
                                <div id="product-title-transportItem1">Free delisvery</div>
                                <div id="product-title-transportItem2">
                                    <div id="product-title-transportItem-row1">
                                        destination
                                        @if ($get_user_adres)
                                            <span>{{ $get_user_adres->province }}, {{ $get_user_adres->district }}, {{ $get_user_adres->wards }}</span>
                                        @else
                                            <span>Chưa thiết lập</span>
                                        @endif
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                    <div id="product-title-transportItem-row2">
                                        transport fee
                                        <span><sup>đ</sup>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('cart.store') }}" id="product-form-add-cart" method="POST">
                            @csrf
                            @auth
                                <input name="buyer_code" type="hidden" value="{{ Auth::user()->code }}">
                            @endauth
                            <input name="product_code" type="hidden" value="{{ $get_pdt->code }}">
                            @if (isset($get_pdt->classificationone))
                                <div class="product_title_column-item">
                                    <div class="product_title_column_title">{{ $get_pdt->classificationone }}</div>
                                    <div class="product_title_column-item-infor">
                                        @foreach ($get_classification_one as $cls1)
                                            <label class="product_title_colour-block" for="{{ $cls1->code }}">{{ $cls1->name }}
                                                <input type="radio" name="classify1" id="{{ $cls1->code }}" value="{{ $cls1->code }}">
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if (isset($get_pdt->classificationtwo))
                                <div class="product_title_column-item">
                                    <div class="product_title_column_title">{{ $get_pdt->classificationtwo }}</div>
                                    <div id="product-classification2--wrap">
                                        @foreach ($array_classification_two as $array_cls2)
                                            <div class="product_title_column-item-infor">
                                                @foreach ($array_cls2 as $cls2)
                                                    <label class="product_title_colour-block" for="{{ $cls2->code }}">{{ $cls2->name }}
                                                        <input type="radio" name="classify2" id="{{ $cls2->code }}" value="{{ $cls2->code }}">
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="product_title_column-item" id="product-title_quantity">
                                <div class="product_title_column_title">quantity</div>
                                <div class="product-title-column-item-infor" id="product-title-columnItem4">
                                    <div id="product-title_quantity-inputfield">
                                        <div id="product-up-down-wrap">
                                            <button id="product-title_quantity-minus" type="button">-</button>
                                            <input name="amount_order" id="product-amount-order" type="text" aria-valuenow="1" value="1" type="Amount" />
                                            <button id="product-title_quantity-plus" type="button">+</button>
                                        </div>
                                        <span><span id="product-storage-number">{{ $get_pdt->storage }}</span> pieces available</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product_title_column-item" id="product-title_incartBtn">
                                <button type="submit" id="product-title-add2cart">
                                    <ion-icon name="cart-outline"></ion-icon>
                                    <div>Add to cart</div>
                                </button>
                                <a href="/cart" class="no_decoration">
                                    <button type="submit" id="product-title-buyNow">Buy Now</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-seller-action">
            <div id="product-seller-profile">
                <div id="product-seller-profile-left">
                    <div id="product__seller--avatar">
                        <img src="https://bit.ly/3pbRb8m" alt="" src="" />
                        <span>Perferred</span>
                    </div>
                    <div id="product-seller-info-wrap">
                        <div class="product-seller-info-wrap-name">
                            <div id="product-seller-name">DoHuy5360</div>
                            <div id="product-seller-active">Online 175320 hours</div>
                        </div>
                        <div id="product-seller-info-wrap-contact">
                            <button id="product-seller-chat-btn" type="button">
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                                <span>Chat Now</span>
                            </button>
                            <button id="product-seller-viewShop-btn" type="button">
                                <ion-icon name="storefront-outline"></ion-icon>
                                <span>View Shop</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="product-seller-profile-right">
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Ratings</div>
                            <div class="product__seller--profile-value">Products</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Sản phẩm</div>
                            <div class="product__seller--profile-value">26</div>
                        </div>
                    </div>
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Response Rate</div>
                            <div class="product__seller--profile-value">88%</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Response Time</div>
                            <div class="product__seller--profile-value">within hours</div>
                        </div>
                    </div>
                    <div class="product__seller--profile-index">
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Joined</div>
                            <div class="product__seller--profile-value">2 months ago</div>
                        </div>
                        <div class="product__seller--profile-index-wrap">
                            <div class="product__seller--profile-name">Follower</div>
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
                <button id="product-spec_feature-btn-down" class="product-spec_feature_btn_down">View more</button>
                <div id="product-detail">
                    <div class="product-detail-title">Product Specifications</div>
                    <div id="product-specifications">
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Category</div>
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
                            <div class="product_spec_item_label">Manufacturer (dài x rộng x cao)</div>
                            <div class="">35.5*12.6*4</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Discount Stock</div>
                            <div class="">199279</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Other stocks</div>
                            <div class="">278500</div>
                        </div>
                        <div class="product_spec_item">
                            <div class="product_spec_item_label">Ships From</div>
                            <div class="">Hà Nội</div>
                        </div>
                    </div>
                </div>
                <div id="product-feature">
                    <div class="product-detail-title">Product Description</div>
                    <div id="product-detail-content-description">{{ $get_pdt->description }}</div>
                </div>
                <button class="product-spec_feature_btn_up">
                    <a href="#product-spec_feature" style="color:#ee4d2d;">View less!</a>
                </button>
            </div>
        </div>
        <div id="product-rate">
            <div class="product-detail-title">Product Ratings</div>
            <div id="product-rate-star-table">
                <div id="product-rate-star-table-content">
                    <div id="product-rate-star-amount">
                        <div id="product-rate-star-amount-detail">
                            <h3>4.9</h3>
                            <span>out of 5</span>
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
                        <div id="product_rate-activeBlock">All</div>
                        <div class="product_rate_typeOfRate_block">5 Star <span>(8.3)</span></div>
                        <div class="product_rate_typeOfRate_block">4 Star <span>(5)</span></div>
                        <div class="product_rate_typeOfRate_block">3 Star <span>(8)</span></div>
                        <div class="product_rate_typeOfRate_block">2 Star <span>(1)</span></div>
                        <div class="product_rate_typeOfRate_block">1 Star <span>(500)</span></div>
                        <div class="product_rate_typeOfRate_block">With Comment <span>(1)</span></div>
                        <div class="product_rate_typeOfRate_block">With Video <span>(2)</span></div>
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
