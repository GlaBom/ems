@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Evacuee</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start add evacuee --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            {{-- Add --}}

                            <form action="{{ url('/evacuee/store') }}" method="POST">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

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

                                    {{-- age --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Age</label>
                                            <div class="col-sm-10">
                                                <input name='age' class="form-control" type="text"
                                                    value=" {{ old('age') }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- gender --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Gender</label>
                                            <select id="inputState"
                                                class="form-select @error('gender') is-invalid @enderror" name="gender">
                                                <option value="" disabled selected>Choose Gender</option>
                                                <option @error('gender') selected @enderror value="Male">Male</option>
                                                <option @error('gender') selected @enderror Value="Female">Female
                                                </option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    {{-- barangay --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Barangay</label>

                                            <select class="form-select @error('barangay') is-invalid @enderror"
                                                name="barangay">
                                                <option value="" selected>Choose...</option>
                                                @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}">{{ $barangay->barangay_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('barangay')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- evacuation center --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 mb-0 position-relative"><br>
                                            <label class="form-label">Evacuation Center</label>

                                            {{-- <select class="form-select @error('e_center') is-invalid @enderror"
                                                name="e_center">
                                                <option value="" selected>Choose...</option>
                                                @foreach ($e_centers as $e_center)
                                                    <option value="{{ $e_center->id }}" {{ $e_center->ec_name ==old('e_center',$selectedOptionE_center)?'selected':" }}> {{ $option->option_value }}</option>
                                                @endforeach
                                            </select> --}}

                                            <select class="form-select @error('e_center') is-invalid @enderror" name="e_center">

                                                <option value="" selected>Choose...</option>

                                                @foreach ($e_centers as $e_center)
                                                    <option value="{{ $e_center->id }}"
                                                        {{ $e_center->ec_name == old('e_center', $selectedOptionEcenter) ? 'selected' : '' }}>
                                                        {{ $e_center->option_value }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('e_center')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



                                    </div>
                                </div>

                                {{-- add evacuee button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
                                        Evacuee</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            {{-- end evacuee form --}}

        </div>
    </div>
@endsection
