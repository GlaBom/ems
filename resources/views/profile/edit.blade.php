@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile</h4><br>

                            <form method="post" action=" {{ route('store.profile') }} " enctype="multipart/form-data">

                                @csrf

                                {{-- last_name --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input name='last_name' class="form-control" type="text"
                                            value=" {{ $editData->last_name }}">
                                        @error('last_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                {{-- first_name --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input name='first_name' class="form-control" type="text"
                                            value=" {{ $editData->first_name }} ">
                                    </div>
                                </div>
                                <!-- end row -->

                                {{-- middle_name --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Middle Name</label>
                                    <div class="col-sm-10">
                                        <input name='middle_name' class="form-control" type="text"
                                            value=" {{ $editData->middle_name }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                {{-- usertype --}}
                                @if (auth()->user()->usertype == 'admin')
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Usertype</label>
                                        <div class="col-sm-10">
                                            <input name='usertype' class="form-control" type="text"
                                                value=" {{ $editData->usertype }} ">
                                        </div>
                                    </div>

                                @else
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Usertype</label>
                                    <div class="col-sm-10">
                                        <input name='usertype' class="form-control" type="text"
                                            value=" {{ $editData->usertype }} " readonly>
                                    </div>
                                </div>
                                    
              
                                @endif

                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input name='email' class="form-control" type="text"
                                            value=" {{ $editData->email }} ">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input name='username' class="form-control" type="text"
                                            value=" {{ $editData->username }} ">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input name='profile_image' class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg"
                                            src=" {{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }} "
                                            alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->

                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light"
                                    value="Update Profile">

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
