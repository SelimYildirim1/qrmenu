@extends('frontend.layout.layout')
@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-4.jpg);"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>İletişim</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Map Section-->
    <div class="contact-map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.201616108687!2d28.795839476449917!3d40.99896011999809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa38fad3db7a9%3A0xde3e3336c76a1401!2zU2VmYWvDtnk!5e0!3m2!1str!2str!4v1711721812827!5m2!1str!2str"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--Contact Info Section-->
    <section class="contact-page">
        <div class="left-bg"><img src="images/background/bg-25.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
        <!--location Section-->
        <div class="location-center">
            <div class="auto-container">
                <div class="cinfo-box">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                <div class="more-link mt-5"><a href="tel:{{ $config->phone }}">{{ $config->phone }}</a>
                                </div>

                            </div>
                        </div>

                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box cp-seprator wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="300ms">
                                <h4>İletişim</h4>
                                <div class="text">{!! $config->adress !!}
                                </div>

                            </div>
                        </div>

                        <!--Block-->
                        <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                <div class="more-link mt-5"><a href="mailto:{{ $config->mail }}">{{ $config->mail }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Location form Section-->
        <div class="auto-container">
            <div class="c-page-form-box">
                <div class="row clearfix">
                    <!--form Section-->
                    <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                        <div class="title-box centered">
                            <h2>Bize Ulaşın</h2>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post" action="{{ route('saveContact') }}">
                                @csrf
                                <div class="clearfix">
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Ad Soyad"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="text" name="mail" value="" placeholder="Mail"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="Telefon"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Mesaj" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">Gönder</span>
                                                <span class="text-two">Gönder</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--form image Section-->
                    <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                        <img src="images/resource/restaurant.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
