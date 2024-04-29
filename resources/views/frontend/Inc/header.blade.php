<!-- Main Header-->
<header class="main-header header-down">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <ul class="top-info clearfix">
                        </li>
                        <li><i class="icon far fa-clock"></i> Çalışma Saatlerimiz : {{ $config->baslangic_saati }} -
                            {{ $config->bitis_saati }}</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="top-info clearfix">
                        <li><a href="tel:{{ $config->phone }}"><i class="icon far fa-phone"></i>
                                {{ $config->phone }}</a></li>
                        <li><a href="mailto:{{ $config->mail }}"><i class="icon far fa-envelope"></i>
                                {{ $config->mail }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}" title=""><img
                                src="{{ asset($config->logo) }}" alt="" title=""></a>
                    </div>
                </div>

                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('index') }}">ANA SAYFA</a>
                                </li>
                                <li><a href="{{ route('menu') }}">MENU</a>
                                </li>
                                <li><a href="{{ route('about') }}">HAKKIMIZDA</a></li>
                                <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a href="tel:{{ $config->phone }}" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Bize Ulaşın</span>
                                    <span class="text-two">Bize Ulaşın</span>
                                </span>
                            </a>
                        </div>

                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener">
                            <span class="hamburger">
                                <span class="top-bun"></span>
                                <span class="meat"></span>
                                <span class="bottom-bun"></span>
                            </span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
<!--End Main Header -->

<!--Menu Backdrop-->
<div class="menu-backdrop"></div>

<!-- Hidden Navigation Bar -->
<section class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="inner-box">
        <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
        <div class="logo-box">
            <div class="logo"><a href="{{ route('index') }}" title=""><img src="{{ asset($config->logo) }}"
                        alt="" title=""></a>
            </div>
        </div>

        <!-- .Side-menu -->
        <div class="side-menu">
            <ul class="navigation clearfix">
                <li><a href="{{ route('index') }}">ANA SAYFA</a>
                </li>
                <li><a href="{{ route('menu') }}">MENU</a>
                </li>
                <li><a href="{{ route('about') }}">HAKKIMIZDA</a></li>
                <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
            </ul>
        </div><!-- /.Side-menu -->

        <ul class="info">
            <li>{!! $config->adress !!}</li>
            <li>Çalışma Saatlerimiz: {{ $config->baslangic_saati }} - {{ $config->bitis_saati }}</li>
            <li><a href="mailto:{{ $config->mail }}{{ $config->mail }}">{{ $config->mail }}</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-no"><a href="tel:{{ $config->phone }}">{{ $config->phone }}</a></div>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</section>
<!-- / Hidden Bar -->

<!--Info Back Drop-->
<div class="info-back-drop"></div>

<!-- Hidden Bar -->
<section class="info-bar">
    <div class="inner-box">
        <div class="cross-icon"><span class="far fa-close"></span></div>
        <div class="logo-box">
            <div class="logo"><a href="{{ route('index') }}" title=""><img src="{{ asset($config->logo) }}"
                        alt="" title=""></a>
            </div>
        </div>
        <div class="image-box"><img src="images/resource/sidebar-image.jpg" alt="" title=""></div>

        <ul class="info">
            <li>{!! $config->adress !!}</li>
            <li>Çalışma Saatlerimiz: {{ $config->baslangic_saati }} - {{ $config->bitis_saati }}</li>
            <li><a href="mailto:{{ $config->mail }}">{{ $config->mail }}</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-no"><a href="tel:{{ $config->phone }}">{{ $config->phone }}</a></div>
        </div>
    </div>
</section>
<!--End Hidden Bar -->
