@extends('backend.layouts.main')
@section('content')
    <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12 col-xl-12">
                        <div class="card" style="margin-top: 30px;">
                            <div class="card-body">

                                <div class="tab-content">

                                    <div class="tab-pane show active" id="settings">
                                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Shaxsiy ma'lumotlar</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstname" class="form-label">Ism va familyangiz</label>
                                                        <input type="text" name="name" class="form-control" id="firstname" value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">Elektron pochta</label>
                                                        <input type="email" name="email" class="form-control" id="useremail" value="{{ $user->email }}">
                                                    </div>
                                                </div>

                                                <input type="hidden" name="username" value="{{ $user->username }}">
                                                <input type="hidden" name="role_id" value="{{ $user->role_id }}">
                                                <input type="hidden" name="status" value="{{ $user->status }}">
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Parol</label>
                                                        <input type="password" name="password" class="form-control" id="userpassword" value="{{ $user->password }}">
                                                    </div>
                                                </div> <!-- end col -->

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Ilmiy daraja yoki lavozimi</label>
                                                        <input type="text" name="position" class="form-control" id="userpassword" value="{{ $user->position }}">
                                                    </div>
                                                </div> <!-- end col -->

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="userpassword" class="form-label">Rasm</label>
                                                        <input type="file" name="photo" class="form-control" id="userpassword">
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="userbio" class="form-label">Bio</label>
                                                        <textarea name="bio" class="form-control" id="userbio" rows="4">{{ $user->bio }}</textarea>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->


                                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Ijtimoiy tarmoqlar <span style="color: red">(majburiy emas)</span></h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-fb" class="form-label">Facebook</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                            <input type="text" name="fb" class="form-control" id="social-fb" value="{{ $user->fb }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-tw" class="form-label">Telegram</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fab fa-telegram"></i></span>
                                                            <input type="text" name="tg" class="form-control" id="social-tw" value="{{ $user->tg }}">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-insta" class="form-label">Instagram</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                            <input name="ins" type="text" class="form-control" id="social-insta" value="{{ $user->ins }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="social-lin" class="form-label">Linkedin</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                            <input type="text" name="ln" class="form-control" id="social-lin" value="{{ $user->ln }}">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->


                                            <div class="text-end">
                                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Saqlash</button>
                                            </div>
                                        </form>
                                    </div>

                                </div> <!-- end tab-content -->
                            </div>
                        </div> <!-- end card-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- container -->

    </div> <!-- content -->
@endsection
