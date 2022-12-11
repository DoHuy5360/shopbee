@switch($slot)
    @case('wait_confirm')
        <div class="profile__process--card-status">waiting for confirm</div>
    @break
    @case('wait_get')
        <div class="profile__process--card-status">waiting for shipping</div>
    @break
    @case('delivering')
        <div class="profile__process--card-status">on my way</div>
    @break
    @case('delivered')
        <div class="profile__process--card-status">waiting for recive</div>
    @break
    @case('cancel')
        <div class="profile__process--card-status">delete</div>
    @break
    @case('refund')
        <div class="profile__process--card-status">refund</div>
    @break
    @default
        <div class="profile__process--card-status">---</div>
@endswitch
