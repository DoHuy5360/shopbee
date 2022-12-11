<link rel="stylesheet" href="{{ asset('assets/css/purchase/purchase_process.css') }}">
<div id="profile-process-wrap">
    <div id="profile-process-bar-wrap">
        <div data-type="all" class="profile__process-navbar-btn active_link">All (<span class="profile__process-order-count">{{ $amount_order['all'] }}</span>)</div>
        <div data-type="wait_confirm" class="profile__process-navbar-btn">Confirming (<span class="profile__process-order-count">{{ $amount_order['wait_confirm'] }}</span>)</div>
        <div data-type="wait_get" class="profile__process-navbar-btn">Shiping (<span class="profile__process-order-count">{{ $amount_order['wait_get'] }}</span>)</div>
        <div data-type="delivering" class="profile__process-navbar-btn">On My Way (<span class="profile__process-order-count">{{ $amount_order['delivering'] }}</span>)</div>
        <div data-type="delivered" class="profile__process-navbar-btn">Completed (<span class="profile__process-order-count">{{ $amount_order['delivered'] }}</span>)</div>
        <div data-type="cancel" class="profile__process-navbar-btn">Cancel (<span class="profile__process-order-count">{{ $amount_order['cancel'] }}</span>)</div>
        <div data-type="refund" class="profile__process-navbar-btn">Refund (<span class="profile__process-order-count">{{ $amount_order['refund'] }}</span>)</div>
    </div>
    <div id="profile-process-search-bar-wrap">
        <ion-icon name="search-outline"></ion-icon>
        <input id="profile-process-search-input" type="text" placeholder="Search by Shop Name, Order ID or Product Name">
    </div>
    <div id="profile-process-list-product-wrap">
        @foreach ($get_bill_pdt as $pdt)
            <div class="profile__process--card-product-wrap">
                <div class="profile__process--card-info">
                    <div class="profile__process--card-product-owner">
                        <div class="profile__process--card-owner-wrap">
                            <ion-icon name="storefront-outline"></ion-icon>
                            <div class="profile__process--shop-name">{{ $pdt->owner_name }}</div>
                            <div class="profile__process--shop-chat-btn">
                                <ion-icon name="chatbox-ellipses-outline"></ion-icon>Chat
                            </div>
                            <div class="profile__process--shop-view-btn">
                                <ion-icon name="eye-outline"></ion-icon>Show Shop
                            </div>
                        </div>
                        <x-purchase-status>{{ $pdt->status }}</x-purchase-status>
                    </div>
                    <div class="profile__process--card-product-info">
                        <img src="{{ asset($pdt->path) }}" alt="" class="profile__process--card-image">
                        <div class="profile__process--card-name-amount">
                            <div class="profile__process--card-name">{{ $pdt->product_name }}</div>
                            <div class="profile__process--card-amount">x{{ $pdt->amount }}</div>
                        </div>
                        <div class="profile__process--card-price">
                            <div class="profile__process--origin-price">
                                <span>đ</span><span>/////////</span>
                            </div>
                            <div class="profile__process--new-price">
                                <span>đ</span><span>{{ $pdt->product_total }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__process--card-actions">
                    <div class="profile__process--card-total-price-wrap">
                        <div class="profile__process--guraranteed">
                            <ion-icon name="shield-checkmark-outline"></ion-icon>
                            <span> Total:</span>
                        </div>
                        <div class="profile__process--total-price">đ<span> {{ $pdt->product_total }}</span></div>
                    </div>
                    <div class="profile__process--actions-wrap">
                        <x-purchase-final-status>{{ $pdt->status }}</x-purchase-final-status>
                        <div class="profile__process--card-actions-wrap">
                            <x-purchase-f-action-button>{{ $pdt->status }}</x-purchase-f-action-button>
                            <button class="profile__process--card-actions-btn" type="button">Seller Contact</button>
                            <x-purchase-t-action-button>{{ $pdt->status }}</x-purchase-t-action-button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('assets/js/purchase/purchase_process_full.js') }}"></script>

