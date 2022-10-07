@extends('layouts.skeleton')
@section('title', 'Thêm sản phẩm')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/new_product/new_product.css') }}">
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/js/new_product/new_product.mjs') }}"></script>
@endsection
@section('content')
    <div id="seller-product-wrap">
        <div id="seller-product-wrap-title">
            <div id="seller-product-title-about">Thêm 1 sản phẩm mới</div>
            <div id="seller-product-subTitle">Vui lòng chọn ngành hàng phù hợp cho sản phẩm của bạn.</div>
        </div>
        <div id="seller-product-name">
            <label for="seller-product-name-input-field">Tên sản phẩm: </label>
            <div id="seller-product-name-field">
                <input type="text" id="seller-product-name-input-field" maxlength="120" minlength="10" placeholder="Nhập vào" />
                <div id="seller-product-name-input-numb"><span id="seller-product-input-numb">0</span>/120</div>
            </div>
        </div>
        <div id="seller-product-choice">
            <div id="seller-product-choice-search">
                <div id="seller-product-choice-search-field">
                    <input type="text" id="seller-product-choice-search-input" placeholder="Tên Ngành Hàng" />
                    <ion-icon name="search-outline"></ion-icon>
                </div>
                <div id="typeProduct-describe-wrap">
                    <div id="typeProduct-describe-note">Chọn ngành hàng chính xác?</div>
                    <a href="">Bấm vào đây!</a>
                </div>
            </div>
            <div id="seller-product-choice-option">
                <div id="seller-product-choice-items">
                    <button id="typeProduct__previous--transform">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </button>
                    <div id="typeProduct-columns-wrap">
                        <div class="typeProduct__column" data-level="1"></div>
                        <div class="typeProduct__column" data-level="2"></div>
                        <div class="typeProduct__column" data-level="3"></div>
                        <div class="typeProduct__column" data-level="4"></div>
                        <div class="typeProduct__column" data-level="5"></div>
                    </div>
                    <button id="typeProduct__next--transform">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
        <div id="seller-product-submit">
            <div id="seller-product-submit-items-wrap">
                Đã chọn :
                <div id="seller-product-submit-items"></div>
            </div>
            <button type="submit" id="seller-product-submit-btn" value="">Tiếp theo</button>
        </div>
    </div>
@endsection
