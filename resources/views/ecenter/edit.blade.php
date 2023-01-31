@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Evauation Center</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start edit calamity --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ url('/ecenter/update') }}" method="POST" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    @csrf

                                    <input type="hidden" name='id'value={{ $data->id }}>

                                    {{-- ec_name --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Evacuation Center</label>
                                            <div class="col-sm-10">
                                                <input name='ec_name' class="form-control"
                                                    type="text"value="{{ $data->ec_name }}">
                                                @error('ec_name')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- barangay --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Barangay</label>
                                            <div class="col-sm-10">
                                                <input name='barangay' class="form-control" type="text"
                                                value="{{ $data->barangay }}">
                                                @error('barangay')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- manager --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Manager</label>
                                            <div class="col-sm-10">
                                                <input name='manager' class="form-control" type="text"
                                                value="{{ $data->manager }}">
                                                @error('manager')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- date_of_activation --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Date of Activation</label>
                                            <div class="col-sm-10">
                                                <input name='date_of_activation' class="form-control" type="date"
                                                value="{{ $data->date_of_activation }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- date_of_deactivation --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Date of Deactivation</label>
                                            <div class="col-sm-10">
                                                <input name='date_of_deactivation' class="form-control" type="date"
                                                value="{{ $data->date_of_deactivation }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- edit evacuation center button --}}

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
