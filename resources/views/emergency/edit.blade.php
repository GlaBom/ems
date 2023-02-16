@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Emergency</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- start edit emergency --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ url('/emergency/update') }}" method="POST" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    @csrf

                                    <input type="hidden" name='id'value={{ $data->id }}>

                                    {{-- emergency_type --}}

                                     <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Emergency Type</label>
                                            <select id="inputState" class="form-select @error('emergency_type') is-invalid @enderror" name="emergency_type">
                                                <option value="">Select an emergency type</option>
                                                <option value="Natural" {{ old('emergency_type', $data->emergency_type) === 'Natural' ? 'selected' : '' }}>Natural</option>
                                                <option value="Technological" {{ old('emergency_type', $data->emergency_type) === 'Technological' ? 'selected' : '' }}>Technological</option>
                                                <option value="Human-Caused" {{ old('emergency_type', $data->emergency_type) === 'Human-Caused' ? 'selected' : '' }}>Human-Caused</option>
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
                                                value="{{ $data->date_occured }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- description] --}}

                                    <div class="col-md-3">
                                        <div class="mb-0 position-relative"> <br>
                                            <label class="form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name='description' class="form-control" type="text">{{ old('description', $data->description) }}</textarea>
                                                @error('description')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                {{-- edit emergency button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            {{-- end emergency form --}}

        </div>
    </div>
@endsection
