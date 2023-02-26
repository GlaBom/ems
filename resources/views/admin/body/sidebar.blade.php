<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- admin --}}

                @if (auth()->user()->usertype == 'admin')

                {{-- Dashboard --}}

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Users --}}

                <li>
                    <a href=" {{route('user.index')}} " class="waves-effect">
                        <i class=" fas fa-users"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Users</span>
                    </a>
                </li>

                {{-- emergency --}}

                <li>
                    <a href="{{ route('emergency.index') }}" class=" waves-effect">
                        <i class="fas fa-clipboard"></i>
                        <span>Emergency</span>
                    </a>
                </li>

                {{-- Barangay --}}

                <li>
                    <a href="{{ route('barangay.index') }}" class=" waves-effect">
                        <i class="nav-icon fa fa-university"></i>
                        <span>Barangay</span>
                    </a>

                </li>

                {{-- Evacuation --}}

                <li>
                    <a href="{{ route('ecenter.index') }}" class=" waves-effect">
                        <i class="nav-icon fa fa-hotel"></i>
                        <span>Evacuation Center</span>
                    </a>
                </li>

                {{-- Evacuee --}}

                <li>
                    <a href="{{ route('evacuee.index') }}" class=" waves-effect">
                        <i class="nav-icon fas fa-address-book"></i>
                        <span>Evacuees</span>
                    </a>
                </li>

                {{-- Reports --}}
                <li>
                    <a href=" {{ url('/reports/barangay') }} " class="waves-effect">
                        <i class=" fas fa-users"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Reports</span>
                    </a>
                </li>

                {{-- Activity Logs --}}

                {{-- <li>
                    <a href="#" class="waves-effect">
                        <i class="fa-solid fa-users-line fa-primary-color: "></i>
                        <span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Activity Logs</span>
                    </a>
                </li> --}}

                @elseif(auth()->user()->usertype == 'encoder')

                {{-- Dashboard --}}

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line "></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>


                {{-- Emergency --}}

                <li>
                    <a href="{{ route('emergency.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Emergency</span>
                    </a>
                </li>

                {{-- Barangay --}}

                <li>
                    <a href="{{ route('barangay.index') }}" class=" waves-effect">
                        <i class="nav-icon fa fa-university"></i>
                        <span>Barangay</span>
                    </a>
                </li>

                {{-- Evacuation Center --}}

                <li>
                    <a href="{{ route('ecenter.index') }}" class=" waves-effect">
                        <i class="nav-icon fa fa-hotel"></i>
                        <span>Evacuation Center</span>
                    </a>
                </li>

                {{-- Evacuees --}}
                <li>
                    <a href="{{ route('evacuee.index') }}" class=" waves-effect">
                        <i class="nav-icon fas fa-address-book"></i>
                        <span>Evacuees</span>
                    </a>
                </li>

                {{-- Reports --}}
                <li>
                    <a href=" {{ url('/reports/barangay') }} " class="waves-effect">
                        <i class=" fas fa-users"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Reports</span>
                    </a>
                </li>

                {{-- Activity Logs --}}
                {{-- <li>
                    <a href="#" class="waves-effect">
                        <i class="fa-solid fa-users-line fa-primary-color: "></i>
                        <span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Activity Logs</span>
                    </a>
                </li> --}}

                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
