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

                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <a href="#" class="btn btn-info btn-sm mb-0 bg-dark waves-effect waves-light"
                                    type="button">+&nbsp; Add</a>
                                        </div>
                                    </div> --}}

                                    {{-- show --}}
                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatable_length">
                                            <label>Show
                                                <select name="datatable_length" aria-controls="datatable"
                                                    class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label>
                                        </div>
                                    </div> --}}

                                    {{-- search --}}

                                    {{-- <div class="col-sm-12 col-md-6">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="datatable"></label>
                                        </div>
                                    </div> --}}

                                    <div class="d-flex flex-row justify-content-between">
                                        <div>
                                            <a href="{{ route('add.evacuee') }}"
                                                class="btn btn-info btn-sm mb-0 bg-dark waves-effect waves-light"
                                                type="button">+&nbsp; Add</a>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                {{-- <th>Gender</th>
                                        <th>Age</th>
                                        <th>Head of the Family</th>
                                        <th>Barangay</th>
                                        <th>Evacuation Center</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp

                                            @foreach ($data as $evacuee)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td> {{ $i++ }} </td>
                                                    <td> {{ $evacuee->last_name }} </td>
                                                    <td> {{ $evacuee->first_name }} </td>
                                                    <td> {{ $evacuee->middle_name }} </td>


                                                    <td>
                                                        <a href=" {{ url('/manage/edit_evacuee') }} "
                                                            data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                        <span>
                                                            <i class="cursor-pointer fas fa-trash text-secondary"
                                                                aria-hidden="true"></i>
                                                        </span>
                                                    </td>
                                            @endforeach

                                            {{-- <td data-field="gender">F</td>
                                        <td data-field="age">21</td>
                                        <td data-field="family_head">Jose Ongaria</td>
                                        <td data-field="barangay">Dayap</td>
                                        <td data-field="evacuation_center">School</td> --}}

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
