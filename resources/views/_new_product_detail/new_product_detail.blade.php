@extends('layouts.skeleton')
@section('title', 'Product Detail')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new_product_detail/new_product_detail.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/new_product_detail/new_product_detail.js') }}"></script>
@endsection
@section('content')
    <div id="seller_product_detail-wrapper">
        <form action="{{ route('product.store') }}" id="seller_product_detail-wrapper-detail" target="_blank" method="POST" enctype="multipart/form-data">
            @csrf
            <input id="sellerProduct-classification1-post-field" type="hidden" name="classification1_values">
            <input id="sellerProduct-classification2-post-field" type="hidden" name="classification2_values">
            <div id="seller_product_detail-basicInfor" class="seller_product_detail_inforWrapper">
                <div id="seller_product_detail-basicInfor-label" class="sellerProduct__title--main">Thông tin cơ bản</div>
                <div id="seller_product_detail-basicInfor-detail">
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicImg">
                        <div class="sellerProduct__title--field-wrap">* Hình ảnh sản phẩm</div>
                        <div id="seller_product_detail-basicImg-item">
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" id="seller_product_detail-basicImg-containt-cover" for="sellerProduct-add-image-cover">
                                    <ion-icon name="add-circle-outline"> </ion-icon>
                                </label>
                                <span class="sellerProduct__image--number cover">* Ảnh bìa</span>
                                <input type="file" name="image-0" id="sellerProduct-add-image-cover" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-1">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 1</span>
                                <input type="file" name="image-1" id="sellerProduct-add-image-1" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-2">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 2</span>
                                <input type="file" name="image-2" id="sellerProduct-add-image-2" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-3">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 3</span>
                                <input type="file" name="image-3" id="sellerProduct-add-image-3" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-4">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 4</span>
                                <input type="file" name="image-4" id="sellerProduct-add-image-4" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-5">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 5</span>
                                <input type="file" name="image-5" id="sellerProduct-add-image-5" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-6">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 6</span>
                                <input type="file" name="image-6" id="sellerProduct-add-image-6" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-7">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 7</span>
                                <input type="file" name="image-7" id="sellerProduct-add-image-7" class="sellerProduct__hidden--image-input">
                            </div>
                            <div class="sellerProduct__image--add-wrap">
                                <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-8">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </label>
                                <span class="sellerProduct__image--number">Hình ảnh 8</span>
                                <input type="file" name="image-8" id="sellerProduct-add-image-8" class="sellerProduct__hidden--image-input">
                            </div>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicVid">
                        <div class="sellerProduct__title--field-wrap">Video sản phẩm</div>
                        <div class="sellerProduct__image--add-wrap">
                            <label for="sellerProduct-add-video-cover" id="seller_product_detail-basicVid-item">
                                <ion-icon name="add-circle-outline"> </ion-icon>
                            </label>
                            <span class="sellerProduct__image--number cover">Video bìa</span>
                            <div id="sellerProduct-video-view">Xem
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                            <div id="sellerProduct-video-dialog">
                                <video id="sellerProduct-video-contain" controls></video>
                                <button id="sellerProduct__close--model" type="button">
                                    <ion-icon name="close-outline"></ion-icon>
                                </button>
                            </div>

                            <input type="file" name="product_video" id="sellerProduct-add-video-cover" class="sellerProduct__hidden--video-input">
                        </div>
                        <div id="sellerProduct-required-video">
                            <p>1. Kích thước: Tối đa 30Mb, độ phân giải không vượt quá 1280x1280px</p>
                            <p>2. Độ dài: 10s-60s</p>
                            <p>3. Định dạng: MP4 (không hỗ trợ vp9)</p>
                            <p>4. Lưu ý: sản phẩm có thể hiển thị trong khi video đang được xử lý. Video sẽ tự động hiển thị sau khi đã xử lý thành công.</p>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicName">
                        <label class="sellerProduct__title--field-wrap" for="seller_product_detail-basicName-input">* Tên sản phẩm</label>
                        <div id="seller_product_detail-basicName-inputfield" class="sellerProduct__input--wrap">
                            <input id="seller_product_detail-basicName-input" name="product_name" value="{{ $product_name }}" type="text" />
                            <span id="sellerProduct-product-name-countLenght">0<span>/120</span></span>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicProdDesc">
                        <label class="sellerProduct__title--field-wrap" for="seller_product_detail-basicProdDesc-input">* Mô tả sản phẩm</label>
                        <div id="seller_product_detail-basicProdDesc-inputfield">
                            <textarea type="textarea" name="product_description" id="seller_product_detail-basicProdDesc-input" class="sellerProduct__input--wrap sellerProduct__animate-hover-focus" resize="none"
                                autosize="true" maxlength="Infinity" restrictiontype="input" max="Infinity" min="-Infinity" spellcheck="false"></textarea>
                            <div id="seller_product_detail-basicProdDesc-inputLimit"><span>0</span>/3000</div>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicCategory">
                        <div class="sellerProduct__title--field-wrap">* Ngành hàng</div>
                        <div id="seller_product_detail-basicCategory-content">
                            <div id="seller_product_detail-basicCategory-detail" style="color: #656565">
                                <input name="product_category" type="hidden" value="{{ implode(',', $category_array) }}">
                                @foreach ($category_array as $category)
                                    <span class="sellerProduct__category--element">{{ $category }}</span>
                                @endforeach
                            </div>
                            <div id="">
                                <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <ion-icon name="pencil-outline" style="color: #656565"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seller_product_detail-wrapper-mainInfor" class="seller_product_detail_inforWrapper">
                <div id="seller_product_detail-mainInfor-label" class="sellerProduct__title--main">Thông tin chi tiết</div>
                <div id="seller_product_detail-mainInfor-sublabel">
                    Hoàn thành: <span>0</span>/8 <span>Điền thông tin thuộc tính để tăng mức độ hiển thị cho sản phẩm <a href="">Xem hướng dẫn bổ sung thuộc tính</a>.</span>
                </div>
                <div id="seller_product_detail-mainInfor-inputfield">
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">* Thương hiệu</div>
                        <select name="product_brand" title="Brand">
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="Gu chì">Gu chì</option>
                            <option value="A đi đát">A đi đát</option>
                            <option value="Ô mô">Ô mô</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">* Xuất xứ</div>
                        <select name="product_origin" title="Origin">
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="Việt Nam">Việt Nam</option>
                            <option value="Trung Quốc">Trung Quốc</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">Tên tổ chức chịu trách nhiệm sản xuất</div>
                        <select name="" title="Responsible Organization">
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">Trọng lượng</div>
                        <select name="product_weight" id="seller_product_detail-mainInfor-inputfield5" title="Height">
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="1 kg">1kg</option>
                            <option value="10 kg">10kg</option>
                        </select>
                    </div>
                    @foreach ($category_array as $category)
                        @if (in_array($category, ['Thời Trang Nữ']) !== null)
                            <div class="seller_product_detail_mainInfor_inputfield">
                                <div class="sellerProduct__title--field-wrap">Ngày hết hạn</div>
                                <input type="date" id="seller_product_detail-mainInfor-inputfield2" />
                            </div>
                            <div class="seller_product_detail_mainInfor_inputfield">
                                <div class="sellerProduct__title--field-wrap">Thành phần</div>
                                <input type="text" id="seller_product_detail-mainInfor-inputfield3" placeholder="Vui lòng điền vào" />
                            </div>
                            <div class="seller_product_detail_mainInfor_inputfield">
                                <div class="sellerProduct__title--field-wrap">Số lô sản xuất</div>
                                <input type="text" id="seller_product_detail-mainInfor-inputfield4" placeholder="Vui lòng điền vào" />
                            </div>
                            <div class="seller_product_detail_mainInfor_inputfield">
                                <div class="sellerProduct__title--field-wrap">Thể tích</div>
                                <select name="" id="seller_product_detail-mainInfor-inputfield8" title="Volume">
                                    <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                                    <option value="">test1</option>
                                    <option value="">test2</option>
                                </select>
                            </div>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        <div id="seller_product_detail-wrapper-sellInfor" class="seller_product_detail_inforWrapper">
            <div id="seller_product_detail-sellInfor-label" class="sellerProduct__title--main">
                Thông tin bán hàng
            </div>
            <div id="seller_product_detail-sellInfor-detail">
                <div class="seller_product_detail-sellInfor-Category">
                    <div class="sellerProduct__title--field-wrap">Phân loại hàng</div>
                    <button id="seller_product_detail-sellInfor-addCategoryBtn" type="button">
                        <ion-icon name="add-circle-outline"> </ion-icon>Thêm phân loại hàng
                    </button>
                </div>
                <div id="seller-product-classification-type1" class="seller_product_detail-sellInfor-Category">
                    <div class="sellerProduct__title--field-wrap">Nhóm phân loại 1</div>
                    <div class="sellerProduct__choose--classification-wrap">
                        <div class="sellerProduct__choose--classification-input">
                            <div class="sellerProduct__choose--classification-field">
                                <label for="">Tên nhóm phân loại</label>
                                <input name="classification1_title" class="sellerProduct__classification--title sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                    placeholder="Nhập tên nhóm loại hàng, ví dụ: màu sắc, kích thước,..." />
                            </div>
                            <div class="sellerProduct__choose--classification-field">
                                <label for="">Phân loại hàng</label>
                                <div class="sellerProduct__classification--add-wrap classification1--btn-remove">
                                    <div class="sellerProduct__classification--inp-wrap">
                                        <input class="sellerProduct__classification--ver sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                            placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." />
                                        <div class="sellerProduct__classification--btn-remove">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sellerProduct__choose--classification-field">
                            <span></span>
                            <button class="seller_product_detail-sellInfor-classification" type="button">
                                <ion-icon name="add-circle-outline"> </ion-icon>
                                Đã thêm
                            </button>
                        </div>
                    </div>
                </div>
                <div id="seller-product-classification-type2" class="seller_product_detail-sellInfor-Category">
                    <div class="sellerProduct__title--field-wrap">Nhóm phân loại 2</div>
                    <button id="seller_product_detail-sellInfor-addCategoryBtn-classification2" type="button">
                        <ion-icon name="add-circle-outline"> </ion-icon>Thêm
                    </button>
                    <div id="seller-product-classification2-wrap" class="sellerProduct__choose--classification-wrap">
                        <div class="sellerProduct__choose--classification-input">
                            <div class="sellerProduct__choose--classification-field">
                                <label for="">Tên nhóm phân loại</label>
                                <input name="classification2_title" class="sellerProduct__classification--title sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                    placeholder="Nhập tên nhóm loại hàng, ví dụ: màu sắc, kích thước,..." />
                            </div>
                            <div class="sellerProduct__choose--classification-field">
                                <label for="">Phân loại hàng</label>
                                <div class="sellerProduct__classification--add-wrap classification2--btn-remove">
                                    <div class="sellerProduct__classification--inp-wrap">
                                        <input class="sellerProduct__classification--ver sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                            placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." />
                                        <div class="sellerProduct__classification--btn-remove">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sellerProduct__choose--classification-field">
                            <span></span>
                            <button class="seller_product_detail-sellInfor-classification" type="button">
                                <ion-icon name="add-circle-outline"> </ion-icon>
                                Đã thêm
                            </button>
                        </div>
                    </div>
                </div>
                <div class="seller_product_detail-sellInfor-Category">
                    <div class="sellerProduct__title--field-wrap">Mẹo thiết lập phân loại hàng</div>
                    <div id="seller-product-classification-tip-wrap">
                        <div id="seller-product-classification-tip-field">
                            <input class="sellerProduct__tip-setup sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Giá" />
                            <input class="sellerProduct__tip-setup sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Kho hàng" />
                            <input class="sellerProduct__tip-setup sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="SKU phân loại" />
                        </div>
                        <button id="sellerProduct-classification-code-apply" type="button" disabled style="cursor:not-allowed;" title="Chức năng đang được phát triển">
                            Áp dụng cho tất cả phân loại
                        </button>
                    </div>
                </div>
                <div class="seller_product_detail-sellInfor-Category">
                    <div class="sellerProduct__title--field-wrap">Mẹo thiết lập phân loại hàng</div>
                    <div id="productDetail-classification-wrap">
                        <table id="produtDetail-classification-table-head" border="0" cellspacing="0">
                            <tr>
                                <th class="produtDetail__classification-column">Nhóm phân loại 1</th>
                                <th class="produtDetail__classification-column">Nhóm phân loại 2</th>
                                <th>Giá</th>
                                <th>Kho hàng</th>
                                <th>SKU phân loại</th>
                            </tr>
                        </table>
                        <div id="sellerProduct-classificatiom--item-wrap"></div>
                    </div>
                </div>
                <!-- !---------------------------------------- -->
                <div id="seller_product_detail-sellInfor-price">
                    <div class="sellerProduct__title--field-wrap">* Giá</div>
                    <div id="seller_product_detail-sellInfor-price-inputfield">
                        <div id="seller_product_detail-sellInfor-price-currency">₫</div>
                        <input type="text" name="product_price" id="seller_product_detail-sellInfor-price-input" class="sellerProduct__placeholder--color" min="1000" max="100000000"
                            placeholder="Nhập vào" required value="{{ $random->product_price }}" />
                    </div>
                </div>
                <div id="seller_product_detail-sellInfor-storage">
                    <div class="sellerProduct__title--field-wrap">
                        * Kho hàng
                        <ion-icon name="help-circle-outline"></ion-icon>
                    </div>
                    <div id="seller_product_detail-sellInfor-storage-inputfield">
                        <input type="text" name="product_storage" id="seller_product_detail-sellInfor-storage-input" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color"
                            placeholder="Nhập vào" />
                        <div class="sellerProduct__alert--no-empty">Không được để trống ô</div>
                    </div>
                </div>
            </div>
            <div id="seller_product_detail-sellInfor-voucher">
                <div class="sellerProduct__title--field-wrap">Mua nhiều giảm giá</div>
                <button id="seller_product_detail-sellInfor-buyMoreBtn" type="button" style="cursor: not-allowed" title="Tính năng không khả dụng" disabled>
                    <ion-icon name="add-circle-outline"> </ion-icon>
                    Thêm khoảng giá
                </button>
                <div id="seller_product_detail-sellInfor-voucher-inputfield">
                    <div class="seller_product_detail_sellInfor_voucher_inputfield_wrap" id="seller_product_detail-sellInfor-voucher-inputfield-title">
                        <div class="seller_product_detail_sellInfor_voucher_inputfield_label"></div>
                        <div class="seller_product_detail_sellInfor_voucher_input">Từ (sản phẩm)</div>
                        <div class="seller_product_detail_sellInfor_voucher_input">Đến (sản phẩm)</div>
                        <div class="seller_product_detail_sellInfor_voucher_input">Đơn Giá</div>
                        <div class="seller_product_detail_sellInfor_voucher_inputfield_label"></div>
                    </div>
                    <div id="sellerProduct-rangePrice-wrap">
                        <div class="seller_product_detail_sellInfor_voucher_inputfield_wrap" id="seller_product_detail-sellInfor-voucher-inputfield-1">
                            <div class="seller_product_detail_sellInfor_voucher_inputfield_label"><span>1</span>. Khoảng giá <span>1</span></div>
                            <div class="seller_product_detail_sellInfor_voucher_input">
                                <input type="text" name="" class="sellerProduct__input--wrap" id="seller_product_detail-sellInfor-voucher-input1" placeholder="Nhập vào" />
                            </div>
                            <div class="seller_product_detail_sellInfor_voucher_input">
                                <input type="text" name="" class="sellerProduct__input--wrap" id="seller_product_detail-sellInfor-voucher-input2" placeholder="Nhập vào" />
                            </div>
                            <div class="seller_product_detail_sellInfor_voucher_input">
                                <input type="text" name="" class="sellerProduct__input--wrap" id="seller_product_detail-sellInfor-voucher-input3" placeholder="Nhập vào" />
                            </div>
                            <button id="seller_product_detail_sellInfor_voucher_del" type="button">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div id="seller_product_detail-sellInfor-buyMore-addMore-wrap">
                        <button id="seller_product_detail-sellInfor-buyMoreBtn-addMore">
                            <ion-icon name="add-circle-outline"> </ion-icon>
                            Thêm khoảng giá
                        </button>
                        <div id="seller_product_detail-sellInfor-buyMore-notification">Mua nhiều giảm giá sẽ bị ẩn khi sản phẩm đang tham gia Mua Kèm Deal Sốc hay Combo Khuyến Mãi</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="seller_product_detail-wrapper-transport" class="seller_product_detail_inforWrapper">
            <div id="seller_product_detail-transport-label" class="sellerProduct__title--main">Vận chuyển</div>
            <div id="seller_product_detail-transport-detail">
                <div id="seller_product_detail-transport-weight">
                    <div class="sellerProduct__title--field-wrap">* Cân nặng (Sau khi đóng gói)</div>
                    <div id="seller_product_detail-transport-weight-inputfield" class="sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                        <input type="text" name="product_weight_packed" id="seller_product_detail-transport-weight-input" placeholder="Nhập vào" />
                        <div class="sellerProduct__unit">gr</div>
                    </div>
                </div>
                <div id="seller_product_detail-transport-size">
                    <div class="sellerProduct__title--field-wrap">Kích thước đóng gói (Phí vận chuyển thực tế sẽ thay đổi nếu bạn nhập sai kích thước)</div>
                    <div id="seller_product_detail-transport-size-inputfield">
                        <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                            <input type="text" name="product_r_packed" class="seller_product_detail_transport_size_input_block" placeholder="R" />
                            <div class="sellerProduct__unit">cm</div>
                        </div>
                        <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                            <input type="text" name="product_d_packed" class="seller_product_detail_transport_size_input_block" placeholder="D" />
                            <div class="sellerProduct__unit">cm</div>
                        </div>
                        <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                            <input type="text" name="product_c_packed" class="seller_product_detail_transport_size_input_block" placeholder="C" />
                            <div class="sellerProduct__unit">cm</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="seller_product_detail-wrapper-otherInfor" class="seller_product_detail_inforWrapper">
            <div id="seller_product_detail-otherInfor-label" class="sellerProduct__title--main">Thông tin khác</div>
            <div id="seller_product_detail-otherInfor-detail">
                <div id="seller_product_detail-otherInfor-option">
                    <div class="sellerProduct__title--field-wrap">Hàng Đặt Trước</div>
                    <div class="seller_product_detail-otherInfor-option-wrap">
                        <div id="sellerProduct-detail-choice-wrap">
                            <div class="sellerProduct__accept--wrap">
                                <div class="sellerProduct__accept--check-wrap">
                                    <input type="radio" name="product_pre_order" id="seller_product_detail-otherInfor-option-false" value="false" checked />
                                    <label id="seller_product_detail-otherInfor-option-false-label" for="seller_product_detail-otherInfor-option-false">Không đồng ý</label>
                                </div>
                            </div>
                            <div class="sellerProduct__accept--wrap">
                                <div class="sellerProduct__accept--check-wrap" title="Tính năng không khả dụng">
                                    <input type="radio" name="product-pre-order" id="seller_product_detail-otherInfor-option-true" value="true" style="cursor: not-allowed" disabled />
                                    <label id="seller_product_detail-otherInfor-option-true-label" for="seller_product_detail-otherInfor-option-true">Đồng ý</label>
                                </div>
                            </div>
                        </div>
                        <div class="sellerProduct__descript--hidden" id="seller_product_detail-otherInfor-option-false-quote">Tôi sẽ gửi hàng trong 2 ngày (không bao gồm các ngày nghỉ lễ, Tết và
                            những ngày đơn vị vận chuyển không làm việc)</div>
                        <div class="sellerProduct__descript--hidden" id="seller_product_detail-otherInfor-option-true-quote">Tôi cần <input type="text"
                                id="seller_product_detail-otherInfor-option-true-date" class="sellerProduct__animate-hover-focus sellerProduct__input--wrap" min="1" max="15" />
                            thời gian chuẩn bị hàng (tối thiểu: 7 ngày - tối đa: 15 ngày)</div>
                    </div>
                </div>
                <div id="seller_product_detail-otherInfor-condition">
                    <div class="sellerProduct__title--field-wrap">Tình trạng</div>
                    <select name="product_status" id="seller_product_detail-otherInfor-condition-option">
                        <option value="new" selected>Mới</option>
                        <option value="old">Đã dùng</option>
                    </select>
                </div>
                <div id="seller_product_detail-otherInfor-SKU">
                    <div class="sellerProduct__title--field-wrap">SKU sản phẩm</div>
                    <input name="product_sku_code" type="text" id="seller_product_detail-otherInfor-SKU-detail" placeholder="Mã Stock Keeping Unit" title="Tính năng không khả dụng" />
                </div>
            </div>
        </div>
        <div id="sellerProduct-finishStep-wrap">
            <button id="sellerProduct-finishStep-cancel">Hủy</button>
            <button id="sellerProduct-finishStep-save-hidden" type="button">Lưu & ẩn</button>
            <button id="sellerProduct-finishStep-save-display" type="submit">Lưu & Hiển thị</button>
        </div>
    </form>
    <div id="sellerProduct-menu-right-wrap">
        <div id="sellerProduct-nemu-wrap">
            <a href="#seller_product_detail-basicInfor-label"><span class="sellerProduct-nemu-element menu__selected">Thông tin cơ bản</span></a>
            <a href="#seller_product_detail-mainInfor-label"><span class="sellerProduct-nemu-element">Thông tin chi tiết</span></a>
            <a href="#seller_product_detail-sellInfor-label"><span class="sellerProduct-nemu-element">Thông tin bán hàng</span></a>
            <a href="#seller_product_detail-transport-label"><span class="sellerProduct-nemu-element">Vận chuyển</span></a>
            <a href="#seller_product_detail-otherInfor-label"><span class="sellerProduct-nemu-element">Thông tin khác</span></a>
        </div>
    </div>
</div>
@endsection
