@switch($slot)
    @case('wait_confirm')
        <button class="profile__process--card-actions-btn" type="button">Hủy Đơn Hàng</button>
    @break

    @case('wait_get')
        <button class="profile__process--card-actions-btn" type="button">Hủy Đơn Hàng</button>
    @break

    @case('delivering')
        <button class="profile__process--card-actions-btn" type="button">Hủy Đơn Hàng</button>
    @break

    @case('delivered')
        <button class="profile__process--card-actions-btn" type="button">Đánh Giá Sản Phẩm</button>
    @break

    @case('cancel')
        <button class="profile__process--card-actions-btn" type="button">Chi Tiết Đơn Hủy</button>
    @break

    @case('refund')
        {{-- <button class="profile__process--card-actions-btn" type="button">Chi Tiết Đơn Hủy</button> --}}
    @break

    @default
        <button class="profile__process--card-actions-btn" type="button">---</button>
@endswitch
