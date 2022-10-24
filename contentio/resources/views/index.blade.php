@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-06">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 offset-xl-1 col-md-6 col-sm-8  col-11 order-md-2">
                    <div class="hero-section-06__image-group" data-aos="fade-left" data-aos-delay="1300"
                        data-aos-duration="1000">
                        <img src="/img/contentio/anh1.png" style="max-width: 700px;" class="w-100" alt="image">
                        <div class="hero-section-06__image-group--circel" data-aos="zoom-in" data-aos-delay="2000"
                            data-aos-duration="1000">
                            <img src="/img/home-6/hero-circel.svg" class="w-100" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-1" data-aos="fade-up" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-06__content hero-content">
                        <h1 class="title heading-light">A powerful solution for your content plan</h1>
                        <p class="text-light text">Developing an attractive content is a big task; we‘re here to make it
                            easier. Choose Contentio to get amazing content tips and ideas.</p>
                        <div class="hero-section-06__content--btn-group">
                            <a class="btn hero-btn btn-primary btn-primary-hvr"  href="{{ route('getSignup') }}"> Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Section Start -->
    <div class="about-section-03">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8 col-xs-10 col-sm-10 offset-xl-1 order-lg-2" data-aos="fade-left"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="about-section-03__content mb-mobile-lg">
                        <div class="block-title content-title">
                            <h2 class="title">See how Contentio helps you market smarter.</h2>
                            <p>Content marketing is a crucial part of any digital strategy. Get expert advice on performing
                                content audits, choosing what type of content to produce, and promoting content so that it
                                delivers.</p>
                            <a class="btn btn-primary btn-primary-hvr"  href="{{ route('getSignup') }}">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 col-sm-10 order-lg-1">
                    <div class="about-section-03__widget">
                        <div class="about-section-03__widget--wrapper" data-aos="fade-right" data-aos-delay="300"
                            data-aos-duration="1200">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=/img/home-6/icon-1.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Content Strategy
                                    </h3>
                                    <p class='widget-text'> Developing a content strategy is a big task; Contentio.pro is
                                        here to make it easier.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-section-03__widget--wrapper" data-aos="fade-right" data-aos-delay="600"
                            data-aos-duration="1200">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=/img/home-6/icon-2.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Content Creation</h3>
                                    <p class='widget-text'>Get content creation tips with deep research and development on
                                        Contentio.pro.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-section-03__widget--wrapper" data-aos="fade-right" data-aos-delay="900"
                            data-aos-duration="1200">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=/img/home-6/icon-3.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Content Types</h3>
                                    <p class='widget-text'>Contentio.pro shows you different types of content may require
                                        different techniques and approaches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section Start -->
    <!-- Content Section Start -->
    <div class="content-section-13">
        <div class="content-section-13__shape" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-6/content-shape.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-xs-10 col-sm-11 " data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="block-title content-section-13__content mb-mobile-lg">
                        <h2 class="title">Contentio help you understand your audience</h2>
                        <p class="text-dark">Uncover trends and actionable insights from social data to inform brand and
                            business strategy.</p>
                        <a class="btn btn-primary btn-primary-hvr"  href="{{ route('getSignup') }}">Get Started</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10  col-xs-10 col-sm-11 offset-xl-1" data-aos="zoom-in"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="content-section-13__image-group">
                        <img src="/img/contentio/anh3.png" style="max-width: 570px;" alt="content-image" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section Start -->

    <div class="service-section-01">
        <div class="service-section-01__shape" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-6/service-shape.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2 class="title">The ultimate guide to content <br /> marketing in 2022</h2>
                    <p class="text-dark">
                        Discover what Contentio brings you to create a successful content marketing <br /> and help you
                        reach your audience and boost conversions.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center justify-content-sm-start feature-widgets-row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-1.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Proven Performance
                                </h3>
                                <p class='widget-text'>Contentio brings the latest and greatest marketing technology to our
                                    clients.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-2.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Unparalleled Track Record
                                </h3>
                                <p class='widget-text'>We have a 90% client retention rate and a client recommendation
                                    score that’s 200% higher than the nationwide average.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="900"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-3.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Earning traffic</h3>
                                <p class='widget-text'>Contentio offers you comprehensive digital marketing services.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-4.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Measurable advertising</h3>
                                <p class='widget-text'>Experience results from digital advertising that have a tangible
                                    impact on the bottom line.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="1500"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-5.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Design that dazzles</h3>
                                <p class='widget-text'>The interactive team lays the creative groundwork for your digital
                                    presence with a cutting-edge website design.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="1800"
                    data-aos-duration="1200">
                    <a href="#">
                        <div class="widget widget-column service-section-01__card">
                            <div class="widget-icon">
                                <img src=/img/home-6/s-icon-6.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Expand your social reach</h3>
                                <p class='widget-text'>Let us help you sort out what platforms, posts, and hashtags will
                                    help you grow.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section Start -->
    <!-- Content Section Start -->
    <div class="content-section-14">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-10 col-xs-10 col-sm-11" data-aos="fade-right" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="content-section-14__image-group">
                        <img src="/img/contentio/anh4.png" alt="content-image" style="max-width: 560px;" class="w-100">

                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-lg-6 col-md-8 col-xs-10 col-sm-11 " data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="block-title content-section-14__content">
                        <h2 class="title">Perfect solutions designed with your whole content in mind</h2>
                        <p class="text-dark">Your marketing and sales teams no longer have to spend hours fishing for the
                            right content, because here with Contentio we help you build the best plan. </p>
                        <a class="btn btn-primary btn-primary-hvr"  href="{{ route('getSignup') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->
@endsection
