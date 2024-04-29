<section class="image-gallery">
    <div class="carousel-box">
        <div class="auto-container">
            <div class="image-gallery-slider owl-theme owl-carousel">
                @foreach ($gallery as $g)
                    <div class="gallery-block">
                        <div class="image"><a href="{{ asset($g->images) }}" class="lightbox-image"><img
                                    src="{{ asset($g->images) }}" alt=""></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--Reservation Section-->
<section class="reserve-section style-two">
    <div class="image-layer" style="background-image: url(images/background/image-10.jpg);"></div>
    <div class="auto-container">
        <div class="outer-box">
            <div class="row clearfix">
                <div class="reserv-col col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Rezervasyon</h2>
                            <div class="request-info">Rezervasyon Talebi <a href="tel:{{ $config->phone }}">{{ $config->phone }}</a> veya Sipariş Formu Doldurun </div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post" action="{{ route('rezervation') }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="" placeholder="Ad Soyad"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="Telefon"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-user"></span>
                                            <select name="person" class="l-icon" required>
                                                <option value="1">1 Kişi</option>
                                                <option value="2">2 Kişi</option>
                                                <option value="3">3 Kişi</option>
                                                <option value="4">4 Kişi</option>
                                                <option value="5">5 Kişi</option>
                                                <option value="6">6 Kişi</option>
                                                <option value="7">7 Kişi</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-calendar"></span>
                                            <input class="l-icon datepicker" type="text" name="date"
                                                value="" placeholder="GG-AA-YYYY"
                                                title="Tarih seçmek için tıklayın" required readonly>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-clock"></span>
                                            <select name="time" class="l-icon">
                                                @php
                                                    // Başlangıç ve bitiş saatlerini alıyoruz
                                                    $baslangic_saati = $config->baslangic_saati;
                                                    $bitis_saati = $config->bitis_saati;

                                                    // Başlangıç ve bitiş saatlerini ayrıştırıyoruz
                                                    $baslangic = intval(substr($baslangic_saati, 0, 2));
                                                    $bitis = intval(substr($bitis_saati, 0, 2));

                                                    // Başlangıç ve bitiş saatleri arasındaki saatleri içeren bir dizi oluşturuyoruz
                                                    $saatler = [];
                                                    for ($i = $baslangic; $i <= $bitis; $i++) {
                                                        // Saat formatını 2 haneli olacak şekilde ayarlıyoruz
                                                        $saat = sprintf('%02d', $i);
                                                        // Seçeneği diziye ekliyoruz
                                                        $saatler[$saat] = $saat . ' : 00';
                                                    }
                                                @endphp

                                                {{-- Seçenekleri döngüyle oluşturup ekrana yazdırıyoruz --}}
                                                @foreach ($saatler as $saat)
                                                    <option value="{{ $saat }}">{{ $saat }}</option>
                                                @endforeach
                                            </select>

                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Mesajınız" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Rezervasyon Oluştur</span>
                                                    <span class="text-two">Rezervasyon Oluştur</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Main Footer-->
<footer class="main-footer">
    <div class="image-layer" style="background-image: url(images/background/image-4.jpg);"></div>
    <div class="upper-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Footer Col-->
                <div class="footer-col info-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="logo"><a href="{{ route('index') }}"
                                    title="Delici - Restaurants HTML Template"><img src="{{ asset($config->logo) }}"
                                        width="100" height="100" alt=""
                                        title="Delici - Restaurants HTML Template"></a></div>
                            <div class="info">
                                <ul>
                                    <li>{!! $config->adress !!}</li>
                                    <li><a href="mailto:{{ $config->mail }}{{ $config->mail }}">{{ $config->mail }}</a>
                                    </li>
                                    <li><a href="tel:{{ $config->phone }}">{{ $config->phone }}</a></li>
                                    <li>Çalışma Saatlerimiz: {{ $config->baslangic_saati }} -
                                        {{ $config->bitis_saati }}</li>
                                </ul>
                            </div>
                            <div class="separator"><span></span><span></span><span></span></div>
                        </div>
                    </div>
                </div>
                <!--Footer Col-->
                <div class="footer-col links-col col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="links">
                            <li><a href="{{ route('index') }}">ANA SAYFA</a>
                            </li>
                            <li><a href="{{ route('menu') }}">MENU</a>
                            </li>
                            <li><a href="{{ route('about') }}">HAKKIMIZDA</a></li>
                            <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                        </ul>
                    </div>
                </div>
                <!--Footer Col-->
                <div class="footer-col links-col last col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="links">
                            <li><a href="{{ $config->facebook }}">facebook</a></li>
                            <li><a href="{{ $config->instagram }}">instagr</a></li>
                            <li><a href="{{ $config->twitter }}">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">&copy; 2024 QrMenü. Tüm Hakları Saklıdır </div>
        </div>
    </div>
</footer>
<style>
    #whatsapp-icon {
        position: fixed;
        bottom: 20px;
        /* İstediğiniz mesafeyi ayarlayabilirsiniz */
        left: 20px;
        /* İstediğiniz mesafeyi ayarlayabilirsiniz */
        z-index: 1000;
        /* Diğer elementlerin üzerine çıkması için */
    }

    #whatsapp-icon img {
        width: 70px;
        /* İstediğiniz genişliği ayarlayabilirsiniz */
        height: auto;
        border-radius: 50%;
        /* İstediğiniz şekilde kenarlık ekleyebilirsiniz */
    }
</style>

<div id="whatsapp-icon">
    <a href="https://wa.me/9{{ $config->phone }}" target="_blank">
        <img src="images/wp1.png" alt="Whatsapp">
    </a>
</div>
