<link rel="stylesheet" href="{{ asset('assets/css/purchase/purchase_process.css') }}">
<script src="{{ asset('assets/js/profile/purchase_process.js') }}"></script>

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
                        <ion-icon name="eye-outline"></ion-icon>Xem Shop
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
                    <span> Tổng số tiền</span>
                </div>
                <div class="profile__process--total-price">đ<span> {{ $pdt->product_total }}</span></div>
            </div>
            <div class="profile__process--actions-wrap">
                <x-purchase-final-status>{{ $pdt->status }}</x-purchase-final-status>
                <div class="profile__process--card-actions-wrap">
                    <x-purchase-f-action-button>{{ $pdt->status }}</x-purchase-f-action-button>
                    <button class="profile__process--card-actions-btn" type="button">Liên Hệ Người Bán</button>
                    <x-purchase-t-action-button>{{ $pdt->status }}</x-purchase-t-action-button>
                </div>
            </div>
        </div>
    </div>
@endforeach
