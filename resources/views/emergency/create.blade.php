@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Emergency</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start add emergency --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            {{-- Add --}}
                            <form action="{{ route('emergency.store')}}" method="POST">
                                @csrf
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    {{-- emergency_group --}}
                                    <div class="col-md-2">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Emergency Group</label>
                                            <select id="emergency_group"
                                                class="form-select @error('emergency_group') is-invalid @enderror"
                                                name="emergency_group" required>
                                                <option value="" disabled selected>Choose Emergency Group</option>
                                                <option value="Natural">Natural</option>
                                                <option value="Technological">Technological</option>
                                                <option value="Human-Caused">Human-Caused</option>
                                            </select>
                                            @error('emergency_group')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- main_type --}}

                                    <div class="col-md-2">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Emergency Main Type</label>
                                            <input name='main_type' class="form-control" type="text"
                                                value="{{ old('main_type') }}">
                                            @error('main_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- sub_type --}}
                                    <div class="col-md-2">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Emergency Sub Type</label>
                                            <input name='sub_type' class="form-control" type="text"
                                                value="{{ old('sub_type') }}">
                                            @error('sub_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- name --}}
                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Emergency Name</label>
                                            <input name='name' class="form-control" type="text"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- date_occured --}}

                                    <div class="col-md-2">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Date Occured</label>
                                            <div class="col-sm-10">
                                                <input name='date_occured' class="form-control" type="date"
                                                    value=" {{ old('date_occured') }}" required>
                                                @error('date_occured')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- add emergency button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
                                        Emergency</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            {{-- end barangay form --}}

        </div>
    </div>
@endsection
