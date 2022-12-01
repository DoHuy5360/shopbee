@switch($slot)
    @case('wait_confirm')
        <div class="profile__process--card-status">CHỜ XÁC NHẬN</div>
    @break
    @case('wait_get')
        <div class="profile__process--card-status">CHỜ LẤY HÀNG</div>
    @break
    @case('delivering')
        <div class="profile__process--card-status">ĐANG VẬN CHUYỂN</div>
    @break
    @case('delivered')
        <div class="profile__process--card-status">CHỜ NHẬN HÀNG</div>
    @break
    @case('cancel')
        <div class="profile__process--card-status">ĐÃ HỦY</div>
    @break
    @case('refund')
        <div class="profile__process--card-status">ĐÃ HOÀN TRẢ</div>
    @break
    @default
        <div class="profile__process--card-status">---</div>
@endswitch
