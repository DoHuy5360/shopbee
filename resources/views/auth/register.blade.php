@extends('layouts.skeleton')
@section('title', 'Đăng ký tài khoản')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/register/register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/register/register_respon.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/auth/login_and_regs_page.js') }}"></script>
@endsection
@section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div id="reg_page-cover">
        <div id="reg_page-header-wrapper">
            <div id="reg_page-header-content">
                <div id="reg_page-header-logo-wrapper">
                    <img src="https://cdn.discordapp.com/attachments/885169725640937492/1017451862548549742/shopbee.png" alt="" srcset="" />
                </div>
                <div id="reg_page-header-logo-detail">
                    <div id="reg_page-header-logo-script">Đăng ký</div>
                </div>
            </div>
            <div id="reg_page-header-help">
                <a href="" id="reg_page-header-help-detail">Bạn cần giúp đỡ?</a>
            </div>
        </div>
        <div id="reg_page-content-wrapper">
            <div id="reg_page-content">
                <div id="reg_page-content-form">
                    <form action="{{ route('register') }}" method="POST" id="reg_page-content-form-regs">
                        @csrf
                        <div id="reg_page-content-form-label">
                            <label for="reg_page-content-form-input-field">Đăng ký</label>
                        </div>
                        <div id="reg_page-content-form-input">
                            <div id="reg_page-content-form-input-wrap">
                                <input type="text" name="name" id="reg_page-content-form-input-field" placeholder="Tên đăng nhập" required autofocus />
                            </div>
                            <div id="reg_page-content-form-input-wrap">
                                <input type="text" name="email" id="reg_page-content-form-input-field" placeholder="Số điện thoại/ Email" required />
                            </div>
                            <div id="reg_page-content-form-input-wrap">
                                <input type="password" name="password" id="reg_page-content-form-input-field" placeholder="Password" required />
                            </div>
                            <div id="reg_page-content-form-input-wrap">
                                <input type="password" name="password_confirmation" id="reg_page-content-form-input-field" placeholder="Confirm Password" required />
                            </div>
                        </div>
                        <div id="reg_page-content-form-btn">
                            <button type="submit">Tiếp theo</button>
                        </div>
                        <div id="reg_page-content-form-pageSep">
                            <div id="reg_page-content-form-pageSep-wrap">
                                <div class="reg_page-content-form-pageSep-line"></div>
                                <div id="reg_page-content-form-pageSep-content">hoặc</div>
                                <div class="reg_page-content-form-pageSep-line"></div>
                            </div>
                        </div>
                        <div id="reg_page-content-form-otherMethod">
                            <div id="reg_page-content-form-otherMethod-wrap">
                                <button class="reg_page_content_for_otherMethod" id="reg_page-content-for-otherMethod-1">
                                    <ion-icon name="logo-facebook" style="color: blue"></ion-icon>
                                    <div id="reg_page_content_for_otherMethod-face">Facebook</div>
                                </button>
                                <button class="reg_page_content_for_otherMethod" id="reg_page-content-for-otherMethod-2">
                                    <ion-icon name="logo-google"></ion-icon>
                                    <div id="reg_page_content_for_otherMethod-google">Google</div>
                                </button>
                            </div>
                        </div>
                        <div id="reg_page-content-form-rule">
                            Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                            <a href="http://" target="_blank" rel="noopener noreferrer">Điều khoản dịch vụ</a>
                            &
                            <a href="http://" target="_blank" rel="noopener noreferrer">Chính sách bảo mật</a>
                        </div>
                        <div id="reg_page-content-form-loginSite">
                            <span>Bạn đã có tài khoản?</span>
                            <a href="{{ route('login') }}" rel="noopener noreferrer">Đăng nhập</a>
                        </div>
                    </form>
                </div>
                <div id="reg_page-content-respon"></div>
            </div>
        </div>
    </div>
@endsection
