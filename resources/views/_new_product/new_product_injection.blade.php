<link rel="stylesheet" href="{{ asset('assets/css/new_product/new_product.css') }}">
<script type="module" src="{{ asset('assets/js/new_product/new_product.js') }}"></script>
<div id="seller-product-wrap">
    <div id="seller-product-wrap-title">
        <div id="seller-product-title-about">Add new products</div>
        <div id="seller-product-subTitle">Choose your bank</div>
    </div>
    <div id="seller-product-name">
        <label for="seller-product-name-input-field">Tên sản phẩm: </label>
        <form action="{{ route('product.create') }}" method="POST" target="_blank" id="seller-product-name-field">
            @csrf
            <input name="product_name" id="seller-product-name-input-field" value="Tàu sân bay nhập khẩu chính hãng" maxlength="120" minlength="10" placeholder="Nhập vào" type="text" />
            <div id="seller-product-name-input-numb"><span id="seller-product-input-numb">0</span>/120</div>
        </form>
    </div>
    <div id="seller-product-choice">
        <div id="seller-product-choice-search">
            <div id="seller-product-choice-search-field">
                <input type="text" id="seller-product-choice-search-input" placeholder="Tên Ngành Hàng" />
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div id="typeProduct-describe-wrap">
                <div id="typeProduct-describe-note">Identify the right account?</div>
                <a href="">Click here!</a>
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
            Previous confirm :
            <div id="seller-product-submit-items"></div>
        </div>
        <button type="button" id="seller-product-submit-btn" form="seller-product-name-field">Next</button>
    </div>
</div>
