@extends('backend.layout.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                @if (session()->get('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                @if (!empty($products->id))
                    @php
                        $routelink = route('panel.products.update', $products->id);
                    @endphp
                @else
                    @php
                        $routelink = route('panel.products.store');

                    @endphp
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ $routelink }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @if (!empty($products->id))
                                @method('PUT')
                            @endif
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">{{ $products->name ?? 'Ürün' }}</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            @if (!empty($products->image))
                                                <div class="thumbnail">
                                                    <img src="{{ asset($products->image) }}"
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
                                                    <label for="placeholderInput" class="form-label">Ad</label>
                                                    <input type="text" name="name" value="{{ $products->name ?? '' }}"
                                                        class="form-control" id="placeholderInput" placeholder="Ad">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Açıklama</label>
                                                    <input type="text" name="description"
                                                        value=" {{ $products->description ?? '' }}" class="form-control"
                                                        id="placeholderInput" placeholder="Açıklama">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Fiyat</label>
                                                    <input type="text" name="price"
                                                        value=" {{ $products->price ?? '' }}" class="form-control"
                                                        id="placeholderInput" placeholder="Fiyat">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Menü</label>
                                                    <select name="MenuCat" class="form-control">
                                                        @if (!empty($menus))
                                                            @foreach ($menus as $menu)
                                                                <option value="{{ $menu->id }}"
                                                                    {{ isset($products) && $products->MenuCat == $menu->id ? 'selected' : '' }}>
                                                                    {{ $menu->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Durum</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1"
                                                            {{ isset($products) && $products->status == '1' ? 'selected' : '' }}>
                                                            Aktif</option>
                                                        <option value="0"
                                                            {{ isset($products) && $products->status == '0' ? 'selected' : '' }}>
                                                            Pasif</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end row-->
                                    </div>
                                    @if (!empty($products->id))
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
