<link rel="stylesheet" href="{{ asset('assets/css/manage_product/manage_product.css') }}">
<input id="seller-allProduct-csrf" type="hidden" name="" value="{{ csrf_token() }}">
<div id="seller-all-product-wrap">
    <div id="seller-all-product-notification" class="seller__allProduct--wrap">
        <img src="{{ asset('assets/img/speaker.png') }}" alt="" />
        <div id="seller-all-product-notification-wrap">
            <div id="seller-all-product-notification-title">
                Công cụ tạo Bảng quy đổi kích cỡ mới
            </div>
            <div id="seller-all-product-notification-desc">
                <span>Shopbee hỗ trợ người bán tính năng mới, giúp thể hiện thông tin về kích thước của
                    các sản phẩm thời trang chuẩn xác hơn đồng thời tăng khả năng hiển thị tìm kiếm
                    sản phẩm. <a href="#">Tìm hiểu thêm</a></span>
                <button type="button">Tạo ngay</button>
            </div>
        </div>
    </div>
    <div id="seller-all-product-search-wrap" class="seller__allProduct--wrap">
        <div id="seller-all-product-search-form">
            <div id="seller-all-product-search-left">
                <div id="seller-all-product-search-attribute">
                    <select name="" id="">
                        <option value="" hidden aria-hidden="true">Tên sản phẩm</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                    <input id="seller-all-product-search-input-attribute" type="text" placeholder="Vui lòng nhập tối thiểu 2 ký tự" />
                </div>
                <div id="seller-all-product-search-storage">
                    <span>Kho hàng</span>
                    <div id="seller-all-product-search-storage-number">
                        <input type="number" name="" id="" placeholder="Tối thiểu" />
                        <span>-</span>
                        <input type="number" name="" id="" placeholder="Tối đa" />
                    </div>
                </div>
            </div>
            <div id="seller-all-product-search-right">
                <div id="seller-all-product-search-category">
                    <span>Ngành hàng</span>
                    <input type="text" />
                </div>
                <div id="seller-all-product-sales">
                    <span>Doanh số</span>
                    <div id="seller-all-product-sales-number">
                        <input type="number" name="" id="" placeholder="Tối thiểu" />
                        <span>-</span>
                        <input type="number" name="" id="" placeholder="Tối đa" />
                    </div>
                </div>
            </div>
        </div>
        <div id="seller-all-product-search-action">
            <button id="seller-all-product-search-search-button" type="button">Tìm</button>
            <button id="seller-all-product-search-clear-button" type="button">Nhập Lại</button>
        </div>
    </div>
    <div id="seller-all-product-manage-wrap" class="seller__allProduct--wrap">
        <div id="seller-all-product-navigation-wrap">
            <div id="seller-all-product-tab-all" class="seller__allProduct--tab active__tab">
                Tất cả
            </div>
            <div id="seller-all-product-tab-active" class="seller__allProduct--tab">
                Đang hoạt động
            </div>
            <div id="seller-all-product-tab-soldOut" class="seller__allProduct--tab">
                Hết hàng <span>0</span>
            </div>
            <div id="seller-all-product-tab-censorship" class="seller__allProduct--tab">
                Chờ duyệt <span>0</span>
            </div>
            <div id="seller-all-product-tab-violation" class="seller__allProduct--tab">
                Vi phạm <span>0</span>
            </div>
            <div id="seller-all-product-tab-hidden" class="seller__allProduct--tab">Đã ẩn <span>0</span></div>
        </div>
        <div id="seller-all-product-list-wrap">
            <div id="seller-all-product-index-header">
                <div id="seller-all-product-amount">
                    <div id="seller-all-product-number"><span>{{ $amont_pdt }}</span> Sản Phẩm</div>
                    <div id="seller-all-product-process-bar" style="--i: {{ ((int) $amont_pdt / 1000) * 100 }}%;">
                        <div id="seller-all-product-process-bar-percent"></div>
                    </div>
                    <div id="seller-all-product-remain">
                        Có thể đăng thêm {{ 1000 - (int) $amont_pdt }} sản phẩm <span><ion-icon name="help-circle-outline"></ion-icon></span>
                    </div>
                </div>
                <div id="seller-all-product-action-field">
                    <a href="#">Tối ưu sản phẩm</a>
                    <a href="{{ route('product.index') }}" id="seller-all-product-add" target="_blank">
                        <ion-icon name="add-outline"></ion-icon>
                        <div>Thêm 1 sản phẩm mới</div>
                    </a>
                    <div id="seller-all-product-multiply-handle">
                        <div>Công cụ xử lý hàng loạt</div>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div id="seller-all-product-view-type">
                        <div id="seller-all-product-view-list" class="active">
                            <ion-icon name="list-outline"></ion-icon>
                        </div>
                        <div id="seller-all-product-view-grid">
                            <ion-icon name="grid-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seller-all-product-table-wrap">
                <div id="seller-all-product-table-header" class="seller__allProduct--table-grid">
                    <div class="seller__allProduct--header-title">
                        <input class="manage__product-check-all" type="checkbox" name="" title="Checking all products" />
                    </div>
                    <div class="seller__allProduct--header-title">Tên sản phẩm</div>
                    <div class="seller__allProduct--header-title">SKU phân loại</div>
                    <div class="seller__allProduct--header-title">Phân loại hàng</div>
                    <div class="seller__allProduct--header-title">Giá</div>
                    <div class="seller__allProduct--header-title">Kho hàng</div>
                    <div class="seller__allProduct--header-title">Doanh số</div>
                    <div class="seller__allProduct--header-title">Thao tác</div>
                </div>
                <div id="seller-all-product-table-body">
                    @foreach ($get_pdt as $item)
                        <div class="seller__allProduct--card seller__allProduct--table-grid">
                            <div class="seller__allProduct--card-checkbox-wrap">
                                <input class="seller__allProduct--card-checkbox" type="checkbox" name="" id="" data-product-code="{{ $item->product_code }}"/>
                            </div>
                            <div class="seller__allProduct--card-info">
                                <img class="seller__allProduct--card-image" src="{{ asset($item->path) }}" alt="" />
                                <div class="seller__allProduct-card-name-wrap">
                                    <div class="seller__allProduct--card-status">Đã ẩn</div>
                                    <div class="seller__allProduct--name">
                                        <a href="{{ route('product.show', $item->product_code) }}" target="_blank">{{ $item->name }}</a>
                                    </div>
                                    <div class="seller__allProduct--card-sku">SKU sản phẩm: <span>{{ $item->sku_code }}</span></div>
                                    <div class="seller__allProduct--interactive-wrap">
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="eye-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="heart-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="seller__allProduct--card-sku-code">{{ $item->sku_code }}</div>
                            <div class="seller__allProduct--card-classification">-</div>
                            <div class="seller__allProduct--card-price">{{ $item->price }}</div>
                            <div class="seller__allProduct--card-storage">{{ $item->storage }}</div>
                            <div class="seller__allProduct--card-sales">{{ $item->sold }}</div>
                            <div class="seller__allProduct--card-action">
                                <a href="{{ route('product.edit', $item->product_code) }}" target="_blank">Cập nhật</a>
                                <a href="#" target="_blank">Sao chép</a>
                                <a href="#" target="_blank">Xem thêm</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="seller-all-product-table-footer">
                    <div id="seller-all-product-tab-index">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                        <span>1</span>
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                    <div id="seller-all-product-amount-tab">
                        <div><span>24</span>/trang</div>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div id="seller-allProduct-delete-card-wrap">
                <div id="seller-allProduct-delete-left-part">
                    <input class="manage__product-check-all" type="checkbox" name="" title="Checking all products">
                    <span>Chọn Tất Cả</span>
                </div>
                <div id="seller-allProduct-delete-right-part">
                    <div><span id="manage__product--amount-card-delete"></span> Sản phẩm được chọn</div>
                    <button id="seller-allProduct-card-delete-btn" type="button">Xóa</button>
                    <button id="seller-allProduct-card-display-btn" type="button" >Hiển Thị</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/manage_product/manage_product.js') }}"></script>