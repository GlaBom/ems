@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Barangay</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start edit barangay --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ url('/barangay/update') }}" method="POST" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    @csrf

                                    <input type="hidden" name='id'value={{ $data->id }}>

                                    {{-- barangay_name --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Barangay Name</label>
                                            <div class="col-sm-10">
                                                <input name='barangay_name' class="form-control"
                                                    type="text"value="{{ $data->barangay_name }}">
                                                @error('barangay_name')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- barangay_chairman --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Barangay Chairman</label>
                                            <div class="col-sm-10">
                                                <input name='barangay_chairman' class="form-control" type="text"
                                                value="{{ $data->barangay_chairman }}">
                                                @error('barangay_chairman')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- contact_number --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Contact Number</label>
                                            <div class="col-sm-10">
                                                <input name='contact_number' class="form-control" type="text"
                                                value="{{ $data->contact_number }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- status --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select id="inputState" class="form-select @error('status') is-invalid @enderror" name="status">
                                                <option value={{ $data->status }} disabled selected>Choose status</option>
                                                <option @error('status') selected @enderror value="Activate">Activate</option>
                                                <option @error('status') selected @enderror Value="Deactivate">Deactivate</option>
                                              </select>
                                              @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- add barangay button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Save</button>
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
