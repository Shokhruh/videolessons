@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Kurs qo'shish</h4>
                        <a href="{{ route('courses.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">Kurs nomi</label>
                                                <input type="text" name="name" class="form-control" id="11">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <input type="hidden" name="user_id" class="form-control" id="11" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="12" class="form-label">Kimlar uchun?</label>
                                                <input type="text" name="for_whom" class="form-control" id="12">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;" for="desc" class="form-label">Description</label>
                                                <textarea class="form-control" rows="50" id="desc" name="description"></textarea>
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;">Soxasi</label>
                                                <select class="form-select mb-3" name="field_id">
                                                    @foreach($fields as $field)
                                                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

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
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Input with Placeholder -->
                                        <div style="margin-bottom: 20px;">
                                            <label style="margin-bottom: 10px;" for="16" class="form-label">Qisqa rasm</label>
                                            <input type="file" name="thumbnail" class="form-control" id="16">
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
@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
