@extends('frontend.layout.layout')
@section('content')
    <!--Fluid Section-->
    <section class="fluid-section">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-layer" style="background-image: url({{ $about->image }});"></div>
                        <div class="image"><img src="{{ $about->image }}" alt=""></div>
                    </div>
                </div>
                <!--Col-->
                <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="right-bg"><img src="images/background/bg-12.png" alt="" title=""></div>
                    <div class="inner clearfix wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content-box">
                            <div class="title-box centered">
                                <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                        title=""></div>
                                <h2>{{ $about->title }}</h2>
                                <div class="text">{!! $about->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
