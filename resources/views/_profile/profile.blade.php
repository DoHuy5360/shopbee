@extends('layouts.skeleton')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile/profile.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/profile/profile.js') }}"></script>
@endsection
@section('content')
    @include('layouts.header-home')
    <div id="profile-body-wrap">
        <div id="profile-body-left-wrap">
            <div id="profile-user-info-wrap">
                <img id="profile-user-avatar" src="{{ asset($get_user->avatar) }}" alt="" />
                <div id="profile-user-name-wrap">
                    <div id="profile-user-name">{{ $get_user->name }}</div>
                    <div id="profile-user-edit">
                        <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#ee4d2d"
                                d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                        </svg>
                        <span>Sửa Hồ Sơ</span>
                    </div>
                </div>
            </div>
            <div id="profile-menu-wrap">
                <div class="profile__menu--element">25.9 Luong Ve Sale To</div>
                <div class="profile__menu--element-wrap">
                    <div class="profile__menu--element">
                        <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#1152B4"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                        </svg>
                        <span> Tai Khoan Cua Toi </span>
                    </div>
                    <div class="profile__element--option-wrap">
                        <div class="profile__element--option">Ho So</div>
                        <div class="profile__element--option">Ngan Hang</div>
                        <div class="profile__element--option">Dia Chi</div>
                        <div class="profile__element--option">Doi Mat khau</div>
                    </div>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                        <path fill="#165EB7"
                            d="M9.5,10.5H12a1,1,0,0,0,0-2H11V8A1,1,0,0,0,9,8v.55a2.5,2.5,0,0,0,.5,4.95h1a.5.5,0,0,1,0,1H8a1,1,0,0,0,0,2H9V17a1,1,0,0,0,2,0v-.55a2.5,2.5,0,0,0-.5-4.95h-1a.5.5,0,0,1,0-1ZM21,12H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Z" />
                    </svg>
                    <span> Don Mua </span>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                        <path fill="#F24D29"
                            d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z" />
                    </svg>
                    <span> Thong Bao </span>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#F24D29"
                            d="M7,6A1,1,0,1,0,8,7,1,1,0,0,0,7,6Zm14.71,5.78L12.23,2.32A1,1,0,0,0,11.5,2h-6a1,1,0,0,0-.71.29L2.29,4.78A1,1,0,0,0,2,5.49v6a1.05,1.05,0,0,0,.29.71l9.49,9.5a1.05,1.05,0,0,0,.71.29,1,1,0,0,0,.71-.29l8.51-8.51a1,1,0,0,0,.29-.71A1.05,1.05,0,0,0,21.71,11.78Zm-9.22,7.81L4,11.09V5.9L5.9,4h5.18l8.5,8.49Z" />
                    </svg>
                    <span>Kho Voucher</span>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#F1AB09"
                            d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" />
                    </svg>
                    <span>Shopbee Coin</span>
                </div>
            </div>
        </div>
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
                                <a href="">Thay doi</a>
                            </div>
                        </div>
                        <div class="profile__edit--field-wrap">
                            <div class="profile__edit--name">Số điện thoại</div>
                            <div class="profile__edit--field-input">
                                <span>{{ isset($get_user->phone) ? $get_user->phone : 'Chưa thêm' }}</span>
                                <a href=""> Thay Doi </a>
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
                                    <div class="profile__birthday--list-value" data-datetime="0"><span class="profile__birthday--number-choice">1</span><span
                                            class="profile__birthday--number-choice">2</span><span class="profile__birthday--number-choice">3</span><span
                                            class="profile__birthday--number-choice">4</span><span class="profile__birthday--number-choice">5</span><span
                                            class="profile__birthday--number-choice">6</span><span class="profile__birthday--number-choice">7</span><span
                                            class="profile__birthday--number-choice">8</span><span class="profile__birthday--number-choice">9</span><span
                                            class="profile__birthday--number-choice">10</span><span class="profile__birthday--number-choice">11</span><span
                                            class="profile__birthday--number-choice">12</span><span class="profile__birthday--number-choice">13</span><span
                                            class="profile__birthday--number-choice">14</span><span class="profile__birthday--number-choice">15</span><span
                                            class="profile__birthday--number-choice">16</span><span class="profile__birthday--number-choice">17</span><span
                                            class="profile__birthday--number-choice">18</span><span class="profile__birthday--number-choice">19</span><span
                                            class="profile__birthday--number-choice">20</span><span class="profile__birthday--number-choice">21</span><span
                                            class="profile__birthday--number-choice">22</span><span class="profile__birthday--number-choice">23</span><span
                                            class="profile__birthday--number-choice">24</span><span class="profile__birthday--number-choice">25</span><span
                                            class="profile__birthday--number-choice">26</span><span class="profile__birthday--number-choice">27</span><span
                                            class="profile__birthday--number-choice">28</span><span class="profile__birthday--number-choice">29</span><span
                                            class="profile__birthday--number-choice">30</span><span class="profile__birthday--number-choice">31</span></div>
                                </div>
                                <div class="profile__birthday--option-wrap">
                                    <div class="profile__birthday--inut-wrap">
                                        <div class="profile__birthday--display-choice">
                                            <span>Tháng</span>
                                            <div class="profile__birthday--value"></div>
                                        </div>
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                    <div class="profile__birthday--list-value" data-datetime="1"><span class="profile__birthday--number-choice">1</span><span
                                            class="profile__birthday--number-choice">2</span><span class="profile__birthday--number-choice">3</span><span
                                            class="profile__birthday--number-choice">4</span><span class="profile__birthday--number-choice">5</span><span
                                            class="profile__birthday--number-choice">6</span><span class="profile__birthday--number-choice">7</span><span
                                            class="profile__birthday--number-choice">8</span><span class="profile__birthday--number-choice">9</span><span
                                            class="profile__birthday--number-choice">10</span><span class="profile__birthday--number-choice">11</span><span
                                            class="profile__birthday--number-choice">12</span></div>
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
                                <button id="profile-edit-save-btn" type="submit">Luu</button>
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
    </div>
    <div id="noidung"></div>
@endsection
