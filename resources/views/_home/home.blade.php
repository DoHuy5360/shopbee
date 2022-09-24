@extends('layouts.skeleton')
@section('title', 'Shopbee')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/header/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer/footer-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main-home/main-home.css') }}" />
@endsection
@section('js')

@endsection
@section('content')
    @include('layouts.header-home')
    <div id="data-body-transfer">
        <div class="mainHome-homeCarousel">
            <div class="mainHome-homeCarousel-block-1">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="http://surl.li/dafng" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="http://surl.li/dafnd" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="http://surl.li/dafnj" alt="Third slide" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="mainHome-homeCarousel-block-right">
                <img src="http://surl.li/dafnp" alt="" />
            </div>
            <div class="mainHome-homeCarousel-block-right">
                <img src="http://surl.li/dafnq" alt="" />
            </div>
        </div>
        <div id="mainHome-activity">
            <div class="mainHome__activity--card">
                <div class="mainHome__act--icon">
                    <ion-icon name="flash-outline"></ion-icon>
                </div>
                <div class="mainHome__act--name">Khung giờ săn Sale</div>
            </div>
            <div class="mainHome__activity--card">
                <div class="mainHome__act--icon">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
                <div class="mainHome__act--name">Gì cũng rẻ, mua là Freeship</div>
            </div>
            <div class="mainHome__activity--card">
                <div class="mainHome__act--icon">
                    <ion-icon name="airplane-outline"></ion-icon>
                </div>
                <div class="mainHome__act--name">Miễn phí vận chuyển</div>
            </div>
            <div class="mainHome__activity--card">
                <div class="mainHome__act--icon">
                    <ion-icon name="airplane-outline"></ion-icon>
                </div>
                <div class="mainHome__act--name">Bắt Trend - Giá sốc</div>
            </div>
            <div class="mainHome__activity--card">
                <div class="mainHome__act--icon">
                    <ion-icon name="bag-check-outline"></ion-icon>
                </div>
                <div class="mainHome__act--name">Hàng hiệu giá tốt</div>
            </div>
        </div>
        <div class="mainHome__category">
            <div id="mainHome__category--wrap">
                <div class="mainHome__part--title">DANH MỤC</div>
                <div class="mainHome-listOfCate">
                    <div id="mainHome-listType-1" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-2" class="mainHome-listOfType">
                        <img src="http://surl.li/dagkg" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-3" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-4" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-5" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-6" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-7" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-8" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-9" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-10" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-11" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                    <div id="mainHome-listType-12" class="mainHome-listOfType">
                        <img src="http://surl.li/daghx" alt="" />
                        <p class="mainHome-ListDescrib">Xe máy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainHome-flashSale">
            <div class="mainHome__flashSale--wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">FLASH SALE</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Xem tất cả ></a>
                </div>
                <!--! làm đồng hồ đếm ngược -->
                <!-- <p id="flash-sale-end"><span id="hours">12</span><span id="minutes">12</span><span id="seconds">12</span></p> -->
                <div class="mainHome-listOfFlashcate">
                    <div id="mainHome-listOfFlash-1" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafng" alt="" />
                        <p class="flash-price">75.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                    <div id="mainHome-listOfFlash-2" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafnd" alt="" />
                        <p class="flash-price">55.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                    <div id="mainHome-listOfFlash-3" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafnj" alt="" />
                        <p class="flash-price">56.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                    <div id="mainHome-listOfFlash-4" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafnp" alt="" />
                        <p class="flash-price">99.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                    <div id="mainHome-listOfFlash-5" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafnq" alt="" />
                        <p class="flash-price">77.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                    <div id="mainHome-listOfFlash-6" class="mainHome-listOfFlash">
                        <img src="http://surl.li/dafnr" alt="" />
                        <p class="flash-price">33.000 đồng</p>
                        <progress value="75" min="0" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainHome-ads-block-2">
            <div class="mainHome-ads-inside">
                <img src="https://cf.shopee.vn/file/2598a052df3405712b42aee9fecb0b1c" alt="" />
            </div>
        </div>
        <div class="mainHome-shopbeeMall">
            <div class="mainHome__shopbeeMall--wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">SHOPBEE MALL</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Xem tất cả ></a>
                </div>
                <div class="mainHome__wrap--shop-carousel">
                    <div class="mainHome-mallCarousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://surl.li/dafnp" alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://surl.li/dafnq" alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://surl.li/dafnr" alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="mainHome-bigComapanyProducts">
                        <div class="mainHome-comapny">
                            <img src="https://th.bing.com/th/id/R.5b0b18b80aeb20f05476ab34a0b7efe6?rik=i4kQ%2fEfT%2ffuv4w&pid=ImgRaw&r=0" alt="" />
                            <div class="mainHone__banner--wrap">
                                <img src="https://th.bing.com/th/id/R.c75d99342fcbe8f46a2c01973b08b5c7?rik=1iar%2fhSpbkTTaQ&riu=http%3a%2f%2f3.bp.blogspot.com%2f-Da3Yj32iknc%2fUPGKkqB4euI%2fAAAAAAAAE7U%2fThZsRisL45Y%2fs1600%2fLogo%2bApple%2biPhone.jpg&ehk=B90iBPuwHGUTosz9OohWUr2ZkKne566aB4tckCrIotM%3d&risl=&pid=ImgRaw&r=0"
                                    alt="" />
                            </div>
                            <div>Giảm đến 50%</div>
                        </div>
                        <div class="mainHome-comapny">
                            <img src="https://th.bing.com/th/id/R.5336cdbb14df4d13646366f2ee802d88?rik=KyNGwEgCK2C0rw&pid=ImgRaw&r=0" alt="" />
                            <div class="mainHone__banner--wrap">
                                <img src="https://th.bing.com/th/id/R.dbca938efb1fe46f5f3b34b17f35a026?rik=t27stuDPoMhMiQ&pid=ImgRaw&r=0" alt="" />
                            </div>
                            <div>Giảm đến 50%</div>
                        </div>
                        <div class="mainHome-comapny">
                            <img src="" alt="" />
                            <div class="mainHone__banner--wrap">
                                <img src="" alt="" />
                            </div>
                            <div></div>
                        </div>
                        <div class="mainHome-comapny">
                            <img src="" alt="" />
                            <div class="mainHone__banner--wrap">
                                <img src="" alt="" />
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainHome-top-finding">
            <div id="mainHome-top-finding-wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">Bán Chạy</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Xem tất cả ></a>
                </div>
                <div id="mainHome-card-topfind-wrap">
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafng" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnd" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnj" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnp" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnq" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnr" alt="" />
                            <div class="mainHome__topFind--price">Ban 234k / Thang</div>
                        </div>
                        <div class="mainHome__topFind--name">Ban phim co</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainHome-suggest">
            <div id="mainHome-suggest-wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">Gợi Ý Hôm Nay</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Xem tất cả ></a>
                </div>
                <div id="mainHome-card-suggest-wrap">
                    {{-- ! suggest card --}}
                    <a href="{{ route('product.show', 1) }}" class="mainHome__cardSuggest-padding">
                        <div class="mainHome__cardSuggest-content">
                            <div class="mainHome__cardSuggest--image">
                                <div class="mainHome__cardSuggest--label-like">Yêu thích</div>
                                <img src="http://surl.li/dafng" alt="" />
                            </div>
                            <div class="mainHome__cardSuggest--text">
                                <div class="mainHome__cardSuggest--name">Bàn phím cơ K37d</div>
                                <div class="mainHome__cardSuggest--footer">
                                    <div class="mainhome__bonus--bebefit">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </div>
                                    <div class="mainHome__cardSuggest--price-wrap">
                                        <div class="mainHome__cardSuggest--price"><span>₫</span><span>944.000</span></div>
                                        <span>Đã bán 34k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('product.show', 1) }}" class="mainHome__cardSuggest-padding">
                        <div class="mainHome__cardSuggest-content">
                            <div class="mainHome__cardSuggest--image">
                                <div class="mainHome__cardSuggest--label-like">Yêu thích</div>
                                <img src="http://surl.li/dafng" alt="" />
                            </div>
                            <div class="mainHome__cardSuggest--text">
                                <div class="mainHome__cardSuggest--name">Bàn phím cơ K37d</div>
                                <div class="mainHome__cardSuggest--footer">
                                    <div class="mainhome__bonus--bebefit">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </div>
                                    <div class="mainHome__cardSuggest--price-wrap">
                                        <div class="mainHome__cardSuggest--price"><span>₫</span><span>944.000</span></div>
                                        <span>Đã bán 34k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="mainHome-cardSuggest-display-btn">
                    <button id="mainHome-cardSuggest-display-more" type="button">Hiển thị thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
