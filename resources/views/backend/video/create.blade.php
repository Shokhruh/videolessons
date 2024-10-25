@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="margin-top: 30px;">
                <div class="card-body">

                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <h4>Foydalanuvchi qo'shish</h4>
                        <a href="{{ route('videos.index') }}" class="btn btn-warning"></i>Ortga qaytish</a>
                    </div>
                    <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data">
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
                                                <label style="margin-bottom: 10px;" for="11" class="form-label">Videodars nomi</label>
                                                <input type="text" name="name" class="form-control" id="11">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <input type="hidden" name="user_id" class="form-control" id="11" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label style="margin-bottom: 10px;">Kurs nomi</label>
                                                <select class="form-select mb-3" name="course_id">
                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div style="margin-bottom: 20px;">
                                                        <label style="margin-bottom: 10px;" for="12" class="form-label">Minut</label>
                                                        <input type="number" name="min" class="form-control" id="12">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div style="margin-bottom: 20px;">
                                                        <label style="margin-bottom: 10px;" for="sec" class="form-label">Sekund</label>
                                                        <input type="number" name="sec" class="form-control" id="sec">
                                                    </div>
                                                </div>
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

                                        <div style="margin-bottom: 20px;">
                                            <label style="margin-bottom: 10px;" for="16" class="form-label">Video fayl</label>
                                            <input type="file" name="video" class="form-control" id="16" accept="video/*">
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
