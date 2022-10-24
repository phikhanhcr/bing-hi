@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <div class="site-wrapper overflow-hidden">
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="/img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <img src="/img/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <img src="/img/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <img src="/img/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-light title mb-20 text-dark">About Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-dark">Home</li>
                                    <li class="breadcrumb-item text-dark" aria-current="page">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="termscontent-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="termscontent-section__content">
                            <div class="termscontent-section__content--texts">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <p class="text-dark text-start" style="font-size: 20px; margin: 10px 0 20px 0;">
                                        Our mission is to boost your content marketing. <br> <br>

                                        Your customers, leads, and audience members who want valuable content from your business. And that content needs to reach audience members in a way that feels natural and organic versus being disruptive. Content marketing helps businesses do this, and it describes the process of attracting, engaging with, and delighting your target markets.
                                        
                                        By honing in on effective content marketing with Contentix, you can do just that — and as a result, increase conversions, improve brand awareness, boost revenue, establish yourself as an industry leader, and more. 
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
