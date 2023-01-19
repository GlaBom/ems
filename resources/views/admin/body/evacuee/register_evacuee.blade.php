@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Evacuee</h4>

                        {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            li class="breadcrumb-item active">Dashboard</li>
                        </ol><li class="breadcrumb-item"><a href="javascript: void(0);">EMS</a></li>
                            <
                    </div> --}}

                    </div>
                </div>
            </div>

            {{-- end page title --}}
            {{-- start add evacuee --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action=" {{ url('/manage/save_evacuee') }} " method="post" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <form action=" {{ url('/manage/save_evacuee') }} " method="post" data-select2-id="13">
                                    @csrf


                                    <div class="row">

                                        {{-- last name --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"><br>
                                                <label class="form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input name='last_name' class="form-control"
                                                        type="text"value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- first name --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"> <br>
                                                <label class="form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input name='first_name' class="form-control" type="text"
                                                        value=" {{ old('first_name') }}">
                                                    @error('first_name')
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- middle name --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"> <br>
                                                <label class="form-label">Middle Name</label>
                                                <div class="col-sm-10">
                                                    <input name='middle_name' class="form-control" type="text"
                                                        value=" {{ old('middle_name') }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- gender --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"> <br>
                                                <label class="form-label">Gender</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- birthdate --}}

                                        <div class="col-md-3">
                                          <div class="mb-0 position-relative"> <br>
                                              <label class="form-label">Birthdate</label>
                                              <div class="col-sm-10">
                                                  <input name='birthdate' class="form-control" type="date"
                                                      value=" {{ old('birthdate') }}">
                                              </div>
                                          </div>
                                      </div>

                                        {{-- contact number --}}

                                        <div class="col-md-3">
                                       <div class="mb-0 position-relative"><br>
                                          <label class="form-label">Contact Number</label>
                                          <div class="col-sm-10">
                                             <input name='contact_number' class="form-control" type="text">
                                          </div>
                                       </div>
                                    </div>

                                        {{-- home address --}}

                                        <div class="col-md-3">
                                       <div class="mb-0 position-relative"><br>
                                          <label class="form-label">Home Address</label>
                                          <div class="col-sm-10">
                                             <input name='home_address' class="form-control" type="text">
                                          </div>
                                       </div>
                                    </div>

                                        {{-- barangay --}}

                                        <div class="col-md-3">
                                       <div class="mb-0 position-relative"><br>
                                               <label class="form-label">Barangay</label>
           
                                               <select class="form-select" aria-label="Default select example">
                                                  <option selected="">Select</option>
                                                  <option value="1">Balayhangin</option>
                                                  <option value="2">Bangyas</option>
                                                  <option value="3">Dayap</option>
                                               </select>
                                       </div>
                                    </div>

                                        {{-- evacuation center --}}

                                        <div class="col-md-3">
                                       <div class="mb-0 mb-0 position-relative"><br>
                                               <label class="form-label">Evacuation Center</label>
           
                                               <select class="form-select" aria-label="Default select example">
                                                  <option selected="">Select</option>
                                                  <option value="1">School</option>
                                               </select>
                                       </div>
                                    </div>

                                    </div>

                                    {{-- add evacuee button --}}
                                    <div> <br>
                                        <input type="submit"
                                            class="btn btn-info btn-rounded bg-dark waves-effect waves-light"
                                            value="Add Evacuee">

                                    </div>

                                </form>

                        </div>
                    </div>
                </div>
            </div>

            </form>

        </div>
    </div>
@endsection
