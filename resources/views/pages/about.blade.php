@extends('layouts.app')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/55.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2"><i class="fas fa-home"></i> Home</a></li>
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
                        <img src="{{asset('/')}}assets/img/about/12.jpg" alt="Image Not Found">
                        <div class="sub-item">
                            <img src="{{asset('/')}}assets/img/about/11.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-7 col-lg-12">

                            <p>
                                Uchenna Christopher Onyenweaku serves as the President and CEO of Ud-onyenweaku Farm, Nigeria's leading privately owned agricultural enterprise. Committed to delivering top-tier agricultural produce, goods, and services to the Nigerian market, Uchenna is a respected and experienced leader with over three decades of expertise in various sectors including cocoa, root crop, and animal farming.

Mr. Ikenna David, with a distinguished journey from the humble roles of harvester and chief nurseryman to his current position as Chief Operations Officer, brings forth a wealth of over a decade's worth of invaluable experience in the agricultural domain. Armed with a degree in Economics from Abia State University, his transition from the financial sector to the realm of farming underscores his versatile expertise. His strategic oversight now encompasses all facets of farm operations, marking a testament to his multifaceted capabilities and unwavering dedication to agricultural excellence.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Farmer
    ============================================= -->
    <div class="d-none farmer-area default-padding bottom-less bg-gray" style="background-image: url(assets/img/shape/36.png);">
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
                                    <h4><a href="team-details">Aleesha Brown</a></h4>
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
                                    <h4><a href="team-details">Kevin Martin</a></h4>
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
                                    <h4><a href="team-details">Sarah Albert</a></h4>
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
    <div class="d-none process-area default-padding">
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

    <!-- Start Why Choose Us
    ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="{{asset('/')}}assets/img/about/55.jpg" alt="Image Not Found">
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

@endsection

