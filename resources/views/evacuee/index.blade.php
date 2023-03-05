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
                                        <a href="{{ route('evacuee.create') }}"
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
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Barangay</th>
                                            <th>Evacuation Center</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($evacuees as $evacuee)

                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $evacuee->last_name }}, {{ $evacuee->first_name }}, {{
                                                $evacuee->middle_name }}</td>
                                            <td> {{ $evacuee->dob }} </td>
                                            <td> {{ $evacuee->age }} </td>
                                            <td> {{ $evacuee->gender }} </td>
                                            <td> {{ $evacuee->barangay_name }} </td>
                                            <td> {{ $evacuee->ec_name}} </td>

                                            <td>
                                                {{-- Edit Emergency --}}
                                                <div class="row">
                                                    <div class="col-1">
                                                        <a href=" {{ route('evacuee.edit', $evacuee->id) }} ">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>

                                                    {{-- Delete Emergency --}}
                                                    <div class="col">
                                                        <a data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            <i class="fas fa-trash"></i></a>

                                                        {{-- Delete Modal --}}

                                                        <div class="modal fade" id="deleteModal" tabindex="-1"
                                                            role="dialog" aria-labelledby="deleteModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel">
                                                                            Delete
                                                                            evacuee</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this evacuee?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-light waves-effect"
                                                                            data-bs-dismiss="modal">Close</button>

                                                                        <form
                                                                            action="{{ route('evacuee.destroy', [$evacuee->id]) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
