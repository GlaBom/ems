<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- Dashboard --}}

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Calendar --}}

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                {{-- Calamity Information --}}

                {{-- <li>
                    <a href="{{ route('manage.calamity') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calamity Information</span>
                    </a>
                </li> --}}

                {{-- Barangay Information --}}

                <li>
                    <a href="{{ route('barangay.directory') }}" class=" waves-effect">
                        <i class="nav-icon fa fa-university"></i>
                        <span>Barangay Information</span>
                    </a>

                </li>

                {{-- Evacuation Center --}}

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="nav-icon fa fa-hotel"></i>
                        <span>Evacuation Center</span>
                    </a>
                </li>

                {{-- Evacuee Information --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="nav-icon fas fa-address-card"></i>
                        <span>Evacuee Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- <li><a href=" {{ route('add.evacuee') }} ">Add Evacuee</a></li> --}}
                        <li><a href="{{ route('manage.evacuee') }}">Manage Evacuee</a></li>
                        <li><a href="#">Disaster Assistance Family Access Card (DAFAC)</a></li>
                    </ul>
                </li>

                {{-- Users --}}

                <li>
                    <a href="#" class="waves-effect">
                        <i class="fa-solid fa-users-line fa-primary-color: "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>User Management</span>
                    </a>
                </li>

                {{-- Reports and Statistics --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Reports and Statistics</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Evacuees</a></li>
                        <li><a href="#">Evacuees by Gender</a></li>
                        <li><a href="#">Evacuees by Age</a></li>
                        <li><a href="#">Evacuees by Barangay</a></li>
                        <li><a href="#">Evacuees by Calamity</a></li>
                        <li><a href="#">Evacuees by Center</a></li>
                    </ul>
                </li>

                {{-- Activity Logs --}}

                <li>
                    <a href="#" class="waves-effect">
                        <i class="fa-solid fa-users-line fa-primary-color: "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Activity Logs</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
