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
                        <form action="{{ route('panel.about.update') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Hakkımızda</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            @if (!empty($about->image))
                                                <div class="thumbnail">
                                                    <img src="{{ asset($about->image) }}"
                                                        alt="{ $slide->name }}{ $slide->name }}">
                                                </div>
                                            @endif
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="formFile" class="form-label">Resim</label>
                                                    <input class="form-control" name="image" type="file"
                                                        id="formFile">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Başlık</label>
                                                    <input type="text" name="title" value="{{ $about->title ?? '' }}"
                                                        class="form-control" id="placeholderInput" placeholder="Ad">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">İçerik</label>
                                                    <textarea name="description" id="description" cols="30" rows="10">{{ $about->description ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light mt-4">Güncelle</button>

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                        </form>
                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
            <script>
                ClassicEditor
                    .create(document.querySelector('#description'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        @endsection
