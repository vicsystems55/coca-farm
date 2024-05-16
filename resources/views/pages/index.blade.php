@extends('layouts.app')

@section('content')

  <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/17-1.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Farming</h4>
                                    <h2><strong>Agricultural </strong>Excellence</h2>
                                    <p>
                                        Leading the way in innovative and sustainable farming solutions.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="/about-us">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/img/banner/17-2.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Service</h4>
                                    <h2><strong>Community and </strong> Quality</h2>
                                    <p>
                                        Committed to community prosperity through premium agricultural products
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="/about-us">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <!-- End Main -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding">

        <!-- Shape -->
        <div class="shape-right-top">
            <img src="{{asset('/')}}assets/img/shape/leaf.png" alt="Image not found">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15">
                    <div class="thumb">
                        <img src="{{asset('/')}}assets/img/about/55.jpg" alt="Image Not Found">
                        <div class="sub-item">
                            <img src="{{asset('/')}}assets/img/about/11.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-7 col-lg-12">
                            <h2 class="heading">From Humble <br>  Beginnings </h2>
                            <p>
                                The Ud-onyenweaku Farm Complex has transformed from the modest Onyenweaku subsistence farm into a leading agricultural hub. Starting from humble origins, it has grown into a renowned commercial farm, focusing on;
                            </p>
                            <ul class="check-solid-list mt-20">
                                <li>Cash crops like cocoa</li>
                                <li>Staple crops like corn and cassava</li>
                                <li>Root crops like potatoe</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                            <div class="top-product-item">
                                <img src="{{asset('/')}}assets/img/icon/1.svg" alt="Icon">
                                <h5><a href="#">Natural Farming</a></h5>
                                <p>
                                    Growing crops naturally, nurturing future generations
                                </p>
                            </div>
                            <div class="top-product-item">
                                <img src="{{asset('/')}}assets/img/icon/2.svg" alt="Icon">
                                <h5><a href="#">Quality Products</a></h5>
                                <p>
                                    <Em></Em>Ensuring customer satisfaction always.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="{{asset('/')}}assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">What we do</h5>
                            <h2 class="title">What we <br> represent</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="https://img.icons8.com/3d-fluency/94/corn.png" alt="corn" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Crop Production</a></h5>
                                    <p>
                                        Specializing in a diverse range of crops to meet market demands.
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="https://img.icons8.com/3d-fluency/94/tractor.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Farming Innovations</a></h5>
                                    <p>
                                        Implementing eco-friendly techniques and modern technology.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="https://img.icons8.com/3d-fluency/94/trust.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Community Engagement</a></h5>
                                    <p>
                                        Empowering local farmers and communities through education and job creation.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="https://img.icons8.com/3d-fluency/94/shop.png" alt="Image Not Found">
                                    </div>
                                    <h5><a href="#">Market Presence</a></h5>
                                    <p>
                                        Ensuring top-quality products reach customers nationwide, fostering trust and satisfaction.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Product
    ============================================= -->
    <div class="product-list-area default-padding-bottom bottom-less bg-dark text-center text-light">
        <div class="shape-bottom-right">
            <img src="{{asset('/')}}assets/img/shape/21.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 mb-50 mb-xs-30">
                    <h2 class="mask-text" style="background-image: url(assets/img/banner/3.jpg);">Fresh products</h2>
                </div>
                <div class="product-list-box">
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <img src="{{asset('/')}}assets/img/icon/cocoa.png" alt="Icon">
                            <h5>Cocoa</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <img src="{{asset('/')}}assets/img/icon/palm-oil.png" alt="Icon">
                            <h5>Palm Fruit</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <img src="{{asset('/')}}assets/img/icon/yucca.png" alt="Icon">
                            <h5>Cassava</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <img src="{{asset('/')}}assets/img/icon/potato.png" alt="Icon">
                            <h5>Potatoe</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <img src="{{asset('/')}}assets/img/icon/corn.png" alt="Icon">
                            <h5>Corn</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Why Choose Us
    ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="{{asset('/')}}assets/img/about/12.jpg" alt="Image Not Found">
                        <div class="shape">
                            <img class="wow fadeInDown" src="{{asset('/')}}assets/img/shape/22.png" alt="Image not found">
                        </div>
                        <div class="product-produce">
                            <div class="icon">
                                <i class="flaticon-farmer"></i>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="258" data-speed="2000">258</div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">Agriculture, Organic Products</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">Get to know us</h5>
                    <h2 class="title">Agriculture excellence  <br> matters to us</h2>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What products do you offer from your farm?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        We offer a variety of products including cocoa, palm oil, cassava, potatoes, and corn.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Ud-onyenweaku Farm contribute to sustainable agriculture?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        We employ sustainable farming practices, including organic methods and water conservation techniques, to minimize environmental impact.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I visit Ud-onyenweaku Farm for a tour?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Yes, we welcome visitors for educational tours. Please contact us to schedule a visit.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can local farmers collaborate with Ud-onyenweaku Farm?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Local farmers can join our training programs and benefit from our agricultural initiatives designed to boost productivity and sustainability.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose us -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding bg-gray" style="background-image: url(assets/img/shape/23.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="testimonial-info text-center">
                        <h4>Testimonial</h4>
                        <div class="thumb">
                            <img src="{{asset('/')}}assets/img/farmers/11.jpg" alt="Image Not Found">
                            <img src="{{asset('/')}}assets/img/farmers/22.jpg" alt="Image Not Found">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="testimonial-carousel testimonial-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">

                                    <div class="item">
                                        <div class="content">
                                            <p>
                                                “Ud-onyenweaku Farm has truly transformed our community. As a local farmer, I've witnessed their dedication to sustainable practices firsthand. Thanks to their guidance and support, my cassava yield has doubled, providing a better future for my family”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Adewale Ibrahim</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->
                            <!-- Single item -->
                            <div class="swiper-slide">
                                <div class="testimonial-style-two">
                                    <div class="item">
                                        <div class="content">
                                            <p>
                                                “I've been a loyal customer of Ud-onyenweaku Farm for years, and I can confidently say their products are unmatched in quality. From their rich cocoa to their pure palm oil, each item reflects their commitment to excellence. I'm proud to support such a reputable Nigerian enterprise.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Chinwe Okafor</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

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

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-facts-area default-padding">
        <div class="shape-left">
            <img src="{{asset('/')}}assets/img/shape/27.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="item-inner">
                <div class="shape-right">
                    <img src="{{asset('/')}}assets/img/shape/26.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-4 fun-fact-style-one">
                        <div class="heading">
                            <div class="sub-title">Achivements</div>
                            <h2 class="title">Delivering value <br> </h2>
                        </div>
                    </div>
                    <div class="col-lg-8 fun-fact-style-one text-end">
                        <div class="row">
                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="10" data-speed="2000">10</div>
                                        <div class="operator">M</div>
                                    </div>
                                    <span class="medium">Tonns Harvest</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="98" data-speed="2000">98</div>
                                        <div class="operator">%</div>
                                    </div>
                                    <span class="medium">Happy clients</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="68" data-speed="2000">68</div>
                                        <div class="operator">K</div>
                                    </div>
                                    <span class="medium">Sales of our Products</span>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->



@endsection

