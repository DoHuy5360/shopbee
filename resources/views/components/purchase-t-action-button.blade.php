@switch($slot)
    @case('wait_confirm')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Cancel Order</button>
    @break

    @case('wait_get')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Delete Order</button>
    @break

    @case('delivering')
        <button data-status="cancel" data-action="cancel" class="profile__process--card-actions-btn profile__process--cancel-btn" type="button">Delete Order</button>
    @break

    @case('delivered')
        <button class="profile__process--card-actions-btn" type="button">Product Rates</button>
    @break

    @case('cancel')
        <button class="profile__process--card-actions-btn" type="button">Cancellation Order Details</button>
    @break

    @case('refund')
        {{-- <button class="profile__process--card-actions-btn" type="button">Chi Tiết Đơn Hủy</button> --}}
    @break

    @default
        <button class="profile__process--card-actions-btn" type="button">---</button>
@endswitch
