@extends('store.layouts.app')
@section('content')

        <!-- /Header -->
        <!-- Banner Slider -->
        <div class="tf-slideshow tf-btn-swiper-main">
            <div dir="ltr" class="swiper tf-swiper sw-slide-show slider_effect_fade" data-auto="true" data-loop="true" data-effect="fade"
                data-delay="3000">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-4">
                            <div class="sld_image">
                                <img src="{{ asset('store/images/slider/slider-31.jpg') }}" data-src="{{ asset('store/images/slider/slider-31.jpg') }}" alt="" class="lazyload">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <h1 class="title_sld text-display fade-item fade-item-1">
                                            Fresh style <br> for Summer
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                            Stay cool and stylish with breathable materials and cushioned <br class="d-none d-sm-block">
                                            soles for every summer stroll.
                                        </p>
                                        <div class="fade-item fade-item-3">
                                            <a href="shop-default-list.html" class="tf-btn animate-btn fw-semibold">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-4">
                            <div class="sld_image">
                                <img src="{{ asset('store/images/slider/slider-32.jpg') }}" data-src="{{ asset('store/images/slider/slider-32.jpg') }}" alt="" class="lazyload">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <h1 class="title_sld text-display fade-item fade-item-1">
                                            Hot trend <br> for Summer
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                            Perfect for beach trips or city walks — open design <br class="d-none d-sm-block">
                                            for airflow and all-day ease.
                                        </p>
                                        <div class="fade-item fade-item-3">
                                            <a href="shop-default-list.html" class="tf-btn animate-btn fw-semibold">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-4">
                            <div class="sld_image">
                                <img src="{{ asset('store/images/slider/slider-33.jpg') }}" data-src="{{ asset('store/images/slider/slider-33.jpg') }}" alt="" class="lazyload">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="content-sld_wrap">
                                        <h1 class="title_sld text-display fade-item fade-item-1">
                                            A fresh take <br> on Summer
                                        </h1>
                                        <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                            Effortless to wear, easy to match — the go-to shoes <br class="d-none d-sm-block">
                                            for an active, stylish summer.
                                        </p>
                                        <div class="fade-item fade-item-3">
                                            <a href="shop-default-list.html" class="tf-btn animate-btn fw-semibold">
                                                Shop now
                                                <i class="icon icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dot-default tf-sw-pagination"></div>
            </div>
        </div>
        <!-- /Banner Slider -->
        <!-- Marquee -->
        <div class="themesFlat bg-black">
            <div class="tf-marquee style-3">
                <div class="marquee-wrap infiniteSlide" data-clone="5">
                    <p class="h6 text-white">Skechers Men's Go Walk Max Effort</p>
                    <i class="icon icon-thunder-2 text-white"></i>
                    <p class="h6 text-white">ZGR Womens High Top Canvas Sneakers</p>
                    <i class="icon icon-thunder-2 text-white"></i>
                    <p class="h6 text-white">Free shipping on all orders over $150</p>
                    <i class="icon icon-thunder-2 text-white"></i>
                    <p class="h6 text-white">2% off for weekends</p>
                    <i class="icon icon-thunder-2 text-white"></i>
                </div>
            </div>
        </div>
        <!-- /Marquee -->
        <!-- Category -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">Product Category</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2"
                    data-space-lg="48" data-space-md="32" data-space="12" data-pagination="2" data-pagination-sm="3" data-pagination-md="4"
                    data-pagination-lg="6">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-41.jpg') }}" data-src="{{ asset('store/images/category/cate-41.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Sandals <span class="count text-main-2">(24)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-42.jpg') }}" data-src="{{ asset('store/images/category/cate-42.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Accessories <span class="count text-main-2">(30)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-43.jpg') }}" data-src="{{ asset('store/images/category/cate-43.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Strides <span class="count text-main-2">(18)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-44.jpg') }}" data-src="{{ asset('store/images/category/cate-44.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Vault <span class="count text-main-2">(47)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-45.jpg') }}" data-src="{{ asset('store/images/category/cate-45.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Slippers <span class="count text-main-2">(90)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 6 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('store/images/category/cate-46.jpg') }}" data-src="{{ asset('store/images/category/cate-46.jpg') }}" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Glide <span class="count text-main-2">(86)</span>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Category -->
        <!-- Collection -->
        <section class="themesFlat">
            <div class="container-full">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">Collection The Day</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="3" data-tablet="2" data-mobile-sm="1" data-mobile="1"
                    data-space-lg="48" data-space-md="30" data-space="12" data-pagination="1" data-pagination-sm="2" data-pagination-md="2"
                    data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box-image_V02 type-space-2 type-space-5 hover-img">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('store/images/section/box-image-13.jpg') }}" data-src="{{ asset('store/images/section/box-image-13.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content wow fadeInUp">
                                    <h2 class="type-semibold">
                                        <a href="shop-default.html" class="title link mb-8">
                                            Sneakers Collection
                                        </a>
                                    </h2>
                                    <p class="sub-text h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="shop-default.html" class="tf-btn animate-btn">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="box-image_V02 type-space-2 type-space-5 hover-img">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('store/images/section/box-image-14.jpg') }}" data-src="{{ asset('store/images/section/box-image-14.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content wow fadeInUp">
                                    <h2 class="type-semibold">
                                        <a href="shop-default.html" class="title link mb-8">
                                            Suede Collection
                                        </a>
                                    </h2>
                                    <p class="sub-text h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="shop-default.html" class="tf-btn animate-btn">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="box-image_V02 type-space-2 type-space-5 hover-img">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('store/images/section/box-image-15.jpg') }}" data-src="{{ asset('store/images/section/box-image-15.jpg') }}" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content wow fadeInUp">
                                    <h2 class="type-semibold">
                                        <a href="shop-default.html" class="title link mb-8">
                                            Sport Collection
                                        </a>
                                    </h2>
                                    <p class="sub-text h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="shop-default.html" class="tf-btn animate-btn">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Collection -->
        <!-- Trending -->
        <section class="flat-spacing flat-animate-tab">
            <div class="container">
                <div class="sect-title wow fadeInUp">
                    <h1 class="title text-center mb-24 ">Trending Shop</h1>
                    <ul class="tab-product_list" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#new-arr" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab active">
                                new arrivals
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#best-seller" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab">
                                Best seller
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#on-sale" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab">
                                On sale
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="new-arr" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2"
                            data-mobile="2" data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                            data-pagination-md="3" data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-2.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-2.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Stretch Running Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-1.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-3.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-3.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Red</span>
                                                    <span class="swatch-value bg-vivid-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-4.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-4.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-6.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-6.jpg') }}" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Badminton Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$199,99</span>
                                                <span class="price-new h6">$169,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-5.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Orange</span>
                                                    <span class="swatch-value bg-honey-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-7.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-7.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-8.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-8.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-10.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-10.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Soft Foam Sneakers</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-9.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-11.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-11.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-12.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-12.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-14.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-14.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">New Balance 515 V3 Sneaker</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$109,99</span>
                                                <span class="price-new h6">$179,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-13.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-15.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-15.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-16.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-16.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="best-seller" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                            data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-10.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-10.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Soft Foam Sneakers</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-9.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-11.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-11.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-12.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-12.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-14.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-14.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">New Balance 515 V3 Sneaker</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$109,99</span>
                                                <span class="price-new h6">$179,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-13.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-15.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-15.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-16.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-16.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-2.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-2.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Stretch Running Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-1.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-3.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-3.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Red</span>
                                                    <span class="swatch-value bg-vivid-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-4.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-4.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-6.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-6.jpg') }}" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Badminton Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$199,99</span>
                                                <span class="price-new h6">$169,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-5.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Orange</span>
                                                    <span class="swatch-value bg-honey-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-7.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-7.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-8.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-8.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="on-sale" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                            data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-14.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-14.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">New Balance 515 V3 Sneaker</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$109,99</span>
                                                <span class="price-new h6">$179,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-13.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-13.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-15.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-15.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-16.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-16.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-2.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-2.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Stretch Running Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-1.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-1.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-3.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-3.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Red</span>
                                                    <span class="swatch-value bg-vivid-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-4.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-4.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-10.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-10.jpg') }}" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Soft Foam Sneakers</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-9.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-11.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-11.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-12.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-12.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-6.jpg') }}"
                                                    data-src="{{ asset('store/images/products/shoes/product-6.jpg') }}" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Badminton Shoes</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$199,99</span>
                                                <span class="price-new h6">$169,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-5.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                                        alt="Color">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Orange</span>
                                                    <span class="swatch-value bg-honey-orange"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-7.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-7.jpg') }}"
                                                        alt="Color">

                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img src="{{ asset('store/images/products/shoes/product-8.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-8.jpg') }}"
                                                        alt="Color">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Trending -->
        <!-- Testimonial -->
        <section class="themesFlat">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">Customer Reviews</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="3" data-tablet="2" data-mobile-sm="1" data-mobile="1"
                    data-space-lg="48" data-space-md="30" data-space="12" data-pagination="1" data-pagination-sm="2" data-pagination-md="2"
                    data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V04">
                                <div class="tes_content">
                                    <div class="author-image">
                                        <img class="lazyload" src="{{ asset('store/images/avatar/avatar-1.jpg') }}" data-src="{{ asset('store/images/avatar/avatar-1.jpg') }}" alt="">
                                    </div>
                                    <h4 class="tes_title fw-semibold">Dedicated service</h4>
                                    <p class="tes_text h6">
                                        “The build quality is excellent and everything works smoothly. I can feel the difference compared to other
                                        brands“
                                    </p>
                                    <p class="tes_author h4">Brooklyn Simmons</p>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <div class="tes_product">
                                    <a href="product-detail.html" class="product-image">
                                        <img class="lazyload" src="{{ asset('store/images/products/shoes/product-9.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-9.jpg') }}"
                                            alt="Short Sleeve Office Shirt">
                                    </a>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link">
                                                Soft Foam Sneakers
                                            </a>
                                        </h5>
                                        <h6 class="prd_price">$14,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V04">
                                <div class="tes_content">
                                    <div class="author-image">
                                        <img class="lazyload" src="{{ asset('store/images/avatar/avatar-2.jpg') }}" data-src="{{ asset('store/images/avatar/avatar-2.jpg') }}" alt="">
                                    </div>
                                    <h4 class="tes_title fw-semibold">Best Product Quality</h4>
                                    <p class="tes_text h6">
                                        “The support from ACIS has been outstanding. Anytime we had a question or needed help, their team responded
                                        quickly and professionally.“
                                    </p>
                                    <p class="tes_author h4">Mas Shin</p>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <div class="tes_product">
                                    <a href="product-detail.html" class="product-image">
                                        <img class="lazyload" src="{{ asset('store/images/products/shoes/product-5.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-5.jpg') }}"
                                            alt="Short Sleeve Office Shirt">
                                    </a>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link">
                                                New Balance 515 V3 Sneaker
                                            </a>
                                        </h5>
                                        <h6 class="prd_price">$14,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V04">
                                <div class="tes_content">
                                    <div class="author-image">
                                        <img class="lazyload" src="{{ asset('store/images/avatar/avatar-3.jpg') }}" data-src="{{ asset('store/images/avatar/avatar-3.jpg') }}" alt="">
                                    </div>
                                    <h4 class="tes_title fw-semibold">Exceptional Reliability</h4>
                                    <p class="tes_text h6">
                                        “No surprises, just consistent and dependable dependable performance every single time without fail.“
                                    </p>
                                    <p class="tes_author h4">Sil Vox</p>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <div class="tes_product">
                                    <a href="product-detail.html" class="product-image">
                                        <img class="lazyload" src="{{ asset('store/images/products/shoes/product-40.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-40.jpg') }}" alt="Short Sleeve Office Shirt">
                                    </a>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link">
                                                Stretch Running Shoes
                                            </a>
                                        </h5>
                                        <h6 class="prd_price">$14,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- On Sale -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <h1 class="s-title mb-8">Deal Of The Day</h1>
                    <p class="s-subtitle h6">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                    data-space-lg="48" data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                    data-pagination-lg="4" data-grid="2">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-17.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-17.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-18.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-18.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Anti-Slip Sports Shoes</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$47.99</span>
                                        <span class="price-new h6">$36.66</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Olive</span>
                                            <span class="swatch-value bg-dusty-olive"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-17.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-17.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Purple</span>
                                            <span class="swatch-value bg-light-purple"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-19.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-19.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Dark</span>
                                            <span class="swatch-value bg-dark-charcoal"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-20.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-20.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-21.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-21.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-22.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-22.jpg') }}" alt="Product">
                                    </a>
                                    <div class="variant-box">
                                        <ul class="product-size_list">
                                            <li class="size-item h6">XS</li>
                                            <li class="size-item h6">S</li>
                                            <li class="size-item h6">M</li>
                                        </ul>
                                    </div>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">High-top Canvas Sneakers</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-honey-orange"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-21.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-21.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Pink</span>
                                            <span class="swatch-value bg-hot-pink"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-23.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-23.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Olive</span>
                                            <span class="swatch-value bg-dusty-olive"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-24.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-24.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-25.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-25.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-26.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-26.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Breathable Walking Sneakers</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$199,99</span>
                                        <span class="price-new h6">$169,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Beige</span>
                                            <span class="swatch-value bg-light-beige"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-25.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-25.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-honey-orange"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-27.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-27.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Green</span>
                                            <span class="swatch-value bg-sage-green"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-28.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-28.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-29.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-29.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-30.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-30.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">New Balance 515 V3 Sneaker</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$359,99</span>
                                        <span class="price-new h6">$189,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-tomato"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-29.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-29.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Pink</span>
                                            <span class="swatch-value bg-hot-pink"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-31.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-31.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Violet</span>
                                            <span class="swatch-value bg-muted-violet"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-32.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-32.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-33.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-33.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-34.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-34.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Women's Canvas Tennis Shoes</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$179,99</span>
                                        <span class="price-new h6">$109,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Olive</span>
                                            <span class="swatch-value bg-dark-olive"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-33.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-33.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Jade</span>
                                            <span class="swatch-value bg-dark-jade"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-35.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-35.jpg') }}"
                                                alt="Color">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-36.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-36.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-37.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-37.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Black and white sneakers</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$169,99</span>
                                        <span class="price-new h6">$119,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-honey-orange"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-36.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-36.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">White</span>
                                            <span class="swatch-value bg-white"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-38.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-38.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Purple</span>
                                            <span class="swatch-value bg-light-purple"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-39.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-39.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 7 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-40.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-40.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-41.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-41.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Black and white sneakers</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$109,99</span>
                                        <span class="price-new h6">$99,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Yellow</span>
                                            <span class="swatch-value bg-honey-orange"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-40.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-40.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-tomato"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-42.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-42.jpg') }}"
                                                alt="Color">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product 8 -->
                        <div class="swiper-slide">
                            <div class="card-product">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('store/images/products/shoes/product-43.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-43.jpg') }}" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('store/images/products/shoes/product-44.jpg') }}"
                                            data-src="{{ asset('store/images/products/shoes/product-44.jpg') }}" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info">
                                    <a href="product-detail.html" class="name-product h4 link">Black and white sneakers</a>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$169,99</span>
                                        <span class="price-new h6">$119,99</span>
                                    </div>
                                    <ul class="product-color_list">
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                            <span class="tooltip color-filter">Green</span>
                                            <span class="swatch-value bg-sage-green"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-43.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-43.jpg') }}"
                                                alt="Color">
                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Dark</span>
                                            <span class="swatch-value bg-dark-charcoal"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-45.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-45.jpg') }}"
                                                alt="Color">

                                        </li>
                                        <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                            <span class="tooltip color-filter">Orange</span>
                                            <span class="swatch-value bg-honey-orange"></span>
                                            <img src="{{ asset('store/images/products/shoes/product-46.jpg') }}" data-src="{{ asset('store/images/products/shoes/product-46.jpg') }}"
                                                alt="Color">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /On Sale -->
        <!-- Deal -->
        <section class="themesFlat">
            <div class="container-full-2">
                <div class="banner-cd_v01 style-2">
                    <div class="banner_content wow fadeInUp">
                        <h1 class="title">On Sale!</h1>
                        <p class="sub-title">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <div class="count-down_v01">
                            <div class="js-countdown cd-custom-element cd-has-zero" data-timer="25472" data-labels="Days,Hours,Mins,Secs"></div>
                        </div>
                        <a href="shop-default.html" class="tf-btn animate-btn type-small-2">
                            Get voucher 25%
                            <i class="icon icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="img-item item-1">
                        <img class="lazyload" src="{{ asset('store/images/section/item-1.png') }}" data-src="{{ asset('store/images/section/item-1.png') }}" alt="">
                    </div>
                    <div class="img-item item-2">
                        <img class="lazyload" src="{{ asset('store/images/section/item-2.png') }}" data-src="{{ asset('store/images/section/item-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- /Deal -->
        <!-- Box Icon -->
        <div class="flat-spacing">
            <div class="container">
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="97"
                    data-space-md="33" data-space="13" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft">
                                <span class="icon">
                                    <i class="icon-package"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">30 days return</h4>
                                    <p class="text">30 day money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.1s">
                                <span class="icon">
                                    <i class="icon-calender"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">3 year warranty</h4>
                                    <p class="text">Manufacturer's defect</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.2s">
                                <span class="icon">
                                    <i class="icon-boat"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Free shipping</h4>
                                    <p class="text">Free Shipping for orders over $150</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.3s">
                                <span class="icon">
                                    <i class="icon-headset"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Online support</h4>
                                    <p class="text">24 hours a day, 7 days a week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Box Icon -->
        <!-- Footer -->

@endsection
