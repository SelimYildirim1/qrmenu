@extends('backend.layout.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                @if (session()->get('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                @if (!empty($gallery->id))
                    @php
                        $routelink = route('panel.gallery.update', $gallery->id);
                    @endphp
                @else
                    @php
                        $routelink = route('panel.gallery.store');

                    @endphp
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ $routelink }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @if (!empty($gallery->id))
                                @method('PUT')
                            @endif
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Galeri</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            @if (!empty($gallery->images))
                                                <div class="thumbnail">
                                                    <img src="{{ asset($gallery->images) }}"
                                                        alt="{ $slide->name }}{ $slide->name }}">
                                                </div>
                                            @endif
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="formFile" class="form-label">Resim</label>
                                                    <input class="form-control" name="gallery" type="file"
                                                        id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Durum</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1"
                                                            {{ isset($gallery) && $gallery->status == '1' ? 'selected' : '' }}>
                                                            Aktif</option>
                                                        <option value="0"
                                                            {{ isset($gallery) && $gallery->status == '0' ? 'selected' : '' }}>
                                                            Pasif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (!empty($gallery->id))
                                        <button type="submit"
                                            class="btn btn-success waves-effect waves-light mt-4">Güncelle</button>
                                    @else
                                        <button type="submit"
                                            class="btn btn-success waves-effect waves-light mt-4">Ekle</button>
                                    @endif

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                        </form>
                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
        @endsection
