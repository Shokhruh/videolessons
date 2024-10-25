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
                    <form action="{{ route('roles.update', ['role' => $role->id]) }}" method="post" enctype="multipart/form-data">
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
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">Roli</label>
                                                <input type="text" name="position" class="form-control" id="11" value="{{ $role->position }}">
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
                                            <label style="margin-bottom: 10px;">Holati</label>
                                            <select class="form-select mb-3" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Block</option>
                                            </select>
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
