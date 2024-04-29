@extends('backend.layout.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                @if (session()->get('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                @if (!empty($menu->id))
                    @php
                        $routelink = route('panel.menu.update', $menu->id);
                    @endphp
                @else
                    @php
                        $routelink = route('panel.menu.store');
                    @endphp
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ $routelink }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @if (!empty($menu->id))
                                @method('PUT')
                            @endif
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Menü</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Ad</label>
                                                    <input type="text" name="name" value="{{ $menu->name ?? '' }}"
                                                        class="form-control" id="placeholderInput" placeholder="Ad">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Durum</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1"
                                                            {{ isset($menu) && $menu->status == '1' ? 'selected' : '' }}>
                                                            Aktif</option>
                                                        <option value="0"
                                                            {{ isset($menu) && $menu->status == '0' ? 'selected' : '' }}>
                                                            Pasif</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end row-->
                                    </div>
                                    @if (!empty($menu->id))
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
