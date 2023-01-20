@extends('layouts.skeleton')
@section('title', 'Shopbee')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main-home/main-home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main-home/main-home-respon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/components/card.css') }}">
@endsection
@section('js')
    <script type="module" src="{{ asset('assets/js/home/home.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/footer/footer.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/header/header.js') }}"></script>
@endsection
@section('content')
    <div id="seller-frame-cover-fixed">
        <img id="seller-frame-cover-img" src="{{ asset('assets/img/bee_loading.gif') }}" alt="">
    </div>
    @include('layouts.header-home')
    <div id="data-body-transfer">
        <div class="mainHome-homeCarousel">
            <div class="mainHome-homeCarousel-block-1">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="mainHome-carousel-top carousel-item active">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/head_phone.png') }}" alt="First slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/watch.png') }}" alt="Second slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/camera.png') }}" alt="Third slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/camera2.webp') }}" alt="Fourth slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/glass.webp') }}" alt="Fifth slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/remote_game.webp') }}" alt="Sixth slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/bag.webp') }}" alt="Seventh slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/shoes.webp') }}" alt="Eighth slide" draggable="false" />
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="{{ asset('assets/img/home/slider/airpod.webp') }}" alt="Ninth slide" draggable="false" />
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
                <img src="{{ asset('assets/img/home/slider/bag.webp') }}" alt="" draggable="false" />
            </div>
            <div class="mainHome-homeCarousel-block-right">
                <img src="{{ asset('assets/img/home/slider/sungglasses.webp') }}" alt="" draggable="false" />
            </div>
        </div>
        <div id="mainHome-activity">
            <div id="mainHome-activity-wrapper">
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/flash.gif') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Sale Times</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/cheap.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Cheap shit - Free shit</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/freeship.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Free delivery </div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/firepercent.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Trending - Shock deal</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/refund_coin.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Coin refund over 100K</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/good_brand.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Brand shit - Good deals</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/shipping.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">International shipping</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/card.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Card & Service</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/what_number.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Lucky number</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="{{ asset('assets/img/home/options/flash_sale.webp') }}" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Flash Sale</div>
                </div>
            </div>
        </div>
        <div class="mainHome__category">
            <div id="mainHome__category--wrap">
                <div class="mainHome__part--title">
                    CATEGORY
                </div>
                <div id="mainHome__category--wrap-arrow">
                    <div id="mainHome-category-arrow-left">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div id="mainHome-category-tray-wrap">
                        <div id="mainHome-listOfCate">
                            @foreach ($product_categories as $category)
                                <div id="mainHome-listType-1" class="mainHome-listOfType">
                                    <img src="{{ $category->category_image }}" alt="" loading="lazy" />
                                    <span class="mainHome-ListDescrib">{{ $category->category_name }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="mainHome-category-arrow-right">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainHome-flashSale">
            <div class="mainHome__flashSale--wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">FLASH SALE</div>
                    <a href="#" class="mainHome__link--to" target="">Veiw all ></a>
                </div>
                <!--! làm đồng hồ đếm ngược -->
                <!-- <p id="flash-sale-end"><span id="hours">12</span><span id="minutes">12</span><span id="seconds">12</span></p> -->
                <div class="mainHome-listOfFlashcate_wrapper">
                    <div class="mainHome-listOfFlashcate">
                        @foreach ($products_flash_sale as $index => $product)
                            <div id="mainHome-listOfFlash-{{ $index }}" class="mainHome-listOfFlash">
                                <img src="{{ $product->product_image }}" alt="" draggable="false" />
                                <p class="mainHome__flashSale--price">{{ $product->product_price }}</p>
                                <div class="mainHome__flashSale--processBar-wrap">
                                    <div class="mainHome__flashSale--processBar" style="width: {{ $product->product_sold_proportion }}%"></div>
                                    <div class="mainHome__flashSal--text">Hot Selling</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="mainHome-ads-block-2">
            <div class="mainHome-ads-inside">
                <div class="mainHome__sale--img-wrap">
                    <img src="{{ asset('assets/img/home/black_friday_black.jpg') }}" draggable="false" alt="" />
                </div>
                <div class="mainHome__sale--img-wrap">
                    <img src="{{ asset('assets/img/home/sale_banner.png') }}" draggable="false" alt="" />
                </div>
                <div class="mainHome__sale--img-wrap">
                    <img src="{{ asset('assets/img/home/summer_sale.png') }}" draggable="false" alt="" />
                </div>
            </div>
        </div>
        <div class="mainHome-shopbeeMall">
            <div class="mainHome__shopbeeMall--wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">SHOPBEE MALL</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Veiw all ></a>
                </div>
                <div class="mainHome__wrap--shop-carousel_wrapper">
                    <div class="mainHome__wrap--shop-carousel">
                        <div class="mainHome-mallCarousel">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="mainHome-carousel-bot carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('assets/img/home/slider/shoe.webp') }}" alt="shoe" loading="lazy" draggable="false" />
                                    </div>
                                    <div class="mainHome-carousel-bot carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/home/slider/lipstick.webp') }}" alt="lipstick" loading="lazy" draggable="false" />
                                    </div>
                                    <div class="mainHome-carousel-bot carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/home/slider/sungglasses.webp') }}" alt="sungglasses" loading="lazy" draggable="false" />
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="mainHome-bigComapanyProducts">
                            @foreach ($malls as $mall)
                                <div class="mainHome-company">
                                    <img src="{{ $mall->mall_image }}" alt="" />
                                    <div class="mainHome__mall--sale">Giảm đến {{ $mall->mall_sale }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainHome-top-finding">
            <div class="mainHome__part--title-wrap">
                <div class="mainHome__part--title">Hot Selling</div>
                <a href="#" class="mainHome__link--to" target="_blank">Veiw all ></a>
            </div>
            <div id="mainHome-top-finding-wrap">
                <div id="mainHome-card-topfind-wrap">
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/sungglasses.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Cool sungglasses</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/shoes.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 24k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">New shoes trend</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/lipstick.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 34k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Red lipstick</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/bag.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 4k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Back bag</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/camera2.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 2k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Black camera</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="{{ asset('assets/img/home/slider/remote_game.webp') }}" alt="" />
                            <div class="mainHome__topFind--price">Selling 9k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Gaming hand ultra</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainHome-suggest">
            <div id="mainHome-suggest-wrap">
                <div class="mainHome__part--title-wrap">
                    <div class="mainHome__part--title">Product recommendation</div>
                    <a href="http://" class="mainHome__link--to" target="_blank">Veiw all ></a>
                </div>
                <div id="mainHome-card-suggest-wrap">
                    @foreach ($get_pdt as $pdt)
                        <a href="{{ route('product.show', $pdt->code) }}" class="mainHome__cardSuggest-padding">
                            <div class="mainHome__cardSuggest-content">
                                <div class="mainHome__cardSuggest--image">
                                    <div class="mainHome__cardSuggest--label-like">Like</div>
                                    <img src="{{ asset($pdt->path) }}" alt="{{ $pdt->path }}" draggable="false" />
                                </div>
                                <div class="mainHome__cardSuggest--text">
                                    <div class="mainHome__cardSuggest--name">{{ $pdt->name }}</div>
                                    <div class="mainHome__cardSuggest--footer">
                                        <div class="mainhome__bonus--bebefit">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </div>
                                        <div class="mainHome__cardSuggest--price-wrap">
                                            <div class="mainHome__cardSuggest--price"><span>₫</span><span>{{ $pdt->price }}</span></div>
                                            <span>Saled {{ $pdt->sold }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div id="mainHome-cardSuggest-display-btn">
                    <button id="mainHome-cardSuggest-display-more" type="button">Show more</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-home')
@endsection
