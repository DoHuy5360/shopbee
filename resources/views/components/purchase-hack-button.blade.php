@switch($current_status)
    @case('wait_confirm')
        <button data-status="{{ $current_status }}" data-action="hack_next" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-next-btn" type="button"
            title="The feature helps to simulate the status of the order">Next step</button>
    @break

    @case('refund')
        <button data-status="{{ $current_status }}" data-action="hack_back" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-back-btn" type="button"
            title="The feature helps to simulate the status of the order">Perious step</button>
    @break

    @default
        <button data-status="{{ $current_status }}" data-action="hack_back" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-back-btn" type="button"
            title="The feature helps to simulate the status of the order">Perious step</button>
        <button data-status="{{ $current_status }}" data-action="hack_next" class="profile__process--card-actions-btn profile__process-hack profile__process-hack-next-btn" type="button"
            title="The feature helps to simulate the status of the order">Next step</button>
@endswitch
