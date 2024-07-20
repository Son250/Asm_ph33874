@extends('layouts.client')
@section('content')
    <main class="main">
        <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase"
            data-owl-options="{
        'loop': false
    }">
            <div class="home-slide home-slide1 banner">
                <img class="slide-bg" src="{{ asset('images/' . 'trangchu3.webp') }}" width="1903" height="499"
                    alt="slider image">
                {{-- <div class="container d-flex align-items-center">
                    <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                        <h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
                        <h2 class="text-transform-none mb-0">Summer Sale</h2>
                        <h3 class="m-b-3">70% Off</h3>
                        <h5 class="d-inline-block mb-0">
                            <span>Starting At</span>
                            <b class="coupon-sale-text text-white bg-secondary align-middle"><sup>$</sup><em
                                    class="align-text-top">199</em><sup>99</sup></b>
                        </h5>
                        <a href="category.html" class="btn btn-dark btn-lg">Shop Now!</a>
                    </div>
                    <!-- End .banner-layer -->
                </div> --}}
            </div>
            <!-- End .home-slide -->

            <div class="home-slide home-slide2 banner banner-md-vw">
                <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499"
                    src="{{ asset('images/' . 'trangchu2.webp') }}" alt="slider image">
                {{-- <div class="container d-flex align-items-center">
                    <div class="banner-layer d-flex justify-content-center appear-animate"
                        data-animation-name="fadeInUpShorter">
                        <div class="mx-auto">
                            <h4 class="m-b-1">Extra</h4>
                            <h3 class="m-b-2">20% off</h3>
                            <h3 class="mb-2 heading-border">Accessories</h3>
                            <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                            <a href="category.html" class="btn btn-block btn-dark">Shop All Sale</a>
                        </div>
                    </div>
                    <!-- End .banner-layer -->
                </div> --}}
            </div>
            <!-- End .home-slide -->
        </div>
        <!-- End .home-slider -->

        <div class="container">
            <div class="info-boxes-slider owl-carousel owl-theme mb-2"
                data-owl-options="{
            'dots': false,
            'loop': false,
            'responsive': {
                '576': {
                    'items': 2
                },
                '992': {
                    'items': 3
                }
            }
        }">
                <div class="info-box info-box-icon-left">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FREE SHIPPING &amp; RETURN</h4>
                        <p class="text-body">Free shipping on all orders over $99.</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-money"></i>

                    <div class="info-box-content">
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p class="text-body">100% money back guarantee</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p class="text-body">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->
            </div>
            <!-- End .info-boxes-slider -->

            <div class="banners-container mb-2">
                <div class="banners-slider owl-carousel owl-theme"
                    data-owl-options="{
                'dots': false
            }">
                    <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate"
                        style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('images/' . 'slideshow1.webp') }}" alt="banner" width="380"
                                height="175" />
                        </figure>

                    </div>
                    <!-- End .banner -->

                    <div class="banner banner2 banner-sm-vw text-uppercase d-flex align-items-center appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <figure class="w-100">
                            <img src="{{ asset('images/' . 'slideshow2.webp') }}" style="background-color: #ccc;"
                                alt="banner" width="380" height="175" />
                        </figure>

                    </div>
                    <!-- End .banner -->

                    <div class="banner banner3 banner-sm-vw d-flex align-items-center appear-animate"
                        style="background-color: #ccc;" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{ asset('images/' . 'slideshow3.webp') }}" alt="banner" width="380"
                                height="175" />
                        </figure>

                    </div>
                    <!-- End .banner -->
                </div>
            </div>
        </div>
        <!-- End .container -->

        {{-- ĐỔ sản phẩm --}}
        <section class="featured-products-section">
            <div class="container">
                <h2 class="section-title heading-border ls-20 border-0">Sản phẩm mới ra</h2>

                <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center"
                    data-owl-options="{
                'dots': false,
                'nav': true
            }">
                    @foreach ($products as $item)
                        <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                            <figure>
                                <a href="{{ route('detailProduct' , $item->id) }}">
                                    <img src="{{ asset('images/' . $item->img) }}" width="280" height="280"
                                        alt="product">
                                    {{-- <img src="assets/views/images/products/product-1-2.jpg" width="280" height="280"
                                        alt="product"> --}}
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="#" class="product-category">{{ $item->categoryName }}</a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{ route('detailProduct' , $item->id) }}">{{ $item->name }}</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <del class="old-price">{{ number_format($item->price + '3000000', 0, ',', '.') }}đ</del>
                                    <span class="product-price">{{ number_format($item->price, 0, ',', '.') }}đ</span>
                                </div>
                                <!-- End .price-box -->
                                <div class="product-action">
                                    <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="{{ route('detailProduct' , $item->id) }}" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i><span>XEM CHI TIẾT</span></a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                            class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                    @endforeach
                </div>
                <!-- End .featured-proucts -->
            </div>
        </section>

        @foreach ($categories as $i => $item)
            <section class="new-products-section">
                <div class="container">
                    <h2 class="section-title heading-border ls-20 border-0">{{ $item->name }}</h2>

                    <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2"
                        data-owl-options="{
                'dots': false,
                'nav': true,
                'responsive': {
                    '992': {
                        'items': 4
                    },
                    '1200': {
                        'items': 5
                    }
                }
            }">
                        @php
                            $products = DB::table('products')
                                ->where('iddm', $i + 1)
                                ->get();
                        @endphp
                        @foreach ($products as $product)
                            <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                                <figure>
                                    <a href="{{ route('detailProduct' , $product->id) }}">
                                        <img src="{{ asset('images/' . $product->img) }}" width="220" height="220"
                                            alt="product">
                                        {{-- <img src="assets/views/images/products/product-6-2.jpg" width="220"
                                            height="220" alt="product"> --}}
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    {{-- <div class="category-list">
                                        <a href="category.html" class="product-category">Category</a>
                                    </div> --}}
                                    <h3 class="product-title">
                                        <a href="{{ route('detailProduct' , $product->id) }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <del
                                            class="old-price">{{ number_format($product->price + '3000000', 0, ',', '.') }}đ</del>
                                        <span
                                            class="product-price">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="{{ route('detailProduct' , $product->id) }}" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>XEM CHI TIẾT</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview"
                                            title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endforeach

        {{-- Hết màn hình --}}
        <section class="feature-boxes-container">
            <div class="container appear-animate" data-animation-name="fadeInUpShorter">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-earphones-alt"></i>
                            </div>

                            <div class="feature-box-content p-0">
                                <h3>Customer Support</h3>
                                <h5>You Won't Be Alone</h5>

                                <p>We really care about you and your website as much as you do. Purchasing Porto or any
                                    other theme from us you get 100% free support.</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-credit-card"></i>
                            </div>

                            <div class="feature-box-content p-0">
                                <h3>Fully Customizable</h3>
                                <h5>Tons Of Options</h5>

                                <p>With Porto you can customize the layout, colors and styles within only a few minutes.
                                    Start creating an amazing website right now!</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box px-sm-5 feature-box-simple text-center">
                            <div class="feature-box-icon">
                                <i class="icon-action-undo"></i>
                            </div>
                            <div class="feature-box-content p-0">
                                <h3>Powerful Admin</h3>
                                <h5>Made To Help You</h5>

                                <p>Porto has very powerful admin features to help customer to build their own shop in
                                    minutes without any special skills in web development.</p>
                            </div>
                            <!-- End .feature-box-content -->
                        </div>
                        <!-- End .feature-box -->
                    </div>
                    <!-- End .col-md-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container-->
        </section>
        <!-- End .feature-boxes-container -->

        <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}"
            data-image-src="assets/views/images/demoes/demo4/banners/banner-5.jpg">
            <div class="promo-banner banner container text-uppercase">
                <div class="banner-content row align-items-center text-center">
                    <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter"
                        data-animation-delay="600">
                        <h2 class="mb-md-0 text-white">Top Fashion<br>Deals</h2>
                    </div>
                    <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn"
                        data-animation-delay="300">
                        <a href="category.html" class="btn btn-dark btn-black ls-10">View Sale</a>
                    </div>
                    <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="600">
                        <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                            <b>Exclusive
                                COUPON</b>
                        </h4>
                        <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">UP TO</i><b
                                class="text-white bg-secondary ls-n-10">$100</b> OFF</h5>
                    </div>
                </div>
            </div>
        </section>

        {{-- Tin tức cố định --}}
        <section class="blog-section pb-0">
            <div class="container">
                <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                    TIN TỨC MỚI NHẤT</h2>

                <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn"
                    data-owl-options="{
                'loop': false,
                'margin': 20,
                'autoHeight': true,
                'autoplay': false,
                'dots': false,
                'items': 2,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '480': {
                        'items': 2
                    },
                    '576': {
                        'items': 3
                    },
                    '768': {
                        'items': 4
                    }
                }
            }">
                    <article class="post">
                        <div class="post-media">
                            <a href="single.html">
                                <img src="{{ asset('images/' . 'slideshow2.webp') }}" alt="Post" width="225"
                                    height="280">
                            </a>
                            <div class="post-date">
                                <span class="day">26</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <!-- End .post-media -->

                        <div class="post-body">
                            <h2 class="post-title">
                                <a href="single.html">Top New Collection</a>
                            </h2>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                    tellus sem. Aenean...</p>
                            </div>
                            <!-- End .post-content -->
                            <a href="single.html" class="post-comment">0 Comments</a>
                        </div>
                        <!-- End .post-body -->
                    </article>
                    <!-- End .post -->

                    <article class="post">
                        <div class="post-media">
                            <a href="single.html">
                                <img src="
                                {{ asset('images/' . 'slideshow1.webp') }}"
                                    alt="Post" width="225" height="280">
                            </a>
                            <div class="post-date">
                                <span class="day">26</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <!-- End .post-media -->

                        <div class="post-body">
                            <h2 class="post-title">
                                <a href="single.html">Fashion Trends</a>
                            </h2>
                            <div class="post-content">
                                <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the 1960s with the release of...</p>
                            </div>
                            <!-- End .post-content -->
                            <a href="single.html" class="post-comment">0 Comments</a>
                        </div>
                        <!-- End .post-body -->
                    </article>
                    <!-- End .post -->

                    <article class="post">
                        <div class="post-media">
                            <a href="single.html">
                                <img src="{{ asset('images/' . 'slideshow3.webp') }}" alt="Post" width="225"
                                    height="280">
                            </a>
                            <div class="post-date">
                                <span class="day">26</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <!-- End .post-media -->

                        <div class="post-body">
                            <h2 class="post-title">
                                <a href="single.html">Right Choices</a>
                            </h2>
                            <div class="post-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the...</p>
                            </div>
                            <!-- End .post-content -->
                            <a href="single.html" class="post-comment">0 Comments</a>
                        </div>
                        <!-- End .post-body -->
                    </article>
                    <!-- End .post -->

                    <article class="post">
                        <div class="post-media">
                            <a href="single.html">
                                <img src="{{ asset('images/' . 'slideshow2.webp') }}" alt="Post" width="225"
                                    height="280">
                            </a>
                            <div class="post-date">
                                <span class="day">26</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <!-- End .post-media -->

                        <div class="post-body">
                            <h2 class="post-title">
                                <a href="single.html">Perfect Accessories</a>
                            </h2>
                            <div class="post-content">
                                <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the 1960s with the release of...</p>
                            </div>
                            <!-- End .post-content -->
                            <a href="single.html" class="post-comment">0 Comments</a>
                        </div>
                        <!-- End .post-body -->
                    </article>
                    <!-- End .post -->
                </div>

                <hr class="mt-0 m-b-5">

                <div class="brands-slider owl-carousel owl-theme images-center appear-animate"
                    data-animation-name="fadeIn" data-animation-duration="500"
                    data-owl-options="{
            'margin': 0}">
                    <img src="assets/views/images/brands/brand1.png" width="130" height="56" alt="brand">
                    <img src="assets/views/images/brands/brand2.png" width="130" height="56" alt="brand">
                    <img src="assets/views/images/brands/brand3.png" width="130" height="56" alt="brand">
                    <img src="assets/views/images/brands/brand4.png" width="130" height="56" alt="brand">
                    <img src="assets/views/images/brands/brand5.png" width="130" height="56" alt="brand">
                    <img src="assets/views/images/brands/brand6.png" width="130" height="56" alt="brand">
                </div>
                <!-- End .brands-slider -->

                <hr class="mt-4 m-b-5">

                {{-- <div class="product-widgets-container row pb-2">
                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="200">
                        <h4 class="section-sub-title">Featured Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-1.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-1-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-2.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-2-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Brown Women Casual HandBag</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-3.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-3-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D Speaker</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="500">
                        <h4 class="section-sub-title">Best Selling Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-4.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-4-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
                                        S</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-5.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-5-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-6.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-6-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="800">
                        <h4 class="section-sub-title">Latest Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-7.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-7-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual Glasses</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-8.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-8-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual Glasses</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-9.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-9-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Black Men Casual Glasses</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter"
                        data-animation-delay="1100">
                        <h4 class="section-sub-title">Top Rated Products</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-10.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-10-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Basketball Sports Blue Shoes</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-11.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-11-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Men Sports Travel Bag</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/views/images/products/small/product-12.jpg" width="84"
                                        height="84" alt="product">
                                    <img src="assets/views/images/products/small/product-12-2.jpg" width="84"
                                        height="84" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="product.html">Brown HandBag</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">$49.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                </div> --}}
                <!-- End .row -->
            </div>
        </section>
    </main>
@endsection