@extends('layouts.skeleton')
@section('title', 'Shopbee')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/main-home/main-home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main-home/main-home-respon.css') }}" />
@endsection
@section('js')
    <script src="{{ asset('assets/js/home/home.js') }}"></script>
    <script src="{{ asset('assets/js/footer/footer.js') }}"></script>
    <script src="{{ asset('assets/js/header/header.js') }}"></script>
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
                            <img class="d-block" src="http://surl.li/dafng" alt="First slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dafnd" alt="Second slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dafnj" alt="Third slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dgukv" alt="Fourth slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dgukx" alt="Fifth slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dguky" alt="Sixth slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dgula" alt="Seventh slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dguld" alt="Eighth slide" draggable="false"/>
                        </div>
                        <div class="mainHome-carousel-top carousel-item">
                            <img class="d-block" src="http://surl.li/dgulf" alt="Ninth slide" draggable="false"/>
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
                <img src="http://surl.li/dgula" alt="" draggable="false" />
            </div>
            <div class="mainHome-homeCarousel-block-right">
                <img src="http://surl.li/dafnq" alt="" draggable="false" />
            </div>
        </div>
        <div id="mainHome-activity">
            <div id="mainHome-activity-wrapper">
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/46a2a2c810622f314d78455da5e5d926_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Sale Times</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/b3535d7e56c58c4ebe9a87672d38cc5e_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Cheap shit - Free shit</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/c7a2e1ae720f9704f92f72c9ef1a494a_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Free delivery </div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/1975fb1af4ae3c22878d04f6f440b6f9_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Trending - Shock deal</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/21a4856d1fecd4eda143748661315dba_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Coin refund over 100K</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/8d6d5ee795e7675fed39d31ba04c3b92_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Brand shit - Good deals</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/a08ab28962514a626195ef0415411585_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">International shipping</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/9df57ba80ca225e67c08a8a0d8cc7b85_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Card & Service</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/b898e8b6a0ba6fc2a86beb99f9420f06_xhdpi" alt="" draggable="false">
                    </div>
                    <div class="mainHome__act--name">Lucky number</div>
                </div>
                <div class="mainHome__activity--card">
                    <div class="mainHome__act--icon">
                        <img src="https://cf.shopee.vn/file/93acaac785c19b09180b01cc34a4c17e_xhdpi" alt="" draggable="false">
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
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="mainHome-carousel-bot carousel-item active">
                                        <img class="d-block w-100" src="http://surl.li/dafnp" alt="First slide" loading="lazy" />
                                    </div>
                                    <div class="mainHome-carousel-bot carousel-item">
                                        <img class="d-block w-100" src="http://surl.li/dafnq" alt="Second slide" loading="lazy" />
                                    </div>
                                    <div class="mainHome-carousel-bot carousel-item">
                                        <img class="d-block w-100" src="http://surl.li/dafnr" alt="Third slide" loading="lazy" />
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
                <a href="http://" class="mainHome__link--to" target="_blank">Veiw all ></a>
            </div>
            <div id="mainHome-top-finding-wrap">
                <div id="mainHome-card-topfind-wrap">
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafng" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnd" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnj" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnp" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnq" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
                    </div>
                    <div class="mainHome__card--topfind">
                        <div class="mainHome__topFind--image-wrap">
                            <div class="mainHome__topFind--top"><span>Top</span></div>
                            <img src="http://surl.li/dafnr" alt="" />
                            <div class="mainHome__topFind--price">Selling 234k / month</div>
                        </div>
                        <div class="mainHome__topFind--name">Mechanical keyboard</div>
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
                                    <img src="{{ asset($pdt->path) }}" alt="{{ $pdt->path }}" draggable="false"/>
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
