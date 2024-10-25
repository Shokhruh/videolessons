@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Foydalanuvchini tahrirlash</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Input with Placeholder -->
                                        <div style="margin-bottom: 20px;">
                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">Username</label>
                                                <input type="text" name="username" class="form-control" id="11" value="{{ $user->username }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">FIO</label>
                                                <input type="text" name="name" class="form-control" id="11" value="{{ $user->name }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">Lavozimi</label>
                                                <input type="text" name="position" class="form-control" id="11" value="{{ $user->position }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="12" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="12" value="{{ $user->email }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="where_uz" class="form-label">Parol <span style="color: red">(Tavsiya: parolni o'zgartirmoqchi bo'lsangiz avval o'chirib yuborib keyin yangi parolni kiriting!)</span></label>
                                                <input type="password" name="password" class="form-control" id="where_uz" value="{{ $user->password }}">
                                            </div>

                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-6">
                                                    <div style="margin-bottom: 20px;">
                                                        <label style="margin-bottom: 10px;">Roli</label>
                                                        <select class="form-select mb-3" name="role_id">
                                                            @foreach($roles as $role)
                                                                <option value="{{ $role->id }}">{{ $role->position }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="margin-bottom: 20px;">
                                                        <label style="margin-bottom: 10px;">Holati</label>
                                                        <select class="form-select mb-3" name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Input with Placeholder -->
                                        <div style="margin-bottom: 20px;">
                                            <label style="margin-bottom: 10px;" for="16" class="form-label">Rasmi</label>
                                            <input type="file" name="photo" class="form-control" id="16">
                                        </div>
                                        <button class="btn btn-success" style="margin-top: 25px;">Qo'shish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
