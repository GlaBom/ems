@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-6">
                <div class="card"> <br> 
                    <center>
                    <img class="rounded-circle avatar-xl" src=" {{ (!empty($userData->profile_image))? url('upload/admin_images/'.$userData->profile_image): url('upload/no_image.jpg') }} " alt="Card image cap">
                    </center>
                    <div class="card-body">

                        <h4 class="card-title">Last Name : {{ $userData->last_name }} </h4>
                        <br>
                        <h4 class="card-title">First Name : {{ $userData->first_name }} </h4>
                        <br>
                        <h4 class="card-title">Middle Name : {{ $userData->middle_name }} </h4>
                        <br>
                        <h4 class="card-title">Usertype : {{ $userData->usertype }} </h4>
                        <br>
                        <h4 class="card-title">User Email : {{ $userData->email }} </h4>
                        <br>
                        <h4 class="card-title">User Name : {{ $userData->username }} </h4>
                        <br>
                        <a href=" {{route('edit.profile')}} " class="btn btn-primary btn-rounded waves-effect waves-light" >Edit Profile</a>

                    </div>
                </div>
            </div>
        </div>


    </div>    
</div>

@endsection