@extends('layouts.skeleton')
@section('title', 'Log in')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login/login_respon.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/js/auth/login_and_regs_page.js') }}"></script>
@endsection
@section('content')
    <div id="login-page-wrap-all">
        <div id="seller-frame-cover-fixed">
            <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div id="login_page-cover">
            <div id="login_page-header-wrapper">
                <div id="login_page-header-content">
                    <div id="login_page-header-logo-wrapper">
                        <img src="https://cdn.discordapp.com/attachments/885169725640937492/1017451862548549742/shopbee.png" alt="" srcset="" />
                    </div>
                    <div id="login_page-header-logo-detail">
                        <div id="login_page-header-logo-script">Log in</div>
                    </div>
                </div>
                <div id="login_page-header-help">
                    <a href="" id="login_page-header-help-detail">Do you need help?</a>
                </div>
            </div>
            <div id="login_page-content-wrapper">
                <div id="login_page-content">
                    <div id="login_page-content-form">
                        <form action="{{ route('login') }}" method="POST" id="login_page-content-form-logins">
                            @csrf
                            <input type="hidden" name="previous_page" value="{{ $previous_page }}">
                            <div id="login_page-content-form-label">
                                <label for="login_page-content-form-input-field">Log in</label>
                                <div id="login_page-content-form-qr-login">
                                    <div id="login_page-content-form-qr-wrap">
                                        <div id="login_page-content-form-qr-wrap-detail">Log in by QR code</div>
                                    </div>
                                    <div id="login_page-content-form-qr">
                                        <ion-icon name="qr-code-outline"></ion-icon>
                                    </div>
                                </div>
                            </div>
                            <div id="login_page-content-form-input">
                                <div id="login_page-content-form-input-wrap">
                                    <input type="text" name="email" id="login_page-content-form-input-field" placeholder="Email" />
                                </div>
                            </div>
                            <div id="login_page-content-form-pwd">
                                <div id="login_page-content-form-pwd-wrap">
                                    <input type="password" name="password" id="login_page-content-form-pwd-field" placeholder="Password" />
                                </div>
                            </div>
                            <div id="login_page-content-form-btn">
                                <button type="submit">Log in</button>
                                <div id="login_page-content-form-otherLogin">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" target="_blank">
                                            Forgot password
                                        </a>
                                    @endif
                                    <a href="#" target="_blank" rel="noopener noreferrer">Log in by SMS</a>
                                </div>
                            </div>
                            <div id="login_page-content-form-pageSep">
                                <div id="login_page-content-form-pageSep-wrap">
                                    <div class="login_page-content-form-pageSep-line"></div>
                                    <div id="login_page-content-form-pageSep-content">OR</div>
                                    <div class="login_page-content-form-pageSep-line"></div>
                                </div>
                            </div>
                            <div id="login_page-content-form-otherMethod">
                                <div id="login_page-content-form-otherMethod-wrap">
                                    <button class="login_page_content_for_otherMethod" id="login_page-content-for-otherMethod-1">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                        <div id="login_page_content_for_otherMethod-face">Facebook</div>
                                    </button>
                                    <button class="login_page_content_for_otherMethod" id="login_page-content-for-otherMethod-2">
                                        <ion-icon name="logo-google"></ion-icon>
                                        <div id="login_page_content_for_otherMethod-google">Google</div>
                                    </button>
                                    <button class="login_page_content_for_otherMethod" id="login_page-content-for-otherMethod-3">
                                        <ion-icon name="logo-apple"></ion-icon>
                                        <div id="login_page_content_for_otherMethod-apple">Apple</div>
                                    </button>
                                </div>
                            </div>
                            <div id="login_page-content-form-loginSite">
                                <span>Are you new to Shopee? </span>
                                <a href="{{ route('register') }}" rel="noopener noreferrer">Sign up</a>
                            </div>
                        </form>
                    </div>
                    <div id="login_page-content-respon"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
