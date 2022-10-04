<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    {{-- <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
                    <a href="{{ route('home') }}"><img class="img-fluid" src="{{ URL::to('assets/images/logo/main-logo1.png') }}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" id="SidebarHide" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ 'home' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ 'sales-report' ||
                'people-and-culture' ||
                'cash-position-report' ||
                'consultant-revenue-report' ||
                'peer-dope-report' == request()->path() ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Dashboard Report</span>
                    </a>

                    <ul class="submenu {{ 'sales-report' ||
                        'people-and-culture' ||
                        'cash-position-report' ||
                        'consultant-revenue-report' ||
                        'peer-dope-report' == request()->path() ? 'active' : '' }}">
                        <li class="submenu-item {{ 'sales-report' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('sales-report') }}">
                                <span>Sales</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ 'people-and-culture' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('people-and-culture') }}">
                                <span>People & Culture</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ 'cash-position-report' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('cash-position-report') }}">
                                <span>Cash Position</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ 'consultant-revenue-report' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('consultant-revenue-report') }}">
                                <span>Consultant Revenue</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ 'peer-dope-report' == request()->path() ? 'active' : '' }}">
                            <a href="{{ route('peer-dope-report') }}">
                                <span>Peer Dope</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name == 'Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name == 'Super Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name == 'Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li> --}}

                @if (Auth::user()->role_name == 'Admin')
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenance</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('form/clients/new') }}" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Clients</span>
                    </a>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Budget Form</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/customizedEngagement/new') }}">CUSTOMIZED ENGAGEMENT</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('form/f2f_engagement/new') }}">F2F ENGAGEMENT</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('form/mgtstratu_workshops/new') }}">MGTSTRAT-U WORKSHOPS</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/customizedEngagement/detail') }}">Customized Engagement</a>
                        </li>
                    </ul>
                </li>

            </ul>
            {{-- <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li> --}}

        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
