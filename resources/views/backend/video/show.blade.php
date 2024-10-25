@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Kursni ko'rish</h4>
                        <a href="{{ route('videos.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table" data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <tr>
                            <th class="fw-bold" style="width: 300px">Videodars nomi</th>
                            <td>{{ $video->name }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Kurs nomi</th>
                            <td>{{ $video->course->name }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Muallif</th>
                            <td>{{ $video->getAuthorName($video) }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Davomiyligi</th>
                            <td>{{ $video->min . " min " . $video->sec . " sekund" }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Videodars uchun rasm</th>
                            <td><img style="width: 150px;" src="/storage/{{ $video->thumbnail }}" alt=""></td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Status</th>
                            <td style="font-size: 16px;"><?= ($video->status)? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                        </tr>
                        <tr>
                            <th class="fw-bold" style="width: 300px">Video</th>
                            <td>
                                <video width="100%" height="300" controls>
                                    <source src="{{ asset('/storage/' . $video->video) }}" type="video/mp4">
                                </video>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
