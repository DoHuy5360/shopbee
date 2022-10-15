<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/new_product_detail/new_product_detail.css') }}">

    <title>Document</title>
</head>

<body>
    <div id="seller_product_detail-wrapper">
        <div id="seller_product_detail-wrapper-detail">
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
                                <input type="file" name="image-cover" id="sellerProduct-add-image-cover" class="sellerProduct__hidden--image-input">
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
                                <button id="sellerProduct__close--model">
                                    <ion-icon name="close-outline"></ion-icon>
                                </button>
                            </div>

                            <input type="file" name="video-cover" id="sellerProduct-add-video-cover" class="sellerProduct__hidden--video-input">
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
                            <input id="seller_product_detail-basicName-input" name="product-name"/>
                            <span id="sellerProduct-product-name-countLenght">0<span>/120</span></span>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicProdDesc">
                        <label class="sellerProduct__title--field-wrap" for="seller_product_detail-basicProdDesc-input">* Mô tả sản phẩm</label>
                        <div id="seller_product_detail-basicProdDesc-inputfield">
                            <textarea type="textarea" name="product-description" id="seller_product_detail-basicProdDesc-input" class="sellerProduct__input--wrap sellerProduct__animate-hover-focus" resize="none" autosize="true" maxlength="Infinity"
                                restrictiontype="input" max="Infinity" min="-Infinity" spellcheck="false"></textarea>
                            <div id="seller_product_detail-basicProdDesc-inputLimit"><span>0</span>/3000</div>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicCategory">
                        <div class="sellerProduct__title--field-wrap">* Ngành hàng</div>
                        <div id="seller_product_detail-basicCategory-content">
                            <div id="seller_product_detail-basicCategory-detail" style="color: #656565">Sắc Đẹp > Nước hoa</div>
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
                        <select name="" id="seller_product_detail-mainInfor-inputfield1" required>
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
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
                        <div class="sellerProduct__title--field-wrap">Trọng lượng</div>
                        <select name="" id="seller_product_detail-mainInfor-inputfield5" required>
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">Tên tổ chức chịu trách nhiệm sản xuất</div>
                        <select name="" id="seller_product_detail-mainInfor-inputfield6" required>
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">Địa chỉ tổ chức chịu trách nhiệm sản xuất</div>
                        <select name="" id="seller_product_detail-mainInfor-inputfield7" required>
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">Thể tích</div>
                        <select name="" id="seller_product_detail-mainInfor-inputfield8" required>
                            <option value="" disabled selected hidden>Vui lòng chọn vào</option>
                            <option value="">test1</option>
                            <option value="">test2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="seller_product_detail-wrapper-sellInfor" class="seller_product_detail_inforWrapper">
                <div id="seller_product_detail-sellInfor-label" class="sellerProduct__title--main">Thông tin bán hàng</div>
                <div id="seller_product_detail-sellInfor-detail">
                    <div id="seller_product_detail-sellInfor-Category">
                        <div class="sellerProduct__title--field-wrap">Phân loại hàng</div>
                        <button id="seller_product_detail-sellInfor-addCategoryBtn">
                            <ion-icon name="add-circle-outline"> </ion-icon>
                            Thêm phân loại hàng
                        </button>
                    </div>
                    <div id="seller_product_detail-sellInfor-price">
                        <div class="sellerProduct__title--field-wrap">* Giá</div>
                        <div id="seller_product_detail-sellInfor-price-inputfield">
                            <div id="seller_product_detail-sellInfor-price-currency">₫</div>
                            <input type="text" name="product-price" id="seller_product_detail-sellInfor-price-input" class="sellerProduct__placeholder--color" min="1000" max="100000000"
                                placeholder="Nhập vào" required />
                        </div>
                    </div>
                    <div id="seller_product_detail-sellInfor-storage">
                        <div class="sellerProduct__title--field-wrap">
                            * Kho hàng
                            <ion-icon name="help-circle-outline"></ion-icon>
                        </div>
                        <div id="seller_product_detail-sellInfor-storage-inputfield">
                            <input type="text" name="" id="seller_product_detail-sellInfor-storage-input" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color"
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
                                <button id="seller_product_detail_sellInfor_voucher_del">
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
                            <input type="text" name="product-weight" id="seller_product_detail-transport-weight-input" placeholder="Nhập vào" />
                            <div class="sellerProduct__unit">gr</div>
                        </div>
                    </div>
                    <div id="seller_product_detail-transport-size">
                        <div class="sellerProduct__title--field-wrap">Kích thước đóng gói (Phí vận chuyển thực tế sẽ thay đổi nếu bạn nhập sai kích thước)</div>
                        <div id="seller_product_detail-transport-size-inputfield">
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input type="text" name="product-size-long" class="seller_product_detail_transport_size_input_block" placeholder="R" />
                                <div class="sellerProduct__unit">cm</div>
                            </div>
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input type="text" name="product-size-width" class="seller_product_detail_transport_size_input_block" placeholder="D" />
                                <div class="sellerProduct__unit">cm</div>
                            </div>
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input type="text" name="product-size-height" class="seller_product_detail_transport_size_input_block" placeholder="C" />
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
                                        <input type="radio" name="product-pre-order" id="seller_product_detail-otherInfor-option-false" value="no" checked/>
                                        <label id="seller_product_detail-otherInfor-option-false-label" for="seller_product_detail-otherInfor-option-false">Không đồng ý</label>
                                    </div>
                                </div>
                                <div class="sellerProduct__accept--wrap">
                                    <div class="sellerProduct__accept--check-wrap" title="Tính năng không khả dụng">
                                        <input type="radio" name="product-pre-order" id="seller_product_detail-otherInfor-option-true" value="yes" style="cursor: not-allowed" disabled />
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
                        <select name="product-status" id="seller_product_detail-otherInfor-condition-option">
                            <option value="new" selected>Mới</option>
                            <option value="old">Đã dùng</option>
                        </select>
                    </div>
                    <div id="seller_product_detail-otherInfor-SKU">
                        <div class="sellerProduct__title--field-wrap">SKU sản phẩm</div>
                        <input type="text" id="seller_product_detail-otherInfor-SKU-detail" placeholder="Mã Stock Keeping Unit" style="cursor: not-allowed;" disabled title="Tính năng không khả dụng"/>
                    </div>
                </div>
            </div>
            <div id="sellerProduct-finishStep-wrap">
                <button id="sellerProduct-finishStep-cancel">Hủy</button>
                <button id="sellerProduct-finishStep-save-hidden">Lưu & ẩn</button>
                <button id="sellerProduct-finishStep-save-display">Lưu & Hiển thị</button>
            </div>
        </div>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    Basic usage
</body>

</html>
<script src="{{ asset('assets/js/new_product_detail/new_product_detail.js') }}"></script>
