@extends('backend.layout.layout')
@section('content')
    
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Ürünler</h5>
                            </div>
                            <div class="card-body">
                                <a type="button" href="{{ route('panel.products.create') }}"
                                    class="btn btn-success waves-effect waves-light mb-3">Yeni Ekle</a>
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">Resim</th>
                                            <th data-ordering="false">Ürün Adı</th>
                                            <th data-ordering="false">Ürün Açıklaması</th>
                                            <th data-ordering="false">Fiyat</th>
                                            <th data-ordering="false">Menü Adı</th>
                                            <th data-ordering="false">Durum</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($menus))
                                            @foreach ($menus as $product)
                                                <tr>
                                                    <td style="width: 15%">
                                                        @if ($product->image)
                                                            <div class="thumbnail">
                                                                <img src="{{ asset($product->image) }}"
                                                                    alt="{ $product->name }}{ $product->name }}"
                                                                    class="mt-5">
                                                            </div>
                                                        @else
                                                            <p>Resim bulunamadı.</p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->description }}</td>
                                                    <td>{{ $product->price }} ₺</td>
                                                    @if (!empty($product->menus))
                                                        <td>{{ $product->menus->name }}</td>
                                                    @else
                                                        <td>Menü Bulunamadı</td>
                                                    @endif
                                                    <td><label
                                                            class="badge bg-{{ $product->status == '1' ? 'success' : 'danger' }}">{{ $product->status == '1' ? 'Aktif' : 'Pasif' }}</label>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item edit-item-btn"
                                                                        href="{{ route('panel.products.edit', $product->id) }}"><i
                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Düzenle</a></li>
                                                                <li>
                                                                    {{-- <form
                                                                        action="{{ route('panel.products.destroy', $product->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="dropdown-item remove-item-btn">
                                                                            <i
                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                            Sil
                                                                        </button>
                                                                    </form> --}}
                                                                    <button
                                                                        class="delete-products dropdown-item remove-item-btn"
                                                                        data-id="{{ $product->id }}">
                                                                        <i
                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Sil
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>

    <script>
        $(document).ready(function() {
            $('.delete-products').click(function(e) {
                e.preventDefault();
                var productsId = $(this).data('id');
                $.ajax({
                    url: '{{ route('panel.products.destroy', ['id' => ':id']) }}'.replace(':id',
                        productsId),
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Ürün başarıyla silindiğinde yapılacak işlemler
                        console.log(response);
                        // Örneğin, ürünü arayüzden kaldırabilir veya bir bildirim gösterebilirsiniz.
                    },
                    error: function(xhr) {
                        // Hata durumunda yapılacak işlemler
                        console.log(xhr.responseText);
                    }
                });

            });
        });
    </script>
@endsection
