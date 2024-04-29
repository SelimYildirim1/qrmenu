@extends('backend.layout.layout')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">İletişim Formları</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">Ad</th>
                                            <th data-ordering="false">Mail</th>
                                            <th data-ordering="false">Telefon</th>
                                            <th data-ordering="false">Mesaj</th>
                                            <th>Durum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($contacts))
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->mail }}</td>
                                                    <td>{{ $contact->phone }}</td>
                                                    <td>
                                                        <textarea style="width: 100%"  cols="30" rows="5">{{ $contact->message }}</textarea>
                                                    </td>
                                                    <td>
                                                    <label
                                                        class="badge bg-{{ $contact->status == '1' ? 'success' : 'danger' }}">{{ $contact->status == '1' ? 'Aktif' : 'Pasif' }}</label>
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
