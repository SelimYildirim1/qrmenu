@extends('backend.layout.layout')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Rezervasyonlar</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">Ad Soyad</th>
                                            <th data-ordering="false">Telefon</th>
                                            <th data-ordering="false">Kişi Sayısı</th>
                                            <th data-ordering="false">Tarih</th>
                                            <th data-ordering="false">Saat</th>
                                            <th data-ordering="false">Mesaj</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($rezervation))
                                            @foreach ($rezervation as $r)
                                                <tr>
                                                    <td>{{ $r->name }}</td>
                                                    <td>{{ $r->phone }}</td>
                                                    <td>{{ $r->person }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($r->date)->format('d/m/Y') }}</td>
                                                    <td>{{ $r->time }}</td>
                                                    <td>
                                                        <textarea style="width: 100%"  cols="30" rows="5">{{ $r->message }}</textarea>
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
        ClassicEditor
            .create(document.querySelector('#message'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
