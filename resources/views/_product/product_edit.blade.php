@extends('layouts.skeleton')
@section('title', 'Product Detail')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new_product_detail/new_product_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product/product_edit.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/product/product_edit.js') }}"></script>
@endsection
@section('content')
    <div id="seller_product_detail-wrapper">
        <form action="{{ route('product.update', $get_pdt->code) }}" id="seller_product_detail-wrapper-detail" target="_blank" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
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
                                    <img class="sellerProduct__image--display" src="{{ asset($get_pdt_imgs[0]->path) }}" alt="">
                                </label>
                                <span class="sellerProduct__image--number cover">* Ảnh bìa</span>
                                <input type="file" name="image-0" id="sellerProduct-add-image-cover" class="sellerProduct__hidden--image-input" accept=".png,.jpg">
                            </div>
                            @for ($index = 1; $index < 9; $index++)
                                <div class="sellerProduct__image--add-wrap">
                                    <label class="seller_product_detail-basicImg-containt" for="sellerProduct-add-image-{{ $index }}">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                        @if (isset($get_pdt_imgs[$index]->path))
                                            <img class="sellerProduct__image--display" src="{{ asset($get_pdt_imgs[$index]->path) }}" alt="">
                                        @endif
                                    </label>
                                    <span class="sellerProduct__image--number">Hình ảnh {{ $index }}</span>
                                    <input type="file" name="image-{{ $index }}" id="sellerProduct-add-image-{{ $index }}" class="sellerProduct__hidden--image-input">
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicVid">
                        <div class="sellerProduct__title--field-wrap">Video sản phẩm</div>
                        <div class="sellerProduct__image--add-wrap">
                            <label for="sellerProduct-add-video-cover" id="seller_product_detail-basicVid-item">
                                {{-- <ion-icon name="add-circle-outline"> </ion-icon> --}}
                                <canvas id="product-edit-video-origin"></canvas>
                            </label>
                            <span class="sellerProduct__image--number cover">Video bìa</span>
                            <div id="sellerProduct-video-view">Xem
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                            <div id="sellerProduct-video-dialog">
                                <video id="sellerProduct-video-contain" src="{{ asset($get_pdt_video->path) }}" controls></video>
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
                        <div id="seller_product_detail-basicName-inputfield" class="sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                            <input id="seller_product_detail-basicName-input" name="product_name" value="{{ $get_pdt->name }}" type="text" minlength="10" maxlength="120" />
                            <div><span id="sellerProduct-product-name-countLenght">0</span>/120</div>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicProdDesc">
                        <label class="sellerProduct__title--field-wrap" for="seller_product_detail-basicProdDesc-input">* Mô tả sản phẩm</label>
                        <div id="seller_product_detail-basicProdDesc-inputfield">
                            <textarea type="textarea" name="product_description" id="seller_product_detail-basicProdDesc-input" class="sellerProduct__input--wrap sellerProduct__animate-hover-focus" resize="none" autosize="true"
                                restrictiontype="input" minlength="0" maxlength="3000" spellcheck="false">{{ $get_pdt->description }}</textarea>
                            <div id="seller_product_detail-basicProdDesc-inputLimit"><span id="seller-product-detail-desc-length">0</span>/3000</div>
                        </div>
                    </div>
                    <div class="sellerProduct__image--field-wrap" id="seller_product_detail-basicCategory">
                        <div class="sellerProduct__title--field-wrap">* Ngành hàng</div>
                        <div id="seller_product_detail-basicCategory-content">
                            <div id="seller_product_detail-basicCategory-detail" style="color: #656565">
                                <input name="product_category" type="hidden" value="{{ $get_pdt->category }}">
                                @foreach (explode(',', $get_pdt->category) as $category)
                                    <span class="sellerProduct__category--element">{{ $category }}</span>
                                @endforeach
                            </div>
                            <div id="product-edit-change-catygory">
                                <ion-icon name="pencil-outline" style="color: #656565"></ion-icon>
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
                            <option value="{{ $get_pdt->brand }}" selected hidden>{{ $get_pdt->brand }}</option>
                            <option value="Gu chì">Gu chì</option>
                            <option value="A đi đát">A đi đát</option>
                            <option value="Ô mô">Ô mô</option>
                        </select>
                    </div>
                    <div class="seller_product_detail_mainInfor_inputfield">
                        <div class="sellerProduct__title--field-wrap">* Xuất xứ</div>
                        <select name="product_origin" title="Origin">
                            <option value="{{ $get_pdt->origin }}" selected hidden>{{ $get_pdt->origin }}</option>
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
                            <option value="{{ $get_pdt->weight }}" selected hidden>{{ $get_pdt->weight }}</option>
                            <option value="1 kg">1kg</option>
                            <option value="10 kg">10kg</option>
                        </select>
                    </div>
                    {{-- @foreach ($category_array as $category)
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
                @endforeach --}}
                </div>
            </div>
            <div id="seller_product_detail-wrapper-sellInfor" class="seller_product_detail_inforWrapper">
                <div id="seller_product_detail-sellInfor-label" class="sellerProduct__title--main">
                    Thông tin bán hàng
                </div>
                <div id="seller_product_detail-sellInfor-detail">
                    {{-- <div class="seller_product_detail-sellInfor-Category">
                        <div class="sellerProduct__title--field-wrap">Phân loại hàng</div>
                        <button id="seller_product_detail-sellInfor-addCategoryBtn" type="button">
                            <ion-icon name="add-circle-outline"> </ion-icon>Thêm phân loại hàng
                        </button>
                    </div> --}}
                    <div id="seller-product-classification-type1" class="seller_product_detail-sellInfor-Category">
                        <div class="sellerProduct__title--field-wrap">Nhóm phân loại 1</div>
                        <div class="sellerProduct__choose--classification-wrap">
                            <div class="sellerProduct__choose--classification-input">
                                <div class="sellerProduct__choose--classification-field">
                                    <label for="">Tên nhóm phân loại</label>
                                    <input id="seller-product-clsfctn-1" name="classification1_title"
                                        class="sellerProduct__classification--title sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                        placeholder="Nhập tên nhóm loại hàng, ví dụ: màu sắc, kích thước,..." value="{{ $get_pdt->classificationone }}" />
                                </div>
                                <div class="sellerProduct__choose--classification-field">
                                    <label for="">Phân loại hàng</label>
                                    <div class="sellerProduct__classification--add-wrap classification1--btn-remove">
                                        @if ($get_classification_one != null)
                                            @foreach ($get_classification_one as $cls1)
                                                <div class="sellerProduct__classification--inp-wrap">
                                                    <input class="sellerProduct__classification--ver sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                                        placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." value="{{ $cls1->name }}" />
                                                    <div class="sellerProduct__classification--btn-remove">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="sellerProduct__classification--inp-wrap">
                                                <input class="sellerProduct__classification--ver-1 sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                                    placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." />
                                                <div class="sellerProduct__classification--btn-remove">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </div>
                                            </div>
                                        @endif
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
                            <button class="seller__product--close-table-btn" type="button">
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
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
                                    <input id="seller-product-clsfctn-2" name="classification2_title"
                                        class="sellerProduct__classification--title sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                        placeholder="Nhập tên nhóm loại hàng, ví dụ: màu sắc, kích thước,..." value="{{ $get_pdt->classificationtwo }}" />
                                </div>
                                <div class="sellerProduct__choose--classification-field">
                                    <label for="">Phân loại hàng</label>
                                    <div class="sellerProduct__classification--add-wrap classification2--btn-remove">
                                        @if ($get_classification_two != null)
                                            @foreach ($get_classification_two as $cls2)
                                                <div class="sellerProduct__classification--inp-wrap">
                                                    <input class="sellerProduct__classification--ver-2 sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                                        placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." value="{{ $cls2->name }}" />
                                                    <div class="sellerProduct__classification--btn-remove">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="sellerProduct__classification--inp-wrap">
                                                <input class="sellerProduct__classification--ver sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text"
                                                    placeholder="Nhập phân loại hàng, ví dụ: đỏ, đen, L, M, S,..." />
                                                <div class="sellerProduct__classification--btn-remove">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </div>
                                            </div>
                                        @endif
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
                            <button class="seller__product--close-table-btn" type="button">
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div id="seller-product-classification-table-display">
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
                                        <th class="produtDetail__classification-column">{{ $get_pdt->classificationone }}</th>
                                        <th class="produtDetail__classification-column">{{ $get_pdt->classificationtwo }}</th>
                                        <th>Giá</th>
                                        <th>Kho hàng</th>
                                        <th>SKU phân loại</th>
                                    </tr>
                                </table>
                                <div id="sellerProduct-classificatiom--item-wrap">
                                    @foreach ($create_classification_table as $index1 => $cell)
                                        <table border="0" cellspacing="0">
                                            @foreach ($cell->classificationtwos as $index2 => $cls2)
                                                @if ($index2 == 0)
                                                    <tr>
                                                        <th rowspan="{{ sizeOf($get_classification_two) }}">
                                                            <div id="classification1--name-{{ $index1 }}" class="productDetail__classification--name">{{ $cell->name }}</div>
                                                            <img class="productDetail__clss_image" src="http://surl.li/dafng" alt="" />
                                                        </th>
                                                        <th id="classification2--name-{{ $index1 }}-{{ $index2 }}" class="productDetail__classification--name">{{ $cls2->name }}</th>
                                                        <th><input name="classification_price_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"
                                                                value="{{ $cls2->price }}" /></th>
                                                        <th><input name="classification_storage_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" value="{{ $cls2->storage }}" /></th>
                                                        <th><input name="classification_sku_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"
                                                                value="{{ $cls2->sku }}" />
                                                        </th>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <th id="classification2--name-{{ $index1 }}-{{ $index2 }}" class="productDetail__classification--name">{{ $cls2->name }}</th>
                                                        <th><input name="classification_price_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"
                                                                value="{{ $cls2->price }}" /></th>
                                                        <th><input name="classification_storage_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" value="{{ $cls2->storage }}" /></th>
                                                        <th><input name="classification_sku_{{ $index1 }}_{{ $index2 }}"
                                                                class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color" type="text" placeholder="Nhập vào"
                                                                value="{{ $cls2->sku }}" />
                                                        </th>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </table>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- !---------------------------------------- -->
                    <div id="seller_product_detail-sellInfor-price">
                        <div class="sellerProduct__title--field-wrap">* Giá</div>
                        <div id="seller_product_detail-sellInfor-price-inputfield">
                            <div id="seller_product_detail-sellInfor-price-currency">₫</div>
                            <input type="text" name="product_price" id="seller_product_detail-sellInfor-price-input" class="sellerProduct__placeholder--color" minlength="3" maxlength="9"
                                placeholder="Nhập vào" required value="{{ $get_pdt->price }}" />
                        </div>
                    </div>
                    <div id="seller_product_detail-sellInfor-storage">
                        <div class="sellerProduct__title--field-wrap">
                            * Kho hàng
                            <ion-icon name="help-circle-outline"></ion-icon>
                        </div>
                        <div id="seller_product_detail-sellInfor-storage-inputfield">
                            <input type="text" name="product_storage" id="seller_product_detail-sellInfor-storage-input" class="sellerProduct__animate-hover-focus sellerProduct__placeholder--color"
                                minlength="1" maxlength="9" placeholder="Nhập vào" value="{{ $get_pdt->storage }}" />
                            {{-- <div class="sellerProduct__alert--no-empty">Không được để trống ô</div> --}}
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
                            <input type="text" name="product_weight_packed" id="seller_product_detail-transport-weight-input" minlength="1" maxlength="5" placeholder="Nhập vào"
                                value="{{ $get_pdt->weight_packed }}" />
                            <div class="sellerProduct__unit">gr</div>
                        </div>
                    </div>
                    <div id="seller_product_detail-transport-size">
                        <div class="sellerProduct__title--field-wrap">Kích thước đóng gói (Phí vận chuyển thực tế sẽ thay đổi nếu bạn nhập sai kích thước)</div>
                        <div id="seller_product_detail-transport-size-inputfield">
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input id="selle-product-package-r" type="text" name="product_r_packed" class="seller_product_detail_transport_size_input_block" minlength="1" maxlength="3"
                                    placeholder="R" value="{{ $get_pdt->r_packed }}" />
                                <div class="sellerProduct__unit">cm</div>
                            </div>
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input id="selle-product-package-d" type="text" name="product_d_packed" class="seller_product_detail_transport_size_input_block" minlength="1" maxlength="3"
                                    placeholder="D" value="{{ $get_pdt->d_packed }}" />
                                <div class="sellerProduct__unit">cm</div>
                            </div>
                            <div class="seller_product_detail_transport_size_input sellerProduct__input--wrap sellerProduct__animate-hover-focus">
                                <input id="selle-product-package-c" type="text" name="product_c_packed" class="seller_product_detail_transport_size_input_block" minlength="1" maxlength="3"
                                    placeholder="C" value="{{ $get_pdt->c_packed }}" />
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
                            <option value="{{ $get_pdt->status }}" selected>{{ $get_pdt->status }}</option>
                            <option value="Mới">Mới</option>
                            <option value="Đã Dùng">Đã dùng</option>
                        </select>
                    </div>
                    <div id="seller_product_detail-otherInfor-SKU">
                        <div class="sellerProduct__title--field-wrap">SKU sản phẩm</div>
                        <input name="product_sku_code" type="text" id="seller_product_detail-otherInfor-SKU-detail" minlength="10" maxlength="20" placeholder="Mã Stock Keeping Unit"
                            title="Tính năng không khả dụng" value="{{ $get_pdt->sku_code }}" />
                    </div>
                </div>
            </div>
            <div id="sellerProduct-finishStep-wrap">
                <button id="sellerProduct-finishStep-cancel" onclick="javascript:window.close()">Hủy</button>
                <button id="sellerProduct-finishStep-save-hidden" type="button">Lưu & ẩn</button>
                <button id="sellerProduct-finishStep-save-display" type="button">Lưu & Hiển thị</button>
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
