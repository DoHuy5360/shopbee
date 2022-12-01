@switch($current_status)
    @case('wait_confirm')
        <button data-status="{{ $current_status }}" data-action="hack_next" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-next-btn" type="button"
            title="Tính năng giúp giả lập trạng thái của đơn hàng">Chuyển tiếp</button>
    @break

    @case('refund')
        <button data-status="{{ $current_status }}" data-action="hack_back" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-back-btn" type="button"
            title="Tính năng giúp giả lập trạng thái của đơn hàng">Quay lại</button>
    @break

    @default
        <button data-status="{{ $current_status }}" data-action="hack_back" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-back-btn" type="button"
            title="Tính năng giúp giả lập trạng thái của đơn hàng">Quay lại</button>
        <button data-status="{{ $current_status }}" data-action="hack_next" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-next-btn" type="button"
            title="Tính năng giúp giả lập trạng thái của đơn hàng">Chuyển tiếp</button>
@endswitch
