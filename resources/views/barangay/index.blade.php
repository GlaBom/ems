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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>Barangay</th>
                                            <th>Barangay Chairman</th>
                                            <th>Contact Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $barangay)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $barangay->barangay_name }} </td>
                                            <td> {{ $barangay->barangay_chairman }} </td>
                                            <td> {{ $barangay->contact_number }} </td>
                                            <td>
                                                <a href="{{ route('barangay.edit', $barangay->id) }}">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>

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
