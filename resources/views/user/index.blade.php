@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Users Information</h4>
                </div>
            </div>
        </div>

        {{-- end page title --}}

        <div class="row" data-select2-id="147">
            <div class="col-lg-12" data-select2-id="146">
                <div class="card" data-select2-id="145">
                    <div class="card-body" data-select2-id="144">

                        {{-- Add --}}
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf

                            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            <div class="row">

                                {{-- last name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input name='last_name' class="form-control" type="text"
                                                value="{{ old('last_name') }}">
                                            @error('last_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- first name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input name='first_name' class="form-control" type="text"
                                                value=" {{ old('first_name') }}">
                                            @error('first_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- middle name --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Middle Name</label>
                                        <div class="col-sm-10">
                                            <input name='middle_name' class="form-control" type="text"
                                                value=" {{ old('middle_name') }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- usertype --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Usertype</label>
                                        <select id="inputState"
                                            class="form-select @error('usertype') is-invalid @enderror" name="usertype">
                                            <option value="" disabled selected>Choose Usertype</option>
                                            <option @error('usertype') selected @enderror value="admin">admin</option>
                                            <option @error('usertype') selected @enderror Value="encoder">encoder
                                            </option>
                                        </select>
                                        @error('usertype')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- email --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name='email' class="form-control" type="email"
                                                value=" {{ old('email') }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- password --}}

                                <div class="col-md-3">
                                    <div class="mb-0 position-relative"> <br>
                                        <label class="form-label">Password</label>
                                        <select id="inputState"
                                            class="form-select @error('password') is-invalid @enderror" name="password">
                                            <option @error('password') selected @enderror value="admin">admin</option>
                                            <option @error('password') selected @enderror Value="encoder">encoder
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                {{-- barangay --}}

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
                                        <label class="form-label">Evacuation Center</label>
                                        <div class="col-sm-10">
                                            <select name="ec_name" class="form-control" required>
                                                <option value="" disabled selected>Select Evacuation</option>

                                                @php
                                                $get = DB::table('ecenters')->get();
                                                foreach($get as $value)
                                                {
                                                echo "<option value=".$value->id.">$value->ec_name</option>";
                                                }
                                                @endphp

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- add user button --}}

                                <div> <br>
                                    <button type="submit"
                                        class="btn btn-info btn-rounded bg-dark waves-effect waves-light">Add
                                        User</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>Full Name</th>
                                            <th>Usertype</th>
                                            <th>Email</th>
                                            <th>Barangay</th>
                                            <th>Evacuation Center</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $user)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $user->last_name }}, {{ $user->first_name }}, {{ $user->middle_name
                                                }}</td>
                                            <td> {{ $user->usertype }} </td>
                                            <td> {{ $user->email}} </td>
                                            <td> {{ $user->barangay_name}} </td>
                                            <td> {{ $user->ec_name }} </td>

                                            <td>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <a href=" {{ url('user/edit/' . $user->id) }} "
                                                            data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <form action="{{ route('user.delete', [$user->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="cursor-pointer fas fa-trash text-secondary"
                                                                onclick="return confirm('Are you sure you want to delete this?')"
                                                                style="background-color: transparent;"></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                            </div>
                            @endforeach

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
