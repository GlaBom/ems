@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Evacuation Center Information</h4>
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
                                        <a href="{{ route('ecenter.create') }}"
                                            class="btn btn-info btn-sm mb-0 bg-dark waves-effect waves-light"
                                            type="button">+&nbsp; Add</a>
                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>Barangay</th>
                                            <th>Center Name</th>
                                            <th>Camp Manager</th>
                                            <th>Capacity</th>
                                            <th>Occupancy</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $ecenter)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $ecenter->barangay_name }} </td>
                                            <td> {{ $ecenter->ec_name }} </td>
                                            <td> {{ $ecenter->manager }} </td>
                                            <td> {{ $ecenter->capacity }} </td>
                                            <td> {{ $ecenter->occupancy }} </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <a href=" {{ route('ecenter.edit', $ecenter->id) }} "
                                                            data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>

                                                    {{-- Delete Evacuation Center --}}
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
                                                                            ecenter</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this evacuation center?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-light waves-effect"
                                                                            data-bs-dismiss="modal">Close</button>

                                                                        <form
                                                                            action="{{ route('ecenter.destroy', [$ecenter->id]) }}"
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
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection
