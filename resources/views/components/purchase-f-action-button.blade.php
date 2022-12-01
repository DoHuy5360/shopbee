@switch($slot)
    @case('wait_confirm')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Chủ shop đang kiểm tra mặt hàng này, vui lòng chờ." disabled>Chờ</button>
    @break

    @case('wait_get')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Chủ shop đang kiểm tra mặt hàng này, vui lòng chờ." disabled>Chờ</button>
    @break

    @case('delivering')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Chủ shop đang kiểm tra mặt hàng này, vui lòng chờ." disabled>Chờ</button>
    @break

    @case('delivered')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Mua Lại</button>
    @break

    @case('cancel')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Mua Lại</button>
    @break
    @case('refund')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Mua Lại</button>
    @break

    @default
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">---</button>
@endswitch
