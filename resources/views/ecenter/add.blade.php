@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Evacuation Center</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start add evacuation center --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            {{-- Add --}}
                            <form action="{{ url('/ecenter/store') }}" method="POST">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

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
                                    

                                    {{-- ec_name --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Center Name</label>
                                            <div class="col-sm-10">
                                                <input name='ec_name' class="form-control" required
                                                    type="text"value="{{ old('ec_name') }}">
                                                @error('ec_name')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                     {{-- manager --}}

                                     <div class="col-md-3">
                                        <div class="mb-0 position-relative"><br>
                                            <label class="form-label">Manager</label>
                                            <div class="col-sm-10">
                                                <input name='manager' class="form-control"
                                                    type="text"value="{{ old('manager') }}">
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
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Capacity</label>
                                            <div class="col-sm-10">
                                                <input name='capacity' class="form-control" type="number" step="1"
                                                    value=" {{ old('capacity') }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- capacity --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Occupancy</label>
                                            <div class="col-sm-10">
                                                <input name='occupancy' class="form-control" type="number" step="1"
                                                    value=" {{ old('occupancy') }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{-- add calamity button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
                                        Evacuation Center</button>
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
