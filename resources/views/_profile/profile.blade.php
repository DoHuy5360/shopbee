@extends('layouts.skeleton')
@section('title', 'Tài khoản')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile/profile.css') }}">
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/js/profile/profile.js') }}"></script>
    <script src="{{ asset('assets/js/header/header.js') }}"></script>
@endsection
@section('content')
    <div id="seller-frame-cover-fixed">
        <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
    </div>
    @include('layouts.header-home')
    <input id="profile-user-code" type="hidden" name="" value="{{ $get_user->code }}">
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
                        <span>Change Profile</span>
                    </div>
                </div>
            </div>
            <div id="profile-menu-wrap">
                <div class="profile__menu--element">Big sale to your Salary!</div>
                <div class="profile__menu--element-wrap">
                    <div class="profile__menu--element">
                        <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#1152B4"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" />
                        </svg>
                        <span> My Account </span>
                    </div>
                    <div class="profile__element--option-wrap">
                        <span id="profile-menu-element-info" class="profile__element--option">Profile</span>
                        <div class="profile__element--option">Bank</div>
                        <span id="profile-menu-element-address" class="profile__element--option">Address</span>
                        <div class="profile__element--option">Change Password</div>
                    </div>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                        <path fill="#165EB7"
                            d="M9.5,10.5H12a1,1,0,0,0,0-2H11V8A1,1,0,0,0,9,8v.55a2.5,2.5,0,0,0,.5,4.95h1a.5.5,0,0,1,0,1H8a1,1,0,0,0,0,2H9V17a1,1,0,0,0,2,0v-.55a2.5,2.5,0,0,0-.5-4.95h-1a.5.5,0,0,1,0-1ZM21,12H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Z" />
                    </svg>
                    <span id="profile-menu-element-order" class="profile__element--option"> Order Management </span>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                        <path fill="#F24D29"
                            d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z" />
                    </svg>
                    <span> Notification </span>
                </div>
                <div class="profile__menu--element">
                    <svg class="profile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#F24D29"
                            d="M7,6A1,1,0,1,0,8,7,1,1,0,0,0,7,6Zm14.71,5.78L12.23,2.32A1,1,0,0,0,11.5,2h-6a1,1,0,0,0-.71.29L2.29,4.78A1,1,0,0,0,2,5.49v6a1.05,1.05,0,0,0,.29.71l9.49,9.5a1.05,1.05,0,0,0,.71.29,1,1,0,0,0,.71-.29l8.51-8.51a1,1,0,0,0,.29-.71A1.05,1.05,0,0,0,21.71,11.78Zm-9.22,7.81L4,11.09V5.9L5.9,4h5.18l8.5,8.49Z" />
                    </svg>
                    <span>Voucher Inventory</span>
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
        <div id="profile-body-right-wrap-all">
            <div id="seller-frame-cover">
                <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
            </div>
            <div id="profile-body-tranfer-wrap">
                @include($content)
            </div>
        </div>
    </div>
    <div id="noidung"></div>
    @include('layouts.footer-home')
@endsection
