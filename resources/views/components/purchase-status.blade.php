@switch($slot)
    @case('wait_confirm')
        <div class="profile__process--card-status">CHỜ XÁC NHẬN</div>
    @break
    @case('cancel')
        <div class="profile__process--card-status">Đã Hủy</div>
    @break
    @default
        <div class="profile__process--card-status">---</div>
@endswitch
