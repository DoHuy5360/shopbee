<div id="profile-body-right-wrap">
    <div id="profile-my-profile">
        <div id="profile-my-profile-title">Hồ Sơ Của Tôi</div>
        <span>Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
    </div>
    <form action="./profile.php" id="profile-edit-form" method="post">
        <div id="profile__edit--content-wrap">
            <div id="profile-edit-left-part">
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Tên đăng nhập</div>
                    <div class="profile__edit--field-input">{{ $get_user->name }}</div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Tên</div>
                    <div class="profile__edit--field-input">
                        <input name="user_name" type="text" id="profile-edit-user-name" value="{{ $get_user->name }}" />
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Email</div>
                    <div class="profile__edit--field-input">
                        <span>{{ $get_user->email }}</span>
                        <a href="">Thay Đổi</a>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Số điện thoại</div>
                    <div class="profile__edit--field-input">
                        <span>{{ isset($get_user->phone) ? $get_user->phone : 'Chưa thêm' }}</span>
                        <a href=""> Thay Đổi </a>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Tên Shop</div>
                    <div class="profile__edit--field-input">
                        <input type="text" name="shop_name" id="" value="dohuy5360" />
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Giới tính</div>
                    <div class="profile__edit--field-input">
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-male" value="Nam" />
                            <label for="profile-gender-male">Nam</label>
                        </div>
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-female" value="Nữ" />
                            <label for="profile-gender-female">Nữ</label>
                        </div>
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-other" value="khác" checked />
                            <label for="profile-gender-other">khác</label>
                        </div>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Ngày sinh</div>
                    <div class="profile__edit--field-input">
                        <input type="hidden" name="user_birthday" id="profile-edit-birthday-value">
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inut-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Ngày</span>
                                    <div class="profile__birthday--value"></div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="0"><span class="profile__birthday--number-choice">1</span><span class="profile__birthday--number-choice">2</span><span class="profile__birthday--number-choice">3</span><span class="profile__birthday--number-choice">4</span><span class="profile__birthday--number-choice">5</span><span class="profile__birthday--number-choice">6</span><span class="profile__birthday--number-choice">7</span><span class="profile__birthday--number-choice">8</span><span class="profile__birthday--number-choice">9</span><span class="profile__birthday--number-choice">10</span><span class="profile__birthday--number-choice">11</span><span class="profile__birthday--number-choice">12</span><span class="profile__birthday--number-choice">13</span><span class="profile__birthday--number-choice">14</span><span class="profile__birthday--number-choice">15</span><span class="profile__birthday--number-choice">16</span><span class="profile__birthday--number-choice">17</span><span class="profile__birthday--number-choice">18</span><span class="profile__birthday--number-choice">19</span><span class="profile__birthday--number-choice">20</span><span class="profile__birthday--number-choice">21</span><span class="profile__birthday--number-choice">22</span><span class="profile__birthday--number-choice">23</span><span class="profile__birthday--number-choice">24</span><span class="profile__birthday--number-choice">25</span><span class="profile__birthday--number-choice">26</span><span class="profile__birthday--number-choice">27</span><span class="profile__birthday--number-choice">28</span><span class="profile__birthday--number-choice">29</span><span class="profile__birthday--number-choice">30</span><span class="profile__birthday--number-choice">31</span></div>
                        </div>
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inut-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Tháng</span>
                                    <div class="profile__birthday--value"></div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="1"><span class="profile__birthday--number-choice">1</span><span class="profile__birthday--number-choice">2</span><span class="profile__birthday--number-choice">3</span><span class="profile__birthday--number-choice">4</span><span class="profile__birthday--number-choice">5</span><span class="profile__birthday--number-choice">6</span><span class="profile__birthday--number-choice">7</span><span class="profile__birthday--number-choice">8</span><span class="profile__birthday--number-choice">9</span><span class="profile__birthday--number-choice">10</span><span class="profile__birthday--number-choice">11</span><span class="profile__birthday--number-choice">12</span></div>
                        </div>
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inut-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Năm</span>
                                    <div class="profile__birthday--value"></div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="2">
                                <span class="profile__birthday--number-choice">2020</span>
                                <span class="profile__birthday--number-choice">2021</span>
                                <span class="profile__birthday--number-choice">2022</span>
                                <span class="profile__birthday--number-choice">2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">
                    </div>
                    <div class="profile__edit--field-input">
                        <button id="profile-edit-save-btn" type="submit">Lưu</button>
                    </div>
                </div>
            </div>
            <div id="profile-edit-right-part">
                <div id="profile__edit--avatar-wrap">
                    <img src="{{ asset($get_user->avatar) }}" alt="" />
                    <label id="profile-edit-choose-avatar" for="de">Chọn Ảnh</label>
                    <input type="file" name="image_avatar" id="de" accept=".jpg,.jpeg,.png" hidden />
                    <div id="profile-edit-limit-require">
                        <span>Dung luong file toi da 1 mb</span>
                        <span>Dinh dang: .JPEG, .PNG</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>