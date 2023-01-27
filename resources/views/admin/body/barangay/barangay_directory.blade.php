@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Barangay Directory</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            {{-- add barangay form --}}

            <div class="row" data-select2-id="147">
                <div class="col-lg-12" data-select2-id="146">
                    <div class="card" data-select2-id="145">
                        <div class="card-body" data-select2-id="144">

                            <form action="{{ url('/manage/save_barangay') }}" method="POST" data-select2-id="13">
                                @csrf

                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <form action=" {{ url('/manage/save_barangay') }} " method="POST" data-select2-id="13">
                                    @csrf
                                    <div class="row">

                                        {{-- barangay_name --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"><br>
                                                <label class="form-label">Barangay Name</label>
                                                <div class="col-sm-10">
                                                    <input name='barangay_name' class="form-control"
                                                        type="text"value="{{ old('barangay_name') }}">
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
                                                        value=" {{ old('barangay_chairman') }}">
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
                                                        value=" {{ old('contact_number') }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- status --}}

                                        <div class="col-md-3">
                                            <div class="mb-0 position-relative"> <br>
                                                <label class="form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- add barangay button --}}
                                    <div> <br>
                                        <input type="submit"
                                            class="btn btn-info btn-rounded bg-dark waves-effect waves-light"
                                            value="Add Barangay">
                                    </div>

                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- end barangay form --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Barangay</th>
                                                <th>Barangay Chairman</th>
                                                <th>Contact Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp

                                            @foreach ($data as $barangay)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td> {{ $i++ }} </td>
                                                    <td> {{ $barangay->barangay_name }} </td>
                                                    <td> {{ $barangay->barangay_chairman }} </td>
                                                    <td> {{ $barangay->contact_number }} </td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <span>
                                                            <i class="cursor-pointer fas fa-trash text-secondary"
                                                                aria-hidden="true"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
