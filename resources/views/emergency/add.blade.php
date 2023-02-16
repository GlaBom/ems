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
                            <form action="{{ url('/emergency/store') }}" method="POST">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    {{-- emergency_type --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Emergency Type</label>
                                            <select id="inputState"
                                                class="form-select @error('emergency_type') is-invalid @enderror"
                                                name="emergency_type">
                                                <option value="" disabled selected>Choose Emergency Type</option>
                                                <option @error('emergency_type') selected @enderror value="Natural">Natural
                                                </option>
                                                <option @error('emergency_type') selected @enderror Value="Technological">
                                                    Technological
                                                </option>
                                                <option @error('emergency_type') selected @enderror Value="Human-Caused">
                                                    Human-Caused
                                                </option>
                                            </select>
                                            @error('emergency_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    {{-- date_occured --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Date Occured</label>
                                            <div class="col-sm-10">
                                                <input name='date_occured' class="form-control" type="date"
                                                    value=" {{ old('date_occured') }}">
                                                @error('date_occured')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    {{-- description --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name='description' class="form-control" type="text" value=" {{ old('description') }}"></textarea>
                                                @error('description')
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
                                        emergency</button>
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
