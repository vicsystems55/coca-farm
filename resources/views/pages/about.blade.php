@extends('layouts.app')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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
                        <img src="{{asset('/')}}assets/img/about/5.jpg" alt="Image Not Found">
                        <div class="sub-item">
                            <img src="{{asset('/')}}assets/img/about/1.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-7 col-lg-12">
                            <h2 class="heading">Agriculture For <br> Future Development</h2>
                            <p>
                                There are many variations of passages of ipsum available but the majority have suffered alteration in some form by injected humor or random word which don’t look even. Comparison new ham melancholy son themselves.
                            </p>
                            <ul class="check-solid-list mt-20">
                                <li>Organic food contains more vitamins</li>
                                <li>Eat organic because supply meets demand</li>
                                <li>Organic food is never irradiated</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                            <div class="top-product-item">
                                <img src="{{asset('/')}}assets/img/icon/1.svg" alt="Icon">
                                <h5><a href="services-details.html">Natural Farming</a></h5>
                                <p>
                                    Resolve parties but trying she shewing of moment.
                                </p>
                            </div>
                            <div class="top-product-item">
                                <img src="{{asset('/')}}assets/img/icon/2.svg" alt="Icon">
                                <h5><a href="services-details.html">Quality Products</a></h5>
                                <p>
                                    Always parties but trying she shewing of moment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Farmer
    ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(assets/img/shape/36.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Our Farmers</h5>
                        <h2 class="title">Meet Our Farm Experts</h2>
                        <div class="devider"></div>
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting <br> projection off. Connection stimulated estimating.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="{{asset('/')}}assets/img/farmers/1.jpg" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of tomatoes</span>
                                    <h4><a href="team-details.html">Aleesha Brown</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="{{asset('/')}}assets/img/farmers/2.jpg" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of cherry</span>
                                    <h4><a href="team-details.html">Kevin Martin</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="{{asset('/')}}assets/img/farmers/3.jpg" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Farmer of potato</span>
                                    <h4><a href="team-details.html">Sarah Albert</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farmer -->

    <!-- Start Food Order Process
    ============================================= -->
    <div class="process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 process-style-one">
                    <h5 class="sub-title">Order process</h5>
                    <h2 class="title">Order Now and <br> get pure Organic Food</h2>
                    <div class="call-to-action mt-45">
                        <div class="icon">
                            <i class="fas fa-user-headset"></i>
                        </div>
                        <div class="info">
                            <span>Get quick support</span>
                            <h4><a href="tel:2151234567">+123 34598768</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 process-style-one">
                    <div class="row">
                        <div class="shape">
                            <img src="{{asset('/')}}assets/img/shape/35.webp" alt="Image Not Found">
                        </div>

                        <div class="col-lg-4">
                            <div class="nav nav-tabs order-process-tab-navs" id="nav-tab" role="tablist">
                                <button class="nav-link" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                    <span>Process - 01 </span>
                                    <strong>Home Delivary</strong>
                                </button>
                                <button class="nav-link active" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                    <span>Process - 02 </span>
                                    <strong>Live Purchase</strong>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="tab-content order-process-tab-content" id="nav-tabContent">
                                <!-- Single Item -->
                                <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                                    <h3 class="title">Get products from home</h3>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained  education. Vulgar as hearts by garret. Perceived is determine departure explained no forfeited he something an join.
                                    </p>
                                    <ul>
                                        <li>Product will be delivered to your door</li>
                                        <li>The product will be checked before being sent to you.</li>
                                    </ul>
                                </div>
                                <!-- End Single Item -->

                                <!-- Single Item -->
                                <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                                    <div class="row align-center">
                                        <h3 class="title">Collect food from the farm</h3>
                                        <p>
                                            Take join of they such they sure it. Me contained explained  education. Vulgar as hearts by garret. Perceived is determine departure explained no forfeited he something an come.
                                        </p>
                                        <ul>
                                            <li>You must come for purchasing the product</li>
                                            <li>The product quality depends on your choice</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Order Process -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding bg-gray" style="background-image: url({{asset('/')}}assets/img/shape/23.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="testimonial-info text-center">
                        <h4>Testimonial</h4>
                        <div class="thumb">
                            <img src="{{asset('/')}}assets/img/farmers/1.jpg" alt="Image Not Found">
                            <img src="{{asset('/')}}assets/img/farmers/4.jpg" alt="Image Not Found">
                            <img src="{{asset('/')}}assets/img/farmers/2.jpg" alt="Image Not Found">
                            <img src="{{asset('/')}}assets/img/farmers/3.jpg" alt="Image Not Found">
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
                                                “Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
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
                                                “Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Anthom Bu Spar</h4>
                                                <span>Marketing Manager</span>
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
                                                “Business discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="info">
                                                <h4>Metho k. Partho</h4>
                                                <span>Senior Developer</span>
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

    <!-- Start Why Choose Us
    ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="{{asset('/')}}assets/img/about/1.jpg" alt="Image Not Found">
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
                    <h2 class="title">Agriculture matters to <br> the future of development</h2>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What do you add to the soil before you plant a crop?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Bennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you use herbicides?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Cennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where does the water come from that you use on your crops?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.
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

@endsection

