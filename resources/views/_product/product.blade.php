@extends('layouts.skeleton')
@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/header/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer/footer-home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/product/product.css') }}">
@endsection
@section('content')
    @include('layouts.header-home')
    <div id="product-page-content">
        <div id="product-body">
            <div class="product_content" id="product-img">
                <div id="product-main-img"><img src="https://cdn.tgdd.vn/Files/2021/11/17/1398649/cach-ve-sinh-ban-phim-co-don-gian-va-hieu-qua-2.jpg" alt="" srcset="" /></div>
                <!-- <div id="product-carousel">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
            <div class="carousel-item active">
             <img class="d-block w-100" src="https://cf.shopee.vn/file/7e23aff96f69cf297f97c7888e921be1" alt="First slide" />
            </div>
            <div class="carousel-item">
             <img class="d-block w-100" src="https://cf.shopee.vn/file/6f9f04d0616a238cc4f07a70aebe3670" alt="Second slide" />
            </div>
            <div class="carousel-item">
             <img class="d-block w-100" src="https://cf.shopee.vn/file/8d9c40d452e0c2763bc92a60037141cb" alt="Third slide" />
            </div>
            <div class="carousel-item">
             <img class="d-block w-100" src="https://cf.shopee.vn/file/eea3317bad9cf6488171c04e2de570b8" alt="Third slide" />
            </div>
           </div>
           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
           </a>
          </div>
         </div> -->
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
                        <p>[Mã ELGAME giảm 7% đơn 150K] bàn phím cơ rgb led K550 LEAVEN Giao hàng 24 giờ 87 phím Bàn phím máy tính</p>
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
                        <div class="product_title_column-item" id="product-title_colour">
                            <div class="product_title_column_title">Màu Sắc</div>
                            <div class="product_title_column-item-infor" id="product-title-columnItem3">
                                <div class="product_title_colour-block">đen</div>
                                <div class="product_title_colour-block">trắng</div>
                                <div class="product_title_colour-block">vàng</div>
                                <div class="product_title_colour-block">xanh dương</div>
                                <div class="product_title_colour-block">hồng</div>
                                <div class="product_title_colour-block">đỏ</div>
                                <div class="product_title_colour-block">xanh lá</div>
                                <div class="product_title_colour-block">cam</div>
                                <div class="product_title_colour-block">vàng</div>
                                <div class="product_title_colour-block">xanh dương</div>
                                <div class="product_title_colour-block">hồng</div>
                                <div class="product_title_colour-block">đỏ</div>
                            </div>
                        </div>
                        <div class="product_title_column-item" id="product-title_quantity">
                            <div class="product_title_column_title">Số Lượng</div>
                            <div class="product-title-column-item-infor" id="product-title-columnItem4">
                                <div id="product-title_quantity-inputfield">
                                    <div id="product-up-down-wrap">
                                        <button id="product-title_quantity-minus">-</button>
                                        <input type="text" aria-valuenow="1" value="1" />
                                        <button id="product-title_quantity-plus">+</button>
                                    </div>
                                    <span>10000 sản phẩm có sẵn</span>
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
        <div id="product-spec_feature">
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
                <div id="product-detail-content-description">Bàn Phím Cơ Gaming K550 Pro / K620 Pro - 87 Phím Nhiều Chế Độ Màu , Chiến Game Siêu Đỉnh ⚡ Bàn phím có 4 màu sắc thời trang và trẻ trung,
                    tuyệt đẹp và Charming. ⚡ 87 phím tiêu chuẩn, ký tự. ⚡ Bàn phím cơ sử dụng Blue switch cho âm thanh gõ sắc nét và có nhịp gõ mạnh mẽ. ⚡ Bàn phím nổi sáu hàng thứ tư phù hợp với quỹ đạo
                    chuyển động của ngón tay, gõ phím thoải mái và không dễ bị mỏi. ⚡ Sản phẩm bàn phím cơ K550 được làm từ NHỰA ABS vật liệu nhựa nhiệt dẻo, thiết kế tinh tế tạo cảm giác thoải mái khi sử
                    dụng, không để lại dấu vân tay trên phím bấm. ⚡ Bố trí 87 phím, nắp phím nổi hình chữ U, gần ngón tay hoàn hảo, cảm giác mượt mà khi sử dụng. ⚡ Thiết kế chống nước và chống bụi, với
                    nhiều lỗ thoát nước ở phía dưới. ---------------------------------------------------------- THÔNG SỐ KỸ THUẬT BÀN PHÍM CƠ K550 - Mẫu: K550 - Màu sắc: đen, trắng, xanh, hồng - Loại
                    keycap: Keycap treo hai màu - Hiệu ứng ánh sáng: Hiệu ứng ánh sáng Charming tuyệt đẹp - Giao diện: cáp USB với hình dạng nhẫn từ tính - Có LED trên mỗi switch , LED nền ,có 10 chế độ
                    LED - Chiều dài dây: 1.8m/5,91ft - Thân Công tắc cơ: Công tắc màu xanh - Độ bền hơn 50 triệu lần bấm - Phím có khả năng chống nước tốt - Sử dụng switch cơ quang học Blue - Sử dụng trục
                    cơ công nghệ mới nhất - hơn 50 triệu lần bấm - Sử dụng bảng mạch điện 2 mặt, hiệu suất ổn định hơn, chất lượng tốt hơn - Sử dụng phím tắt Fn+ SL (hoặc FN + INS) để thay đổi chế độ LED
                    - Khả năng tương thích hệ thống: Dành cho win xp/7/8/10, dành cho mac10.2 trở lên - Kích thước sản phẩm: 360x130x36mm/14.17x5.12x1.42" * ĐẶC ĐIỂM NỔI BẬT BÀN PHÍM CƠ MÁY TÍNH GAMING
                    K550 PRO Bàn phím cơ máy tính gaming có dây K550 full led 7 hiệu ứng, với thiết kế với khuynh hướng Gaming mang lại cảm giác hiện đại và nổi bật. Bàn phím cơ gaming có dây K550 luôn là
                    sản phẩm không nên bỏ qua thuộc phân khúc bàn phím cơ giá rẻ được thiết kế phù hợp với bàn tay người sử dụng hiện nay. * Thiết kế nhỏ gọn - BÀN PHÍM cơ gaming có dây K500 được thiết kế
                    nhỏ gọn đẹp, có các phím chức năng mang đến cho người dùng một công cụ hỗ trợ các thao tác thuận tiện nhất - BÀN PHÍM gồm 87 phím cơ, không lo xung đột phím, kẹt phím, thoải mái bấm
                    các tổ hợp và nhấn các phím cùng lúc * Blue Switch Bàn phím cơ gaming có dây K550 sử dụng Blue switch - loại switch phổ biến trong tầm giá với độ bền cực cao lên đến 50 triệu lần nhấn
                    * Led Rainbow 7 Chế Độ Bàn phím cơ gaming có dây K550 được trang bị dải đèn led với 7 chế độ khác nhau, các màu được bố trí rất thông minh khiến cho chiếc bàn phím có hiệu ứng màu sắc
                    rất đẹp mắt * Các Tính Năng Khác Của BÀN PHÍM CƠ GAMING CÓ DÂY K550K Bàn phím cơ gaming có K550 sử dụng chip mạnh mẽ cho truyền tải nhanh và ổn định Bàn phím cơ gaming có dây K550 có
                    dây cáp được chắc chắn với độ dài giúp cho người dùng có thể thoải mái quấn, gấp mà không gây hư hại cho lõi dây bên trong. Bàn phím sử dụng đầu cắm USB tiện lợi, không gây khó khăn
                    cho người dùng khi tìm ổ cắm thích hợp. ---------------</div>
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
                    <div class="product-rate-comment-section">
                        <div id="product-rate-comment-avat">
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img src="https://cdn.britannica.com/33/233233-050-BD461F52/miniature-pinscher-dog.jpg" alt="" srcset="" />
                            </a>
                        </div>
                        <div id="product-rate-comment-detail">
                            <a href="http://" target="_blank" rel="noopener noreferrer">duypham189</a>
                            <div id="product-rate-comment_rate-star">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div id="product-rate-cmt-date">24/9/2002 | Phân loại hàng: K880---đen và trắng</div>
                            <div id="product-rate-cmt-typeOfProduct">
                                <div><span class="product-rate-cmt-productType">Chất liệu:</span> <span class="product-rate-cmt-productType-aws">n</span></div>
                                <div><span class="product-rate-cmt-productType">Màu sắc: </span> <span class="product-rate-cmt-productType-aws">trắng</span></div>
                                <div><span class="product-rate-cmt-productType">Đúng với mô tả:</span> <span class="product-rate-cmt-productType-aws">đúng</span></div>
                            </div>
                            <div id="product-rate-cmt-customer-aws">Xl vì mình hơi lười chụp ảnh nhưng áo đẹp lắm mn nha vải mềm mịn trắng tinh ko bị dính dơ đc tặng kẹo nữa rất ưng lun</div>
                            <div id="product-rate-cmt-customer-img_vid">
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
                            <div id="product-rate-cmt-like_report">
                                <div id="product-rate-cmt-like">
                                    <ion-icon name="thumbs-up-sharp"></ion-icon>
                                    <span>1</span>
                                </div>
                                <div id="product-rate-cmt-report">
                                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-rate-comment-section">
                        <div id="product-rate-comment-avat">
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img src="https://cdn.britannica.com/33/233233-050-BD461F52/miniature-pinscher-dog.jpg" alt="" srcset="" />
                            </a>
                        </div>
                        <div id="product-rate-comment-detail">
                            <a href="http://" target="_blank" rel="noopener noreferrer">duypham189</a>
                            <div id="product-rate-comment_rate-star">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div id="product-rate-cmt-date">24/9/2002 | Phân loại hàng: K880---đen và trắng</div>
                            <div id="product-rate-cmt-typeOfProduct">
                                <div><span class="product-rate-cmt-productType">Chất liệu:</span> <span class="product-rate-cmt-productType-aws">n</span></div>
                                <div><span class="product-rate-cmt-productType">Màu sắc: </span> <span class="product-rate-cmt-productType-aws">trắng</span></div>
                                <div><span class="product-rate-cmt-productType">Đúng với mô tả:</span> <span class="product-rate-cmt-productType-aws">đúng</span></div>
                            </div>
                            <div id="product-rate-cmt-customer-aws">Xl vì mình hơi lười chụp ảnh nhưng áo đẹp lắm mn nha vải mềm mịn trắng tinh ko bị dính dơ đc tặng kẹo nữa rất ưng lun</div>
                            <div id="product-rate-cmt-customer-img_vid">
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
                            <div id="product-rate-cmt-like_report">
                                <div id="product-rate-cmt-like">
                                    <ion-icon name="thumbs-up-sharp"></ion-icon>
                                    <span>1</span>
                                </div>
                                <div id="product-rate-cmt-report">
                                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-rate-comment-section">
                        <div id="product-rate-comment-avat">
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img src="https://cdn.britannica.com/33/233233-050-BD461F52/miniature-pinscher-dog.jpg" alt="" srcset="" />
                            </a>
                        </div>
                        <div id="product-rate-comment-detail">
                            <a href="http://" target="_blank" rel="noopener noreferrer">duypham189</a>
                            <div id="product-rate-comment_rate-star">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                            <div id="product-rate-cmt-date">24/9/2002 | Phân loại hàng: K880---đen và trắng</div>
                            <div id="product-rate-cmt-typeOfProduct">
                                <div><span class="product-rate-cmt-productType">Chất liệu:</span> <span class="product-rate-cmt-productType-aws">n</span></div>
                                <div><span class="product-rate-cmt-productType">Màu sắc: </span> <span class="product-rate-cmt-productType-aws">trắng</span></div>
                                <div><span class="product-rate-cmt-productType">Đúng với mô tả:</span> <span class="product-rate-cmt-productType-aws">đúng</span></div>
                            </div>
                            <div id="product-rate-cmt-customer-aws">Xl vì mình hơi lười chụp ảnh nhưng áo đẹp lắm mn nha vải mềm mịn trắng tinh ko bị dính dơ đc tặng kẹo nữa rất ưng lun</div>
                            <div id="product-rate-cmt-customer-img_vid">
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
                            <div id="product-rate-cmt-like_report">
                                <div id="product-rate-cmt-like">
                                    <ion-icon name="thumbs-up-sharp"></ion-icon>
                                    <span>1</span>
                                </div>
                                <div id="product-rate-cmt-report">
                                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
