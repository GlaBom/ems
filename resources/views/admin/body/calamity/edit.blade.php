@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit calamity</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start edit calamity --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ url('/calamity/update') }}" method="POST" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    @csrf

                                    <input type="hidden" name='id'value={{ $data->id }}>

                                    {{-- calamity_type --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Calamity Type</label>
                                            <div class="col-sm-10">
                                                <input name='calamity_type' class="form-control"
                                                    type="text"value="{{ $data->calamity_type }}">
                                                @error('calamity_type')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- description] --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Description</label>
                                            <div class="col-sm-10">
                                                <input name='description' class="form-control" type="text"
                                                value="{{ $data->description }}">
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
                                                value="{{ $data->start_date }}">
                                            </div>
                                        </div>
                                    </div>

                                     {{-- end_date --}}

                                     <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">End Date</label>
                                            <div class="col-sm-10">
                                                <input name='end_date' class="form-control" type="date"
                                                value="{{ $data->end_date }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- edit calamity button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            {{-- end calamity form --}}

        </div>
    </div>
@endsection
