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
                        <h4>Kurslar ro'yxati</h4>
                        @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'teacher' || auth()->user()->role->position === 'developer')
                            <a href="{{ route('courses.create') }}" class="btn btn-success"></i>Qo'shish</a>
                        @endif
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table" data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <thead class="table-light">
                            <tr>
                                <th class="w-10 text-center">T/r</th>
                                <th class="text-center w-20">Nomi</th>
                                <th class="text-center w-20">Muallifi</th>
                                <th class="text-center w-20">Soxasi</th>
                                <th class="text-center w-20">Holati</th>
                                <th class="text-center">Rasmi</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($courses as $key => $course)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->user->name }}</td>
                                    <td>{{ $course->getFieldName($course) }}</td>
                                    <td style="font-size: 16px;"><?= ($course->status) ? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                                    <td class="text-center"><img style="width: 150px;" src="/storage/{{ $course->thumbnail }}" alt=""></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <a class="btn btn-sm btn-primary edit-item-btn" href="{{ route('courses.show', ['course' => $course->id]) }}">Ko'rish</a>
                                            </div>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role->position === 'teacher' || \Illuminate\Support\Facades\Auth::user()->role->position === 'developer')
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-success edit-item-btn" href="{{ route('courses.edit', ['course'=> $course->id]) }}">Tahrirlash</a>
                                                </div>
                                                <div class="remove">
                                                    <form action="{{ route('courses.destroy', ['course' => $course->id]) }}" method="post" onsubmit='return confirm("Rostdan ham ushbu kursni ochirmoqchimisiz?")'>
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
