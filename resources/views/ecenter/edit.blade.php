@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Evacuation Center</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start edit calamity --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ route('ecenter.update',$ecenter->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    @csrf

                                     {{-- barangay_name --}}

                                     <div class="col-md-3">
                                        <div class="mb-0 position-relative">
                                            <label class="form-label">Barangay</label>
                                            <div class="col-sm-10">

                                                <select name="barangay_name" class="form-control" required>
                                                    @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}" {{ $barangay->id ===
                                                        $ecenter->barangay_id ? 'selected' : '' }}>{{ $barangay->barangay_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- ec_name --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative">
                                            <label class="form-label">Center Name</label>
                                            <div class="col-sm-10">
                                                <input name='ec_name' class="form-control" type="text"
                                                    value="{{ $ecenter->ec_name }}" required>
                                                @error('ec_name')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- camp_manager --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative">
                                            <label class="form-label">Camp Manager</label>
                                            <div class="col-sm-10">
                                                <input name='manager' class="form-control" type="text"
                                                    value="{{ $ecenter->manager }}" required>
                                                @error('manager')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- capacity --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative">
                                            <label class="form-label">Capacity</label>
                                            <div class="col-sm-10">
                                                <input name='capacity' class="form-control" type="number" step="1"
                                                    value="{{ $ecenter->capacity }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- occupancy --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Occupancy</label>
                                            <div class="col-sm-10">
                                                <input name='occupancy' class="form-control" type="number" step="1"
                                                    value="{{ $ecenter->occupancy }}" required>
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
