@extends('layouts.app')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/55.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


        <!-- Start Gallery
    ============================================= -->
    <div class="gallery-style-one-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Awesome Gallery</h5>
                        <h2 class="title">Gallery Of Our Products</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-stage">
            <div class="row">
                <div class="col-xl-12">
                    <div class="carousel-stage-right carousel-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{asset('/')}}assets/img/gallery/22.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Fruit</span>
                                        <h4><a href="/about-us">Healthy Food</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{asset('/')}}assets/img/gallery/23.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Organic</span>
                                        <h4><a href="/about-us">Cocoa</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{asset('/')}}assets/img/gallery/24.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Farm</span>
                                        <h4><a href="/about-us">Palm Harvest</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{asset('/')}}assets/img/gallery/25.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Machinery</span>
                                        <h4><a href="/about-us">Tractors</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{asset('/')}}assets/img/gallery/26.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Havest</span>
                                        <h4><a href="/about-us">Transportation</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection

