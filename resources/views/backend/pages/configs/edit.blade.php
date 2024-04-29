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
                <!-- end page title -->
                @if (session()->get('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('panel.settings.update') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-xxl-12">
                                <h5 class="mb-3">Site Ayarları</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-justified nav-border-top nav-border-top-success mb-3"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#nav-border-justified-home" role="tab" aria-selected="false">
                                                    <i class="fa-solid fa-image"></i> Logo Ve Resim Ayarları
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#nav-border-justified-profile" role="tab"
                                                    aria-selected="false">
                                                    <i class="fa-solid fa-gears"></i> Site Ayarları
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active" id="nav-border-justified-home" role="tabpanel">
                                                @if (!empty($configs->logo))
                                                    <div class="thumbnail">
                                                        <img src="{{ asset($configs->logo) }}">
                                                    </div>
                                                @endif
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="formFile" class="form-label">Logo</label>
                                                        <input class="form-control" name="logo" type="file"
                                                            id="formFile">
                                                    </div>
                                                </div>
                                                @if (!empty($configs->icon))
                                                    <div class="thumbnail">
                                                        <img src="{{ asset($configs->icon) }}">
                                                    </div>
                                                @endif
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="formFile" class="form-label">İcon</label>
                                                        <input class="form-control" name="icon" type="file"
                                                            id="formFile">
                                                    </div>
                                                </div>
                                                @if (!empty($configs->menu))
                                                    <div class="thumbnail">
                                                        <img src="{{ asset($configs->menu) }}">
                                                    </div>
                                                @endif
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="formFile" class="form-label">Menü</label>
                                                        <input class="form-control" name="menu" type="file"
                                                            id="formFile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="nav-border-justified-profile" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="live-preview">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Başlık</label>
                                                                    <input type="text" name="site_baslik"
                                                                        value="{{ $configs->site_baslik ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Başlık">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Açıklama</label>
                                                                    <input type="text" name="site_aciklama"
                                                                        value="{{ $configs->site_aciklama ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Açıklama">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Mail</label>
                                                                    <input type="text" name="mail"
                                                                        value="{{ $configs->mail ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Mail">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Telefon</label>
                                                                    <input type="text" name="phone"
                                                                        value="{{ $configs->phone ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Telefon">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Başlangıç Saati</label>
                                                                    <input type="text" name="baslangic_saati"
                                                                        value="{{ $configs->baslangic_saati ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Başlangıç Saati">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Kapanış Saati</label>
                                                                    <input type="text" name="bitis_saati"
                                                                        value="{{ $configs->bitis_saati ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Kapanış Saati">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-4">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">İnstagram</label>
                                                                    <input type="text" name="instagram"
                                                                        value="{{ $configs->instagram ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="İnstagram">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-4">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Facebook</label>
                                                                    <input type="text" name="facebook"
                                                                        value="{{ $configs->facebook ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Facebook">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-4">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Twitter</label>
                                                                    <input type="text" name="twitter"
                                                                        value="{{ $configs->twitter ?? '' }}"
                                                                        class="form-control" id="placeholderInput"
                                                                        placeholder="Twitter">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div>
                                                                    <label for="placeholderInput"
                                                                        class="form-label">Adres</label>
                                                                    <textarea name="adress" id="adress" cols="30" rows="10">{{ $configs->adress ?? '' }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end row-->
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-light mt-4">Güncelle</button>
                                        </div>
                                    </div><!-- end card-body -->
                                </div>
                            </div>
                        </form>
                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#adress'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        @endsection
