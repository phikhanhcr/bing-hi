@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->

    <div class="hero-section-04">
        <div class="hero-section-04__bg-shape">
            <img src="/img/home-4/hero-bg.png" alt="hero image">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-9 col-xs-11">
                    <div class="hero-section-04__content hero-content text-center">
                        <h1 class="heading-light title">A healthy menstrual cycle <br class="d-none d-md-block"> with
                            Womenfit.</h1>
                        <p class="text-light">Track your period, discover patterns in your menstrual cycle,
                            <br class="d-none d-md-block"> and learn how your body works to keep it healthy – with Womenfit.
                        </p>
                        <div class="button mt-3">
                            <a href="{{ route('getSignup') }}" class="btn btn-primary btn-primary-hvr">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-section-04__image-group" style="margin-bottom: 70px;">
                        <img src="/img/period2/anh1.png" alt="" style="max-width: 350px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section-04__shape-1 floating-Y-animation-reverse-02">
            <img src="/img/home-4/hero-shape-1.svg" alt="shape" class="make-it-inline w-100 fill-secondary">
        </div>
        <div class="hero-section-04__shape-2 floating-Y-animation-02">
            <img src="/img/home-4/hero-shape-2.svg" alt="shape">
        </div>
        <div class="hero-section-04__shape-3 circle-animation">
            <img src="/img/home-4/hero-shape-3.svg" alt="shape">
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Feature Section Start -->
    <div class="content-section-09">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9 col-xs-11">
                    <div class="content-section-09__image-group text-center mb-mobile-lg">
                        <img src="/img/period2/anh2.png" style="max-width: 400px;" alt="content-image">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9 col-xs-11" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="content-section-09__texts text-center text-lg-start">
                        <div class="block-title">
                            <h6 class="subtitle text-secondary mb-20">Track Everything</h6>
                            <h2 class="title">Regardless of your life stage, Womenfit got your back.</h2>
                            <p class="text-dark">Whether you want to set reminders to get ovulation day notifications, or
                                just want to discover your body’s unique patterns, Womenfit helps you stay informed and make
                                empowered health choices</p>
                            <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignup') }}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Feature Section Start -->
    <div class="feature-section-04">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-xs-10 col-sm-11 col-md-8 col-lg-12">
                    <div class="row align-items-start justify-content-sm-start mb-7">
                        <div
                            class="col-xxl-6 offset-xxl-2 col-xxl-6 offset-xxl-1 col-lg-6 col-md-9 col-sm-10 col-xs-11 order-lg-2">
                            <div class="feature-section-04__image-group text-lg-center mb-mobile-lg">
                                <img src="/img/period2/anh3.png" style="max-width: 450px;" alt="content-img">
                                <div class="feature-section-04__image-group--shape shape-x-1">
                                    <img src="/img/home-4/feature-shape-1.svg" alt="shape" class="make-it-inline">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-12 col-xs-11">
                            <div class="block-title widget-content" data-aos="fade-up" data-aos-duration="800">
                                <h2 class="title">For your safe and healthy period </h2>
                                <p class="text-dark">Learn about your body from the data in website and science-based
                                    articles to make informed health choices</p>
                            </div>
                            <div class="row feature-section-04__widget widgets-row-02">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 order-lg-1" data-aos="fade-up"
                                    data-aos-duration="800">
                                    <div class="widget widget-content widget-column-till-md">
                                        <div class="widget-icon bg-secondary">
                                            <img src=/img/home-4/f-widget-icon-1.svg alt="icon">
                                        </div>
                                        <div class="widget-text">
                                            <h3 class='widget-title'>Menstruation tracker </h3>
                                            <p class='widget-text'>The menstrual cycle is a complex process and depends on
                                                many different factors. View your period lengths and cycle variations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 order-lg-1" data-aos="fade-up"
                                    data-aos-duration="800">
                                    <div class="widget widget-content widget-column-till-md">
                                        <div class="widget-icon bg-primary">
                                            <img src=/img/home-4/f-widget-icon-2.svg alt="icon">
                                        </div>
                                        <div class="widget-text">
                                            <h3 class='widget-title'>Fertility & Ovulation tracker</h3>
                                            <p class='widget-text'>Get reminders on upcoming periods, ovulation days, and
                                                fertility windows.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-12 order-lg-1" data-aos="fade-up"
                                    data-aos-duration="800">
                                    <div class="widget widget-content widget-column-till-md">
                                        <div class="widget-icon bg-yellow">
                                            <img src=/img/home-4/f-widget-icon-3.svg alt="icon">
                                        </div>
                                        <div class="widget-text">
                                            <h3 class='widget-title'>Safe educational community</h3>
                                            <p class='widget-text'>We provide easy access to menstrual health and
                                                educational content websites based on your logged symptoms and goals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT-02 SECTION -->
    <!-- Feature Section End -->
    <!-- Content Section Start -->
    <div class="content-section-08">
        <div class="content-section-08__shape-1 circle-x">
            <img src="/img/home-4/content-shape-5.svg" alt="shape" class="make-it-inline">
        </div>
        <div class="content-section-08__shape-2 shape-x-1">
            <img src="/img/home-4/content-shape-6.svg" alt="shape" class="make-it-inline fill-secondary">
        </div>
        <div class="container">
            <div class="content-section-08__tab">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-sm-10 col-xs-11">
                        <div class="content-section-08__tab" data-aos-duration="500">
                            <ul class="nav nav-tabs nav-tab--content-2 nav-tab--content-2--02 flex justify-content-center " id="myTab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link  active" id="home-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Web security</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content--content-2" id="myTabContent" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="300">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10 col-xs-11">
                                <div class="content-section-08__image-group">
                                    <img class="w-100" src="/img/period2/anh4.png" style="max-width: 600px;"
                                        alt="content image">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-8 col-11" data-aos="fade-left" data-aos-delay="500"
                                data-aos-duration="1000">
                                <div class="content-section-08__content text-center text-lg-start block-title">
                                    <h2 class="title heading-light">We inform you with diary & historical chart</h2>
                                    <p class="text-light">Keep track of everything that matters in simple charts. Monitor
                                        your past cycles, symptoms such as PMS, and other pain, cervical mucus, basal body
                                        temperature, medication, and more.</p>
                                    <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignup') }}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center justify-content-center ">
                            <div class="col-xl-7 col-lg-6 col-md-7 col-10">
                                <div class="content-section-08__image-group">
                                    <img class="w-100" src="/img/home-4/tab-img-1.png" alt="main image">
                                    <div class="content-section-08__image-group--card">
                                        <img src="/img/home-4/content-2-card.png" alt="content card">
                                    </div>
                                    <div class="content-section-08__image-group--shape">
                                        <img src="/img/home-4/content-shape-4.svg" alt="shape" class="make-it-inline">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-8 col-11">
                                <div class="content-section-08__content text-center text-lg-start block-title">
                                    <h2 class="title heading-light">We performed with maximum security</h2>
                                    <p class="text-light">Vero homero perfecto mei ut, sonet aperiam an nec. Ni <br
                                            class="d-none d-xxl-block"> nec dict altera legimu. Me vita haeo tibi que com
                                        titure <br class="d-none d-xxl-block"> viset cut.Proin tempus elit a laoreet volut
                                        pat. </p>
                                    <a class="btn btn-primary btn-primary-hvr" href="#">Download Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-7 col-lg-6 col-md-7 col-10">
                                <div class="content-section-08__image-group">
                                    <img class="w-100" src="/img/home-4/tab-img-2.png" alt="content">
                                    <div class="content-section-08__image-group--card">
                                        <img src="/img/home-4/content-2-card.png" alt="content">
                                    </div>
                                    <div class="content-section-08__image-group--shape">
                                        <img src="/img/home-4/content-shape-4.svg" alt="content" class="make-it-inline">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-8 col-11">
                                <div class="content-section-08__content text-center text-lg-start block-title">
                                    <h2 class="title heading-light">We performed with maximum security</h2>
                                    <p class="text-light">Vero homero perfecto mei ut, sonet aperiam an nec. Ni <br
                                            class="d-none d-xxl-block"> nec dict altera legimu. Me vita haeo tibi que com
                                        titure <br class="d-none d-xxl-block"> viset cut.Proin tempus elit a laoreet volut
                                        pat. </p>
                                    <a class="btn btn-primary btn-primary-hvr" href="#">Download Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Feact Section End -->
    <!-- Testimonial Section Start -->
    <div class="testimonil-section-04">
        <div class="container">
            <div class="row">
                <div class="section-title testimonil-section-04__title">
                    <h6 class="subtitle text-secondary mb-20">Testimonials</h6>
                    <h2 class="title">What our happy clients say</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-11 col-md-9 col-lg-12">
                    <div class="testimonil-section-04__slider">
                        <div class="testimonial-slider--04 mobile-slider">
                            <div class="single-slider">
                                <div class="card card-testimonil-03">
                                    <div class="card-info">
                                        <div class="card-info--img">
                                            <img src="/img/home-3/t-3.png" alt="xlient-image">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-body--name">Nicole Layton </h6>
                                            <small class="text-dark card-body--profession">America</small>
                                        </div>
                                    </div>
                                    <p class="heading-dark card-text">"Accurate, informative, easy to use! The clean and
                                        fun design makes tracking your cycle, dare I say, fun?"</p>
                                </div>
                            </div>
                            <div class="single-slider">
                                <div class="card card-testimonil-03">
                                    <div class="card-info">
                                        <div class="card-info--img">
                                            <img src="/img/home-3/t-2.png" alt="xlient-image">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-body--name">Sophie Mumbai</h6>
                                            <small class="text-dark card-body--profession">India</small>
                                        </div>
                                    </div>
                                    <p class="heading-dark card-text">"This web is almost scary with how accurate it is in
                                        prediction of ovulation and menstruation times. I'd give 10 stars if I could."</p>
                                </div>
                            </div>
                            <div class="single-slider">
                                <div class="card card-testimonil-03">
                                    <div class="card-info">
                                        <div class="card-info--img">
                                            <img src="/img/home-3/t-3.png" alt="xlient-image">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-body--name">Marie Smith</h6>
                                            <small class="text-dark card-body--profession">England.</small>
                                        </div>
                                    </div>
                                    <p class="heading-dark card-text">"It does the job well. Accurately predicts my very
                                        regular cycle, so it's quicker than me just counting days."</p>
                                </div>
                            </div>
                            <div class="single-slider">
                                <div class="card card-testimonil-03">
                                    <div class="card-info">
                                        <div class="card-info--img">
                                            <img src="/img/home-3/t-2.png" alt="xlient-image">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-body--name">Robert Fox</h6>
                                            <small class="text-dark card-body--profession">Digital Marketer</small>
                                        </div>
                                    </div>
                                    <p class="heading-dark card-text">OMG! I cannot believe that I have got a brand new
                                        landing page after getting appmax. It was super easy to edit and publish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slider--04__control-buttons">
                            <button class="button button--prev"><img src="/img/home-4/left.svg" class="make-it-inline"
                                    alt="icon"></button>
                            <button class="button button--next"><img src="/img/home-4/right.svg" class="make-it-inline"
                                    alt="icon"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->
@endsection
