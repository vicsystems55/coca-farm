@extends('layouts.app')

@section('content')



     <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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
                            <h2 class="title">What we  represent</h2>
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
                                    <h5>
                                        <a href="/about-us">
                                        Crop Production</a>
                                    </h5>
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
                                    <h5>
                                        <a href="/about-us">
                                        Farming Innovations</a>
                                    </h5>
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
                                    <h5>
                                        <a href="/about-us">
                                        Community Engagement</a>
                                    </h5>
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
                                    <h5>
                                        <a href="/about-us">
                                        Market Presence</a>
                                    </h5>
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

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-facts-area bg-dark text-light default-padding-bottom">
        <div class="container">
            <div class="item-inner">
                <div class="row align-center">
                    <div class="col-lg-4 fun-fact-style-one">
                        <div class="heading">
                            <div class="sub-title">Achivements</div>
                            <h2 class="title">Delivering value </h2>
                        </div>
                    </div>
                    <div class="col-lg-8 fun-fact-style-one text-end">
                        <div class="row">
                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="10" data-speed="2000">250</div>
                                        <div class="operator">M</div>
                                    </div>
                                    <span class="medium">Growth Tonns of Harvest</span>
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
                                    <span class="medium">Products</span>
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



    <!-- Start Brand
    ============================================= -->
    <div class="brand-style-one-area text-center default-padding">
        <div class="container">
            <div class="brand-style-one">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand5col swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/1.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/2.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/3.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/4.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/5.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/img/clients/6.png" alt="Thumb">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Brand -->
            </div>
        </div>
    </div>
    <!-- End Brand -->

@endsection

