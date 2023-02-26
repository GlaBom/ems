@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> Reports</h4>
                </div>
            </div>
        </div>

        {{-- end page title --}}

        <div class="row">

            <div class="col-md-6">
                <div class="card card-body">
                    <h3 class="card-title">Evacuees per Barangay</h3>
                    <div class="table-responsive">
                        <table class="table align-middle table-editable table-nowrap table-edits">
                            <thead>
                                <tr style="cursor: pointer;">
                                    <th>Barangay</th>
                                    <th>Total Evacuees</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangays as $barangay)
                                <tr data-id="1" style="cursor: pointer;">
                                    <td>{{ $barangay->barangay_name }}</td>
                                    <td>{{ $barangay->total }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-body">
                    <h3 class="card-title">Evacuees by Gender</h3>
                    <div class="table-responsive">
                        <table class="table align-middle table-editable table-nowrap table-edits">
                            <thead>
                                <tr style="cursor: pointer;">
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Total Evacuees</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($genders as $gender)
                                <tr data-id="1" style="cursor: pointer;">
                                    <td>{{ $gender->gender == 'Male' ? $gender->total : 0 }}</td>
                                    <td>{{ $gender->gender == 'Female' ? $gender->total : 0 }}</td>
                                    <td>{{ $gender->total }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
