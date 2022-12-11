@switch($slot)
    @case('wait_confirm')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Shop owner is checking this item, please wait." disabled>Waiting</button>
    @break

    @case('wait_get')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Shop owner is checking this item, please wait." disabled>Waiting</button>
    @break

    @case('delivering')
        <button class="profile__process--card-actions-btn profile__process-wait-btn" type="button" title="Shop owner is checking this item, please wait." disabled>Waiting</button>
    @break

    @case('delivered')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Re-sell</button>
    @break

    @case('cancel')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Re-sell</button>
    @break
    @case('refund')
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">Re-sell</button>
    @break

    @default
        <button class="profile__process--card-actions-btn profile__process-buy-again-btn" type="button">---</button>
@endswitch
