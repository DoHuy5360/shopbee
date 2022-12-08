<link rel="stylesheet" href="{{ asset('assets/css/profile/profile_edit.css') }}">
<div id="profile-body-right-wrap">
    <div id="profile-my-profile">
        <div id="profile-my-profile-title">My Account</div>
        <span>Manage profile information for account security</span>
    </div>
    <form action="{{ route('user.update', $get_user->code) }}" target="_blank" id="profile-edit-form" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="user_code" value="{{ $get_user->code }}">
        <div id="profile__edit--content-wrap">
            <div id="profile-edit-left-part">
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Login Name</div>
                    <div class="profile__edit--field-input">{{ $get_user->name }}</div>
                </div>
                <div class="profile__edit--field-wrap">
                    <label for="profile-edit-user-name" class="profile__edit--name">Name</label>
                    <div class="profile__edit--field-input">
                        <input name="real_name" type="text" id="profile-edit-user-name" value="{{ $get_user->real_name }}" minlength="3" maxlength="30" spellcheck="false" />
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <label for="profile-edit-field-email" class="profile__edit--name">Email</label>
                    <div class="profile__edit--field-input">
                        <input type="hidden" name="email" value="{{ $get_user->email }}">
                        <input id="profile-edit-field-email" value="{{ $get_user->email }}" type="text" spellcheck="false" disabled>
                        <span id="profile-edit-field-email-action" class="profile__edit-field-action">Change</span>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <label for="profile-edit-field-phone" class="profile__edit--name">Phone number</label>
                    <div class="profile__edit--field-input">
                        <input type="hidden" name="phone" value="{{ isset($get_user->phone) ? $get_user->phone : '' }}">
                        <input id="profile-edit-field-phone" value="{{ isset($get_user->phone) ? $get_user->phone : '' }}" type="text" placeholder="Not added yet" minlength="10" maxlength="10"
                            spellcheck="false" disabled>
                        <span id="profile-edit-field-phone-action" class="profile__edit-field-action">Change</span>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <label for="profile-edit-field-shop-name" class="profile__edit--name">Shop name</label>
                    <div class="profile__edit--field-input">
                        <input type="text" name="shop_name" id="profile-edit-field-shop-name" value="Tính năng Shop không khả dụng" minlength="3" maxlength="30" spellcheck="false" disabled />
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Gender</div>
                    <div class="profile__edit--field-input">
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-male" value="male" {{ $get_user->gender == 'male' ? 'checked' : '' }} />
                            <label for="profile-gender-male">Male</label>
                        </div>
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-female" value="female" {{ $get_user->gender == 'female' ? 'checked' : '' }} />
                            <label for="profile-gender-female">Female</label>
                        </div>
                        <div class="profile__gender--input-wrap">
                            <input type="radio" name="user_gender" id="profile-gender-other" value="other" {{ ($get_user->gender == 'other' || !isset($get_user->gender)) ? 'checked' : '' }} />
                            <label for="profile-gender-other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">Birth</div>
                    <div class="profile__edit--field-input">
                        <input type="hidden" name="user_birthday" id="profile-edit-birthday-value">
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inp-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Day</span>
                                    <div class="profile__birthday--value">{{ substr($get_user->birthday, 0, 2) }}</div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="0">
                                <span class="profile__birthday--number-choice">01</span>
                                <span class="profile__birthday--number-choice">02</span>
                                <span class="profile__birthday--number-choice">03</span>
                                <span class="profile__birthday--number-choice">04</span>
                                <span class="profile__birthday--number-choice">05</span>
                                <span class="profile__birthday--number-choice">06</span>
                                <span class="profile__birthday--number-choice">07</span>
                                <span class="profile__birthday--number-choice">08</span>
                                <span class="profile__birthday--number-choice">09</span>
                                <span class="profile__birthday--number-choice">10</span>
                                <span class="profile__birthday--number-choice">11</span>
                                <span class="profile__birthday--number-choice">12</span>
                                <span class="profile__birthday--number-choice">13</span>
                                <span class="profile__birthday--number-choice">14</span>
                                <span class="profile__birthday--number-choice">15</span>
                                <span class="profile__birthday--number-choice">16</span>
                                <span class="profile__birthday--number-choice">17</span>
                                <span class="profile__birthday--number-choice">18</span>
                                <span class="profile__birthday--number-choice">19</span>
                                <span class="profile__birthday--number-choice">20</span>
                                <span class="profile__birthday--number-choice">21</span>
                                <span class="profile__birthday--number-choice">22</span>
                                <span class="profile__birthday--number-choice">23</span>
                                <span class="profile__birthday--number-choice">24</span>
                                <span class="profile__birthday--number-choice">25</span>
                                <span class="profile__birthday--number-choice">26</span>
                                <span class="profile__birthday--number-choice">27</span>
                                <span class="profile__birthday--number-choice">28</span>
                                <span class="profile__birthday--number-choice">29</span>
                                <span class="profile__birthday--number-choice">30</span>
                                <span class="profile__birthday--number-choice">31</span>
                            </div>
                        </div>
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inp-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Month</span>
                                    <div class="profile__birthday--value">{{ substr($get_user->birthday, 3, 2) }}</div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="1">
                                <span class="profile__birthday--number-choice">01</span>
                                <span class="profile__birthday--number-choice">02</span>
                                <span class="profile__birthday--number-choice">03</span>
                                <span class="profile__birthday--number-choice">04</span>
                                <span class="profile__birthday--number-choice">05</span>
                                <span class="profile__birthday--number-choice">06</span>
                                <span class="profile__birthday--number-choice">07</span>
                                <span class="profile__birthday--number-choice">08</span>
                                <span class="profile__birthday--number-choice">09</span>
                                <span class="profile__birthday--number-choice">10</span>
                                <span class="profile__birthday--number-choice">11</span>
                                <span class="profile__birthday--number-choice">12</span>
                            </div>
                        </div>
                        <div class="profile__birthday--option-wrap">
                            <div class="profile__birthday--inp-wrap">
                                <div class="profile__birthday--display-choice">
                                    <span>Year</span>
                                    <div class="profile__birthday--value">{{ substr($get_user->birthday, 6, 4) }}</div>
                                </div>
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                            <div class="profile__birthday--list-value" data-datetime="2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__edit--field-wrap">
                    <div class="profile__edit--name">
                    </div>
                    <div class="profile__edit--field-input">
                        <button id="profile-edit-save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
            <div id="profile-edit-right-part">
                <div id="profile__edit--avatar-wrap">
                    <div id="profile-avatar-wrap">
                        <img src="{{ asset($get_user->avatar) }}" alt="" />
                    </div>
                    <label id="profile-edit-choose-avatar" for="profile-edit-avatar">Choose image</label>
                    <input type="file" name="user_avatar" id="profile-edit-avatar" accept=".jpg,.jpeg,.png" hidden />
                    <div id="profile-edit-limit-require">
                        <span>1 mb Maximun file size</span>
                        <span>Type only: .jpg, .jpeg, .png</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
