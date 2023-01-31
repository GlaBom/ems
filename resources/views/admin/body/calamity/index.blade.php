@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            {{-- start page title --}}

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Calamity Information</h4>
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
                                            <a href="{{ route('calamity.add') }}"
                                                class="btn btn-info btn-sm mb-0 bg-dark waves-effect waves-light"
                                                type="button">+&nbsp; Add</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Calamity Type</th>
                                                <th>Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp

                                            @foreach ($data as $calamity)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td> {{ $i++ }} </td>
                                                    <td> {{ $calamity->calamity_type }} </td>
                                                    <td> {{ $calamity->description }} </td>
                                                    <td> {{ $calamity->start_date }} </td>
                                                    <td> {{ $calamity->end_date }} </td>
                                                    <td>
                                                        <a href=" {{ url('calamity/edit/' . $calamity->id) }} "
                                                            data-bs-original-title="Edit user">
                                                            <i class="fas fa-user-edit text-secondary"
                                                                aria-hidden="true"></i>
                                                        </a>

                                                        <span>
                                                            <a href=" {{ url('/calamity/delete/' . $calamity->id) }} ">
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
