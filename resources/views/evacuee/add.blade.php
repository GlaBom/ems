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
                                            <input name='last_name' class="form-control" type="text"
                                                value="{{ old('last_name') }}">
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

                                {{-- age

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input name='age' class="form-control" type="text"
                                                value=" {{ old('age') }}">
                                        </div>
                                    </div>
                                </div> --}}

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

                                {{-- address --}}

                                {{-- <div class="col-md-3"> --}}
                                    {{-- <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input name='address' class="form-control" type="text"
                                                value=" {{ old('address') }}">
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- contact_number --}}

                                {{-- <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Contact Number</label>
                                        <div class="col-sm-10">
                                            <input name='contact_number' class="form-control" type="text"
                                                value=" {{ old('contact_number') }}">
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- tenure_status --}}
{{--
                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Tenure Status</label>
                                        <div class="col-sm-10">
                                            <select name="barangay_name" class="form-control" required>
                                                <option value="" disabled selected>Select Tenure Status</option>

                                                @php
                                                $get = DB::table('tenure_status')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->status_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- housing_condition --}}

                                {{-- <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Housing Condition</label>
                                        <div class="col-sm-10">
                                            <select name="barangay_name" class="form-control" required>
                                                <option value="" disabled selected>Select Housing Condition</option>

                                                @php
                                                $get = DB::table('housing_conditions')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->housing_condition_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- health_condition_name --}}

                                {{-- <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Health Condition</label>
                                        <div class="col-sm-10">
                                            <select name="barangay_name" class="form-control">
                                                <option value="" disabled selected>Select Health Condition</option>

                                                @php
                                                $get = DB::table('health_conditions')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->health_condition_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- barangay --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Barangay</label>
                                        <div class="col-sm-10">
                                            <select name="barangay_name" class="form-control" required>
                                                <option value="" disabled selected>Select Barangay</option>

                                                @php
                                                $get = DB::table('barangays')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->barangay_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- evacuation center --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Evacuation Center</label>
                                        <div class="col-sm-10">
                                            <select name="ec_name" class="form-control" required>
                                                <option value="" disabled selected>Select Evacuation Center</option>

                                                @php
                                                $get = DB::table('ecenters')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->ec_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    {{-- add evacuee button --}}

                    <div> <br>
                        <button type="submit" class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
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
