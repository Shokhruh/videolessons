@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Foydalanuvchini ko'rish</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <table id="demo-custom-toolbar" data-toggle="table" data-buttons-class="md btn-light" data-sort-name="id" class="table-striped">
                        <tr>
                            <th class="fw-bold">Foydalanuvchi nomi</th>
                            <td>{{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">FIO</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Lavozimi</th>
                            <td>{{ $user->position }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Foydalanuvchi elektron pochtasi</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Foydalanuvchi roli</th>
                            <td>{{ $user->role->position }}</td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Foydalanuvchi rasmi</th>
                            <td><img style="width: 150px;" src="/storage/{{ $user->photo }}" alt=""></td>
                        </tr>
                        <tr>
                            <th class="fw-bold">Status</th>
                            <td style="font-size: 16px;"><?= ($user->status)? "<span class='badge badge-outline-success'>Active</span>" : "<span class='badge badge-outline-danger'>Block</span>"?></td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
