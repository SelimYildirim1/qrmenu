@extends('backend.layout.layout')
@section('content')
    <style>
        .thumbnail {
            width: 150px;
            /* Kare ve Thumbnail boyutu */
            height: 150px;
            /* Kare ve Thumbnail boyutu */
            overflow: hidden;
            /* Resim dışarı taşırsa kes */
        }

        .thumbnail img {
            width: 100%;
            /* Resmi 100% genişlikte yaparak kutunun içine sığdır */
            height: auto;
            /* Otomatik yükseklik ayarı, orantılı olarak boyutlandır */
        }
    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div>
                    <h1>QR Code</h1>
                    <img src="{{ asset('qrcodes/qrcode.png') }}" alt="QR Code">
                </div>

            </div>
        </div>
    </div>
@endsection
