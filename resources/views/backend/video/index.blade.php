@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    @if(\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                    @endif
                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Videolar ro'yxati</h4>
                        @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'teacher' || \Illuminate\Support\Facades\Auth::user()->role->position === 'developer')
                            <a href="{{ route('videos.create') }}" class="btn btn-success"></i>Qo'shish</a>
                        @endif
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table"
                           data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <thead class="table-light">
                            <tr>
                                <th class="w-10 text-center">T/r</th>
                                <th class="text-center w-20">Nomi</th>
                                <th class="text-center w-20">Kurs nomi</th>
                                <th class="text-center w-20">Muallifi</th>
                                <th class="text-center w-20">Holati</th>
                                <th class="text-center">Rasmi</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($videos as $key => $video)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $video->name }}</td>
                                    <td>{{ $video->course->name }}</td>
                                    <td>{{ $video->getAuthorName($video) }}</td>
                                    <td style="font-size: 16px;"><?= ($video->status) ? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                                    <td class="text-center"><img style="width: 150px;" src="{{ asset('/storage/' . $video->thumbnail) }}" alt=""></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <a class="btn btn-sm btn-primary edit-item-btn" href="{{ route('videos.show', ['video' => $video->id]) }}">Ko'rish</a>
                                            </div>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'teacher' || \Illuminate\Support\Facades\Auth::user()->role->position === 'developer')
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-success edit-item-btn" href="{{ route('videos.edit', ['video'=> $video->id]) }}">Tahrirlash</a>
                                                </div>
                                                <div class="remove">
                                                    <form action="{{ route('videos.destroy', ['video' => $video->id]) }}" method="post" onsubmit='return confirm("Rostdan ham ushbu videoni ochirmoqchimisiz?")'>
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger remove-item-btn">O'chirish</button>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
