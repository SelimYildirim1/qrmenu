@extends('frontend.layout.layout')
@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-container">
            <div class="banner-slider">
                <div class="swiper-wrapper">

                    @if (!empty($slider))
                        @foreach ($slider as $slide)
                            <!--Slide Item-->
                            <div class="swiper-slide slide-item">
                                <div class="image-layer" style="background-image: url({{ asset($slide->image) }});">
                                </div>
                                <div class="auto-container">
                                    <div class="content-box">
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="inner">
                                                    <div class="pattern-image"><img src="images/icons/separator.svg"
                                                            alt="" title=""></div>
                                                    <h1><span>{{ $slide->name }}</span></h1>
                                                    <div class="text">{{ $slide->content }}
                                                    </div>
                                                    <div class="links-box wow fadeInUp" data-wow-delay="0ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="link">
                                                            <a href="{{ route('menu') }}"
                                                                class="theme-btn btn-style-two clearfix">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Menüyü Gör</span>
                                                                    <span class="text-two">Menüyü Gör</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif



                </div>
                <div class="swiper-button-prev"><span class="fal fa-angle-left"></span></div>
                <div class="swiper-button-next"><span class="fal fa-angle-right"></span></div>
            </div>
        </div>


    </section>
    <!--End Banner Section -->

    <!--We Offer Section-->
    <section class="we-offer-section">
        <div class="left-bot-bg"><img src="images/background/bg-1.png" alt="" title=""></div>
        <div class="right-top-bg"><img src="images/background/bg-2.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image"><a href="{{ route('menu') }}"><img src="{{ asset($config->menu) }}"
                                    alt=""></a></div>
                        <div class="more-link"><a href="{{ route('menu') }}">Menüyü Gör</a></div>
                    </div>
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                </div>

            </div>
        </div>
    </section>

    <!--Story Section-->
    <section class="story-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="text-col col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box centered">
                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title="">
                            </div>
                            <h2>{{ $about->title }}</h2>
                            <div class="text">{!! $about->description !!}.</div>
                        </div>
                        <div class="booking-info">
                            <div class="bk-no"><a href="tel:{{ $config->phone }}">{{ $config->phone }}</a></div>

                            <div class="link-box">
                                <a href="route('about')" class="theme-btn btn-style-two clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">Daha Fazla</span>
                                        <span class="text-two">Daha Fazla</span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Col-->
                <div class="image-col col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="images parallax-scene-1">
                            </div>
                            <div class="image" data-depth="0.30"><img src="{{ $about->image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
