@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        {{-- START PAGE TITLE --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            li class="breadcrumb-item active">Dashboard</li>
                        </ol><li class="breadcrumb-item"><a href="javascript: void(0);">EMS</a></li>
                            <
                    </div> --}}

                </div>
            </div>
        </div>

        {{-- END PAGE TITLE --}}

        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-gray-400 dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-gray-400 dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-gray-400 dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

    </div>

</div>

@endsection
