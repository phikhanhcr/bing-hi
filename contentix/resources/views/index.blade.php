@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-05">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-7 col-xs-11">
                    <div class="hero-section-05__content hero-content mb-mobile-lg">
                        <h1 class="title mb-20">Grow your audience on social and beyond</h1>
                        <p class="text-dark text">Contentix helps you build an audience organically. Keep your online content
                            fresh and engaging to attract customers.</p>
                        <a class="btn hero-btn btn-primary btn-primary-hvr btn-w-arrow btn-arrow-anim-01"
                            href="{{ route('getSignup') }}"> Get Started
                        </a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5 col-xs-11 offset-xxl-1">
                    <div class="hero-section-05__image-group" data-aos="fade-left" data-aos-delay="1300"
                        data-aos-duration="1000">
                        <img src="/img/contentix/anh1.png" alt="hero-img" class="w-100" style="max-width: 800px;">

                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section-05__shape-1 floating-Y-animation-reverse-02">
            <img src="/img/home-5/shape-left.svg" alt="shape" class="w-100 make-it-inline">
        </div>
        <div class="hero-section-05__shape-2">
            <img src="/img/home-5/shape-right.svg" alt="shape" class="w-100 make-it-inline">
        </div>
        <div class="hero-section-05__shape-3 circle-animation">
            <img src="/img/home-5/shape-center.svg" alt="shape" class="w-100 make-it-inline fill-tertiary">
        </div>
    </div>


    <div class="about-section-02">
        <div class="about-section-02__shape">
            <img src="/img/home-5/shape-right.svg" alt="shape" class="w-100 make-it-inline">
        </div>
        <div class="container">
            <div class="row align-items-center text-lg-start text-center justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10 col-xs-11">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="card-about-01">
                                        <div class="card-about-01--img">
                                            <img src="/img/home-5/about-icon-1.svg" alt="icon">
                                        </div>
                                        <div class="card-about-01__body">
                                            <h5 class="card-about-01__body--title">Contentix trends</h5>
                                            <p class="text-dark card-about-01__body--text">Gauge consumer search behavior
                                                with real-time search trends.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="card-about-01">
                                        <div class="card-about-01--img">
                                            <img src="/img/home-5/about-icon-2.svg" alt="shape">
                                        </div>
                                        <div class="card-about-01__body">
                                            <h5 class="card-about-01__body--title">Market finder</h5>
                                            <p class="text-dark card-about-01__body--text">Get data and insights to identify
                                                your next global markets.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card-about-01">
                                        <div class="card-about-01--img">
                                            <img src="/img/home-5/about-icon-3.svg" alt="icon">
                                        </div>
                                        <div class="card-about-01__body">
                                            <h5 class="card-about-01__body--title">Media gallery</h5>
                                            <p class="text-dark card-about-01__body--text">Browse innovative creatives from
                                                top advertisers and agencies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-xl-1 col-md-9 col-sm-10 col-xs-11" data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="about-section-02__content block-title">
                        <h2 class="title">Amazing digital marketing toolbox for Contentix marketers.</h2>
                        <p class="text-dark">Take your campaign to new heights with Contentix products and tools. Paperfilte
                            helps you create exceptional personalized content with innovative tools that you can get
                            nowhere.</p>
                        <a  href="{{ route('getSignup') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Feature Section Start -->
    <div class="content-section-11">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9 col-sm-10 col-xs-11 offset-xl-1 order-lg-2">
                    <div class="content-section-11__image-group text-center mb-mobile-lg" data-aos="fade-left"
                        data-aos-duration="800">
                        <img src="/img/contentix/anh2.png" alt="content-image" style="max-width: 1000px;" class="w-100">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10 col-xs-11order-lg-1">
                    <div class="content-section-11__texts" data-aos="fade-right" data-aos-duration="800">
                        <div class="block-title content-title">
                            <h2 class="title">Write an effective and attractive content</h2>
                            <p class="text-dark">Keep your online content fresh and engaging to attract customers. Contentix
                                helps you to identify your target market and get to your content more visible to your key
                                market.</p>
                        </div>
                        <div class="content-section-11__texts--accordion">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingOne">
                                        <h6 class="icon-block icon-red">1</h6>
                                        <button class="accordion-button header-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Perfectly analyze what's going on
                                        </button>
                                    </div>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <p class="accordion-body text-dark">
                                            Measure your social media performance in a few clicks and see what’s working and
                                            deliver high engagement content.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <h6 class="icon-block icon-green">2</h6>
                                        <button class="accordion-button collapsed header-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Effective plan and publish your content
                                        </button>
                                    </div>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingTwo">
                                        <p class="accordion-body text-dark">
                                            Collaborate and plan your campaigns. Schedule your posts in advance so you can
                                            focus on other things.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingThree">
                                        <h6 class="icon-block icon-blue">3</h6>
                                        <button class="accordion-button collapsed header-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Quickly engage marketers and customers
                                        </button>
                                    </div>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <p class="accordion-body text-dark">
                                            Respond to comments twice as fast. Skip to important comments with the help of
                                            labels and hotkeys.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Video Section Start -->
    <div class="video-section-02" style="background-image: url(./image/home-5/video.png);">
        <div class="container">
            <div class="video-block">
                <a href="https://www.youtube.com/watch?v=LWZ7iytIA6k" data-fancybox
                    class="video-btn popup-btn video-btn-1 text-secondary bg-white">
                    <i class="fas fa-play text-primary"></i>
                </a>
                <p class="heading-light video-block--text">Watch a Quick Tutorial</p>
            </div>
        </div>
    </div>

    <!-- Content Section Start -->
    <div class="content-section-12">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-8 col-xs-9 col-11">
                    <div class="content-section-12__image-group">
                        <img src="/img/contentix/anh3.png" style="max-width: 435px;" alt="content-2">

                        <div class="content-section-12__image-group--dots" data-aos="fade-left" data-aos-delay="1300"
                            data-aos-duration="1000">
                            <img src="/img/home-5/dots.svg" alt="content-2-group" class="w-100">
                        </div>
                        <div class="content-section-12__image-group--shape" data-aos="fade-right" data-aos-delay="1300"
                            data-aos-duration="1000">
                            <img src="/img/home-5/content-2-shape.svg" alt="content-2-group"
                                class="w-100 make-it-inline fill-tertiary">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8 col-xs-9" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="block-title content-title">
                        <h2 class="title">Successful content development with Contentix.</h2>
                        <p class="text-dark">Contentix helps clients create content that drives search engine optimization
                            and online conversion. Whether you’re looking to make an immediate sale or collect profile
                            information for ongoing prospect nurturing, we know how to create content that converts.</p>
                        <a class="btn btn-primary btn-primary-hvr"  href="{{ route('getSignup') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Feature Section Start -->

    <!-- Feature Section End -->
    <!-- Testimonial Section Start -->
    <div class="testimonil-section-10">
        <div class="container">
            <div class="section-title content-title text-center">
                <h2 class="title">What our students are saying <br class="d-none d-xs-block"> about Appmax</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 offset-xl-1 col-lg-6 col-md-9 col-sm-10 col-xs-11">
                    <div class="testimonil-section-10__image-group d-none d-lg-block" data-aos="zoom-in"
                        data-aos-duration="800">
                        <img src="/img/home-5/testimonil.png" alt="testimonil-image" class="w-100">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-9 col-sm-10 col-xs-11" data-aos="fade-left"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="testimonil-slider--02 mobile-slider">
                        <div class="slide">
                            <div class="testimonil-section-10__content">
                                <p class="heading-dark text">"Contentix lets us organize our marketing collateral so our
                                    sales teams can easily find what they're looking for, and reach the right prospects at
                                    the right time."/p>
                                <div class="client-info">
                                    <div class="client-info--img">
                                        <img src="/img/home-3/t-3.png" alt="icon">
                                    </div>
                                    <div class="client-info--texts">
                                        <h6 class="name">Karthik Matus</h6>
                                        <span class="profession text-dark">Poland</span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="/img/home-5/qutes.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testimonil-section-10__content">
                                <p class="heading-dark text">"We’re seeing really good growth, and Contentix allows us to
                                    do that at scale more quickly."</p>
                                <div class="client-info">
                                    <div class="client-info--img">
                                        <img src="/img/home-3/t-2.png" alt="icon">
                                    </div>
                                    <div class="client-info--texts">
                                        <h6 class="name">Anglio Smith</h6>
                                        <span class="profession text-dark">Canada</span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="/img/home-5/qutes.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testimonil-section-10__content">
                                <p class="heading-dark text">"Contentix is incredibly helpful. Since I knew Contentix, my
                                    contents have been at the next level and can attract so many potential clients."</p>
                                <div class="client-info">
                                    <div class="client-info--img">
                                        <img src="/img/home-3/t-2.png" alt="icon">
                                    </div>
                                    <div class="client-info--texts">
                                        <h6 class="name">Anthur Mathew</h6>
                                        <span class="profession text-dark">Australia</span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="/img/home-5/qutes.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->
@endsection
