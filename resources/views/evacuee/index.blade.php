@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Evacuees Information</h4>
                    </div>
                </div>
            </div>

            {{-- end page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">

                                    <div class="d-flex flex-row justify-content-between">
                                        <div>
                                            <a href="{{ route('evacuee.add') }}"
                                                class="btn btn-info btn-sm mb-0 bg-dark waves-effect waves-light"
                                                type="button">+&nbsp; Add</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>Full Name</th>
                                                <th>Date of Birth</th>
                                                <th>Gender</th>
                                                <th>Barangay</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($evacuees as $evacuee)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td> {{ $evacuee->last_name }}, {{ $evacuee->first_name }}, {{ $evacuee->middle_name }}</td>
                                                    <td> {{ $evacuee->gender }} </td>
                                                    <td> {{ $evacuee->dob }} </td>
                                                    <td> {{ $evacuee->barangay_name }} </td>

                                                    <td>
                                                        <a href=" {{ url('/evacuee/edit/' . $evacuee->id) }} "
                                                            data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>

                                                        <span>
                                                            <a href=" {{ url('/evacuee/destroy/' . $evacuee->id) }} ">
                                                                <i class="cursor-pointer fas fa-trash text-secondary"
                                                                    aria-hidden="true"></i></a>
                                                        </span>

                                                    </td>
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
