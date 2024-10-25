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
                        <h4>Soxalar ro'yxati</h4>
                        <a href="{{ route('fields.create') }}" class="btn btn-success"></i>Qo'shish</a>
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table" data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <thead class="table-light">
                            <tr>
                                <th class="w-10">T/r</th>
                                <th class="text-center w-50">Nomi</th>
                                <th class="text-center w-25">Holati</th>
                                <th class="w-25" style="width: 300px;">Amallar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($fields as $key => $field)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="text-center">{{ $field->name }}</td>
                                    <td style="font-size: 16px;" class="text-center"><?= ($field->status)? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <a class="btn btn-sm btn-primary edit-item-btn" href="{{ route('fields.show', ['field' => $field->id]) }}">Ko'rish</a>
                                            </div>
                                            <div class="edit">
                                                <a class="btn btn-sm btn-success edit-item-btn" href="{{ route('fields.edit', ['field'=> $field->id]) }}">Tahrirlash</a>
                                            </div>
                                            <div class="remove">
                                                <form action="{{ route('fields.destroy', ['field' => $field->id]) }}" method="post" onsubmit='return confirm("Rostdan ham ushbu rolni ochirmoqchimisiz?")'>
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger remove-item-btn">O'chirish</button>
                                                </form>
                                            </div>
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
