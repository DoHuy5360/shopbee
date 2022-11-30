@switch($slot)
    @case('wait_confirm')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" disabled>Chờ</button>
        @break

    @default
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Mua Lại</button>
@endswitch