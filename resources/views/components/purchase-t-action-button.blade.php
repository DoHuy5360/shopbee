@switch($slot)
    @case('wait_confirm')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Hủy Đơn Hàng</button>
    @break

    @case('wait_get')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Hủy Đơn Hàng</button>
    @break

    @case('delivering')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Hủy Đơn Hàng</button>
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
