@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Emergency Information</h4>
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

                                <div class="flex-row d-flex justify-content-between">
                                    <div>
                                        <a href="{{ route('emergency.add') }}"
                                            class="mb-0 btn btn-info btn-sm bg-dark waves-effect waves-light"
                                            type="button">+&nbsp; Add</a>
                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle table-editable table-nowrap table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>Date Occured</th>
                                            <th>Emergency Group</th>
                                            <th>Emergency Main Type</th>
                                            <th>Emergency Sub Type</th>
                                            <th>Emergency Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($emergencies as $emergency)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $emergency->date_occured }} </td>
                                            <td> {{ $emergency->emergency_group }} </td>
                                            <td> {{ $emergency->main_type }} </td>
                                            <td> {{ $emergency->sub_type }} </td>
                                            <td> {{ $emergency->name }} </td>

                                            <td>
                                                <a href=" {{ url('emergency/edit/' . $emergency->id) }} "
                                                    data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>

                                                <span>
                                                    <a href=" {{ url('/emergency/delete/' . $emergency->id) }} ">
                                                        <i class="cursor-pointer fas fa-trash text-secondary"
                                                            aria-hidden="true"></i></a>
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
