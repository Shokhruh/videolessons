@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Hujjatni ko'rish</h4>
                        <a href="{{ route('docs.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table" data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <tr>
                            <th class="fw-bold">Kurs nomi</th>
                            <td>{{ $doc->name }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Muallif</th>
                            <td>{{ $doc->getAuthorName($doc) }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Kurs nomi</th>
                            <td>{{ $doc->video->name }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Fayl</th>
                            <td><a href="{{ asset("/storage/" . $doc->file) }}">Yuklab olish</a></td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Status</th>
                            <td style="font-size: 16px;"><?= ($doc->status)? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
