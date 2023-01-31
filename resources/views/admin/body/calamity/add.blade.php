@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Calamity</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start add calamity --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            {{-- Add --}}
                            <form action="{{ url('/calamity/store') }}" method="POST">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    {{-- calamity_type --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Calamity Type</label>
                                            <div class="col-sm-10">
                                                <input name='calamity_type' class="form-control"
                                                    type="text"value="{{ old('calamity_type') }}">
                                                @error('calamity_type')
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
                                                <input name='description' class="form-control" type="text"
                                                    value=" {{ old('description') }}">
                                                @error('description')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- start_date --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Start Date</label>
                                            <div class="col-sm-10">
                                                <input name='start_date' class="form-control" type="date"
                                                    value=" {{ old('start_date') }}">
                                                    @error('start_date')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- end_date --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">End Date</label>
                                            <div class="col-sm-10">
                                                <input name='end_date' class="form-control" type="date"
                                                    value=" {{ old('end_date') }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- add calamity button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
                                        Calamity</button>
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
